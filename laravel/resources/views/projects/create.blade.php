@section('title', 'Portfolio')

@extends('layout')

@section('content')
    <h1>Crear Proyecto</h1>

    @include('partials.validation-errors')

    <form method="POST" action=" {{ route('project.store') }} ">

        @csrf

        @include('projects._form')

        <button>Guardar</button>

        

    </form>

@endsection