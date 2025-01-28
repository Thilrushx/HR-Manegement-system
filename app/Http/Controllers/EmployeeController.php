<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    public function create(){
        return view('employee.create');
    }

    // this is for store employee details
    //create is pre-build function
    public function store(StoreEmployeeRequest $request){
        Employee::create($request->validated());
        return redirect('employee')->with('success', 'Employee created successfully');
    }

    // this is for get all the employee details
    public function all(){
        return Employee::all();
    }

    // this is for get one employee data
    public function get($id){
        return Employee::findOrFail($id);
    }

    public function edit($id){
        $employee = Employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, $id){
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        return redirect('employee')->with('success', 'Employee updated');
    }

    public function delete($id){
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect('employee')->with('success', 'Employee deleted success');
    }
}
