@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    {{ __('Hostels') }}
                    @if(Auth::user()->email)
                        <a href="{{ route('createHostel') }}" class="btn btn-success btn-sm float-right">Create Hostel</a>
                    @endif
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('components.hostels', ['hostels' => $hostels])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
