<?php

namespace Tests\Feature;

use App\Models\Project;
use Faker\Factory as factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectsTest extends TestCase
{
    use WithFaker, RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function a_user_can_create_a_project()
    {
        $attributes = [
            'title' => $this->faker->title,
            'description' => $this->faker->paragraph
        ];

        $this->post('/projects', $attributes)->assertRedirect('/projects');
        
        $this->assertDatabaseHas('projects', $attributes);


        $this->get('/projects')->assertSee($attributes['title']);
    }

    /** @test */
    public function a_project_requires_a_title ()
    {
        $this->post('/projects', [])->assertSessionHasErrors('title');
    }

    /** @test */
    public function a_project_requires_a_description ()
    {
        // $attributes = App\Project::class)->make();
        $this->post('/projects', [])->assertSessionHasErrors('description');
    }
    

    /** @test */
    public function a_user_can_view_a_project ()
    {
        $this->withoutExceptionHandling();
        $project = Project::create([
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph
        ]);
        $this->get('/projects/'.$project->id)
            ->assertSee($project->title)
            ->assertSee($project->description);
    }
} 
