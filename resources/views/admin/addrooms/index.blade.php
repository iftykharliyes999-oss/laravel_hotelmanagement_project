@extends('admin.master')

@section('content')
<div style="margin-top:120px;">
<div class="page-content">

    <div class="d-flex justify-content-between mb-3">
        <h4>Room List</h4>

        <a href="{{ route('room.create') }}" class="btn btn-primary">
            + Add Room
        </a>
    </div>

    <div class="card">
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Room Name</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Capacity</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($rooms as $key => $room)
                    <tr>
                        <td>{{ $key + 1 }}</td>

                        <td>
                            <img src="{{ asset($room->image) }}" width="70" height="50">
                        </td>

                        <td>{{ $room->name }}</td>

                        <td>{{ $room->type }}</td>

                        <td>৳ {{ $room->price }}</td>

                        <td>{{ $room->capacity }} person</td>

                        <td>
                            @if($room->status == 'available')
                                <span class="badge bg-success">Available</span>
                            @else
                                <span class="badge bg-danger">Unavailable</span>
                            @endif
                        </td>

                        <td>
                            <a href="{{ route('room.edit', $room->id) }}" class="btn btn-sm btn-info">Edit</a>

                            <form action="{{ route('room.destroy', $room->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
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
