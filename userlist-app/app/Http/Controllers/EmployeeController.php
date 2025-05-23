<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //  // Hiển thị danh sách employees
    public function index()
    {
        $employees = Employee::orderBy('id', 'desc')->get();
        return view('employees.index', compact('employees'));
    }
    public function create()
    {
        return view('employees.form', ['employee' => new Employee()]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
             'password' => 'required|string|max:10|min:3',
        ]);

        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function edit($id)
    {
        $employee = \App\Models\Employee::findOrFail($id); // Tìm employee theo ID, 404 nếu không thấy
        return view('employees.form', ['employee' => $employee]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|max:10|min:3',
            'email' => 'required|email|unique:employees,email,' . $id,
        ]);

        $employee = Employee::findOrFail($id);
        $employee->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully!');
    }
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
