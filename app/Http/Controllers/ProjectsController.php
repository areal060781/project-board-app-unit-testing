<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Auth::user()->projects;

        return view('projects.index', compact('projects'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Auth::user()->projects()->create($attributes);

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        if (Auth::user()->isNot($project->owner)){
            abort(403);
        }

        return view('projects.show', compact('project'));
    }
}
