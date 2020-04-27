   
<div class="card card-body">
    <table class="table table-borderless">
        <tr>
            <td>Project</td>
            <td>{{$item->project->title ?? ''}}</td>
        </tr>
        <tr>
            <td>Project Ref.No</td>
            <td>{{$item->project->reference_no ?? ''}}</td>
        </tr>
        <tr>
            <td>Weather</td>
            <td>
                @if ($item->weather == 'clear_sunny')
                    Clear / Sunny
                @elseif($item->weather == 'partially_cloudy')
                    Partially Cloudy
                @elseif($item->weather == 'overcast')
                    Overcast
                @endif
            </td>
        </tr>
        <tr>
            <td>Temperature</td>
            <td>
                @if ($item->temperature == 0)
                    0 ~ 5°C
                @elseif($item->temperature == 5)
                    5 ~ 10°C
                @elseif ($item->temperature == 15)
                    15 ~ 20°C
                @elseif($item->temperature == 20)
                    20 ~ 25°C
                @endif
            </td>
        </tr>
        <tr>
            <td>Wind</td>
            <td>
                @if ($item->wind == 25)
                    25 ~ 30 mph
                @elseif($item->wind == 30)
                    30 ~ 40 mph
                @elseif ($item->wind == 40)
                    40 ~ 60 mph
                @elseif($item->wind == 60)
                    60 ~ 80 mph
                @endif
            </td>
        </tr>
        <tr>
            <td>Preciptation AM</td>
            <td>{{ucwords($item->preciptation_am)}}</td>
        </tr>
        <tr>
            <td>Preciptation PM</td>
            <td>{{ucwords($item->preciptation_pm)}}</td>
        </tr>
        <tr>
            <td>Additional Comment</td>
            <td>{{$item->additianal_comment}}</td>
        </tr>
    </table>
    <div class="row mt-4">
        <div class="col-md-6">
            <h4>Job Workforce - Contractor</h4>
            <table class="table table-borderless">
                <tr>
                    <td>Company Name</td>
                    <td>{{$item->contractor_company->name ?? ''}}</td>
                </tr>
                <tr>
                    <td>No. Of Crew</td>
                    <td>{{$item->contractor_no_of_crew}}</td>
                </tr>
                <tr>
                    <td>Total No. Of Hours</td>
                    <td>{{$item->contractor_total_no_of_hours}}</td>
                </tr>
                <tr>
                    <td>Additional Comment</td>
                    <td>{{$item->contractor_additianal_comment}}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <h4>Job Workforce - SubContractor</h4>
            <table class="table table-borderless">
                <tr>
                    <td>Company Name</td>
                    <td>{{$item->subcontractor_company->name ?? ''}}</td>
                </tr>
                <tr>
                    <td>No. Of Crew</td>
                    <td>{{$item->subcontractor_no_of_crew}}</td>
                </tr>
                <tr>
                    <td>Total No. Of Hours</td>
                    <td>{{$item->subcontractor_total_no_of_hours}}</td>
                </tr>
                <tr>
                    <td>Additional Comment</td>
                    <td>{{$item->subcontractor_additianal_comment}}</td>
                </tr>
            </table>
        </div>
        <div class="col-12">
            <h6>Daily Activities - Describe daily activities/phase of project</h6>
            <p>{{$item->daily_activity}}</p>
            <h4>More Information</h4>
            <div class="question mt-3">
                <h6>Was work delayed for any reason? 
                    @if ($item->more_info_detail_1 == 1)
                        Yes
                    @elseif($item->more_info_detail_1 == 0)
                        No
                    @else
                        N/A
                    @endif 
                </h6>
                <p style="white-space: pre-line">{{$item->more_info_detail_1}}</p>
            </div>
            <div class="question mt-3">
                <h6>Was stoppage order in writing? 
                    @if ($item->more_info_detail_2 == 1)
                        Yes
                    @elseif($item->more_info_detail_2 == 0)
                        No
                    @else
                        N/A
                    @endif 
                </h6>
                <p style="white-space: pre-line">{{$item->more_info_detail_2}}</p>
            </div>
            <div class="question mt-3">
                <h6>Was verbal instruction recieved? 
                    @if ($item->more_info_detail_3 == 1)
                        Yes
                    @elseif($item->more_info_detail_3 == 0)
                        No
                    @else
                        N/A
                    @endif 
                </h6>
                <p style="white-space: pre-line">{{$item->more_info_detail_3}}</p>
            </div>
            <div class="question mt-3">
                <h6>Has any written or verbal direction been given to contractor? 
                    @if ($item->more_info_detail_4 == 1)
                        Yes
                    @elseif($item->more_info_detail_4 == 0)
                        No
                    @else
                        N/A
                    @endif 
                </h6>
                <p style="white-space: pre-line">{{$item->more_info_detail_4}}</p>
            </div>
            <div class="question mt-3">
                <h6>Was any subcontractor scheduled to start or material to arrive but didnt?
                    @if ($item->more_info_detail_5 == 1)
                        Yes
                    @elseif($item->more_info_detail_5 == 0)
                        No
                    @else
                        N/A
                    @endif 
                </h6>
                <p style="white-space: pre-line">{{$item->more_info_detail_5}}</p>
            </div>
            <h4 class="mt-3">Health & Safety</h4>
            
            <div class="question mt-3">
                <h6>Was a site inspection performed today?
                    @if ($item->health_safety_1 == 1)
                        Yes
                    @elseif($item->health_safety_1 == 0)
                        No
                    @else
                        N/A
                    @endif 
                </h6>
            </div>
            <div class="question mt-3">
                <h6>Were there any job site hazards observed or incidents that occured today?
                    @if ($item->health_safety_2 == 1)
                        Yes
                    @elseif($item->health_safety_2 == 0)
                        No
                    @else
                        N/A
                    @endif 
                </h6>
            </div>
            <div class="question mt-3">
                <h6>Were all contractors compliant with CCC H&S regs?
                    @if ($item->health_safety_3 == 1)
                        Yes
                    @elseif($item->health_safety_3 == 0)
                        No
                    @else
                        N/A
                    @endif 
                </h6>
            </div>
            <h4>Visitor Information</h4>
            
            <div class="question mt-3">
                <h6>Were there any visitors to site today?
                    @if ($item->visitor_information == 1)
                        Yes
                    @elseif($item->visitor_information == 0)
                        No
                    @else
                        N/A
                    @endif 
                </h6>
                <p style="white-space:pre-line">{{$item->visitor_information_additional_comment}}</p>
            </div>
            <h4>Completion / Sign Off</h4>
            <h6 class="mt-3">Completed By {{ucwords(str_replace('_', ' ', $item->completed_by))}}</h6>
        </div>
    </div>
</div>