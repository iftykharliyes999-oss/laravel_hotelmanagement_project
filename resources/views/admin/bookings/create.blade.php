@extends('admin.master')

@section('content')

<div style="margin-top:120px;">
<div class="page-content">

    <div class="d-flex justify-content-between mb-3">
        <h4>New Booking</h4>

        <a href="{{ route('bookings.index') }}" class="btn btn-secondary">
            Back
        </a>
    </div>

    <div class="card">
        <div class="card-body">

            <form action="{{ route('bookings.store') }}" method="POST">
                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label>Customer Name</label>
                        <input type="text" name="customer_name" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Room</label>
                        <select name="room_id" class="form-control">
                            @foreach($rooms as $room)
                                <option value="{{ $room->id }}">
                                    {{ $room->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Check In</label>
                        <input type="date" name="check_in" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Check Out</label>
                        <input type="date" name="check_out" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Adults</label>
                        <input type="number" name="adults" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Children</label>
                        <input type="number" name="children" class="form-control" value="0">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Total Price</label>
                        <input type="number" name="total_price" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Payment Status</label>
                        <select name="payment_status" class="form-control">
                            <option>Paid</option>
                            <option>Partial</option>
                            <option selected>Unpaid</option>
                        </select>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label>Special Request</label>
                        <textarea name="special_request" class="form-control"></textarea>
                    </div>

                    <div class="col-md-12">
                        <button class="btn btn-primary">
                            Save Booking
                        </button>
                    </div>

                </div>

            </form>

        </div>
    </div>

</div>
</div>

@endsection