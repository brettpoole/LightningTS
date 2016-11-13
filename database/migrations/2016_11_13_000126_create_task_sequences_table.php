<?php

use App\Overrides\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateTaskSequencesTable extends Migration
{
    /**
     * Table name for this migration
     *
     * @var string
     */
    protected $tableName = 'task_sequences';

    /**
     * Table name used for safe migration
     *
     * @var string
     */
    protected $safetyTable = 'task_sequences__safe_state';

    /**
     * All indexes in place on table used for safe migration
     * @var array
     */
    protected $indexes = [
        'indexes' => ['task_sequences_unique_position'],
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
        Schema::create('task_sequences', function (Blueprint $table) {
            $table->integer('sequence_id')->unsigned();
            $table->integer('project_id')->unsigned();
            $table->integer('task_id')->unsigned();
            $table->integer('x_axis_position');
            $table->integer('y_axis_position');
            $table->softDeletes();
            $table->timestampsTz();

            $table->index(['sequence_id', 'x_axis_position', 'y_axis_position'], 'task_sequences_unique_position')->unique();
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
