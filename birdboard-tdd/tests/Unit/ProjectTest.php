<?php

namespace Tests\Unit;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    public function it_has_a_path ()
    {
        $project = Project::factory()->create();
        $this->assertEquals('/projects/'. $project->id, $project->path());
    }
}
