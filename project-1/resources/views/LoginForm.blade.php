<h1>Login</h1>
<form action="login" method="POST">
    @csrf
    <input type="text" name='user' placeholder="user name"> <br>
    <input type="password" name='password' placeholder="password"> <br>
    <button type="submit">Login</button>
</form>
