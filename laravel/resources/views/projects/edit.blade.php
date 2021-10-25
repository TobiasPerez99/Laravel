@section('title', 'Portfolio')

@extends('layout')

@section('content')
    <h1>Editar Proyecto</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>    
            @endforeach            
        </ul>
    @endif

    <form method="POST" action=" {{ route('project.update') }} ">

        @csrf

        {{-- <input type="hidden" name="_method" value="PATCH"> --}}

        {{-- O --}}

        @method('PATCH')

        <label for="">Titulo del Proyecto</label><br><input name="title" value="{{ $project->title}}" type="text"><br>
        <label for="">description</label><br><input name="description" value="{{ $project->description}}" type="text"><br>
        <label for="">url</label><br><input name="url"  value="{{ $project->url}}" type="text"><br>
        <button>Guardar</button>

        

    </form>

@endsection