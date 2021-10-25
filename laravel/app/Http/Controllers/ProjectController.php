<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    { 
        return view('projects.index' , [
            'projects' =>  Project::latest()->paginate()
        ]);
    }

    public function show(Project $project){
       
        return view('projects.show' , [

            'project' => $project
        
        ]);

    }

    public function create(){

        return view('projects.create');

    }
    public function store(CreateProjectRequest $request){
    
        return $request->all();

        Project::create($request->all());

        return redirect()->route('project.index');
    }

    public function edit(Project $project){
        
        return view('projects.edit' , [

            'project' => $project
        
        ]);

    }
    public function update(Project $project){

        $project->update([

            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description'),

        ]);

        return redirect()->route('project.show' , $project);

    }

}
