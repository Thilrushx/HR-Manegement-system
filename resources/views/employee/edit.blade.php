@extends('employee.layout')
@section('content')

<div class="card mt-5">
    <h2 class="card-header">Edit Employee</h2>
    <div class="card-body">
        <form action="{{url('employee/update/' . $employee->id)}}" method="POST">
            @csrf

            <div class="mt-2">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{$employee->name}}">
            </div>

            <div class="mt-2">
                <label for="role">Role</label>
                <input type="text" name="role" value="{{$employee->role}}">
            </div>

            <div class="mt-2">
                <label for="age">Age</label>
                <input type="text" name="age" value="{{$employee->age}}">
            </div>

            <div class="mt-2">
                <label for="salary">Salary</label>
                <input type="text" name="salary" value="{{$employee->salary}}">
            </div>

            <button type="submit">Update</button>
        </form>
    </div>
</div>

@endsection