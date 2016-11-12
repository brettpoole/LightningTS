<?php

use Illuminate\Database\Seeder;

class TaskPrioritiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultTaskPriorities = [
            ['name' => 'None', 'notifies_client' => false],
            ['name' => 'Want', 'notifies_client' => false],
            ['name' => 'Need', 'notifies_client' => false],
            ['name' => 'Required', 'notifies_client' => false],
            ['name' => 'Red Alert', 'notifies_client' => true],
        ];

        DB::table('task_priorities')->insert($defaultTaskPriorities);
    }
}
