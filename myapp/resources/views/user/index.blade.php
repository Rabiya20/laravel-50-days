<h1>Please write your name here</h1>

<form method="post" action="/user_name">
    @csrf
    <input type="text" name="name" placeholder="Enter your name" />
    <span style="color: red;">@error('name'){{ $message }}@enderror</span>
    <br>
    <br>
    <button type="submit">Enter</button>
</form>

