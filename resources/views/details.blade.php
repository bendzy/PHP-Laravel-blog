@extends('base')


@section('content')

        <div class="page-header">
            <h1 style="color:darkgrey;font-weight: bold">POST's DETAILS AND COMMENTS</h1>
        </div>

        <div>
            <h2 class="text-primary">{{$post->title}}</h2>

                <div>
                    <h4>{{$post->content}}</h4>
                    <p>Post created at:{{$post->published}}</p>
                    <br/>

                    <a href="{{ action("BlogController@edit",[$post->id]) }}"><button class="btn btn-primary"> Edit Post</button></a>
                    <a href="{{ action("BlogController@comment",[$post->id]) }}"><button class="btn btn-primary"> Add new Comment</button></a>

                    {{--Ce hocmo deletat ne moremo drugace kot button includat v form v form pa navesti da gre za delete metodo in poslati id--}}
                    {!! Form::open (["method" => "delete", "action"=>["BlogController@destroy",$post->id]]) !!}
                    <button class="btn btn-danger">Delete Post</button>
                    {!! Form::close() !!}

                </div>
        </div>
@endsection