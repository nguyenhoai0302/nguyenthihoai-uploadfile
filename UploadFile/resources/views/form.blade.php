<form action="{{'upload'}}" method="POST" enctype="multipart/form-data">
    @csrf

    <h1>Form Upload file PHP</h1>
    <label for="image">Tên File: </label>
    <input type="file" name="image">
    <br>
    <label for="image">Upload File: </label>
    <input type="submit" value="Upload File">
    <p><b>Ghi Chú: </b>Chỉ cho phép định dạng .jpg, jpeg, .gif và kích thước tệp tin là 5MB.</p>
</form>

{{-- <form action="/post" method="POST">
    @csrf

    <p>UserName</p>
    <div >
        <input type="text" name="username" value="{{ old("username"); }}">
    </div>

    <p>Password</p>
    <div class="">
        <input type="password" name="password">
    </div>
    <br>

    <div>
        <button type="submit">Login</button>
    </div>
</form> --}}