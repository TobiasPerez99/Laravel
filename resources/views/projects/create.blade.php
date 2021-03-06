@section('title', 'Portfolio')

@extends('layout')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            
            @include('partials.validation-errors')

            <form enctype="multipart/form-data" class="bg-white py-3 px-4 shadow rounded" method="POST" action=" {{ route('project.store') }} ">
            
            <h1 class="display-5">Nuevo Proyecto</h1>

            <hr>

            @include('projects._form' , ['btnText' => 'Guardar'])
                
            </form>

        </div>
    </div>
</div>
@endsection