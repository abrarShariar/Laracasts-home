<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        // validate data
        // persist
        // redirect
        Log::info($request->title);
        Log::info($request->description);
        Project::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
    }
}
