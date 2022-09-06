<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }

    public function index(){
        $projects = Project::orderBy('created_at', 'desc')->with('images')->get();
        return Inertia::render('Projects/Projects', ['projects' => $projects]);
    }

    public function show($id){
        $project = Project::findOrFail($id);
        return Inertia::render('Projects/ShowProject', [
            'project' => $project
        ]);
    }

    public function create(){
        return Inertia::render('Projects/CreateProject', [
            'content' => '<p>Create a new project</p>'
        ]);
    }

    public function store(Request $request){
        $project = $request->validate([
            'title' => 'required|string|max:255|min:3',
            'description' => 'required|string|max:255|min:3',
            'html' => 'required|string|max:255|min:3',
        ]);
        $project = Project::create($project);
        return redirect('/projects/' . $project->id);
    }

    public function update(Request $request, $id){
        $project = Project::findOrFail($id);
        $project->update($request->validate([
            'title' => 'required|string|max:255|min:3',
            'description' => 'required|string|max:255|min:3',
            'html' => 'required|string|min:3',
        ]));
        return redirect('/projects/' . $project->id);
    }

    public function edit($id){
        $project = Project::with('images')->findOrFail($id);
        return Inertia::render('Projects/EditProject', [
            'project' => $project
        ]);
    }

    public function destroy($id){
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect(route('manage'));
    }

    // -------- Additional functions --------
    public function manage(){
        $projects = Project::orderBy('created_at', 'desc')->get();
        return Inertia::render('Projects/ManageProjects', [
            'projects' => $projects
        ]);
    }
}
