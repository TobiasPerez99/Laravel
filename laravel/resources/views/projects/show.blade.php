@extends('layout')

@section('title' , 'Portafolio |' , $project->title)
    


@section('content')

    <a href=" {{ route('project.edit' , $project) }} ">Editar Proyecto</a> <br>

    <form action="{{ route('project.destroy' , $project) }}" method="POST">

        @csrf @method('DELETE')

        <button>Eliminar Proyecto</button>

    </form>

    <h1>{{ $project->title }}</h1>

    <p>{{ $project->description }}</p>

    <p>{{ $project->created_at }}</p>
@endsection