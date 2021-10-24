@section('title', 'Portfolio')

@extends('layout')

@section('content')
    <h1>Crear Proyecto</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>    
            @endforeach            
        </ul>
    @endif

    <form method="POST" action=" {{ route('project.store') }} ">

        @csrf

        <label for="">Titulo del Proyecto</label><br><input name="title" type="text"><br>
        <label for="">description</label><br><input name="description" type="text"><br>
        <label for="">url</label><br><input name="url" type="text"><br>
        <button>Guardar</button>

        

    </form>

@endsection