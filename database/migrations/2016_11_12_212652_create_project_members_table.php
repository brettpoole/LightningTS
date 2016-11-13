<?php

use App\Overrides\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectMembersTable extends Migration
{
    /**
     * Table for this migration
     * @var string
     */
    protected $tableName = 'project_members';

    /**
     * Table used for safe migrations
     * @var string
     */
    protected $safetyTable = 'project_members__save_state';

    /**
     * Indexes in this migration
     * @var array
     */
    protected $indexes = [
        'indexes' => [],
        'uniques' => [],
        'foreigns' => ['project_id', 'user_id', 'project_role_id'],
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_members', function (Blueprint $table) {
            $table->integer('project_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('project_role_id')->unsigned();

            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('project_role_id')->references('id')->on('project_roles');
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
