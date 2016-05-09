@extends('base')


@section('content')
    <div class="page-header">
        <h1 style="color:darkgrey;font-weight: bold"> CREATE NEW COMMENT</h1>
    </div>


    <div>
        <h2 class="text-primary">{{$post->title}}</h2>
    </div>

    <article>
     <p>{{$post->content}}</p>
    </article>


    {!! Form::open() !!}
    <div class="form-group">
        {!! Form::label("content","Comment :") !!}
        {!! Form::textarea("content",null,["class"=>"form-control"]) !!}
    </div>

    <div class ="form-group">
        {!! Form::label("published","Published on :") !!}
        {!! Form::input("published","published",date(\Carbon\Carbon::now()),["class"=>"form-control"]) !!}
    </div>

    <div class="form-group">
        {!! Form::submit("Apply Comment",["class"=>"btn btn-primary form-control"]) !!}
    </div>

    {!! Form::close() !!}
@endsection