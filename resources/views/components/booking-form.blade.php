<form action="{{ route('storeBookingInfo', $hostel->id) }}" method="post">
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
        <label for="check_in_date" class="form-label">Check in Date</label>
        <input type="date" name="check_in_date" class="form-control" value="{{ old('check_in_date') }}" min="<?= date('Y-m-d') ?>" id="check_in_date"/>
    </div>
    <div class="form-group">
        <label for="check_out_date" class="form-label">Check out Date</label>
        <input type="date" name="check_out_date" class="form-control" value="{{ old('check_out_date') }}" min="<?= date('Y-m-d') ?>" id="check_out_date"/>
    </div>
    @php
        $room_types = config('custom.room_types');
    @endphp
    <div class="form-group">
        <label for="room_type" class="form-label">Room Type</label>
        <select name="room_type" class="form-control" id="room_type">
            <option value="">Choose One</option>
            @foreach($room_types as $key => $room_type)
                <option value="{{ $key }}" {{ old('room_type') == $key ? 'selected' : '' }}>{{ $room_type }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="occupants" class="form-label">Occupants</label>
        <input type="number" name="occupants" class="form-control" value="{{ old('occupants') }}" id="occupants"/>
    </div>

    <div class="form-group">
        <label for="email" class="form-label">Email Address (Optional)</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="email"/>
    </div>

    <button class="btn btn-primary mt-2" type="submit">Book Now</button>
</form>