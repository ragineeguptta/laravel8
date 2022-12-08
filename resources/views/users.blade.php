<x-header componentName="Users" />

<h1>User Page</h1>
<h2>{{10+32}}</h2>



{{-- @if ($name=="Raginee")
   
  <h3>Hello {{$name}}</h3> 
@else
  <h3>Hello </h3>
@endif --}}

@for ($i = 0; $i < 10; $i++)
    <h4>{{$i}}</h4>
@endfor

@foreach ($users as $user)
    <h5>{{$user}}</h5>
@endforeach