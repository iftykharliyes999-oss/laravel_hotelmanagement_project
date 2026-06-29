@extends('admin.master')

@section('content')

<div style="margin-top:120px;">
<div class="page-content">

<form action="{{ route('staff.update', $staff->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <!-- Breadcrumb -->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Hotel</div>

        <div class="ps-3">
            <nav>
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active">Edit Staff</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- CARD -->
    <div class="card">
        <div class="card-body p-4">

            <h5 class="card-title">Edit Staff Information</h5>
            <hr/>

            <div class="row">

                <!-- LEFT SIDE -->
                <div class="col-lg-8">
                    <div class="border border-3 p-4 rounded">

                        <div class="mb-3">
                            <label class="form-label">Staff Name</label>
                            <input type="text" name="name" value="{{ $staff->name }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="{{ $staff->email }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" value="{{ $staff->phone }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <textarea name="address" class="form-control" rows="3">{{ $staff->address }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gender</label><br>

                            <input type="radio" name="gender" value="Male"
                            {{ $staff->gender == 'Male' ? 'checked' : '' }}> Male

                            <input type="radio" name="gender" value="Female"
                            {{ $staff->gender == 'Female' ? 'checked' : '' }}> Female

                            <input type="radio" name="gender" value="Other"
                            {{ $staff->gender == 'Other' ? 'checked' : '' }}> Other
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Photo</label><br>

                            @if($staff->photo)
                                <img src="{{ asset($staff->photo) }}" width="80" height="80" style="border-radius:50%;">
                            @endif

                            <input type="file" name="photo" class="form-control mt-2">
                        </div>

                    </div>
                </div>

                <!-- RIGHT SIDE -->
                <div class="col-lg-4">
                    <div class="border border-3 p-4 rounded">

                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <select name="role" class="form-select">
                                <option value="Manager" {{ $staff->role=='Manager'?'selected':'' }}>Manager</option>
                                <option value="Receptionist" {{ $staff->role=='Receptionist'?'selected':'' }}>Receptionist</option>
                                <option value="Housekeeping" {{ $staff->role=='Housekeeping'?'selected':'' }}>Housekeeping</option>
                                <option value="Chef" {{ $staff->role=='Chef'?'selected':'' }}>Chef</option>
                                <option value="Waiter" {{ $staff->role=='Waiter'?'selected':'' }}>Waiter</option>
                                <option value="Security" {{ $staff->role=='Security'?'selected':'' }}>Security</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Department</label>
                            <input type="text" name="department" value="{{ $staff->department }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Salary</label>
                            <input type="number" name="salary" value="{{ $staff->salary }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select">
                                <option value="Active" {{ $staff->status=='Active'?'selected':'' }}>Active</option>
                                <option value="Inactive" {{ $staff->status=='Inactive'?'selected':'' }}>Inactive</option>
                            </select>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Update Staff
                            </button>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

</form>

</div>
</div>

@endsection
