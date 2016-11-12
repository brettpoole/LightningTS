<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $placeholderProject = [
            'name' => 'Quickstart Project',
            'avatar' => 'https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=Quickstart&20Project&choe=UTF-8',
            'description' => 'The fastest way to get familiar with a new platform
                can be to start working on it right away.  Some people just learn
                better that way, and this project is for you.  If that sounds
                terrible to you, feel free to delete this project and begin by
                creating a new one.',
            'budget' => '12,000.00',
            'project_status_id' => 1,
            'endless' => true,
            'starts_at' => \Carbon\Carbon::now(),
            'project_stage_id' => 1,
        ];

        DB::table('projects')->insert($placeholderProject);
    }
}
