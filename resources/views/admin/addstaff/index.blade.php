@extends('admin.master')

@section('content')

<div style="margin-top:120px;">
<div class="page-content">

    <!-- Breadcrumb -->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Hotel</div>

        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item">
                        <a href="#"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active">
                        Staff List
                    </li>
                </ol>
            </nav>
        </div>

        <div class="ms-auto">
            <a href="{{ route('staff.create') }}" class="btn btn-primary">
                <i class="bx bx-plus"></i> Add Staff
            </a>
        </div>

    </div>

    <!-- Card -->
    <div class="card">

        <div class="card-body">

            <h5 class="card-title">All Staff Information</h5>
            <hr>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Department</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Salary</th>
                            <th>Status</th>
                            <th width="170">Action</th>
                        </tr>

                    </thead>

                    <tbody>

                        @forelse($staffs as $key => $staff)

                        <tr>

                            <td>{{ $key+1 }}</td>

                            <td>
                                @if($staff->photo)
                                    <img src="{{ asset($staff->photo) }}"
                                         width="60"
                                         height="60"
                                         style="object-fit:cover;border-radius:50%;">
                                @else
                                    <img src="{{ asset('upload/no_image.jpg') }}"
                                         width="60"
                                         height="60"
                                         style="border-radius:50%;">
                                @endif
                            </td>

                            <td>{{ $staff->name }}</td>

                            <td>
                                <span class="badge bg-primary">
                                    {{ $staff->role }}
                                </span>
                            </td>

                            <td>{{ $staff->department }}</td>

                            <td>{{ $staff->phone }}</td>

                            <td>{{ $staff->email }}</td>

                            <td>{{ $staff->gender }}</td>

                            <td>৳ {{ number_format($staff->salary) }}</td>

                            <td>

                                @if($staff->status=='Active')

                                    <span class="badge bg-success">
                                        Active
                                    </span>

                                @else

                                    <span class="badge bg-danger">
                                        Inactive
                                    </span>

                                @endif

                            </td>

                            <td>

                                <a href="{{ route('staff.edit',$staff->id) }}"
                                   class="btn btn-info btn-sm">
                                    <i class="bx bx-edit"></i>
                                </a>

                                <form action="{{ route('staff.destroy',$staff->id) }}"
                                      method="POST"
                                      style="display:inline-block">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete this staff?')">

                                        <i class="bx bx-trash"></i>

                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="11" class="text-center text-danger">
                                No Staff Found
                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>
</div>

@endsection
