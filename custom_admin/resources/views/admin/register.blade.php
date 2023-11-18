@extends('layouts.master')

@section('title')
    Registered Users | Funds of web IT
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Registered User</h4>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-stripped">
                        <thead class="text-primary">
                            <th>Name</th>
                            <th>Country</th>
                            <th>Email</th>
                            <!-- Remove the header columns for Edit and Delete -->
                        </thead>
                        <tbody>
                            @foreach ($users as $row)
                                @if ($row->usertype === null)
                                    <tr>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->country }}</td>
                                        <td>{{ $row->email }}</td>
                                        <!-- Remove the <td> elements for Edit and Delete -->
                                    </tr>
                                @endif
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
    <script>
        $(document).ready(function(){
            $('#datatable').DataTable();
        });
    </script>
@endsection
