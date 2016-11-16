<?php

use Illuminate\Database\Seeder;

class TaskRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quickstartTaskRoles = [
            ['name' => 'Reporter'],
            ['name' => 'Developer'],
            ['name' => 'Code Reviewer'],
            ['name' => 'Testing / QA'],
        ];

        DB::table('task_roles')->insert($quickstartTaskRoles);
    }
}
