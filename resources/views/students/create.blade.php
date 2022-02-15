@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header bg-info">Dati studenti</div>
  <div class="card-body">
      
      <form action="{{ url('students') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="studname" id="studname" class="form-control"></br>
        <label>Course</label></br>
        <input type="text" name="course" id="course" class="form-control"></br>
        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop