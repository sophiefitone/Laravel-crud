@extends('students.layout')
@section('content')

<h1 style="text-align: center;"> Laravel CRUD</h1>
    <div class="container" >
        <div class="row">
            <div class="col-lg-9 mt-3" style="margin: 10px auto 10px auto;">
                <div class="card  border-info">
                    <div class="card-header  bg-info">Studenti</div>
                    <div class="card-body">
                        <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm" title="Add New students">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nuovo Studente
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Fee</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->studname }}</td>
                                        <td>{{ $item->course }}</td>
                                        <td>{{ $item->fee }}</td>
 
                                        <td>
                                            <a href="{{ url('/students/' . $item->id) }}" ><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/students/' . $item->id . '/edit') }}" ><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/students' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection