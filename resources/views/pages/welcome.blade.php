@extends('main')

@section('title', 'Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to My Blog!</h1>
                <p class="lead">Thank you so much for visiting. This is my test website built with Laravel</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div> <!-- close .jumbotron -->
        </div> <!-- close .col-md-12 -->
    </div> <!-- close .row -->
    <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)
                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? '...' : '' }}</p>
                    <a href="{{ url('blog/' . $post->slug) }}" class="btn btn-primary">Read More</a>
                </div> <!-- close .post -->
                <hr>
            @endforeach
        </div> <!-- close .col-md-8 -->
        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div> <!-- close .col-md-3 -->
    </div> <!-- close .row -->
@endsection