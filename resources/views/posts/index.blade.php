@extends ('layouts.master')

@section('content')


        <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
</head>

<body>


<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">

            @foreach($posts as $post)
                @include('posts.post')
            @endforeach

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>

        </div><!-- /.blog-main -->
        @include('layouts.sidebar')

    </div><!-- /.row -->

</main><!-- /.container -->

@endsection

@section('footer')

@endsection
