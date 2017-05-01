@extends('main')

@section('title', '| home')

@section('content')

    <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="jumbotron">
                  <h2>Randoms!</h2>
                  <p class="lead">Jambo, just another blog</p>
                  <p><a class="btn btn-primary btn-lg" href="{{ route('posts.index') }}" role="button">posts</a></p>
                </div>
            </div>
          </div>

              <div class="row">
                <div class="col-md-8">

                  @foreach($posts as $post)
                        <div class="post">
                          <h3>{{$post->title}}</h3>
                          <p>{{substr($post->body, 0, 300)}}{{ strlen($post->body) > 300 ? "..." : ""}}</p>
                          <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-danger">read more</a>
                        </div>
                <hr>
                @endforeach
                  
      </div>

      <div class="col-lg-3 col-md-offset-1">
        <h3>sidebar</h3>
      </div>
      </div>
@endsection