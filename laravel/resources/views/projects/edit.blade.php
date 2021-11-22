@section('title', 'Portfolio')

@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            

            @include('partials.validation-errors')
        
        
            <form class="bg-white py-3 px-4 shadow rounded" method="POST" action=" {{ route('project.update' , $project) }} ">
        
                <h1 class="display-4">Editar Proyecto</h1>

                <hr>

                @method('PATCH')
        
                @include('projects._form' , ['btnText' => 'Actualizar'])

                <a class="btn btn-line btn-block" href="{{route('project.index')}}">Regresar</a>
        
            </form>
        </div>
    </div>
</div>

    

@endsection