@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Latest posts </div>
                <div class="card-body">
                    @if (Auth::user()->canPublish == 1)
                    <div class="container text-end">
                        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#newPostModal">New post</button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="newPostModal" tabindex="-1" aria-labelledby="newPostModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="newPostModalLabel">New post</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="newPost">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="postTextarea1" class="form-label">Post body</label>
                                            <textarea class="form-control" id="postTextarea1" rows="3" name="content"></textarea>
                                        </div>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" id="postSubmitButt" class="btn btn-dark" onclick="SubmitPost()">Post</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- -->
                    @endif

                    @foreach($post as $data)
                    <div class="card m-5">
                        <div class="card-body">
                            <p><b>{{ $data ->  autor }}</b><small class="text-muted ms-2">{{ $data -> postDate }}</small></p>
                            <p>{{ $data -> content }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection