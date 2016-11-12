<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Overrides\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Table name used for safe migration
     *
     * @var string
     */
    protected $safetyTable = 'projects__safe_state';

    /**
     * Table name for this migration
     *
     * @var string
     */
    protected $tableName = 'projects';

	protected $indexes = [
		'indexes' => [],
		'uniques' => ['projects_name_unique'],
		'foreigns' => ['projects_project_status_id_foreign'],
	];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('avatar');
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->double('budget')->nullable();
            $table->integer('client_id')->unsigned()->nullable();
            $table->integer('project_status_id')->unsigned();
            $table->dateTimeTz('starts_at');
            $table->boolean('endless')->default(true);
            $table->dateTimeTz('ends_at')->nullable();
            $table->integer('project_stage_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('project_status_id')
                ->references('id')->on('project_statuses');
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
