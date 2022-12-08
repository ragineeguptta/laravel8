<h1>Welcome to the website</h1>

<h1>User Login</h1>

{{-- {{$errors}} --}}
{{-- @if ($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif --}}
<form action="users" method="POST">
  @csrf
  <input type="text" name="username" placeholder="enter user id" />
  <span style="color: red; font-size:9px">@error('username'){{$message}}@enderror</span>
  <br><br>
  <input type="password" name="password" placeholder="enter user password">
  <span style="color: red; font-size:9px">@error('password'){{$message}}@enderror</span>
  <br><br>
  <button type="submit">Login</button>
</form>






{{-- <x-header componentName="Users" />

<h1>User Page</h1>
<h2>{{10+32}}</h2>
@include('inner')
@csrf --}}

{{-- @if ($name=="Raginee")
   
  <h3>Hello {{$name}}</h3> 
@else
  <h3>Hello </h3>
@endif --}}
{{-- 
@for ($i = 0; $i < 10; $i++)
    <h4>{{$i}}</h4>
@endfor

@foreach ($users as $user)
    <h5>{{$user}}</h5>
@endforeach --}}

{{-- <script>
    var data = @json($users);
    console.warn(data);
</script> --}}