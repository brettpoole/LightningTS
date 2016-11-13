<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quickstartUsers = [
            [
                'name' => 'Project Manager',
                'email' => 'pmo@company.com',
                'password' => Hash::make('project_manager'),
                'activated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jr Developer',
                'email' => 'jrdev@company.com',
                'password' => Hash::make('jr_developer'),
                'activated_at' => Carbon::now(),
            ],
            [
                'name' => 'Senior Developer',
                'email' => 'seniordev@company.com',
                'password' => Hash::make('senior_developer'),
                'activated_at' => Carbon::now(),
            ],
            [
                'name' => 'Support Staff',
                'email' => 'support@company.com',
                'password' => Hash::make('support_staff'),
                'activated_at' => Carbon::now(),
            ],
            [
                'name' => 'Executive Manager',
                'email' => 'exec@company.com',
                'password' => Hash::make('executive_manager'),
                'activated_at' => Carbon::now(),
            ],
        ];

        DB::table('users')->insert($quickstartUsers);
    }
}
