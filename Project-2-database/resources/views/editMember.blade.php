<h1>Update Member</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" placeholder="id" value="{{ $data->id }}"> <br><br>
    <input type="text" name="name" placeholder="name" value="{{ $data->name }}"> <br><br>
    <input type="email" name="email" placeholder="email" value="{{ $data->email }}"> <br><br>
    <button type="submit">Update</button>
</form>
