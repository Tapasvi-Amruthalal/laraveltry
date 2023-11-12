<h1>User login</h1>
<form action="/user" method="POST">
    @csrf
    <label for="user">Name:  </label>
    <input type="text" name="user" placeholder="Enter your user name"><br>
    <label for="password">Password:  </label>
    <input type="text" name="password" placeholder="Enter your password">
    <br><br>
    <button type="submit">Login</button>
</form>
