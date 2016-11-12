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
	    	['name' => 'Scheduled', 'notifies_client' => false],
		    ['name' => 'Underway', 'notifies_client' => false],
		    ['name' => 'Complete', 'notifies_client' => false],
		    ['name' => 'On Hold', 'notifies_client' => false],
		];

        DB::table('project_statuses')->insert($defaultStatuses);
    }
}
