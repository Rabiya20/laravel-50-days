<h1>Welcome to Laravel Home Page</h1>

<h2>Save Data - created post route</h2>
<form action="/save_data" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter your name">
    <button type="submit">Save Data</button>
</form>

<h2>Any HTTP method accepted - created any_data route (it can be used as get, post, put, delete, patch, etc.)</h2>
<form action="/any_data" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter your name">
    <button type="submit">Save Data</button>
</form>

<br>
<br>
<h2>Named Routes</h2>
<a href="{{ route('dashboard') }}">Go to Dashboard</a>
<br>
<br>
<a href="{{ route('students.list') }}">Go to Students List</a>
<br>
<br>
<a href="{{ route('students.add') }}">Go to Students Add</a>
<br>
<br>
