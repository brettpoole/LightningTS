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

        // TODO: remove 'always fail' conditional once migration errors are fixed
        if (false == true && $this->heedMigrationSafety() && Schema::hasTable($this->safetyTable)) {

	        // ---------------------------------------------------------
            // If the schema changes involve renaming or dropping columns,
            // the following insert statement will need to be rewritten.
	        //
	        $oldData = DB::table($this->tableName)->get()->all();

	        $oldData = array_shift($oldData);

            DB::table($this->tableName)->insert($oldData);
			// ---------------------------------------------------------

            Schema::drop($this->safetyTable);
        }
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
