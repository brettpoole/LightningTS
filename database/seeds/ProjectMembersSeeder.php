<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProjectMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quickstartMemberships = [
            ['project_id' => 1, 'user_id' => 1, 'project_role_id' => 1],
            ['project_id' => 1, 'user_id' => 2, 'project_role_id' => 1],
            ['project_id' => 1, 'user_id' => 3, 'project_role_id' => 1],
            ['project_id' => 1, 'user_id' => 4, 'project_role_id' => 1],
            ['project_id' => 1, 'user_id' => 5, 'project_role_id' => 1],
        ];

        DB::table('project_members')->insert($quickstartMemberships);
    }
}
