@extends('layouts.master')

@section('title')
    Registered Users | Funds of web IT
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Registered User</h4>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card custom-orange-btn">
            <div class="card-header text-center">
                <h3 class="card-title">Admin</h3>
            </div>
            <div class="card-body text-center">
                <a href="/admin-register">
                <p>Total Admin Users: {{ $adminCount }}</p>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card custom-orange-btn">
            <div class="card-header text-center">
                <h3 class="card-title">Users</h3>
            </div>
            <div class="card-body text-center">
                <a href="/role-register">
                <p>Total Registered Users: {{ $userCount }}</p>
                </a>
            </div>
        </div>
    </div>
</div>
<style>
    .custom-orange-btn {
        color: #fff;
        background-color: #f96332;
        border-color: #f96332;
    }

    .custom-orange-btn:hover {
        background-color: #173457;
        border-color: #173457;
    }
</style>
@endsection

@section('scripts')
@endsection
