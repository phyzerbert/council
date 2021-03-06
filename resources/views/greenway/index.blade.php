@extends('greenway.layouts.master')

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
        .form-group label {
            font-weight: 600;
        }
    </style>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection
@section('pricing-header')
    <section class="jumbotron text-center" id="banner-greenway">
        <div class="container">
            <h1>Midleton to Youghal Greenway</h1>
            <p class="lead text-dark font-weight-bold">24km of Cylce Lanes and Walkways through the heart of East Cork.</p> <p class="lead text-dark font-weight-bold">A We are Cork inititive</p>
            <p>
                <a href="#" class="btn btn-success my-2">Go to Dashboard</a>
                <a href="{{route('home')}}" class="btn btn-primary my-4">Home</a>
            </p>
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <
        </div>
    </section>
   
@endsection
@section('content')
    @php
        $employees = \App\User::where('is_admin', 0)->get();
        $companies = \App\Models\Company::all();
        $projects = \App\Models\Project::all();
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
                                <text class="lead text-dark font-weight-bold" x="28%" y="50%" fill="#eceeef" dy=".5em">Employee Register</text>
                            </svg>
                            <!-- Button trigger modal -->
                            <button  type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#addNewEmployeeModal">
                                Add New Employee
                            </button>
                            <div class="card-body">
                                <p class="card-text">Create a new Employee detail form or edit an existing one and upload to database Click on "Add New Employee" to begin.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary">Go to App</button>
                                        <a href="{{route('employee.index')}}" class="btn btn-sm btn-outline-danger">View Database</a>
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
                                <text class="lead text-dark font-weight-bold" x="32%" y="50%" fill="#eceeef" dy=".3em">Timesheets</text>
                            </svg>

                            <!-- Button trigger modal -->
                            <button   type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#timesheetModal">
                                Launch Timesheet Modal
                            </button>
                            <div class="card-body">
                                <p class="card-text"><i class="far fa-user"></i>Update all Timesheets. Add or subtract hours to all ataff members and assign correct T&A for each workweek.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary">Go to App</button>
                                        <a href="{{route('timesheet.index')}}" class="btn btn-sm btn-outline-danger">View Database</a>
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
                                <text class="lead text-dark font-weight-bold" x="31%" y="50%" fill="#eceeef" dy=".3em">Daily Report</text>
                            </svg>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#dailyReportModal">
                                Launch Daily Report Modal
                            </button>
                            <div class="card-body">
                                <p class="card-text">Launch thr daily report modal to create a daily report logging any work delays long with project progress.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary">Go to App</button>
                                        <a href="{{route('daily_report.index')}}" class="btn btn-sm btn-outline-danger">View Database</a>
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
                                <text class="lead text-dark font-weight-bold" x="30%" y="50%" fill="#eceeef" dy=".3em">Expenses Caculator</text>
                            </svg>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-modal" id="btn_expense_modal">
                                Launch Expenses Caculator
                            </button>

                            <div class="card-body">
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary">Go to App</button>
                                        <a href="{{route('expense.index')}}" class="btn btn-sm btn-outline-danger">View Database</a>
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
                                <text class="lead text-dark font-weight-bold" x="39%" y="50%" fill="#eceeef" dy=".3em">STOI's</text>
                            </svg>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#exampleModalLong">
                                Launch STOI Modal
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
                                <text class="lead text-dark font-weight-bold" x="35%" y="50%" fill="#eceeef" dy=".3em">Form 6</text>
                            </svg>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-modal" data-toggle="modal" data-target="#exampleModalLong">
                                Launch Form 6 modal
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
                                <label for="email">Password</label>
                                <input type="password" class="form-control" name="password" required />
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
                                <option value="4">Week 4</option>
                                <option value="5">Week 5</option>
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
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Daily Report</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{route('daily_report.create')}}" method="post" id="daily_report_form" enctype="multipart/form-data">
                    @csrf                    
                    <div class="modal-body" style="max-height: calc(100vh - 186px); overflow-y: auto;">
                        <div class="card card-body">
                            <h3>Job Description</h3>
                            <div class="form-group">
                                <select name="project" id="daily_report_modal_project" class="form-control" required>
                                    <option value="">Select Project</option>
                                    @foreach ($projects as $item)
                                        <option value="{{$item->id}}" data-ref="{{$item->reference_no}}">{{$item->title}}</option>
                                    @endforeach                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="project_ref_no" readonly id="daily_report_modal_project_ref_no" />
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="attachment" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="card card-body mt-3">
                            <div class="row">
                                <div class="col">
                                    <h6>Weather Details</h6>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="weather" value="clear_sunny" checked>Clear/Sunny
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="weather" value="partially_cloudy">Partially cloudy
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="weather" value="overcast">Overcast
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <h6>Temperature</h6>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="temperature" value="0" checked>0 ~ 5°C
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="temperature" value="5">5 ~ 10°C
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="temperature" value="15">15 ~ 20°C
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="temperature" value="20">20 ~ 25°C
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <h6>Wind</h6>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="wind" value="25" checked>25 ~ 30 mph
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="wind" value="30">30 ~ 40 mph
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="wind" value="40">40 ~ 60 mph
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="wind" value="60">60 ~ 80 mph
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <h6>Preciptation AM</h6>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="preciptation_am" value="rain">Rain
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="preciptation_am" value="snow">Snow
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="preciptation_am" value="sleet">Sleet
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="preciptation_am" value="none" checked>None
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <h6>Preciptation PM</h6>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="preciptation_pm" value="rain">Rain
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="preciptation_pm" value="snow">Snow
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="preciptation_pm" value="sleet">Sleet
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="preciptation_pm" value="none" checked>None
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-group">                                    
                                    <label for="">Additional Comment</label>
                                    <textarea name="additional_comment" rows="3" class="form-control" name="additional_comment"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="card card-body">
                                    <h4>Job Workforce - Contractor</h4>
                                    <h6>Enter Workforce Details</h6>
                                    <div class="form-group">
                                        <label for="">Company Name</label>
                                        <select name="contractor_company" class="form-control">
                                            <option value="">-- Choose an option --</option>
                                            @foreach ($companies as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">No. Of Crew</label>
                                        <input type="text" class="form-control" name="contractor_no_of_crew">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Total No. Of Hours</label>
                                        <input type="text" class="form-control" name="contractor_total_no_of_hours">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Additional Comment</label>
                                        <textarea name="contractor_additional_comment" class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-body">
                                    <h4>Job Workforce - SubContractor</h4>
                                    <h6>Enter Workforce Details</h6>
                                    <div class="form-group">
                                        <label for="">Company Name</label>
                                        <select name="subcontractor_company" class="form-control">
                                            <option value="">-- Choose an option --</option>
                                            @foreach ($companies as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">No. Of Crew</label>
                                        <input type="text" class="form-control" name="subcontractor_no_of_crew">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Total No. Of Hours</label>
                                        <input type="text" class="form-control" name="subcontractor_total_no_of_hours">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Additional Comment</label>
                                        <textarea name="subcontractor_additional_comment" class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-body mt-3">
                            <div class="form-group">
                                <h6>Daily Activities - Describe daily activities/phase of project</h6>
                                <textarea name="daily_activities" class="form-control" rows="3"></textarea>
                            </div>
                            <h4 class="mt-4">More Information</h4>
                            <div class="form-group mt-3">
                                <label for="">Was work delayed for any reason?</label>
                                <select name="more_info_1" class="form-control">
                                    <option value="" hidden>-- Choose an option --</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                    <option value="">N/A</option>
                                </select>
                                <textarea name="more_info_detail_1" rows="2" class="form-control mt-3" placeholder="Detail"></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Was stoppage order in writing?</label>
                                <select name="more_info_2" class="form-control">
                                    <option value="" hidden>-- Choose an option --</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                    <option value="">N/A</option>
                                </select>
                                <textarea name="more_info_detail_2" rows="2" class="form-control mt-3" placeholder="Detail"></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Was verbal instruction recieved?</label>
                                <select name="more_info_3" class="form-control">
                                    <option value="" hidden>-- Choose an option --</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                    <option value="">N/A</option>
                                </select>
                                <textarea name="more_info_detail_3" rows="2" class="form-control mt-3" placeholder="Detail"></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Has any written or verbal direction been given to contractor?</label>
                                <select name="more_info_4" class="form-control">
                                    <option value="" hidden>-- Choose an option --</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                    <option value="">N/A</option>
                                </select>
                                <textarea name="more_info_detail_4" rows="2" class="form-control mt-3" placeholder="Detail"></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Was any subcontractor scheduled to start or material to arrive but didnt?</label>
                                <select name="more_info_5" class="form-control">
                                    <option value="" hidden>-- Choose an option --</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                    <option value="">N/A</option>
                                </select>
                                <textarea name="more_info_detail_5" rows="2" class="form-control mt-3" placeholder="Detail"></textarea>
                            </div>
                        </div>
                        <div class="card card-body mt-3">
                            <h4>Health & Safety</h4>
                            <div class="form-group mt-3">
                                <label for="">Was a site inspection performed today?</label>
                                <select name="health_safety_1" class="form-control">
                                    <option value="" hidden>-- Choose an option --</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                    <option value="">N/A</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Were there any job site hazards observed or incidents that occured today?</label>
                                <select name="health_safety_2" class="form-control">
                                    <option value="" hidden>-- Choose an option --</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                    <option value="">N/A</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Were all contractors compliant with CCC H&S regs?</label>
                                <select name="health_safety_3" class="form-control">
                                    <option value="" hidden>-- Choose an option --</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                    <option value="">N/A</option>
                                </select>
                            </div>
                            <h4 class="mt-3">Visitor Information</h4>
                            <div class="form-group mt-3">
                                <label for="">Were there any visitors to site today?</label>
                                <select name="visitor_information" class="form-control">
                                    <option hidden>-- Choose an option --</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                    <option value="">N/A</option>
                                </select>
                                <textarea name="visitor_information_additional_comment" class="form-control mt-3" rows="3" placeholder="Additional Comment"></textarea>
                            </div>
                        </div>
                        <div class="card card-body mt-3">
                            <h4>Completion/Sign Off</h4>
                            <label for="">Report completed by?</label>
                            <select name="completed_by" class="form-control">
                                <option value="" hidden>-- Choose an option --</option>
                                <option value="senior_resident_engineer">Senior Resident Engineer</option>
                                <option value="resident_engineer">Resident Engineer</option>
                                <option value="clerk_of_works">Clerk Of Works</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-info" id="print_daily_report">Review Form</button>
                        <button type="submit" class="btn btn-primary">Post To Database</button>
                    </div>
                </form>        
            </div>
        </div>
    </div>

    <div class="modal fade" id="viewModal">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Daily Report</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                
                </div>      
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="expenseModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Please enter your expense claims</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('expense.create')}}" method="POST">
                    <div class="modal-body">
                        @csrf
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
                            <input type="text" name="date" class="form-control datepicker" id="expense_datepicker" autocomplete="off" required />
                        </div>
                        <div class="form-group mb-1">
                            <label>Start Time</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                                </div>
                                <input type="text" name="start_time" class="form-control" placeholder="eg.11.45" required />
                            </div>
                            <span class="text-muted">Enter Start time of your journey here</span>
                        </div>
                        <div class="form-group mb-1">
                            <label>End Time</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                                </div>
                                <input type="text" name="end_time" class="form-control" placeholder="eg.17.00" required />
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
                            <textarea name="reason" rows="3" class="form-control" required></textarea>
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
    
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
        <div class="col-12 col-md">
            <img class="mb-2" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
        </div>
        <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="javascript:;">How it works</a></li>
                <li><a class="text-muted" href="javascript:;">Trust and Safety</a></li>
                <li><a class="text-muted" href="javascript:;">Help Centre</a></li>
                <li><a class="text-muted" href="javascript:;">Stuff for developers</a></li>
                <li><a class="text-muted" href="javascript:;">Resources</a></li>
                <li><a class="text-muted" href="javascript:;">Services</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="javascript:;">Team</a></li>
                <li><a class="text-muted" href="javascript:;">Careers</a></li>
                <li><a class="text-muted" href="javascript:;">Contact</a></li>
                <li><a class="text-muted" href="javascript:;">Blog</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="javascript:;">About</a></li>
                <li><a class="text-muted" href="javascript:;">Locations</a></li>
                <li><a class="text-muted" href="javascript:;">Privacy</a></li>
                <li><a class="text-muted" href="javascript:;">Terms</a></li>
            </ul>
        </div>
    </div>
</footer>

@endsection

@section('script')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function () {
            $(".custom-file-input").on("change", function() {
                var fileName = $(this).val().split("\\").pop();
                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
            $("#modal_employee_id").change(function(){
                let ref_no = $(this).children("option:selected").data('ref');
                $("#modal_employee_ref").val(ref_no);
            });

            $("#daily_report_modal_project").change(function(){
                let ref_no = $(this).children("option:selected").data('ref');
                $("#daily_report_modal_project_ref_no").val(ref_no);
            });
            $("#print_daily_report").click(function () {
                $.ajax({
                    url : "{{route('daily_report.preview')}}",
                    data : $("#daily_report_form").serialize(),
                    method : 'POST',
                    dataType : 'json',
                    success: function(response){
                        if(response.success == true) {
                            $("#viewModal .modal-body").html(response.html);
                            $("#dailyReportModal").modal('hide');
                            $("#viewModal").modal('show');
                        }   
                    },
                });
            });
            $("#viewModal").on('hide.bs.modal', function () {
                $("#dailyReportModal").modal('show');
            });

            $("#expense_datepicker").datepicker({ dateFormat: 'yy-mm-dd' });
            $("#btn_expense_modal").click(function(){
                if(!window.user){
                    alert('Please login and try again');
                    window.location.href = '/login';
                } else {
                    $("#expenseModal").modal();
                }
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