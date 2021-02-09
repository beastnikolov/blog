@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contact Form</div>
                <div class="card-body text-center">

                    <h2>Have a suggestion? Contact me now!</h2>

                    <form method="POST" action="{{ url('contact') }}">
                        @csrf
                        <div class="mb-3">
                            <textarea class="form-control" id="contactcontent" placeholder="Your suggestion" name="contactcontent" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                        @if(isset($flag) && $flag === 1)
                        <div class="alert alert-success mt-5">Your suggestion has been sent, thank you!</div>
                        @endif
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection