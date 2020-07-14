@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default border">Go back</a>
    <h1>{{$post->title}}</h1>
    <div class>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default border">Edit</a>

    {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection