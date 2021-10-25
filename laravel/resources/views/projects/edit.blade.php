@section('title', 'Portfolio')

@extends('layout')

@section('content')
    <h1>Editar Proyecto</h1>

    @include('partials.validation-errors')

    <form method="POST" action=" {{ route('project.update' , $project) }} ">

        @csrf

        @method('PATCH')

        @include('projects._form')

        <button>Actualizar</button>

        

    </form>

@endsection