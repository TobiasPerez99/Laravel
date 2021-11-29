<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SaveProjectRequest;
use GuzzleHttp\Handler\Proxy;

class ProjectController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('show' , 'index');
    }



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

        $project = new Project($request->validated());

        $project->image = $request->file('image')->store('images');

        $project->save();

        return redirect()->route('project.index')->with('status' , 'El Proyecto Fue Creado Exitosamente.');
    }

    public function edit(Project $project){
        
        return view('projects.edit' , [

            'project' => $project
        
        ]);

    }
    public function update(Project $project , SaveProjectRequest $request){

        $project->update( array_filter($request->validated()) );

        return redirect()->route('project.show' , $project)->with('status' , 'El Proyecto Fue Editado Exitosamente.');

    }
    public function destroy(Project $project){

        $project->delete();

        return redirect()->route('project.show')->with('status' , 'El Proyecto Fue Eliminado Exitosamente.');;

    }

}
