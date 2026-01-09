@extends('website-layout.layouts.app')

@section('title', 'My Website')

@section('content')

<h1>About Page</h1>

<h3>Skills</h3>
<ul>
@foreach ($skills as $skill)
    <li>{{ $skill }}</li>
@endforeach
</ul>

<h3>Hobbies</h3>
<ul>
@foreach ($hobbies as $hobby)
    <li>{{ $hobby }}</li>
@endforeach
</ul>

@endsection
