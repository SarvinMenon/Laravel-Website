@extends('main')

@section('contents')

<html lang="en">
 <body>

  {!! Form::open(['route' => 'data.store']) !!}
    {{Form::text('title',null)}}
    {{Form::submit('SUBMIT')}}
  {!! Form::close() !!}


  </body>
</html> 

@endsection