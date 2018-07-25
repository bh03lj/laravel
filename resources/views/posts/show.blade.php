@extends('layouts.master')

@section('content')

    <div class="col-md-8 blog-main">

        <h1>{{$post->title}}</h1>

        {{$post->body}}

        <hr>

        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>{{ $comment->created_at->diffForHumans() }}</strong>
                        {{$comment->body}}
                    </li>
                @endforeach
            </ul>
        </div>

        <hr>

        <div class="card">
            <div class="card-block">

                <form method="POST" action="/posts">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="body">Body:</label>
                        <textarea id="body" name="body" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>

    </div>
@endsection