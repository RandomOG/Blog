@extends('main')

@section('title', '| create new post')

@section('stylesheets')

				{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

	  <div class="row">
	  	<div class="col-md-8 col-md-offset-2">
	  	<h3>Create New Post</h3>
	  		<hr>
			
			{!! Form::open(['route' => 'posts.store', 'data-parsley-validate'=>'']) !!}
    			{{ Form::label('title', 'Title:')}}
    			{{ Form::text('title', null, array('class'=> 'form-control', 'placeholder'=> 'your title', 'required'=>'', 'maxlength'=>'30'))}}

    			{{ Form::label('slug', 'Slug:')}}
    			{{ Form::text('slug', null, ['class'=>'form-control', 'required', 'minlength'=>'5', 'maxlength'=>'255'])}}

    			{{ Form::label('body', 'Post Body:')}}
    			{{ Form::textarea('body', null, array('class'=> 'form-control', 'required'=>''))}}

    			{{ Form::submit('create post', array('class' => 'btn btn-success btn-block', 'style' => 'margin-top:13px;'))}}

			{!! Form::close() !!}
	  	</div>
	  </div>

@endsection

@section('scripts')
		{!! Html::script('js/parsley.min.js') !!}
@endsection