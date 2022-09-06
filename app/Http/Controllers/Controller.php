<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Inertia\Inertia;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $projects = Project::
        limit(3)->
        orderBy('created_at', 'desc')->
        with('images')->
        get();
        return Inertia::render('Index', ["projects" => $projects]);
    }

    public function about(){
        return Inertia::render('AboutMe');
    }

    public function contact(){
        return Inertia::render('Contact');
    }

    public function internship(){
        return Inertia::render('Internship');
    }
}
