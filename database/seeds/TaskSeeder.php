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
                'name' => 'Client wants blue background darker',
                'definition' => "On the conference call today, the client expressed
                    that the blue background is too juvenile, and they'd like a more
                    professional color.",
                'hours_estimated' => '1',
                'hours_worked' => 0,
                'task_status_id' => 1,
                'task_priority_id' => 3,
            ],
            [
                'name' => 'Welcome page on website is just showing code',
                'definition' => "It looks like the website code is leaking",
                'hours_estimated' => 1,
                'hours_worked' => 0.5,
                'task_status_id' => 3,
                'task_priority_id' => 5,
            ],
            [
                'name' => 'Export site images',
                'definition' => "The customer wants their images on a thumbdrive",
                'hours_estimated' => 0.5,
                'hours_worked' => 0.5,
                'task_status_id' => 5,
                'task_priority_id' => 3,
            ],
        ];

        DB::table('tasks')->insert($quickstartTasks);

        $quickstartTaskAttachment = [
            ['project_id' => 1, 'task_id' => 1],
            ['project_id' => 1, 'task_id' => 2],
            ['project_id' => 1, 'task_id' => 3],
        ];

        DB::table('project_tasks')->insert($quickstartTaskAttachment);
    }
}
