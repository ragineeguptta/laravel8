<h1>Add new mwmber</h1>
@if (session('user'))
    <h3>data saved for {{session('user')}}</h3>
@endif
<form action="storecontroller" method="post">
    @csrf
    <input type="text" name="user" placeholder="Enter User Name"><br><br>
    <input type="password" name="password" placeholder="Enter your password"><br><br>
    <input type="email" name="email" placeholder="enter your email"><br><br>
    <button type="submit">Add User</button>
</form>