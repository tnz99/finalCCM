@extends('layouts.master')

@section('title', 'Registered Admin | Funds of web IT')

@section('content')
<section style="background-color: #f4f5f7;">
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col col-lg-6">
                <div class="card mb-3" style="border-radius: .5rem; display: flex; flex-direction: column; align-items: center; margin-top: 10px;">
                    <div class="gradient-custom text-center text-white"
                        style="border-top-left-radius: .5rem; border-top-right-radius: .5rem;">
                        <div class="d-flex justify-content-center align-items-center" style="height: 100px; margin-top: 10px;">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                alt="Avatar" class="img-fluid" style="width: 100px; border-radius: 50%;" />
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card-body p-4 text-center">
                            <h5 class="text-dark font-weight-bold">{{ $user->name }}</h5>
                            <p class="text-muted">{{ $user->email }}</p>
                            <p class="text-muted">{{ $user->country }}</p>

                            <!-- Logout button -->
                            <div class="text-center mt-4">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="btn custom-orange-btn">Logout</a>

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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
