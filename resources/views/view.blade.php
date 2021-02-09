@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $book[0]->title }}</div>
                <div class="card-body text-center">

                    <img class="img-fluid rounded" src="{{$book[0]->bookPicture}}" width="200" height="250">
                    <p>Autor: {{ $book[0]->autor }}</p>
                    <p>Publisher: {{ $book[0]->publisher }}</p>
                    <p>Genre: {{ $book[0]->genre }} </p>
                    <p>Publish date: {{ $book[0]->publishDate }}</p>
                    <hr>
                    <h5>Synopsis</h5>
                    <p> {{ $book[0]->content }}</p>
                    
                    <p>Price: <b>{{ $book[0]->price }}€</b></p>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#purchaseModal">Purchase now</button>


                    <!-- Purchase Modal -->
                    <div class="modal fade" id="purchaseModal" tabindex="-1" aria-labelledby="purchaseModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="purchaseModalLabel">Purchase {{$book[0]->title}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ url('purchase') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="number" class="form-control"  value="{{$book[0]->id}}" name="productID" style="display: none">
                                        </div>
                                        <div class="mb-3">
                                            <input type="number" class="form-control" placeholder="Credit card number" name="ctarjeta" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="number" class="form-control" placeholder="Credit card secret number" name="cnumber" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="date" class="form-control" placeholder="Credit card expiry date" name="cdate" required>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <span class="font-weight-bold">Price: {{$book[0]->price}}€</span>
                                    <button type="submit" id="purchaseButt" class="btn btn-success" onclick="MakePurchase()">Purchase</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- -->

                    <!-- -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
