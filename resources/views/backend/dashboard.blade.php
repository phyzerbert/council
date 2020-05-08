@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-5 mb-4 mb-xl-0">
                        <h4 class="font-weight-bold">Hi Muiris, Welcome back!</h4>
                        <h4 class="font-weight-normal mb-0">MYGreenway Dashboard,</h4>
                    </div>
                    <div class="col-12 col-xl-7">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div class="border-right pr-4 mb-3 mb-xl-0">
                                <p class="text-muted">Balance</p>
                                <h4 class="mb-0 font-weight-bold">€15,000,000</h4>
                            </div>
                            <div class="border-right pr-4 mb-3 mb-xl-0">
                                <p class="text-muted">Today’s Spend</p>
                                <h4 class="mb-0 font-weight-bold">$175.00 M</h4>
                            </div>
                            <div class="border-right pr-4 mb-3 mb-xl-0">
                                <p class="text-muted">Total Delays</p>
                                <h4 class="mb-0 font-weight-bold">304 hours</h4>
                            </div>
                            <div class="pr-3 mb-3 mb-xl-0">
                                <p class="text-muted">Potential Claims</p>
                                <h4 class="mb-0 font-weight-bold">11</h4>
                            </div>
                            <div class="mb-3 mb-xl-0">
                                <button class="btn btn-warning rounded-0 text-white">Downloads</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Project Progress</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">Day 152</h3>
                            <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                        <p class="mb-0 mt-2 text-warning">00.00% <span class="text-black ml-1"><small>(30 days)</small></span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Number of Delays</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">15</h3>
                            <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                        <p class="mb-0 mt-2 text-danger">0.22% <span class="text-black ml-1"><small>(30 days)</small></span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Potential Claims</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">11</h3>
                            <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                        <p class="mb-0 mt-2 text-success">10.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Reportable Health & Safety Incidents</p>
                        <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">0</h3>
                            <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                        <p class="mb-0 mt-2 text-success">22.00%<span class="text-black ml-1"><small>(30 days)</small></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Project Progress vs Project Spend</p>
                        <p class="text-muted font-weight-light">The graph below highlights the project progress relative to the project spend. </p>
                        <div class="d-flex flex-wrap mb-5">
                            <div class="mr-5 mt-3">
                                <p class="text-muted">Total Spend to Date</p>
                                <h3>550k</h3>
                            </div>
                            <div class="mr-5 mt-3">
                                <p class="text-muted">Project Progress</p>
                                <h3>152 Days</h3>
                            </div>
                            <div class="mr-5 mt-3">
                                <p class="text-muted">Potenta Delays</p>
                                <h3>13 Days</h3>
                            </div>
                            <div class="mt-3">
                                <p class="text-muted">Deviation</p>
                                <h3>9%</h3>
                            </div>
                        </div>
                        <canvas id="order-chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Claims Report</p>
                        <p class="text-muted font-weight-light">This graph highlights the total number of claims per month along with the estimated cost of the claim (agreed) for each month</p>
                        <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                        <canvas id="sales-chart"></canvas>
                    </div>
                    <div class="card border-right-0 border-left-0 border-bottom-0">
                        <div class="d-flex justify-content-center justify-content-md-end">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <button class="btn btn-lg btn-outline-light dropdown-toggle rounded-0 border-top-0 border-bottom-0" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Today
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                    <a class="dropdown-item" href="#">January - March</a>
                                    <a class="dropdown-item" href="#">March - June</a>
                                    <a class="dropdown-item" href="#">June - August</a>
                                    <a class="dropdown-item" href="#">August - November</a>
                                </div>
                            </div>
                            <button class="btn btn-lg btn-outline-light text-primary rounded-0 border-0 d-none d-md-block" type="button"> View all </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection