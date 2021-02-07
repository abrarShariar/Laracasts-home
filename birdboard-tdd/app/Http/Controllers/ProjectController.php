<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    public function store(Request $request)
    {   
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        // validate data
        // persist
        // redirect
        Log::info($request->title);
        Log::info($request->description);
        Project::make([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect('/projects');
    }

    public function show()
    {
        $projects = Project::all();
        return view('projects.index', ['projects' => $projects]);
    }

    public function getById(Request $request, $id)
    {
        Log::info($id);
        $project = Project::findOrFail($id);
        Log::info($id);

        return view('projects.index', ['project' => $project]);
    }
}
