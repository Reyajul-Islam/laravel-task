@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>{{ __('Create Hostel') }}</b></div>

                <div class="card-body bg-light">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @include('components.hostel-create-form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
