@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Books List</div>
                <div class="card-body text-center">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Title</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Publisher</th>
                                <th scope="col">Publish Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                @foreach($post as $data)
                                <tr class="clickable-row" href="view/{{ $data -> id }}">
                                <td><img src="{{ $data -> bookPicture }}" class="img-fluid" width="60" height="2s0"></td>
                                <td class="align-middle">{{ $data -> title }}</td>
                                <td class="align-middle">{{ $data -> genre }}</td>
                                <td class="align-middle">{{ $data -> publisher }}</td>
                                <td class="align-middle">{{ $data -> publishDate }}</td>
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