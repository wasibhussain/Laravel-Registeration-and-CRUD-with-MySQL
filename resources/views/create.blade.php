@extends('layout')


@section('content')

<form action="/posts" method="POST">
@csrf
<input type="text" name="title" placeholder="Enter Title Here" >

<input type="submit" name="submit" >

</form>

@endsection