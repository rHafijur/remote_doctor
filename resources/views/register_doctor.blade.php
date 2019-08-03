@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register Doctor</div>
                <div class="card-body">
                    <form action="{{url('register_doctor')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" class="form-control" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="">Department</label>
                            <input type="text" class="form-control" name="department" required>
                        </div>
                        <div class="form-group">
                            <label for="">Degree</label>
                            <input type="text" class="form-control" name="degree" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info">Register</button>
                        </div>
                        
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection