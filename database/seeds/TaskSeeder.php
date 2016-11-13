<?php

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quickstartTasks = [
            [
                'name' => 'Plan out the Database Model',
                'definition' => "Meeting Agenda: determine database structure",
                'hours_estimated' => 12,
                'hours_worked' => 0,
                'task_status_id' => 1,
                'task_priority_id' => 4,
            ],
            [
                'name' => 'Plan out the Application Model',
                'definition' => "Meeting Agenda: determine application structure",
                'hours_estimated' => 12,
                'hours_worked' => 0,
                'task_status_id' => 1,
                'task_priority_id' => 4,
            ],
            [
                'name' => 'Create application scaffolding',
                'definition' => "Deliver a functional mock-up of the application",
                'hours_estimated' => 40,
                'hours_worked' => 0,
                'task_status_id' => 1,
                'task_priority_id' => 4,
            ],
            [
                'name' => 'Build the database',
                'definition' => "A functional mock-up of the db with permissions",
                'hours_estimated' => 24,
                'hours_worked' => 0,
                'task_status_id' => 1,
                'task_priority_id' => 4,
            ],
            [
                'name' => 'Add application features',
                'definition' => "Start adding required features to the application",
                'hours_estimated' => 80,
                'hours_worked' => 0,
                'task_status_id' => 1,
                'task_priority_id' => 4,
            ],
            [
                'name' => 'Complete database with maintenance plan',
                'definition' => "Make sure scalability is not going to be a problem and that tables do not become slow to query",
                'hours_estimated' => 40,
                'hours_worked' => 0,
                'task_status_id' => 1,
                'task_priority_id' => 4,
            ],
        ];

        DB::table('tasks')->insert($quickstartTasks);

        $quickstartTaskAttachment = [
            ['project_id' => 1, 'task_id' => 1],
            ['project_id' => 1, 'task_id' => 2],
            ['project_id' => 1, 'task_id' => 3],
            ['project_id' => 1, 'task_id' => 4],
            ['project_id' => 1, 'task_id' => 5],
            ['project_id' => 1, 'task_id' => 6],
        ];

        DB::table('project_tasks')->insert($quickstartTaskAttachment);
    }
}
