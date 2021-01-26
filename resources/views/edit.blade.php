{!!Form::model($post,['route'=>['data.update',$post->id],'method'=>'PUT'])!!}
	
	{{Form::text('title')}}

	{{Form::submit("Save Changes",['class'=>'btn btn-sucess'])}}	

{!!Form::close()!!}