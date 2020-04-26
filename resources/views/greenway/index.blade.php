@extends('layouts.master')

@section('style')
    <style>
        #banner-greenway {
            background: url("{{asset('images/greenway_bg.jpg')}}") no-repeat;
            background-size: cover;
            margin-top: 56px;
            border-radius: 0;
        }
        .btn-modal {
            border-radius: 0;
        }
    </style>
@endsection
@section('pricing-header')
    <section class="jumbotron text-center" id="banner-greenway">
        <div class="container">
            <h1>Midleton to Youghal Greenway</h1>
            <p class="lead text-dark font-weight-bold">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            <p>
                <a href="#" class="btn btn-primary my-2">Go to APP Library</a>
                <a href="{{route('home')}}" class="btn btn-secondary my-2">Home</a>
            </p>
        </div>
    </section>
@endsection
@section('content')
    @php
        $employees = \App\Models\Employee::all();
    @endphp
    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" />
                                <text x="35%" y="50%" fill="#eceeef" dy=".3em">Employee Register</text>
                            </svg>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#addNewEmployeeModal">
                                Add New Employee
                            </button>
                            <div class="card-body">
                                <p class="card-text">Create a new Employee detail form or edit an existing one and upload to database Click on "Add New Employee" to begin.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary">Go to App</button>

                                        <button type="button" class="btn btn-sm btn-outline-danger">View Database</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" />
                                <text x="30%" y="50%" fill="#eceeef" dy=".3em">Timesheets</text>
                            </svg>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#timesheetModal">
                                Launch Timesheet Modal
                            </button>
                            <div class="card-body">
                                <p class="card-text">Update all Timesheets. Add or subtract hours to all ataff members and assign correct T&A for each workweek.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary">Go to App</button>
                                        <button type="button" class="btn btn-sm btn-outline-danger">View Database</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" />
                                <text x="35%" y="50%" fill="#eceeef" dy=".3em">Daily Report</text>
                            </svg>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#dailyReportModal">
                                Launch Daily Report Modal
                            </button>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary">Go to App</button>
                                        <button type="button" class="btn btn-sm btn-outline-danger">View Database</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" />
                                <text x="35%" y="50%" fill="#eceeef" dy=".3em">Health & Safety</text>
                            </svg>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#exampleModalLong">
                                Health & Safety Checksheet
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary">Go to App</button>
                                        <button type="button" class="btn btn-sm btn-outline-danger">View Database</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" />
                                <text x="35%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#exampleModalLong">
                                Launch demo modal
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary">Go to App</button>
                                        <button type="button" class="btn btn-sm btn-outline-danger">View Database</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" />
                                <text x="35%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#exampleModalLong">
                                Launch demo modal
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary">Go to App</button>
                                        <button type="button" class="btn btn-sm btn-outline-danger">View Database</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>

            </p>
            <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p>New to Bootstrap? <a href="https://getbootstrap.com/">Visit the homepage</a> or read our <a href="/docs/4.4/getting-started/introduction/">getting started guide</a>.</p>

        </div>
    </footer>

    

    <!-- Modal -->
    <div class="modal fade" id="addNewEmployeeModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Employee Profile</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('employee.create')}}" method="POST">
                    <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="employeeName">Employee Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="position">Job Title</label>
                                <input type="text" name="job_title" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Position/Role</label> <br />
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="role[]" value="contractor">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Contractor
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="role[]" value="sub_contractor">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Sub-Contractor
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="role[]" value="ccc">
                                    <label class="form-check-label" for="defaultCheck1">CCC</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contactNum">Contact Number</label>
                                <input type="text" class="form-control" name="contact_number">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="refno">Create Employee Reference Number</label>
                                <input type="text" class="form-control" name="reference_number">
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

    <!-- Modal -->
    <div class="modal fade" id="timesheetModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Timesheet</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('timesheet.create')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Emoloyee</label>
                            <select class="custom-select" name="employee_id" id="modal_employee_id" required>
                                <option value="">Select Employee</option>
                                @foreach ($employees as $item)
                                    <option value="{{$item->id}}" data-ref="{{$item->reference_number}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Emoloyee Reference Number</label>
                            <input type="text" class="form-control" id="modal_employee_ref" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Work Week</label>
                            <select class="custom-select" name="work_week" id="work_week" required>
                                <option selected>Select Work Week</option>
                                <option value="1">Week 1</option>
                                <option value="2">Week 2</option>
                                <option value="3">Week 3</option>
                                <option value="3">Week 4</option>
                                <option value="3">Week 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Was Employee Absent</label><br />
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="employee_absent" value="1" checked id="defaultCheckYes">
                                <label class="form-check-label" for="defaultCheckYes">Yes</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="employee_absent" value="0" id="defaultCheckNo">
                                <label class="form-check-label" for="defaultCheckNo">No</label>
                            </div>
                        </div>                            
                        <div class="form-group">
                            <label for="contactNum">Reason for Absence</label>
                            <input type="text" name="reason_for_absense" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="contactNum">Assign hours</label>
                            <input type="number" min="0" name="assign_hours" class="form-control">
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

    <!-- Daily Report Modal -->
    <div class="modal fade" id="dailyReportModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Daily Report</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="" method="post">
                    @csrf                    
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" />
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="username" />
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
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
            $("#modal_employee_id").change(function(){
                let ref_no = $(this).children("option:selected").data('ref');
                $("#modal_employee_ref").val(ref_no);
            });
        })
    </script>
@endsection