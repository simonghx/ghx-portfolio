<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
use Storage;

class PageController extends Controller
{
    public function index(){

        $projects = Project::with('technologies')->get()->sortByDesc('created_at')->take(3);
        return view('index', compact('projects'));
    }

    public function modal(){

    }

    public function contactForm(){

    }
}
