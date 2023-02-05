<h1>Add Members</h1>
<form action="addMember" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name" id=""> <br><br>
    <input type="email" name="email" placeholder="email" id=""> <br><br>
    <button type="submit">Add Member</button>

</form>
