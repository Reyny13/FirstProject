@extends('layouts.main')

@section('content')
    <div>
        <form method="POST" action="{{ route('post.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="Content"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input name="image" type="text" class="form-control" id="image" placeholder="Image">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
