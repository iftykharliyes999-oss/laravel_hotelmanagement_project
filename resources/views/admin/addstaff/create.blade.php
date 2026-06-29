@extends('admin.master')

@section('content')
<div style="margin-top:120px;">
<div class="page-content">

<form action="{{ route('staff.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Breadcrumb -->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Hotel</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item">
                        <a href="#"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Add Staff</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Card -->
    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">Add New Staff</h5>
            <hr/>

            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="row">

                <!-- Left Side -->
                <div class="col-lg-8">
                    <div class="border border-3 p-4 rounded">

                        <div class="mb-3">
                            <label class="form-label">Staff Name</label>
                            <input type="text" name="name" class="form-control"
                                   value="{{ old('name') }}"
                                   placeholder="Enter staff name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"
                                   value="{{ old('email') }}"
                                   placeholder="example@gmail.com">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control"
                                   value="{{ old('phone') }}"
                                   placeholder="01XXXXXXXXX">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <textarea name="address" rows="3" class="form-control"
                                      placeholder="Enter address">{{ old('address') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gender</label><br>

                            <input type="radio" name="gender" value="Male"
                            {{ old('gender')=='Male'?'checked':'' }}> Male

                            &nbsp;&nbsp;

                            <input type="radio" name="gender" value="Female"
                            {{ old('gender')=='Female'?'checked':'' }}> Female

                            &nbsp;&nbsp;

                            <input type="radio" name="gender" value="Other"
                            {{ old('gender')=='Other'?'checked':'' }}> Other
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Photo</label>
                            <input type="file" name="photo" class="form-control">
                        </div>

                    </div>
                </div>

                <!-- Right Side -->
                <div class="col-lg-4">
                    <div class="border border-3 p-4 rounded">

                        <div class="row g-3">

                            <!-- Staff Role -->
                            <div class="col-12">
                                <label class="form-label">Role</label>
                                <select name="role" class="form-select">
                                    <option value="">Select Role</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Receptionist">Receptionist</option>
                                    <option value="Housekeeping">Housekeeping</option>
                                    <option value="Chef">Chef</option>
                                    <option value="Waiter">Waiter</option>
                                    <option value="Security">Security</option>
                                    <option value="Cleaner">Cleaner</option>
                                    <option value="Accountant">Accountant</option>
                                </select>
                            </div>

                            <!-- Department -->
                            <div class="col-12">
                                <label class="form-label">Department</label>
                                <select name="department" class="form-select">
                                    <option value="">Select Department</option>
                                    <option>Front Office</option>
                                    <option>Housekeeping</option>
                                    <option>Kitchen</option>
                                    <option>Restaurant</option>
                                    <option>Accounts</option>
                                    <option>Security</option>
                                </select>
                            </div>

                            <!-- Salary -->
                            <div class="col-12">
                                <label class="form-label">Salary</label>
                                <input type="number" name="salary"
                                       class="form-control"
                                       placeholder="25000">
                            </div>

                            <!-- Joining Date -->
                            <div class="col-12">
                                <label class="form-label">Joining Date</label>
                                <input type="date" name="joining_date"
                                       class="form-control">
                            </div>

                            <!-- Password -->
                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="password" name="password"
                                       class="form-control"
                                       placeholder="********">
                            </div>

                            <!-- Status -->
                            <div class="col-12">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <div class="d-grid mt-2">
                                    <button type="submit" class="btn btn-primary">
                                        Save Staff
                                    </button>
                                </div>
                            </div>

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
