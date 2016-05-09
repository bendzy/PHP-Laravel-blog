@extends("base")


@section("content")
    <h1 class="text-primary"> <strong>EDIT POST :</strong> {!! $post->title !!}</h1>
    {!! Form::model ($post,["method" => "patch", "action"=>["BlogController@update",$post->id]]) !!}
    @include("__form",["submitButton"=>"Update Post"])
    {!! Form::close() !!}

@endsection