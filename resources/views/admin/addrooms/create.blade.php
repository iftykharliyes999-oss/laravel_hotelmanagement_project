@extends('admin.master')

@section('content')
<div class="page-content">

<form action="{{ route('room.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- breadcrumb -->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Hotel</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active">Add New Room</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- CARD -->
    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">Add New Room</h5>
            <hr/>

            <div class="row">

                <!-- LEFT SIDE -->
                <div class="col-lg-8">
                    <div class="border border-3 p-4 rounded">

                        <!-- ROOM NAME -->
                        <div class="mb-3">
                            <label class="form-label">Room Title</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter room name">
                        </div>

                        <!-- DESCRIPTION -->
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="4" placeholder="Room details..."></textarea>
                        </div>

                        <!-- IMAGE -->
                        <div class="mb-3">
                            <label class="form-label">Room Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                    </div>
                </div>

                <!-- RIGHT SIDE -->
                <div class="col-lg-4">
                    <div class="border border-3 p-4 rounded">

                        <div class="row g-3">

                            <!-- PRICE -->
                            <div class="col-12">
                                <label class="form-label">Price per Night</label>
                                <input type="text" name="price" class="form-control" placeholder="৳ 2000">
                            </div>

                            <!-- ROOM TYPE -->
                            <div class="col-12">
                                <label class="form-label">Room Type</label>
                                <select name="type" class="form-select">
                                    <option value="">Select Type</option>
                                    <option value="single">Single</option>
                                    <option value="double">Double</option>
                                    <option value="deluxe">Deluxe</option>
                                    <option value="suite">Suite</option>
                                </select>
                            </div>

                            <!-- CAPACITY -->
                            <div class="col-12">
                                <label class="form-label">Guests Capacity</label>
                                <input type="number" name="capacity" class="form-control" placeholder="2">
                            </div>

                            <!-- STATUS -->
                            <div class="col-12">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option value="available">Available</option>
                                    <option value="unavailable">Unavailable</option>
                                </select>
                            </div>

                            <!-- BUTTON -->
                            <div class="col-12">
                                <div class="d-grid mt-2">
                                    <button type="submit" class="btn btn-primary">
                                        Save Room
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
@endsection
