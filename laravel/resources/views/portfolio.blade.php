@section('title', 'Portfolio')

@extends('layout')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        @forelse ($portfolio as $portfolioItem)

            <li>{{ $portfolioItem['title'] }}</li>
            
        @empty
       
            <h1>no hay proyectos para mostrar</h1>

        @endforelse

    </ul>
@endsection