@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">{{ __('Bookings') }}</div>

                <div class="card-body bg-light">
                    @include('components.booking-list', ['bookings' => $bookings])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
