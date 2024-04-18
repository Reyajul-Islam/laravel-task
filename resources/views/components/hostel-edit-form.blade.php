<form action="{{ route('updateHostel', $hostel->id) }}" method="post">
    @csrf

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {!! session('error') !!}
        </div>
    @endif

    <input type="hidden" name="hostel_id" value="{{ $hostel->id }}">
    <div class="form-group mt-2">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" value="{{ $hostel->name }}" id="name"/>
    </div>
    <div class="form-group">
        <label for="location" class="form-label">Location</label>
        <input type="text" name="location" class="form-control" value="{{ $hostel->location }}" id="location"/>
    </div>
    <div class="form-group">
        <label for="total_room" class="form-label">Total Room</label>
        <input type="number" name="total_room" class="form-control" value="{{ $hostel->total_room }}" id="total_room"/>
    </div>
    <div class="form-group">
        <label for="available_rooms" class="form-label">Available Room</label>
        <input type="number" name="available_rooms" class="form-control" value="{{ $hostel->available_rooms }}" id="available_rooms"/>
    </div>

    <button class="btn btn-primary mt-2" type="submit">Save</button>
</form>