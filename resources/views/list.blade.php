<h1>Member List</h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
    </tr>
    @foreach ($members as $member)
    <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['name']}}</td>
        <td>{{$member['email']}}</td>
        <td>{{$member['address']}}</td>
    </tr>
        
    @endforeach
</table>