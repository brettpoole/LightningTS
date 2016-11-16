<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Overrides\Migration;

class CreateTaskRolesTable extends Migration
{
    /**
     * Table for this migration
     * @var string
     */
    protected $tableName = 'task_roles';

    /**
     * Table used for safe migrations
     * @var string
     */
    protected $safetyTable = 'task_roles__save_state';

    /**
     * Indexes in this migration
     * @var array
     */
    protected $indexes = [
        'indexes' => [],
        'uniques' => ['task_roles_name_unique'],
        'foreigns' => [],
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
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
