@extends('layouts.master')

@section('content')
    <h1>Create a Post</h1>
    <hr>
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
@endsection