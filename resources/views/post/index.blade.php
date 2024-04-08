@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="posts">
            @foreach($posts as $post)
                <div class="post">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
