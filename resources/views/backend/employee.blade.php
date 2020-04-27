@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Job Title</th>
                                    <th>Position / Role</th>
                                    <th>Contact Number</th>
                                    <th>Email</th>
                                    <th>Reference Number</th>
                                    <th style="width: 150px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)                                    
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td class="name">{{$item->name}}</td>
                                        <td class="job_title">{{$item->job_title}}</td>
                                        <td class="role" data-value="{{$item->role}}">{{ucwords(str_replace('_', ' ', $item->role)) }}</td>
                                        <td class="contact_number">{{$item->contact_number}}</td>
                                        <td class="email">{{$item->email}}</td>
                                        <td class="reference_number">{{$item->reference_number}}</td>
                                        <td class="py-2">
                                            <button class="btn btn-sm btn-primary btn-edit" data-id="{{$item->id}}">Edit</button>
                                            <a href="{{route('employee.delete', $item->id)}}" class="btn btn-sm btn-danger" onclick="return window.confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Employee Profile</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('employee.update')}}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" class="id" />
                        <div class="form-group">
                            <label for="employeeName">Employee Name</label>
                            <input type="text" name="name" class="form-control name">
                        </div>
                        <div class="form-group">
                            <label for="position">Job Title</label>
                            <input type="text" name="job_title" class="form-control job_title" />
                        </div>
                        <div class="form-group">
                            <label>Position/Role</label> <br />
                            <div class="form-check-inline">
                                <input class="form-check-input" type="checkbox" name="role[]" id="edit_modal_contractor" value="contractor">
                                <label class="form-check-label" for="edit_modal_contractor">
                                    Contractor
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="checkbox" name="role[]" id="edit_modal_sub_contractor" value="sub_contractor">
                                <label class="form-check-label" for="edit_modal_sub_contractor">
                                    Sub-Contractor
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="checkbox" name="role[]" id="edit_modal_ccc" value="ccc">
                                <label class="form-check-label" for="edit_modal_ccc">CCC</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contactNum">Contact Number</label>
                            <input type="text" class="form-control contact_number" name="contact_number">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="refno">Create Employee Reference Number</label>
                            <input type="text" class="form-control reference_number" name="reference_number">
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
                let name = $(this).parents('tr').find('.name').text();
                let job_title = $(this).parents('tr').find('.job_title').text();
                let role = $(this).parents('tr').find('.role').data('value');
                let contact_number = $(this).parents('tr').find('.contact_number').text();
                let email = $(this).parents('tr').find('.email').text();
                let reference_number = $(this).parents('tr').find('.reference_number').text();
                $("#editModal input:checkbox").attr('checked', false);
                $("#editModal .id").val(id);
                $("#editModal .name").val(name);
                $("#editModal .job_title").val(job_title);
                $("#editModal .email").val(email);
                $("#editModal .contact_number").val(contact_number);
                $("#editModal .reference_number").val(reference_number);
                let role_array = role.split(', ');
                role_array.forEach(role => {
                    $("#edit_modal_" + role).attr('checked', true);
                });

                $("#editModal").modal();
            })
        })
    </script>
@endsection