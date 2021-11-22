
@section('title', 'About')



@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
           <h1 class="display-3 text-primary">Sobre Mi</h1>
           <p class="lead text-secondary ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti fuga labore, at quaerat accusantium sequi maiores vitae commodi nobis laudantium, nesciunt reprehenderit laborum quia et? Recusandae ab maxime perspiciatis voluptatem?</p>
           <a class="btn btn-lg btn-block" href="{{route('contact')}}">Contactame</a>
           <a class="btn btn-lg btn-block btn-outline-primary" href="{{route('project.index')}}">Porfolio</a>
        </div>
        <div class="col-12">
           <img class="img-fluid mt-4" src="\img\developer.svg" alt="" srcset="">
       </div>
    </div>
</div>
@endsection