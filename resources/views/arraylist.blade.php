@extends('layout')


@section('content')

@if(count($people))

<ul>
    @foreach ($people as $person)
    <li>{{$person}}</li>
        
    @endforeach
</ul>
@endif
@endsection