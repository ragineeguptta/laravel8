<h1>User List</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Profil Photo</td>
    </tr>
    @foreach ($collection as $item)  
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['first_name']}}</td>
        <td>{{$item['email']}}</td>
        <td><img src="{{$item['avatar']}}" alt=""/></td>
    </tr>
    @endforeach
</table>