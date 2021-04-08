@extends('layouts.app')

@section('content')


<a href="/Test/55">
Parameters properly (Part 1)
</a>

<br>

<a href="{{ route('profile', ['id' => 1, 'photos' => 'yes']) }}">
Parameters properly (Part 2) 
</a> 

<br>

<a href="{{ route('firstRoute', ['id' => '678/']) }}">
    First route
</a>

<br>
<a href="{{ route('firstRoute') }}">
    Second route
</a>

@endsection 