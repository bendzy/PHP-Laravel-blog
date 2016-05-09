@extends('base')

@section('content')

    <h1>All Post's</h1>

    @foreach($posts as $post)
        <article>
            <h2><a href="{{ action("BlogController@show",($post->id)) }}">{{$post->title}}</h2></a>

            <div>
                <p>{{$post->content}}</p>
                <p><strong>Published on :</strong> {{$post->published}}</p>
            </div>
        </article>

        <a href="{{ action("BlogController@edit",[$post->id]) }}"><button class="btn btn-primary"> Edit Post</button></a>
        <a href="{{ action("BlogController@comment",[$post->id]) }}"><button class="btn btn-primary"> Add new Comment</button></a>

        {{--Ce hocmo deletat ne moremo drugace kot button includat v form v form pa navesti da gre za delete metodo in poslati id--}}
        {!! Form::open (["method" => "delete", "action"=>["BlogController@destroy",$post->id]]) !!}
        <button class="btn btn-danger">Delete Post</button>
        {!! Form::close() !!}


    @endforeach

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

@endsection