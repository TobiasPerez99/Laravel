<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SaveProjectRequest;
use Intervention\Image\Facades\Image;

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

        $image = Image::make(Storage::get($project->image))
        ->widen(600)
        ->limitColors(255)
        ->encode();
    
        Storage::put($project->image, (string) $image);

        return redirect()->route('project.index')->with('status' , 'El Proyecto Fue Creado Exitosamente.');
    }

    public function edit(Project $project){
        
        return view('projects.edit' , [

            'project' => $project
        
        ]);

    }
    public function update(Project $project , SaveProjectRequest $request){

        if($request->hasFile('image') ){

            Storage::delete($project->image);

            $project = $project->fill($request->validated());

            $project->image = $request->file('image')->store('images');
    
            $project->save();

            $image = Image::make(Storage::get($project->image))
                ->widen(600)
                ->limitColors(255)
                ->encode();
            
            Storage::put($project->image, (string) $image);

        }else{

            $project->update( array_filter($request->validated()) );    
        
        }

        

        return redirect()->route('project.show' , $project)->with('status' , 'El Proyecto Fue Editado Exitosamente.');

    }
    public function destroy(Project $project){

        Storage::delete($project->image);

        $project->delete();

        return redirect()->route('project.show')->with('status' , 'El Proyecto Fue Eliminado Exitosamente.');;

    }

}
