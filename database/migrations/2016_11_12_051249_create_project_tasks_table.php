<?php

use App\Overrides\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectTasksTable extends Migration
{
    /**
     * Table name for this migration
     *
     * @var string
     */
    protected $tableName = 'project_tasks';

    /**
     * Table name used for safe migration
     *
     * @var string
     */
    protected $safetyTable = 'project_tasks__safe_state';

    /**
     * All indexes in place on table used for safe migration
     * @var array
     */
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
        Schema::create('project_tasks', function (Blueprint $table) {
            $table->integer('project_id')->unsigned();
            $table->integer('task_id')->unsigned();
        });

        $this->safeImport();
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
