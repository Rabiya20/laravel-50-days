<h1>Welcome to My Profile Page</h1>
<ul>
    <li>Name: Rabia</li>
    <li>Email: rabiamushtaqmithani@gmail.com</li>
    <li>Phone: 03001234567</li>
    <li>Address: Karachi, Pakistan</li>
</ul>

<form action="/allowed" method="post">
    @csrf
    <h2>Allowed - created allowed route (it can be used as post, put, delete, patch, etc.)</h2>
    <input type="text" name="name" placeholder="Enter your name" required>
    <button type="submit">Submit</button>
</form>

