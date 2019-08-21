@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register Doctor</div>
                <div class="card-body">
                    <form action="{{url('update-doctor')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$doctor->id}}">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" value="{{$doctor->user->name}}" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="{{$doctor->user->email}}" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password"  required>
                        </div>
                        <div class="form-group">
                            <label for="">Department</label>
                            <input type="text" class="form-control" value="{{$doctor->department}}" name="department" required>
                        </div>
                        <div class="form-group">
                            <label for="">Degree</label>
                            <input type="text" class="form-control" name="degree" value="{{$doctor->degree}}" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info">Update</button>
                        </div>
                        
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection