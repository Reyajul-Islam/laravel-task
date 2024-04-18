
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Sl</th>
        <th>Username</th>
        <th>Hostel</th>
        <th>Check in Date</th>
        <th>Check out Date</th>
        <th>Room Type</th>
        <th>Occupants</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($bookings as $key => $booking)
    <tr>
        <td>{{ ++$key }}</td>
        <td>{{ $booking->user->username }}</td>
        <td>{{ $booking->hostel->name }}</td>
        <td>{{ \App\Helpers\Helper::dateFormat($booking->check_in_date) }}</td>
        <td>{{ \App\Helpers\Helper::dateFormat($booking->check_out_date) }}</td>
        <td>{{ \App\Helpers\Helper::roomTypeByID($booking->room_type) }}</td>
        <td>{{ $booking->occupants }}</td>
        <td>{{ $booking->email }}</td>
    </tr>
    @endforeach
    </tbody>
</table>