<h1>Add Member</h1>
@if (session('member'))
<h4>{{session('member')}} has been added</h4>
@endif
<form action="addMember" method="POST">
@csrf
<input type="text" name="member" id="" placeholder="Enter member name"> <br><br><br>
<input type="email" name="email" id="" placeholder="Enter email"> <br><br><br>
<input type="password" name="password" id="" placeholder="Enter member password"> <br><br><br>

<button type="submit">Add Member</button>

</form>

