@extends('main')

<h1>Ronaldinho{{$post->title}}</h1>
{!!Form::open(['route'=>['data.destroy',$post->id],'method'=>'DELETE'])!!}

{!!Form::submit('DELETE',['class'=>'btn btn-danger'])!!}

{!!Form::close()!!}