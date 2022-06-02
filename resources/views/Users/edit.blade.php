@extends('Users.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('Users /' .$users->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$users->name}}" class="form-control"></br>
        <label>phone</label></br>
        <input type="text" name="phone" id="phone" value="{{$users->phone}}" class="form-control"></br>
        <label>email</label></br>
        <input type="email" name="email" id="email" value="{{$users->email}}" class="form-control"></br>
        <label>password</label></br>
        <input type="password" name="passsword" id="password" value="{{$users->password}}" class="form-control"></br>
        <label>scooter</label></br>
        <input type="scooter" name="scooter" id="scooter" value="{{$users->scooter}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop