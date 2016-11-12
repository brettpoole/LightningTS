<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $placeholderRoles = [
            'name' => 'Project Admin',
            'groupEmail' => 'project-admins@example.com',
        ];

        DB::table('project_roles')->insert($placeholderRoles);
    }
}
