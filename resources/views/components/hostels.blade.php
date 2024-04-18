@foreach($hostels as $hostel)
<div class="card mb-2">
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <h4>{{ $hostel->name }}</h4>
                {{ $hostel->location }}
            </div>
            <div class="col-md-4 text-right">
                <h5>Available room: {{ $hostel->available_rooms }}</h5>
                @if(auth()->user()->username)
                    <a href="{{ route('bookNow', $hostel->id) }}" class="btn btn-primary btn-sm">Book Now</a>
                @elseif(auth()->user()->email)
                    <a href="{{ route('manageHostel', $hostel->id) }}" class="btn btn-primary btn-sm">Manage Hotel</a>
                @endif
            </div>
        </div>
    </div>
</div>
@endforeach