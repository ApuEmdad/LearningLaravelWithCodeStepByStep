<h1>Upload File</h1>
<form action="upload" method="POST">
    @csrf
    <input type="file" name="file" id="" enctype="multipart/form-data"><br><br>
    <button type="submit">upload File</button>

</form>
