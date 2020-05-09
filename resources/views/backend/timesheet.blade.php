@extends('backend.layouts.master')

@section('content')
    @php
        $employees = \App\Models\Employee::all();
    @endphp
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body table-responsive">
                        <h3><i class="fa fa-history"></i> Timesheet Database</h3>
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Employee</th>
                                    <th>Employee Reference Number</th>
                                    <th>Employee Absent</th>
                                    <th>Work Week</th>
                                    <th>Reason For Absense</th>
                                    <th>Assign Hours</th>
                                    <th style="width: 150px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)                                    
                                    <tr>
                                        <td>{{ (($data->currentPage() - 1 ) * $data->perPage() ) + $loop->iteration }}</td>
                                        <td class="employee" data-id="{{$item->employee_id}}">{{$item->employee->name ?? ''}}</td>
                                        <td class="employee_ref_no">{{$item->employee->reference_number ?? ''}}</td>
                                        <td class="employee_absent py-2" data-value="{{$item->employee_absent}}">
                                            @if($item->employee_absent)
                                                <span class="badge badge-primary">Yes</span>
                                            @else
                                                <span class="badge badge-danger">No</span>
                                            @endif
                                        </td>
                                        <td class="work_week" data-value="{{$item->work_week}}">Week {{$item->work_week}}</td>
                                        <td class="reason_for_absense">{{$item->reason_for_absense}}</td>
                                        <td class="assign_hours">{{$item->assign_hours}}</td>
                                        <td class="py-2">
                                            <button class="btn btn-sm btn-primary btn-edit" data-id="{{$item->id}}">Edit</button>
                                            <a href="{{route('timesheet.delete', $item->id)}}" class="btn btn-sm btn-danger" onclick="return window.confirm('Are you sure?')">Delete</a>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Timesheet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('timesheet.update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" class="id" />
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Emoloyee</label>
                            <select class="form-control employee_id" name="employee_id" id="edit_modal_employee_id" required>
                                <option value="">Select Employee</option>
                                @foreach ($employees as $item)
                                    <option value="{{$item->id}}" data-ref="{{$item->reference_number}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Emoloyee Reference Number</label>
                            <input type="text" class="form-control employee_ref_no" id="edit_modal_employee_ref" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Work Week</label>
                            <select class="form-control work_week" name="work_week" id="work_week" required>
                                <option selected>Select Work Week</option>
                                <option value="1">Week 1</option>
                                <option value="2">Week 2</option>
                                <option value="3">Week 3</option>
                                <option value="4">Week 4</option>
                                <option value="5">Week 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Was Employee Absent</label><br />
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="employee_absent" value="1" checked id="employee_absent_yes">
                                <label class="form-check-label" for="employee_absent_yes">Yes</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="employee_absent" value="0" id="employee_absent_no">
                                <label class="form-check-label" for="employee_absent_no">No</label>
                            </div>
                        </div>                            
                        <div class="form-group">
                            <label for="contactNum">Reason for Absence</label>
                            <input type="text" name="reason_for_absense" class="form-control reason_for_absense">
                        </div>
                        <div class="form-group">
                            <label for="contactNum">Assign hours</label>
                            <input type="number" min="0" name="assign_hours" class="form-control assign_hours">
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
    <script>
        $(document).ready(function () {
            $(".btn-edit").click(function () {
                let id = $(this).data('id');
                let employee_id = $(this).parents('tr').find('.employee').data('id');
                let employee_ref_no = $(this).parents('tr').find('.employee_ref_no').text();
                let employee_absent = $(this).parents('tr').find('.employee_absent').data('value');
                let work_week = $(this).parents('tr').find('.work_week').data('value');
                let reason_for_absense = $(this).parents('tr').find('.reason_for_absense').text();
                let assign_hours = $(this).parents('tr').find('.assign_hours').text();
                $("#editModal input:radio").attr('checked', false);

                $("#editModal .id").val(id);
                $("#editModal .employee_id").val(employee_id);
                $("#editModal .employee_ref_no").val(employee_ref_no);
                if(employee_absent) {
                    $("#employee_absent_yes").attr('checked', true);
                } else {
                    $("#employee_absent_no").attr('checked', true);
                }
                $("#editModal .employee_absent").val(employee_absent);
                $("#editModal .work_week").val(work_week);
                $("#editModal .reason_for_absense").val(reason_for_absense);
                $("#editModal .assign_hours").val(assign_hours);                

                $("#editModal").modal();
            });

            $("#edit_modal_employee_id").change(function(){
                let ref_no = $(this).children("option:selected").data('ref');
                $("#edit_modal_employee_ref").val(ref_no);
            });

        })
    </script>
@endsection