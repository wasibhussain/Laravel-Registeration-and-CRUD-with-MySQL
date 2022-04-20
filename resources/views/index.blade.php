@extends('layout')


@section('content')
    <h2>Create New Post</h2>
    <form action="/posts" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Enter Post Title Here">

        <input type="submit" name="submit" value="Create">

    </form>
    <br>
    <br>
    <h2>ALL POSTS</h2>
    <ul>
        @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', $post->id) }}">
                    {{ $post->title }}
                </a>

                <form action="/posts/{{ $post->id }}/edit" method="GET">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <input type="submit" name="submit" value="Edit">

                </form>
                <form action="/posts/{{ $post->id }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="DELETE">

                </form>
            </li>
            <br>
        @endforeach
    </ul>
@endsection
