<?php

namespace Tests\Feature;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ListProjectsTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_see_all_projects()
    {

        $this->withExceptionHandling();
        
        $project = Project::created([
            'title' => 'Mi nuevo proyecto',
            'url' => 'Mi nuevo proyecto',
            'description' => 'Mi nuevo proyecto'
        ]);

        $response = $this->get(route('projects.index'));

        $response->assertStatus(200);

        $response->assertSee($project->title);
    }
}
