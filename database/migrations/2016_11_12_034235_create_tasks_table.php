<?php

use App\Overrides\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateTasksTable extends Migration
{
    /**
     * Table name for this migration
     *
     * @var string
     */
    protected $tableName = 'tasks';

    /**
     * Table name used for safe migration
     *
     * @var string
     */
    protected $safetyTable = 'tasks__safe_state';

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
