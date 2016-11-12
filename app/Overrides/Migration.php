<?php
namespace App\Overrides;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration as BaseMigration;

class Migration extends BaseMigration
{
    /**
     * Down table while keeping all data preserved for import into new schema
     *
     * @param  array  $indexes
     * @param  array  $uniques
     *
     * @return void
     */
    public function safeDown(array $indexes)
    {
        if (! $this->heedMigrationSafety()) {
            Schema::dropIfExists($this->tableName);

            return;
        }

        if (Schema::hasTable($this->tableName)) {
            $this->safeDropIndexes($indexes);

	        Schema::dropIfExists($this->safetyTable);

            Schema::rename($this->tableName, $this->safetyTable);
        }
    }

	/**
	 * Safe Import Old Data
	 *
	 * Safely Import the data from the "saved state" table then remove "saved state" table.
	 * NOTE: If any column datatypes change, or columns are removed, you'll need to override
	 * this method in your migration class.
	 *
	 * @return void
	 */
    public function safeImport()
    {
	    if ($this->heedMigrationSafety() && Schema::hasTable($this->safetyTable)) {
		    $oldData = DB::table($this->tableName)->get()->all();

		    $oldData = array_shift($oldData);

		    DB::table($this->tableName)->insert((array)$oldData);

		    Schema::drop($this->safetyTable);
	    }
    }

    /**
     * Drop Indexes on the current table
     *
     * @param  array  $indexes
     * @param  array  $uniques
     *
     * @return void
     */
    protected function safeDropIndexes(array $indexes)
    {
        if (empty($this->indexes)) {
            return;
        }

        $idx = new \stdClass();
        $idx->indexes = $indexes['indexes'];
	    $idx->uniques = $indexes['uniques'];
	    $idx->foreigns = $indexes['foreigns'];

        Schema::table($this->tableName, function (Blueprint $table) use ($idx) {
            foreach ($idx->indexes as $index) {
                $table->dropIndex($index);
            }

            foreach ($idx->uniques as $unique) {
                $table->dropUnique($unique);
            }

            foreach ($idx->foreigns as $foreign) {
	            $table->dropForeign($foreign);
            }
        });
    }

    /**
     * Find out if Migration Safety is enabled
     *
     * @return bool
     */
    protected function heedMigrationSafety()
    {
        if (config('database.migration_safety')) {
            return true;
        }

        return false;
    }
}
