@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header bg-info">Dati Studente</div>
   <div class="card-body">
      <form action="{{ url('students/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="studname" id="studname" value="{{$students->studname}}" class="form-control"></br>
        <label>Course</label></br>
        <input type="text" name="course" id="course" value="{{$students->course}}" class="form-control"></br>
        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" value="{{$students->fee}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
     </form>
   </div>
</div>
 
@stop