@section('title', 'Contacto')


@extends('layout')

@section('content')
    <h1>Contacto</h1>

    <form method="POST" action="{{ route('message.store')}}">

        @csrf

        <input name="name" type="text" placeholder="Nombre ..." value="{{ old('name') }}"><br>
        {!! $errors->first('name' , '<small>:message</small><br>') !!}

        <input name="email" type="email" placeholder="Email ..." value="{{ old('email') }}" ><br>
        {!! $errors->first('email' , '<small>:message</small><br>') !!}

        <input name="subject" placeholder="Asunto ..." value="{{ old('subject') }}"><br>
        {!! $errors->first('subject' , '<small>:message</small><br>') !!}

        <textarea name="content" value="lentejas" placeholder="Mensaje ...">{{ old('content') }}</textarea><br>
        {!! $errors->first('content' , '<small>:message</small><br>') !!}

        <button>Enviar</button>

    </form>
@endsection