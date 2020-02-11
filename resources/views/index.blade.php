@extends('layouts.master')
@section('pricing-header')
    <div class="pricing-header mt-5 px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">{{ config('app.name') }}</h1>
        <p class="lead">PhpMyAdmin is a free software tool written in PHP, intended to handle the administration of MySQL over the Web. phpMyAdmin supports a wide range of operations on MySQL and MariaDB. Frequently used operations (managing databases, tables, columns, relations, indexes, users, permissions, etc) can be performed via the user interface, while you still have the ability to directly execute any SQL statement..</p>
    </div>
@endsection

@section('content')
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
@endsection