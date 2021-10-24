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

        // $project = Project::find($id);

        return view('projects.show' , [

            'project' => $project
        
        ]);

    }

    public function create(){

        return view('projects.create');

    }
    public function store(CreateProjectRequest $request){
    
        return $request->all();

        // Project::created($request->all());

        // return redirect()->route('project.index');
    }

}
