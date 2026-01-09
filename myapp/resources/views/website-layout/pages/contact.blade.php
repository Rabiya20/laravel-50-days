@extends('website-layout.layouts.app')

@section('title', 'Contact Us')

@section('content')
<h1>Contact Page</h1>

<form method="POST" action="/contact-submit">
    @csrf

    <label>Name</label><br>
    <input type="text" name="name"
       value="{{ old('name') }}"
       style="border:1px solid {{ $errors->has('name') ? 'red' : '#ccc' }}; background-color: {{ $errors->has('name') ? '#ffe3e3' : '#fff' }};"
       placeholder="Enter your name">
    @error('name')
        <span style="color:red">{{ $message }}</span>
    @enderror

    <br><br>

    <label>Email</label><br>
    <input type="email" name="email" value="{{ old('email') }}">
    @error('email')
        <span style="color:red">{{ $message }}</span>
    @enderror

    <br><br>

    <label>Message</label><br>
    <textarea name="message">{{ old('message') }}</textarea>
    @error('message')
        <span style="color:red">{{ $message }}</span>
    @enderror

    <br><br>

    <button type="submit">Send</button>
</form>


@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
    
    <h3>Name: {{ session('name') }}</h3>
    <h3>Email: {{ session('email') }}</h3>
    <h3>Message: {{ session('message') }}</h3>
@endif

@endsection
