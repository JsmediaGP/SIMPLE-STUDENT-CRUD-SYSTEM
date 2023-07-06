@extends('students.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Firstname : {{ $students->Firstname }}</h5>
        <p class="card-text">Lastname : {{ $students->Lastname }}</p>
        <p class="card-text">Address : {{ $students->Address }}</p>
        <p class="card-text">Mobile : {{ $students->Mobile }}</p>
        <p class="card-text">Email : {{ $students->Email }}</p>
  </div>
       
    </hr>
    <a href="{{ url('/student') }}" class="btn btn-success btn-sm" title="Add New Student">
    <i class="fa fa-plus" aria-hidden="true"></i> Home
                        </a>
  
  </div>
</div>