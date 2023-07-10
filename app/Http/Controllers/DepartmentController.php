<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $search = $request->input('search');
    $departments = Department::query()
        ->where('name', 'LIKE', "%$search%")
        ->get();

    return view('adminDashboard.department.departmentTable', compact('departments'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminDashboard.department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validate the form data
         $validatedData = $request->validate([
            'name' => 'required|string',

        ]);

        // Create a new user instance
        $department = new Department();
        $department->name = $request->name;


        // Save the user data
        $department->save();

        // Redirect or do something else after saving the user

        // Return a response or redirect back to the form
        return redirect()->route('departmentTable.index')->with('success', 'department created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $departments = Department::findOrFail($id);
        $departments->delete();

        return redirect()->back()->with('success', 'The employee deleted successfully.');
    }
}
