@extends('main')

@section('title', '! All Posts')

@section('content')
	
	<div class="row">
		<div class="col-md-10">
			<h3>All fn Posts</h3>
		</div>

		<div class="col-md-2">
			<a href=" {{ route('posts.create') }}" class="btn btn-primary btn-block">Create New Post</a>
		</div>

		<hr>

	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created At</th>
					<th></th>
				</thead>

				<tbody>
						
						@foreach($posts as $post)

						<tr>
							<th>{{ $post->id }}</th>
							<td>{{ $post->title }}</td>
							<td>{{ substr($post->body, 0, 50) }} {{ strlen($post->body) > 50 ? "..." : "" }}</td>
							<td>{{ date('M d, Y H:i', strtotime($post->created_at)) }}</td>
							<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary btn-sm">view</a> 
							<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success btn-sm">Edit</a> </td>
						</tr>

						@endforeach

				</tbody>
			</table>
				
				<div class="text-center">
					{!! $posts->links()!!}
				</div>
		</div>		
	</div>

@stop