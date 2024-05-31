@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome to Your Dashboard') }}</div>

                <div class="card-body">
                    <h2>Welcome back, {{ Auth::user()->name }}!</h2>
                    <p>You have successfully logged in.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
