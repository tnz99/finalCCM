@extends('layouts.master')

@section('title')
    Edit-Registered | Funds of web IT
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Role for Registered User</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="/role-register-update/{{ $alladmin->id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" name="username" value="{{ $alladmin->name }}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Give Role</label>
                                    <select name="usertype" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value=" ">User</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/admin-register" class="btn btn-danger">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
