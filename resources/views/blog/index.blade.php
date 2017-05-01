@extends('main')

@section('title', "| Blag")

@section('content')

<div class="row">
		<div class="col-md-8 col-md-offset-1">
			<h3>Blag</h3>
			
		</div>
	</div>

@foreach($posts as $post)

<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h4>{{$post->title}}</h4>
			<h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>
			<p>{{ substr($post->body, 0, 250) }} {{ strlen($post->body) > 250 ? '...' : ""}}</p>
			<a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
		</div>
	</div>
@endforeach

<div class="row">
		<div class="col-md-12">
			<div class="text-center">
				{!! $posts->links() !!}
			</div>
			
		</div>
	</div>

@endsection