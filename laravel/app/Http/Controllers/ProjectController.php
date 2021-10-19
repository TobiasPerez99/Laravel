<?php

namespace App\Http\Controllers;

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

    public function show($id){

        $project = Project::find($id);

        return view('projects.show' , [

            'project' => Project::findorFail($id)
        ]);

    }

}
