@section('title', 'Portfolio')

@extends('layout')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="display-4 mb-0">Portfolio</h1>

    @auth

    <a class="btn btn-primary" href=" {{ route('project.create') }} ">Crear Proyectos</a>    

    @endauth

    </div>

    <p class="lead text-secondary">Proyectos Realizados</p>

    <hr>

    @if ($errors->any())
        <ul>
            @foreach ($errros->all() as $error)
            <li>{{$error}}</li>    
            @endforeach            
        </ul>
    @endif


    <ul class="list-groip">
        @forelse ($projects as $projectsItem)
            <li class="list-group-item border-0 mb-3 shadow-sm">
                <a class="text-secondary d-flex justify-content-between align-items-center" href=" {{ route('project.show' , $projectsItem)}} ">
                <span class=" font-weight-bold">{{ $projectsItem->title }}</span>
                <span class="text-black-50">{{$projectsItem->created_at}}</span>
            </a><br> <small> {{ $projectsItem->description }} </small></li>
            
        @empty
       
            <h1 class="list-group-item border-0 mb-3 shadow-sm">no hay proyectos para mostrar</h1>

        @endforelse

        {{ $projects->links()}}

    </ul>

</div>
@endsection