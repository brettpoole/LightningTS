<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProjectRolesSeeder::class);
        $this->call(ProjectStatusSeeder::class);
        $this->call(ProjectStagesSeeder::class);
        $this->call(ProjectSeeder::class);

        $this->call(TaskPrioritiesSeeder::class);
        $this->call(TaskStatusesSeeder::class);
        $this->call(TaskSeeder::class);

        $this->call(TaskSequencesSeeder::class);
    }
}
