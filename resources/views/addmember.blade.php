<h1>Add Member</h1>
<form action="add" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter Name"><br><br>
    <input type="text" name="email" placeholder="Enter Email"><br><br>
    <input type="text" name="address" placeholder="Enter Address"><br><br>
    <button type="submit">Add Member</button>
</form>