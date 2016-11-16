<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProjectTest extends TestCase
{
    /** @test */
    public function it_can_be_instantiated_with_form_data()
    {
        $project = new \App\Models\Project([
            'avatar' => 'asdf',
            'name' => 'A new test project',
            'description' => 'Just a thang',
            'budget' => '10.00',
            'project_status_id' => 1,
            'starts_at' => \Carbon\Carbon::now(),
            'endless' => true,
            'project_stage_id' => 1,
        ]);

        $this->assertTrue($project->exists());
    }
}
