<?php

use Illuminate\Database\Seeder;

class TaskStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultStatuses = [
            ['name' => 'Waiting', 'closes_task' => false],
            ['name' => 'In Review', 'closes_task' => false],
            ['name' => 'In Queue', 'closes_task' => true],
            ['name' => 'Underway', 'closes_task' => true],
            ['name' => 'In Final Review', 'closes_task' => false],
            ['name' => 'Completed', 'closes_task' => true],
        ];

        DB::table('task_statuses')->insert($defaultStatuses);
    }
}
