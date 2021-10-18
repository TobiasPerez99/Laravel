@section('title', 'Portfolio')

@extends('layout')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        @forelse ($projects as $projectsItem)

            <li>{{ $projectsItem->title }} <br> <small> {{ $projectsItem->description }} </small> <br> {{ $projectsItem->created_at }} </li>
            
        @empty
       
            <h1>no hay proyectos para mostrar</h1>

        @endforelse

        {{ $projects->links()}}

    </ul>
@endsection