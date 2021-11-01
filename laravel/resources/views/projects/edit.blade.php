@section('title', 'Portfolio')

@extends('layout')

@section('content')
    <h1>Editar Proyecto</h1>

    @include('partials.validation-errors')


    <form method="POST" action=" {{ route('project.update' , $project) }} ">

        @method('PATCH')

        @include('projects._form' , ['btnText' => 'Actualizar'])

    </form>

@endsection