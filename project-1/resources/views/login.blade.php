<h4>
    Login</h4>
<form action="login" method="POST">
    @csrf

    <input type="text" name="name" id="" placeholder="name">
    <span>
        @error('name')
            {{ $message }}
        @enderror
    </span>
    <input type="password" name="password" id="" placeholder="password">
    <span>
        @error('password')
            {{ $message }}
        @enderror
    </span>
    <button type="submit">Login</button>


</form>
<style>
    input {
        display: block;
        /* margin: 20px 0px; */
        margin-top: 10px;
        padding: 10px;
    }

    button {
        display: block;
        margin-top: 10px;
        padding: 10px;
    }

    span {
        color: red
    }
</style>
