@extends('admin.master')


@section('content')
<div style="margin-top:200px;">

<div class="container-fluid mt-4">

    <!-- Success Alert Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0" role="alert" style="background-color: rgba(40, 167, 69, 0.2); color: #fff;">
            {{ session('success') }}
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        <!-- Guest Registration Form -->
        <div class="col-md-4 mb-4">
            <div class="card text-white border-0 shadow" style="background: rgba(255, 255, 255, 0.06); backdrop-filter: blur(20px);">
                <div class="card-header bg-transparent border-light">
                    <h5 class="card-title mb-0"><i class="bx bx-user-plus"></i> Add New Guest</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.guests.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control bg-transparent text-white border-light" required placeholder="Enter guest name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control bg-transparent text-white border-light" required placeholder="Enter phone number">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control bg-transparent text-white border-light" placeholder="Optional">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NID / Passport</label>
                            <input type="text" name="nid_passport" class="form-control bg-transparent text-white border-light" placeholder="Optional">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Special Requests</label>
                            <textarea name="special_requests" class="form-control bg-transparent text-white border-light" rows="3" placeholder="e.g. Extra blanket, late checkout (Optional)"></textarea>
                        </div>
                        <button type="submit" class="btn btn-light w-100 fw-bold">Save Guest Info</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Guest List Directory Table -->
        <div class="col-md-8">
            <div class="card text-white border-0 shadow" style="background: rgba(255, 255, 255, 0.06); backdrop-filter: blur(20px);">
                <div class="card-header bg-transparent border-light">
                    <h5 class="card-title mb-0"><i class="bx bx-group"></i> Guest Directory</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle text-white mb-0">
                            <thead>
                                <tr class="text-muted" style="border-bottom: 1px solid rgba(255,255,255,0.1);">
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>NID/Passport</th>
                                    <th>Special Request</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($guests as $guest)
                                <tr style="border-bottom: 1px solid rgba(255,255,255,0.05);">
                                    <td><strong>{{ $guest->name }}</strong></td>
                                    <td>
                                        <div>{{ $guest->phone }}</div>
                                        <small class="text-muted">{{ $guest->email ?? 'No Email' }}</small>
                                    </td>
                                    <td>{{ $guest->nid_passport ?? 'N/A' }}</td>
                                    <td><small class="text-wrap">{{ $guest->special_requests ?? 'None' }}</small></td>
                                    <td><span class="badge bg-success px-2 py-1">Active</span></td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4">No guest logs found. Entry your first guest data!</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
