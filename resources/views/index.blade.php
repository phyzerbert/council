@extends('layouts.master')
@section('pricing-header')
    <div class="pricing-header mt-5 px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">{{ config('app.name') }}</h1>
        <p class="lead">Welcome to MyCouncil. Manage all your leakage data from any device and any location.</p>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="card-deck mb-3 text-center">
            @foreach ($data as $item)            
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">{{$item->name}}</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">{{$item->rate}} % <br> 
                            <br>UFW<small class="text-muted"></small></h1>
                        <ul class="list-unstyled mt-3 mb-4"></ul>
                        <a href="{{route('leakage.add', $item->id)}}" class="btn btn-lg btn-block btn-primary">GO</a>
                    </div>
                </div>
            @endforeach
        </div>
        @include('layouts.footer')
    </div>
@endsection