@extends('layouts.client')

@section('title')
    Result
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/client/css/studenttest.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center pt-4 pb-2 mb-3">
            </h1>
        </div>

        <div class="col-md-12">
            <h2 class="text-center pt-4 pb-2 mb-3">Your point: <span class="text-danger">{{ $testUser->result }}</span>
                /
                10
            </h2>
        </div>

        <div class="col-md-12">
            <div class="text-center">
                <a href="{{ route('home') }}" class="btn btn-primary">Back to home page</a>
            </div>
        </div>
    </div>
@endsection

@push('script')
@endpush
