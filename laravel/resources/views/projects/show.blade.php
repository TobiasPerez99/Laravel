@extends('layout')

@section('title' , 'Portafolio |' , $project->title)
    


@section('content')

    <a href=" {{ route('projects.edit' , $project) }} ">Editar Proyecto</a>


    <h1>{{ $project->title }}</h1>

    <p>{{ $project->description }}</p>

    <p>{{ $project->created_at }}</p>
@endsection