@extends('layouts.master')

@section('title')
    Registered Admin | Funds of web IT
@endsection

@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role='document'>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register New Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <form id="registrationForm" action="/save-adminregister" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-country" class="col-form-label">Country</label>
                        <input type="text" name="country" class="form-control" id="recipient-country" placeholder="Country">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="recipient-email">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Usertype</label>
                        <input type="text" name="usertype" class="form-control" id="recipient-name" value="admin" readonly>
                        <!-- It's set to 'admin' and readonly, but you can adjust as needed -->
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="recipient-password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="registerWithoutSubmit()">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Registered Admin
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>
                </h4>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                            <th>ID</th>
                            <th>Name</th>
                            <th>country</th>
                            <th>Email</th>
                            <th>Usertype</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach ($alladmin as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->country }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->usertype }}</td>
                                    <td>
                                        <a href="/role-edit/{{ $row->id }}" class="btn btn-success">Edit</a>
                                    </td>
                                    <td>
                                        <form action="/role-delete/{{ $row->id }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function registerWithoutSubmit() {
        if (validateForm()) {
            checkEmailExists();
        } else {
            alert('Please fill in all the required fields with valid values.');
        }
    }

    function validateForm() {
        var name = $('#recipient-name').val();
        var country = $('#recipient-country').val();
        var email = $('#recipient-email').val();
        var password = $('#recipient-password').val();

        // Regular expression to check if the name contains only letters
        var nameRegex = /^[A-Za-z\s]+$/;
        var isNameValid = nameRegex.test(name);

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var isEmailValid = emailRegex.test(email);

        var countryRegex = /^[A-Z][a-zA-Z]*$/;
        var isCountryValid = countryRegex.test(country);

        var isPasswordValid = password.length >= 8;

        return isNameValid && isEmailValid && isCountryValid && isPasswordValid;
    }

    function checkEmailExists() {
        var email = $('#recipient-email').val();
        $.ajax({
            url: '/check-email-exists',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                email: email
            },
            success: function (response) {
                if (response.exists) {
                    alert('Email already exists. Please use a different email.');
                } else {
                    $('#registrationForm').submit();
                }
            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText);
                alert('Error checking email existence. Please try again.');
            }
        });
    }
</script>

@endsection
