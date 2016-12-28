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
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac magna commodo, posuere sem id,
                laoreet nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet, diam
                aliquam feugiat mattis, nisi leo luctus dolor, ut fermentum mi urna elementum massa.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div> <!-- close .post -->
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac magna commodo, posuere sem id,
                    laoreet nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet, diam
                    aliquam feugiat mattis, nisi leo luctus dolor, ut fermentum mi urna elementum massa.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div> <!-- close .post -->
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac magna commodo, posuere sem id,
                    laoreet nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet, diam
                    aliquam feugiat mattis, nisi leo luctus dolor, ut fermentum mi urna elementum massa.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div> <!-- close .post -->
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac magna commodo, posuere sem id,
                    laoreet nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet, diam
                    aliquam feugiat mattis, nisi leo luctus dolor, ut fermentum mi urna elementum massa.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div> <!-- close .post -->
        </div> <!-- close .col-md-8 -->
        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div> <!-- close .col-md-3 -->
    </div> <!-- close .row -->
@endsection