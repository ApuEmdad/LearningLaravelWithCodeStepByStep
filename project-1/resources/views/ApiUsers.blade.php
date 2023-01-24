<h4>Users from json placeholder</h4>
<table border="1">
    <thead>
        <td>Id</td>
        <td>name</td>
        <td>email</td>
        <td>phone</td>
    </thead>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user['id'] }}</td>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['email'] }}</td>
            <td>{{ $user['phone'] }}</td>
        </tr>
    @endforeach
</table>
