@extends('layouts/master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Publish a Post</h1>
        <hr>
        <form method="POST" action="/posts">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="tite">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                    <textarea name="body" id="title" class="form-control"></textarea>
            </div>
            @include('layouts/errors')
            <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
            </div>
        </form>

    </div>
@endsection