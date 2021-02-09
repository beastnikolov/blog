@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About me</div>
                <div class="card-body text-center">

                    <img class="img-fluid rounded" src="{{ URL::to('/') }}/images/me.jpg" width="200px">
                    <p>Mario Nikolov</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non fermentum nisi. Nam iaculis nibh et cursus tempor. Proin vel dui in lectus facilisis aliquam in eu velit. Vestibulum eu erat eu elit ornare lacinia sed et justo. Curabitur ultrices neque id maximus posuere. Quisque nibh dolor, tristique eleifend luctus nec, faucibus non neque. Donec facilisis commodo lacinia. Nullam tempor auctor erat.<br><br>

                        Donec fringilla placerat aliquam. Nulla hendrerit odio ac sagittis blandit. Suspendisse iaculis enim et porttitor commodo. Nulla vitae arcu maximus, tincidunt nunc non, volutpat enim. Donec orci nibh, porttitor ac pulvinar at, aliquam vitae tortor. Sed posuere tristique sollicitudin. Aliquam erat volutpat. Phasellus non magna neque. Nunc massa erat, sagittis id consectetur maximus, lobortis id arcu. Vestibulum accumsan, turpis eget sodales tempus, augue tortor cursus orci, sit amet convallis massa sapien et ante.</p>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection