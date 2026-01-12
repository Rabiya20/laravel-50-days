@extends('project-one.layout')

@section('title', 'Edit Contact')

@section('content')

<h2 class="text-center">Edit Contact</h2>

<div class="text-center">
<a href="{{ route('project.contacts') }}" class="btn btn-secondary">View Saved Contacts</a>
</div>
<br><br>

<form method="POST" action="{{ route('project.update', $id) }}" class="form-control w-50 mx-auto">
    @csrf
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" value="{{ $contacts[$id]['name'] }}" class="form-control">
        @error('name') <span style="color:red">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" value="{{ $contacts[$id]['email'] }}" class="form-control">
        @error('email') <span style="color:red">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Phone</label>
        <input type="phone" name="phone" value="{{ $contacts[$id]['phone'] }}" class="form-control">
        @error('phone') <span style="color:red">{{ $message }}</span> @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update Contact</button>
</form>
@endsection