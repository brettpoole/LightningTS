<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Overrides\Migration;

class CreateTaskMembersTable extends Migration
{
    /**
     * Table for this migration
     * @var string
     */
    protected $tableName = 'task_members';

    /**
     * Table used for safe migrations
     * @var string
     */
    protected $safetyTable = 'task_members__save_state';

    /**
     * Indexes in this migration
     * @var array
     */
    protected $indexes = [
        'indexes' => [],
        'uniques' => [],
        'foreigns' => ['task_members_task_id_foreign', 'task_members_user_id_foreign', 'task_members_task_role_id_foreign'],
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_members', function (Blueprint $table) {
            $table->integer('task_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('task_role_id')->unsigned();
            $table->string('userName')->nullable();
            $table->string('roleName')->nullable();

            $table->foreign('task_id')->references('id')->on('tasks');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('task_role_id')->references('id')->on('task_roles');
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
