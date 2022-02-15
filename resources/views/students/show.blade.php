@extends('students.layout')
@section('content')
 
 
<div class="card" >
  <div class="card-header bg-info">Details Page</div>
     <div class="card-body text-center">
        <h5 class="card-title">Name : {{ $students->studname }}</h5>
        <p class="card-text">Course: {{ $students->course }}</p>
        <p class="card-text">Fee: {{ $students->fee}}</p>
        <p class="card-text"> School: Epicode School</p>
        <p class="card-text"> Anno: 2021-2022</p>
    </div>
       </hr>
    
  </div>