<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
use Storage;
use App\Http\Requests\ContactRequest;
use App\Events\Contact;

class PageController extends Controller
{
    public function index(){

        $projects = Project::with('technologies')->get()->sortByDesc('created_at')->take(3);
        return view('index', compact('projects'));
    }

    public function modal(Project $project){
        return view('front.modal', compact('project'));
    }

    public function projects(){
        $projects = Project::with('technologies')->get()->sortByDesc('created_at');
        return view('front.projects', compact('projects'));
    }

    public function contactForm(ContactRequest $request){
        
            event(new Contact($request));        
            return redirect()->route('main');

        
    }
}
