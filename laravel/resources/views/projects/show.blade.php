@extends('layout')

@section('title' , 'Portafolio |' , $project->title)
    


@section('content')

@auth

<div class="container">

    <div class="bg-white p-5 shadow rounded">

   
        
    @endauth

        <h1>{{ $project->title }}</h1>

        <p class="text-secondary">{{ $project->description }}</p>

        <p class="text-black-50">{{ $project->created_at }}</p>

        @auth

        <div class="d-flex justify-content-between">

            <div class="btn-group btn-group-sm px-1 rounded">

                <a class="btn m-1 rounded btn-primary" href="{{route('project.index')}}">Regresar</a>

                <a class="btn m-1 rounded btn-primary" href=" {{ route('project.edit' , $project) }} ">Editar Proyecto</a> <br> 

                <a class="btn m-1 rounded btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">Eliminar</a>
            
                <form id="delete-project" action="{{ route('project.destroy' , $project) }}" method="POST">
                    @csrf @method('DELETE')
                </form>

            </div>
    
        </div>

        @endauth
    
    </div>

</div>
@endsection