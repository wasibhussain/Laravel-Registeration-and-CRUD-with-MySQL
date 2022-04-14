@extends('layout')

@section('content')
<div>
<ul>
    @foreach($user as $u)
      <li>
   <span>{{$u->name}}</span>  <span>{{$u->email}}</span><span>{{$u->password}}</span>
    @endforeach
    </li>
</ul>
</div>
@endsection