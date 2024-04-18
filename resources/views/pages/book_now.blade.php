@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Book Now: ') }}</b> {{ $hostel->name }} </div>

                <div class="card-body bg-light">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('components.booking-form', ['hostel' => $hostel])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
