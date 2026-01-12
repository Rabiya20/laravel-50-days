@extends('project-one.layout')

@section('title', 'Saved Contacts')

@section('content')
<h2 class="text-center">Saved Contacts</h2>

<div class="text-center">
    <a href="{{ route('project.form') }}" class="btn btn-primary">Add New Contact</a>
</div>

<br>

@if(empty($contacts))
    <p class="text-center">No contacts saved yet.</p>
@else

<div class="table-responsive container">

    @if(session('success'))
        <p style="color:white" class="text-center bg-success p-3">{{ session('success') }}</p>
    @endif
    @if(session('error'))
        <p style="color:white" class="text-center bg-danger p-3">{{ session('error') }}</p>
    @endif
    
    <table class="table table-bordered w-100 mx-auto">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th colspan="2">Action</th>
        </tr>

        @foreach($contacts as $index => $contact)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $contact['name'] }}</td>
            <td>{{ $contact['email'] }}</td>
            <td>{{ $contact['phone'] ?? "N/A" }}</td>
            <td>{{ $contact['message'] ?? "N/A"}}</td>
            <td><a href="{{ route('project.delete', $index) }}" class="btn btn-danger">Delete</a></td>
            <td><a href="{{ route('project.edit', $index) }}" class="btn btn-primary">Edit</a></td>
        </tr>
        @endforeach
    </table>
    <p class="text-info">Total contacts: {{ count($contacts) }}</p>
</div>

    <div class="text-center">
    <form action="{{ route('project.clear') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Clear All Contacts</button>
    </form>
    </div>
@endif

<br>

