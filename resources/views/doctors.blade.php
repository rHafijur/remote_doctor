@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Doctors</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Department</th>
                                <th>Degree</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doctors as $doctor)
                            <tr>
                                <td>{{$doctor->user->name}}</td>
                                <td>{{$doctor->user->email}}</td>
                                <td>{{$doctor->department}}</td>
                                <td>{{$doctor->degree}}</td>
                                <td>
                                    <a href="{{url('edit-doctor/'.$doctor->id)}}"> <button class="btn btn-warning">Edit</button> </a>
                                    <a href="{{url('delete-doctor/'.$doctor->id)}}"> <button class="btn btn-danger">Delete</button> </a>
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
@endsection
