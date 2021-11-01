@section('title', 'Portfolio')

@extends('layout')

@section('content')
    <h1>Portfolio</h1>

    @auth
    <a href=" {{ route('project.create') }} ">Crear Proyectos</a>    
    @endauth


    @if ($errors->any())
        <ul>
            @foreach ($errros->all() as $error)
            <li>{{$error}}</li>    
            @endforeach            
        </ul>
    @endif


    <ul>
        @forelse ($projects as $projectsItem)

            <li><a href=" {{ route('project.show' , $projectsItem)}} ">{{ $projectsItem->title }}</a><br> <small> {{ $projectsItem->description }} </small> <br> {{ $projectsItem->created_at }} </li>
            
        @empty
       
            <h1>no hay proyectos para mostrar</h1>

        @endforelse

        {{ $projects->links()}}

    </ul>
@endsection