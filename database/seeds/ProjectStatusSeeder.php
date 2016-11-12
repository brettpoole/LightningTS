<?php

use Illuminate\Database\Seeder;

class ProjectStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultStatuses = [
            ['name' => 'Pending', 'notifies_client' => false],
            ['name' => 'Active', 'notifies_client' => false],
            ['name' => 'Stalled', 'notifies_client' => true],
            ['name' => 'Complete', 'notifies_client' => true],
            ['name' => 'Cancelled', 'notifies_client' => false],
        ];

        DB::table('project_statuses')->insert($defaultStatuses);
    }
}
