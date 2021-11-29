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
    <div class="d-flex  flex-wrap justify-content-between align-items-start">
        @forelse ($projects as $projectsItem)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/storage/{{$projectsItem->image}}" alt="Card image cap">
                <div class="card-body text-center">                    
                  <h5 class="">{{ $projectsItem->title }}</h5>
                  <p class="card-text">{{ $projectsItem->description }}</p>
                  <a href="{{ route('project.show' , $projectsItem)}} " class="btn btn-primary">Ver el Proyecto</a>
                </div>
              </div>            
        @empty      
        <h1 class="list-group-item border-0 mb-3 shadow-sm">no hay proyectos para mostrar</h1>
        @endforelse
    </div>

        {{ $projects->links()}}
    
</div>
@endsection