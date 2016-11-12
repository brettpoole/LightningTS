<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('name');
	        $table->string('definition');
	        $table->double('hours_estimated')->nullable();
	        $table->double('hours_worked')->nullable();
	        $table->tinyInteger('weight')->nullable();
	        $table->dateTimeTz('starts_at')->nullable();
	        $table->dateTimeTz('ends_at')->nullable();
	        $table->integer('task_status_id')->unsigned();
	        $table->integer('task_priority_id')->unsigned();
	        $table->softDeletes();
	        $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('tasks');
    }
}
