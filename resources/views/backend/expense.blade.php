@extends('backend.layouts.master')
@section('style')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body table-responsive">
                        <h3><i class="fa fa-user"></i> Expenses Database; {{Auth::user()->name}}</h3>
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
                                        <td class="user" data-id="{{$item->user_id}}">{{$item->user->name ?? ''}}</td>
                                        <td class="emp_num">{{$item->user->reference_number ?? ''}}</td>
                                        <td class="location"></td>
                                        <td class="reason">{{$item->reason}}</td>
                                        <td class="total_km" data-start="{{$item->start_km}}" data-end="{{$item->end_km}}">{{$item->total_km}}</td>
                                        <td class="start_time">{{$item->start_time}}</td>
                                        <td class="end_time">{{$item->end_time}}</td>
                                        <td class="date">{{$item->date}}</td>
                                        <td class="py-2">
                                            <a href="{{route('expense.approve', $item->id)}}" class="btn btn-sm btn-primary">Approve</a>
                                            <button type="button" class="btn btn-sm btn-info btn-edit" data-id="{{$item->id}}">Edit</button>
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
    <div class="modal fade" id="editModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Please enter your expense claims</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('expense.update')}}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" class="id">
                        <div class="form-group mb-1">
                            <label>Start Km</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-car"></i></span>
                                </div>
                                <input type="number" name="start_km" id="expense_start_km" class="form-control" required />
                            </div>
                            <span class="text-muted">Enter your odometer reding here</span>
                        </div>
                        <div class="form-group mb-1">
                            <label>End Km</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-car"></i></span>
                                </div>
                                <input type="number" name="end_km" id="expense_end_km" class="form-control" required />
                            </div>
                            <span class="text-muted">Enter you End Km here</span>
                        </div>
                        <div class="form-group mb-1">
                            <label>Claim Total, Km</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-car"></i></span>
                                </div>
                                <input type="number" name="total_km" id="expense_total_km" class="form-control" required />
                            </div>
                        </div>
                        <div class="form-group mb-1">
                            <label>Date</label>
                            <input type="text" name="date" class="form-control date" id="expense_datepicker" autocomplete="off" required />
                        </div>
                        <div class="form-group mb-1">
                            <label>Start Time</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                                </div>
                                <input type="text" name="start_time" class="form-control start_time" placeholder="eg.11.45" required />
                            </div>
                            <span class="text-muted">Enter Start time of your journey here</span>
                        </div>
                        <div class="form-group mb-1">
                            <label>End Time</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                                </div>
                                <input type="text" name="end_time" class="form-control end_time" placeholder="eg.17.00" required />
                            </div>
                            <span class="text-muted">Enter journey end time here</span>
                        </div>

                        <div class="form-group mb-1">
                            <label for="">Subsistence Claim</label>
                            <div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="subsistence_claim" value="1" checked />Yes
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="subsistence_claim" value="0" />No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-1">
                            <label for="">Enter destination and reason for journey here *</label>
                            <textarea name="reason" rows="3" class="form-control reason" required></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
    
   
@endsection

@section('script')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function () {
            $("#expense_datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
            $(".btn-edit").click(function(){
                let id = $(this).data('id');
                let reason = $(this).parents('tr').find('.reason').text();
                let start_km = $(this).parents('tr').find('.total_km').data('start');
                let end_km = $(this).parents('tr').find('.total_km').data('end');
                let total_km = $(this).parents('tr').find('.total_km').text();
                let start_time = $(this).parents('tr').find('.start_time').text();
                let end_time = $(this).parents('tr').find('.end_time').text();
                let date = $(this).parents('tr').find('.date').text();

                $("#editModal .id").val(id);
                $("#editModal .reason").val(reason);
                $("#editModal .start_time").val(start_time);
                $("#editModal .end_time").val(end_time);
                $("#editModal #expense_datepicker").val(date);
                $("#editModal #expense_start_km").val(start_km);
                $("#editModal #expense_end_km").val(end_km);
                $("#editModal #expense_total_km").val(total_km);

                $("#editModal").modal();
            });
            $("#expense_start_km").change(function () {
                let start = $(this).val();
                let end = $("#expense_end_km").val();
                $("#expense_total_km").val(end - start);
            });
            $("#expense_end_km").change(function () {
                let end = $(this).val();
                let start = $("#expense_start_km").val();
                $("#expense_total_km").val(end - start);
            });
        })
    </script>
 
@endsection