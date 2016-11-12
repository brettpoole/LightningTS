<?php

use Illuminate\Database\Seeder;

class ProjectStagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultStages = [
            ['name' => 'Planning', 'closes_project' => false],
            ['name' => 'Execution', 'closes_project' => false],
            ['name' => 'Billing', 'closes_project' => false],
            ['name' => 'Support and Maintenance', 'closes_project' => false]
        ];

        DB::table('project_stages')->insert($defaultStages);
    }
}
