<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Overrides\Migration;

class CreateProjectStatusesTable extends Migration
{
    /**
     * Table name used for safe migration
     *
     * @var string
     */
    protected $safetyTable = 'project_statuses__safe_state';

    /**
     * Table name for this migration
     *
     * @var string
     */
    protected $tableName = 'project_statuses';

	protected $indexes = [
		'indexes' => [],
		'uniques' => ['project_statuses_name_unique'],
		'foreigns' => [],
	];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->boolean('notifies_client')->boolean(false);
            $table->softDeletes();
        });
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
