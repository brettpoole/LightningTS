<?php

use App\Overrides\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateTaskStatusesTable extends Migration
{
    /**
     * Table name for this migration
     *
     * @var string
     */
    protected $tableName = 'task_statuses';

    /**
     * Table name used for safe migration
     *
     * @var string
     */
    protected $safetyTable = 'task_statuses__safe_state';

    /**
     * All indexes in place on table used for safe migration
     * @var array
     */
    protected $indexes = [
        'indexes' => [],
        'uniques' => ['task_statuses_name_unique'],
        'foreigns' => [],
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->boolean('closes_task')->default(false);
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
