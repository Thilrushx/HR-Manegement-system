@extends('employee.layout')
@section('content')

<div class="card mt-5">
    @if (session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div>
        <a href="{{url('employee/create')}}" class="btn btn-success">CREATE</a>
    </div>
    <h2>Employee Details</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Salary</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($employees as $em)
                <tr>
                    <td>{{$em->name}}</td>
                    <td>{{$em->role}}</td>
                    <td>{{$em->salary}}</td>
                    <td>{{$em->age}}</td>
                    <td>
                        <form action="{{url('employee/delete/' . $em->id)}}" method="POST">
                            <a href="{{url('employee/' . $em->id . '/edit')}}" class="btn btn-primary">EDIT</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">There are no data.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection