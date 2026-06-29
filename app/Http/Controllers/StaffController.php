<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = Staff::latest()->get();

    return view('admin.addstaff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('admin.addstaff.create');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:staffs,email',
        'phone' => 'required',
        'role' => 'required',
        'gender' => 'required',
    ]);

    $staff = new Staff();

    $staff->name = $request->name;
    $staff->email = $request->email;
    $staff->phone = $request->phone;
    $staff->address = $request->address;
    $staff->gender = $request->gender;
    $staff->role = $request->role;
    $staff->department = $request->department;
    $staff->salary = $request->salary;
    $staff->joining_date = $request->joining_date;
    $staff->status = $request->status;

    $staff->password = Hash::make($request->password);

    // image upload
    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $filename = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads/staff'), $filename);
        $staff->photo = 'uploads/staff/'.$filename;
    }

    $staff->save();

    return redirect()->route('staff.index')
        ->with('success', 'Staff added successfully');


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
    public function edit($id)
{
    $staff = Staff::findOrFail($id);

    return view('admin.addstaff.edit', compact('staff'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $staff = Staff::findOrFail($id);

    $staff->name = $request->name;
    $staff->email = $request->email;
    $staff->phone = $request->phone;
    $staff->address = $request->address;
    $staff->gender = $request->gender;
    $staff->role = $request->role;
    $staff->department = $request->department;
    $staff->salary = $request->salary;
    $staff->status = $request->status;

    if ($request->hasFile('photo')) {
        $file = $request->file('photo');
        $filename = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('uploads/staff'), $filename);
        $staff->photo = 'uploads/staff/'.$filename;
    }

    $staff->save();

    return redirect()->route('staff.index')
        ->with('success', 'Staff updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
