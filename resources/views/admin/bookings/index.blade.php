@extends('admin.master')

@section('content')

<div style="margin-top:120px;">
<div class="page-content">

    <div class="d-flex justify-content-between mb-3">
        <h4>Booking List</h4>

        <a href="{{ route('bookings.create') }}" class="btn btn-primary">
            + New Booking
        </a>
    </div>

    <div class="card">
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Customer</th>
                        <th>Room</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Guests</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($bookings as $key => $booking)
                    <tr>
                        <td>{{ $key + 1 }}</td>

                        <td>
                            <strong>{{ $booking->customer_name }}</strong><br>
                            {{ $booking->phone }}
                        </td>

                        <td>
                            {{ $booking->room->name ?? 'N/A' }}
                        </td>

                        <td>{{ $booking->check_in }}</td>
                        <td>{{ $booking->check_out }}</td>

                        <td>
                            {{ $booking->adults }} Adults <br>
                            {{ $booking->children }} Children
                        </td>

                        <td>৳ {{ $booking->total_price }}</td>

                        <td>
                            @if($booking->booking_status == 'Pending')
                                <span class="badge bg-warning">Pending</span>
                            @elseif($booking->booking_status == 'Confirmed')
                                <span class="badge bg-success">Confirmed</span>
                            @elseif($booking->booking_status == 'Cancelled')
                                <span class="badge bg-danger">Cancelled</span>
                            @else
                                <span class="badge bg-info">{{ $booking->booking_status }}</span>
                            @endif
                        </td>

                        <td>
                            <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-sm btn-info">Edit</a>

                            <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

</div>
</div>

@endsection