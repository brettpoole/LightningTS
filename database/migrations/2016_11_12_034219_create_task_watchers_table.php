<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Overrides\Migration;

class CreateTaskWatchersTable extends Migration
{
    /**
     * Table name used for safe migration
     *
     * @var string
     */
    protected $safetyTable = 'task_watchers__safe_state';

    /**
     * Table name for this migration
     *
     * @var string
     */
    protected $tableName = 'task_watchers';

	protected $indexes = [
		'indexes' => [],
		'uniques' => [],
		'foreigns' => [],
	];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_watchers', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('task_id')->unsigned();
        });

        if ($this->heedMigrationSafety() && Schema::hasTable($this->safetyTable)) {
            DB::select(
                DB::raw("insert into $this->tableName (user_id, task_id) select user_id, task_id from $this->safetyTable;")
            );

            Schema::drop($this->safetyTable);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->safeDown($this->indexes);
    }
}
