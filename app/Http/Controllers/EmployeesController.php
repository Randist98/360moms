<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $search = $request->input('search');

    $query = Employee::query();

    if ($search) {
        $query->where('firstName', 'LIKE', '%' . $search . '%')
              ->orWhere('lastName', 'LIKE', '%' . $search . '%')
              ->orWhere('email', 'LIKE', '%' . $search . '%');
    }

    $employees = $query->get();
    $departments = Department::all();

    return view('adminDashboard.employee.employeeTable', compact('employees', 'departments', 'search'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        return view('adminDashboard.employee.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|email|unique:employees',
            'password' => 'required|string|min:6',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);



        // Create a new user instance
        $employee = new Employee();
        $employee->firstName = $request->firstName;
        $employee->lastName = $request->lastName;
        $employee->gender = $request->gender;
        $employee->department_id = $request->department;
        $employee->email = $request->email;
        $employee->password = bcrypt($request->password); // Hash the password for security

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $employee->image = $imageName;
        }

        // Save the user data
        $employee->save();

        // Redirect or do something else after saving the user

        // Return a response or redirect back to the form
        return redirect()->route('employeeTable.index')->with('success', 'employee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
{
    $employee = Employee::findOrFail($id);
    return view('adminDashboard.employee.profile', compact('employee'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $departments = Department::all();
        $employee = Employee::findOrFail($id);
        return view('adminDashboard.employee.update', compact('employee','departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            // 'firstName' => 'required',
            // 'lastName' => 'required',
            // 'gender' => 'required',
            // 'department_id' => 'required',
            // 'email' => 'required|email|unique:employees,email,' . $id,
            // 'password' => 'required|min:8|confirmed',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $employee = Employee::findOrFail($id);
        $employee->firstName = $request->input('firstName');
        $employee->lastName = $request->input('lastName');
        $employee->gender = $request->input('gender');
        $employee->department_id = $request->input('department_id');
        $employee->email = $request->input('email');
        $employee->password = bcrypt($request->input('password'));

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('asset\images', $imageName);
            $employee->image = $imageName;
        }

        $employee->save();

        return redirect()->route('employeeTable.index')->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->back()->with('success', 'The employee deleted successfully.');
    }
}
