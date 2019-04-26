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
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Comment</th>
                                {{-- <th>Created By</th> --}}
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no=1;
                                // var_dump($jPosts);
                                // var_dump($jPosts->getData());
                                ?>
                            @foreach ($jPosts->getData() as $post)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->comment }}</td>
                                    {{-- <td>{{ $post->created_by ? $post->created_by : '' }}</th> --}}
                                    <td>{{ $post->created_at }}</th>
                                    <td>
                                        <a href="{{ route('post.form', $post->_id) }}" class="btn btn-warning btn-small">Update</a>
                                        <a href="{{ route('post.delete', $post->_id) }}" onclick="return confirm('Are u sure delete this post?')" class="btn btn-danger btn-small">Delete</a>
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
