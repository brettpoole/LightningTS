<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTasksTable extends Migration
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

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_tasks', function (Blueprint $table) {
	        $table->integer('project_id')->unsigned();
	        $table->integer('user_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('project_tasks');
    }
}
