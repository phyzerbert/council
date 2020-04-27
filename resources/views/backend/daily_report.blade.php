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
                                    <th>Project</th>
                                    <th>Weather</th>
                                    <th>Temperature</th>
                                    <th>Wind</th>
                                    <th>Preciptation AM</th>
                                    <th>Preciptation PM</th>
                                    <th>Completed By</th>
                                    <th>Created At</th>
                                    <th style="width: 150px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)                                    
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td class="project_id" data-id="{{$item->project_id}}">{{$item->project->title ?? ''}}</td>
                                        <td class="weather">
                                            @if ($item->weather == 'clear_sunny')
                                                Clear / Sunny
                                            @elseif($item->weather == 'partially_cloudy')
                                                Partially Cloudy
                                            @elseif($item->weather == 'overcast')
                                                Overcast
                                            @endif
                                        </td>
                                        <td class="temperature">
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
                                        <td class="wind">
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
                                        <td class="preciptation_am">{{ucwords($item->preciptation_am)}}</td>
                                        <td class="preciptation_pm">{{ucwords($item->preciptation_pm)}}</td>
                                        <td class="completed_by">{{ucwords(str_replace('_', ' ', $item->completed_by))}}</td>
                                        <td class="created_at">{{date('Y-m-d', strtotime($item->created_at))}}</td>
                                        <td class="py-2">
                                            <button class="btn btn-sm btn-info btn-view" data-id="{{$item->id}}">View</button>
                                            {{-- <a href="{{route('employee.delete', $item->id)}}" class="btn btn-sm btn-danger" onclick="return window.confirm('Are you sure?')">Delete</a> --}}
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

    <div class="modal fade" id="viewModal">
        <div class="modal-dialog modal-xl">
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
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $(".btn-view").click(function(){
                let id = $(this).data('id');
                $.ajax({
                    url : "{{route('daily_report.view')}}",
                    method : 'GET',
                    data : {id : id},
                    success : function(response){
                        if(response.success == true) {
                            $("#viewModal .modal-body").html(response.html);
                            $("#viewModal").modal();
                        }                        
                    }
                });
            });
        })
    </script>
@endsection