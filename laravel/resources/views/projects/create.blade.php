@section('title', 'Portfolio')

@extends('layout')

@section('content')
    <h1>Crear Proyecto</h1>


    @include('partials.validation-errors')

    <form method="POST" action=" {{ route('project.store') }} ">

        @include('projects._form' , ['btnText' => 'Guardar'])
        
    </form>

@endsection