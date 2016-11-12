<?php

use App\Overrides\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectStagesTable extends Migration
{
    /**
     * Table for this migration
     * @var string
     */
    protected $tableName = 'project_stages';

    /**
     * Table used for safe migrations
     * @var string
     */
    protected $safetyTable = 'project_stages__save_state';

    /**
     * Indexes in this migration
     * @var array
     */
    protected $indexes = [
        'indexes' => [],
        'uniques' => ['project_stages_name_unique'],
        'foreigns' => [],
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_stages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->boolean('closes_project')->default(false);
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
