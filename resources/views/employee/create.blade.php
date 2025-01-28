@extends('employee.layout')

@section('content')
<div class="card mt-5">
    <h2 class="card-header">Add New Employee</h2>
    <div class="card-body">
        <form action="{{url('employee/store')}}" method="post">
            @csrf

            <div>
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
            </div>

            <div>
                <label for="role" class="form-label">Role</label>
                <input type="text" name="role" class="form-control" id="role" placeholder="Enter your role">
            </div>

            <div>
                <label for="salary" class="form-label">Salary</label>
                <input type="number" name="salary" class="form-control" id="salary" placeholder="Enter your salary">
            </div>

            <div>
                <label for="age" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" id="age" placeholder="Enter your age">
            </div>

            <button type="submit" class="mt-2 btn btn-success">Store</button>
        </form>
    </div>
</div>
@endsection