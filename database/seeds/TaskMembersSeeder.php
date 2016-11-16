<?php

use Illuminate\Database\Seeder;

class TaskMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quickstartTaskMembers = [
            ['task_id' => 1, 'user_id' => 1, 'task_role_id' => 1, 'userName' => 'Project Manager', 'roleName' => 'Reporter'],
            ['task_id' => 1, 'user_id' => 2, 'task_role_id' => 2, 'userName' => 'Junior Developer', 'roleName' => 'Developer'],
            ['task_id' => 1, 'user_id' => 3, 'task_role_id' => 3, 'userName' => 'Senior Developer', 'roleName' => 'Code Review'],
            ['task_id' => 2, 'user_id' => 1, 'task_role_id' => 1, 'userName' => 'Project Manager', 'roleName' => 'Reporter'],
            ['task_id' => 2, 'user_id' => 2, 'task_role_id' => 2, 'userName' => 'Junior Developer', 'roleName' => 'Developer'],
            ['task_id' => 2, 'user_id' => 3, 'task_role_id' => 3, 'userName' => 'Senior Developer', 'roleName' => 'Code Review'],
            ['task_id' => 3, 'user_id' => 1, 'task_role_id' => 1, 'userName' => 'Project Manager', 'roleName' => 'Reporter'],
            ['task_id' => 3, 'user_id' => 2, 'task_role_id' => 2, 'userName' => 'Junior Developer', 'roleName' => 'Developer'],
            ['task_id' => 3, 'user_id' => 3, 'task_role_id' => 3, 'userName' => 'Senior Developer', 'roleName' => 'Code Review'],
            ['task_id' => 4, 'user_id' => 1, 'task_role_id' => 1, 'userName' => 'Project Manager', 'roleName' => 'Reporter'],
            ['task_id' => 4, 'user_id' => 2, 'task_role_id' => 2, 'userName' => 'Junior Developer', 'roleName' => 'Developer'],
            ['task_id' => 4, 'user_id' => 3, 'task_role_id' => 3, 'userName' => 'Senior Developer', 'roleName' => 'Code Review'],
            ['task_id' => 5, 'user_id' => 1, 'task_role_id' => 1, 'userName' => 'Project Manager', 'roleName' => 'Reporter'],
            ['task_id' => 5, 'user_id' => 2, 'task_role_id' => 2, 'userName' => 'Junior Developer', 'roleName' => 'Developer'],
            ['task_id' => 5, 'user_id' => 3, 'task_role_id' => 3, 'userName' => 'Senior Developer', 'roleName' => 'Code Review'],
            ['task_id' => 6, 'user_id' => 1, 'task_role_id' => 1, 'userName' => 'Project Manager', 'roleName' => 'Reporter'],
            ['task_id' => 6, 'user_id' => 2, 'task_role_id' => 2, 'userName' => 'Junior Developer', 'roleName' => 'Developer'],
            ['task_id' => 6, 'user_id' => 3, 'task_role_id' => 3, 'userName' => 'Senior Developer', 'roleName' => 'Code Review'],
        ];

        DB::table('task_members')->insert($quickstartTaskMembers);
    }
}
