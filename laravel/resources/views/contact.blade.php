@section('title', 'Contacto')


@extends('layout')

@section('content')
    

    @if (session('status'))
        {{session('status')}}
    @else
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
    <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('message.store')}}"> 
        
        <h1 class="display-4 text-center">Contacto</h1>
        <hr>
        @csrf

        <div class="form-group">
            <label for="name">Nombre</label>
            <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror border-0"
            id="nombre"
            name="name" type="text" placeholder="Nombre ..." value="{{ old('name') }}">
            @error('name')
            <div class="span invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </div>
            @enderror
        
        </div>

        <div class="form-group">
            <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror border-0" name="email" type="email" placeholder="Email ..." value="{{ old('email') }}" >
            @error('email')
            <div class="span invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </div>
            @enderror
        </div>

        <div class="form-group">
            <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror border-0" name="subject" placeholder="Asunto ..." value="{{ old('subject') }}">
            @error('subject')
            <div class="span invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </div>
            @enderror
        </div>

        <div class="form-group">
            <textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror border-0" name="content" value="lentejas" placeholder="Mensaje ...">{{ old('content') }}</textarea>
            @error('content')
            <div class="span invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </div>
            @enderror
        </div>
        <button class="btn btn-primary btn-lg btn-block">Enviar</button>
    </form>
    </div>
    </div>
</div>

    @endif
    
@endsection