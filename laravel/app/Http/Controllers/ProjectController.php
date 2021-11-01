<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SaveProjectRequest;

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

        return view('projects.create', [
            'project' => new Project
        ]);

    }
    public function store(SaveProjectRequest $request){

        Project::create($request->all());

        return redirect()->route('project.index')->with('status' , 'El Proyecto Fue Creado Exitosamente.');
    }

    public function edit(Project $project){
        
        return view('projects.edit' , [

            'project' => $project
        
        ]);

    }
    public function update(Project $project , SaveProjectRequest $request){

        $project->update( $request->validated());

        return redirect()->route('project.show' , $project)->with('status' , 'El Proyecto Fue Editado Exitosamente.');

    }
    public function destroy(Project $project){

        $project->delete();

        return redirect()->route('project.show')->with('status' , 'El Proyecto Fue Eliminado Exitosamente.');;

    }

}
