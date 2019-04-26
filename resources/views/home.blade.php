@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No</th>
                                <th>No</th>
                                <th>No</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <th>No</th>
                                    <th>No</th>
                                    <th>No</th>
                                    <th>No</th>
                                </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
