@extends('layouts.master')

@section('style')
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
@endsection

@section('content')
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">

        <h2>Leakage Data Application</h2>
        <p class="lead">Fill in the requisite fields below and hit send.</p>
    </div>
    <div id="container" class="col-md-6 order-md-2 mb-4 mx-auto">

        <div id="calculator" class="col-md-10 order-md-2 mb-4">
        </div>

        <form method="POST" action="{{route('leakage.save')}}">
            @csrf
            <div class="form-group">
                <label>Select Zone</label>
                <select class="form-control" name="zone_id" required>
                    <option disabled selected value="">-- Choose an option--</option>
                    @foreach ($zones as $item)
                        <option value="{{$item->id}}" @if($zone_id == $item->id) selected @endif>{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>WOA</label>
                <select class="form-control" name="woa_id">
                    <option disabled selected value="">-- Choose an option--</option>
                    @foreach ($woas as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Select DMA</label>
                <select class="form-control" name="dma_id">
                    <option disabled selected value="">-- Choose an option--</option>
                    @foreach ($dmas as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Select Type</label>
                <select class="form-control" name="type_id">
                    <option disabled selected value="">-- Choose an option--</option>
                    @foreach ($types as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Select Surface Type</label>
                <select class="form-control" name="stype_id">
                    <option disabled selected value="">-- Choose an option--</option>
                    @foreach ($stypes as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label>T4 Complete</label>
                <select class="form-control" name="is_t4_completed">
                    <option disabled selected value="">-- Choose an option--</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>


            <button type="button" class="btn btn-info btn-lg mb-3" onclick="getLocation()">Acquire Co-Ords</button>

            <p id="demo"></p>
            <input type="hidden" name="x" id="co_x" />
            <input type="hidden" name="y" id="co_y" />

            <button type="submit" class="btn btn-primary btn-lg" class="btn2">Send</button>
        </form>
    </div>
    <br>
    <br>
@endsection

@section('script')
    <script>
        var x = document.getElementById("demo");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            x.innerHTML = "Latitude: " + position.coords.latitude +
                "<br>Longitude: " + position.coords.longitude;
            document.getElementById("co_x").value = position.coords.latitude;
            document.getElementById("co_y").value = position.coords.longitude;
        }
    </script>
@endsection