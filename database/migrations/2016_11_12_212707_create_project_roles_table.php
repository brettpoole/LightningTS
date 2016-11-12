<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Overrides\Migration;

class CreateProjectRolesTable extends Migration
{
    /**
     * Table for this migration
     * @var string
     */
    protected $tableName = 'project_roles';

    /**
     * Table used for safe migrations
     * @var string
     */
    protected $safetyTable = 'project_roles__save_state';

    /**
     * Indexes in this migration
     * @var array
     */
    protected $indexes = [
        'indexes' => [],
        'uniques' => ['project_roles_name_unique'],
        'foreigns' => [],
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('groupEmail')->nullable();
            $table->boolean('can_create_tasks')->default(true);
            $table->boolean('can_assign_tasks')->default(true);
            $table->boolean('can_work_tasks')->default(true);
            $table->boolean('can_change_members')->default(true);
            $table->boolean('can_change_project_status')->default(true);
            $table->boolean('can_close_project')->default(true);
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
