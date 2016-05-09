@extends('base')


@section('content')
    {!! Form::open(["url"=>"/"]) !!}
    @include("__form",["submitButton"=>"Create new Article"])
    {!! Form::close() !!}

    @if($errors->any())
    @include('errors/list')
    @endif

@endsection