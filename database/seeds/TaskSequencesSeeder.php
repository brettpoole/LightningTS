<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSequencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sequence = [
            [
                'sequence_id' => 1,
                'project_id' => 1,
                'task_id' => 1,
                'x_axis_position' => 1,
                'y_axis_position' => 1,
            ],
            [
                'sequence_id' => 1,
                'project_id' => 1,
                'task_id' => 2,
                'x_axis_position' => 1,
                'y_axis_position' => 2,
            ],
            [
                'sequence_id' => 1,
                'project_id' => 1,
                'task_id' => 3,
                'x_axis_position' => 2,
                'y_axis_position' => 2,
            ],
            [
                'sequence_id' => 1,
                'project_id' => 1,
                'task_id' => 4,
                'x_axis_position' => 2,
                'y_axis_position' => 1,
            ],
            [
                'sequence_id' => 1,
                'project_id' => 1,
                'task_id' => 5,
                'x_axis_position' => 3,
                'y_axis_position' => 2,
            ],
            [
                'sequence_id' => 1,
                'project_id' => 1,
                'task_id' => 6,
                'x_axis_position' => 3,
                'y_axis_position' => 1,
            ],
        ];

        DB::table('task_sequences')->insert($sequence);
    }
}
