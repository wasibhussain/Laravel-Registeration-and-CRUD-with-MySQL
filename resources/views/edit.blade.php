@extends('layout')

@section('content')
    <h2>Edit page</h2>
    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" placeholder="{{ $post->title }}">

        <input type="submit" name="Update">


    </form>

    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="DELETE">

    </form>
@endsection
