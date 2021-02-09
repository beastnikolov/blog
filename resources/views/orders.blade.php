@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My orders</div>
                <div class="card-body text-center">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Product ID</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!$post)
                            <tr>
                                <td class="align-middle" colspan="4">No data</td>
                            </tr>
                            @else
                            @foreach($post as $data)
                            <tr class="clickable-row" href="#">
                                <td class="align-middle">{{ $data -> orderID }}</td>
                                <td class="align-middle">{{ $data -> productID }}</td>
                                <td class="align-middle">{{ $data -> orderDate }}</td>
                                <td class="align-middle"><button class="btn btn-dark" href="dl/{{ $data -> orderID }}">Download</button></td>
                            </tr>
                            @endforeach
                            @endif

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection