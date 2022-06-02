@extends('Users.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">users Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $users->name }}</h5>
        <p class="card-text">phone : {{ $users->phone }}</p>
        <p class="card-text">email : {{ $users->email }}</p>
        <p class="card-text">scooter : {{ $users->scooter }}</p>
  </div>
       
    </hr>
  
  </div>
</div>