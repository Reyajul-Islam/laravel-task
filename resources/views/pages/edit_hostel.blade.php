@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Manage Hostel: ') }}</b> {{ $hostel->name }} </div>

                <div class="card-body bg-light">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @include('components.hostel-edit-form', ['hostel' => $hostel])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
