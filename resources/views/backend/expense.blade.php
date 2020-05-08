@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body table-responsive">
                        <h3><i class="fa fa-user"></i> Expenses Database</h3>
                        <table class="table table-bordered">
                            <thead >
                                <tr class="thead-light" >
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Emp Num.</th>
                                    <th>Location</th>
                                    <th>Reason</th>
                                    <th>Total KM</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Date</th>
                                    <th style="width: 150px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)                                    
                                    <tr>
                                        <td>{{ (($data->currentPage() - 1 ) * $data->perPage() ) + $loop->iteration }}</td>
                                        <td class="name">{{$item->user->name ?? ''}}</td>
                                        <td class="enp_num">{{$item->user->reference_number ?? ''}}</td>
                                        <td class="location"></td>
                                        <td class="reason">{{$item->reason}}</td>
                                        <td class="total_km">{{$item->total_km}}</td>
                                        <td class="start_time">{{$item->start_time}}</td>
                                        <td class="end_time">{{$item->end_time}}</td>
                                        <td class="date">{{$item->date}}</td>
                                        <td class="py-2">
                                            <a href="{{route('expense.approve', $item->id)}}" class="btn btn-sm btn-primary">Approve</a>
                                            <a href="{{route('expense.delete', $item->id)}}" class="btn btn-sm btn-danger" onclick="return window.confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                            
                                @endforeach
                            </tbody>
                        </table>
                        <div class="clearfix mt-2">
                            <div class="float-left" style="margin: 0;">
                                <p>Total <strong style="color: red">{{ $data->total() }}</strong> Items</p>
                            </div>
                            <div class="float-right" style="margin: 0;">
                                {!! $data->appends([])->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            
        })
    </script>
 
@endsection