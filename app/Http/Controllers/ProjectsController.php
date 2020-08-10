<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = \App\Project::all();
        return view('projects.index', compact('projects'));
    }

    public function store()
    {
        \App\Project::create(request(['title', 'description']));
        return redirect('/projects');
    }
}
