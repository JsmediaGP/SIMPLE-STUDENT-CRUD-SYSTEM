@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Firstname</label></br>
        <input type="text" name="Firstname" id="Firstname" value="{{$students->Firstname}}" class="form-control"></br>
        <label>Lastname</label></br>
        <input type="text" name="Lastname" id="Lastname" value="{{$students->Lastname}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="Address" id="Address" value="{{$students->Address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="Mobile" id="Mobile" value="{{$students->Mobile}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="Email" id="Email" value="{{$students->Email}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop