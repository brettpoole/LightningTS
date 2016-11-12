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

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
        });

        // TODO: remove 'always fail' conditional once migration errors are fixed
        if (false == true && $this->heedMigrationSafety() && Schema::hasTable($this->safetyTable)) {
            $oldData = DB::table($this->tableName)->select(
                'avatar', 'name', 'description', 'budget', 'client_id',
                'project_status_id', 'starts_at', 'endless', 'ends_at',
                'project_stage_id', 'taggable', 'created_at', 'updated_at',
                'deleted_at')->get()->all();

            // If the schema changes involve renaming or dropping columns,
            // the following insert statement will need to be rewritten.
            DB::table($this->tableName)->insert($oldData);

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
        // TODO: Write a table-agnostic table-copy method for Migrate override
        Schema::dropIfExists($this->tableName);
    }
}
