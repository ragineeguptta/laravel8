<h1>CRUD OPERATION</h1>
<form action="usersform" method="POST">
    @csrf
    {{method_field('DELETE')}}
    <input type="text" name="username" placeholder="enter user id" />
    <br><br>
    <input type="password" name="password" placeholder="enter user password">
    <br><br>
    <button type="submit">Login</button>
  </form>