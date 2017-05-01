@extends('main')

@section('title', '| View Post')

@section('content')

	<div class="row">
		<div class="col-lg-8">

			<h3> {{ $post->title }} </h3>


			<p class="lead">{{ $post->body }}</p>
		</div>

		<div class="col-lg-4">
			<div class="well">

			<dl class="dl-horizontal">
					<label>Url:</label>
					<p><a href="{{ route('blog.single', $post->slug)}}">{{ route('blog.single', $post->slug) }}</a></p>
				</dl>

				<dl class="dl-horizontal">
					<label>Created At:</label>
					<p>{{ date('M d, Y H:i', strtotime($post->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('M d, Y H:i', strtotime($post->updated_at)) }}</p>
				</dl>

				<hr>

				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}

						
					</div>
					<div class="col-sm-6">

						{!! Form::open(['route' => ['posts.destroy', $post->id], 'method'=>'DELETE'])!!}
				
						{!! Form::submit('Delete', ['class'=> 'btn btn-danger btn-block'])!!}

						{!! Form::close()!!}
					</div>

				</div>

				<div class="row">
					<div class="col-md-12">
						{{ Html::linkRoute('posts.index', '<< see all posts', [], ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
					</div>
				</div>

			</div>
			
		</div>
	</div>

@endsection