<h1>
    Members
</h1>
<table border="2">
    <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($members as $member)
            <tr>
                <td>{{ $member->id }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->email }}</td>
                <td>
                    <a href={{ 'delete/' . $member->id }}>delete</a>
                    <a href={{ 'edit/' . $member->id }}>edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<style>
    .w-5 {
        display: none
    }

    table td {
        padding: 5px
    }
</style>
