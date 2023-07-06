@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Firstname</label></br>
        <input type="text" name="Firstname" id="Firstname" class="form-control"></br>
        <label>Lastname</label></br>
        <input type="text" name="Lastname" id="Lastname" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="Address" id="Address" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="Mobile" id="Mobile" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="Email" id="name" class="form-control"></br>
       
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop