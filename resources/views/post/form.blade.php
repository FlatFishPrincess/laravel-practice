@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Post Form
                </div>
                <div class="card-body">
                    @if($data)
                    <form action="{{ route('post.update', $data->_id )}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}">
                        </div>
                        <div class="form-group">
                            <label for="comment">Content:</label>
                            <textarea  class="form-control" id="comment" row="5" name="comment">{{ $data->comment }}</textarea>
                        </div>
                        <button class="btn btn-primary">Save</button>
                    </form>
                    @else
                    <form action="{{ route('post.save')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="comment">Content:</label>
                                <textarea  class="form-control" id="comment" row="5" name="comment"></textarea>
                            </div>
                            <button class="btn btn-primary">Save</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
