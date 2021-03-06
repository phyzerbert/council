@extends('layouts.master')
@section('style')
    <style>
        td, th {
            white-space: nowrap;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="col-md-12 clearfix">
                <br>
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- ad1 -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-6515133971086649" data-ad-slot="7739571607" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({}); 
                </script>
                <br>
                <br>
                @if(session()->get("success"))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> {{session()->get("success")}}
                </div>
                @endif
                <br>
                <h1 class="">Leakage Database</h1><br>
                <div class="clearfix">
                    <form action="" method="post" class="form-inline float-left">
                        @csrf
                        <select name="zone_id" id="filter_zone" class="form-control form-control-sm mt-2">
                            <option disabled selected value="">Select a Zone</option>
                            @foreach ($zones as $item)
                                <option value="{{$item->id}}" @if($zone_id == $item->id) selected @endif>{{$item->name}}</option>
                            @endforeach
                        </select>
                        <select name="woa_id" id="filter_woa" class="form-control form-control-sm ml-md-2 mt-2">
                            <option disabled selected value="">Select a WOA</option>
                            @foreach ($woas as $item)
                                <option value="{{$item->id}}" @if($woa_id == $item->id) selected @endif>{{$item->name}}</option>
                            @endforeach
                        </select>
                        <select name="dma_id" id="filter_dma" class="form-control form-control-sm ml-md-2 mt-2">
                            <option disabled selected value="">Select a DMA</option>
                            @foreach ($dmas as $item)
                                <option value="{{$item->id}}" @if($dma_id == $item->id) selected @endif>{{$item->name}}</option>
                            @endforeach
                        </select>
                        <select name="type_id" id="filter_type" class="form-control form-control-sm ml-md-2 mt-2">
                            <option disabled selected value="">Select a Type</option>
                            @foreach ($types as $item)
                                <option value="{{$item->id}}" @if($type_id == $item->id) selected @endif>{{$item->name}}</option>
                            @endforeach
                        </select>
                        <select name="stype_id" id="filter_stype" class="form-control form-control-sm ml-md-2 mt-2">
                            <option disabled selected value="">Surface Type</option>
                            @foreach ($stypes as $item)
                                <option value="{{$item->id}}" @if($stype_id == $item->id) selected @endif>{{$item->name}}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-sm btn-primary ml-0 ml-md-2 mt-2">Search</button>
                        <button type="button" class="btn btn-sm btn-danger ml-2 mt-2" id="btn_reset">Reset</button>
                    </form>
                    <div class="float-right">
                        <a href="{{route('leakage.export')}}" class="btn btn-sm btn-info mt-2"><span class="fa fa-plus"></span> Export</a>
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary mt-2" data-toggle="modal" data-target="#addModal"><span class="fa fa-plus"></span> Add New</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped mt-2" id="leakageTable">
                        <thead>
                            <tr>
                                <th>Zone</th>
                                <th>WOA</th>
                                <th>DMA</th>
                                <th>Type</th>
                                <th>Surface Type</th>
                                <th>T4 Complete</th>
                                <th>X</th>
                                <th>Y</th>
                                <th>Est. Sav</th>
                                <th>Area</th>
                                <th>Comment</th>
                                <th>Date</th>
                                <th>Date Repaired</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                                <tr>
                                    <td class="zone" data-id="{{$item->zone_id}}">{{$item->zone->name ?? ''}}</td>
                                    <td class="woa" data-id="{{$item->woa_id}}">{{$item->woa->name ?? ''}}</td>
                                    <td class="dma" data-id="{{$item->dma_id}}">{{$item->dma->name ?? ''}}</td>
                                    <td class="type" data-id="{{$item->type_id}}">{{$item->type->name ?? ''}}</td>
                                    <td class="stype" data-id="{{$item->stype_id}}">{{$item->stype->name ?? ''}}</td>
                                    <td class="is_t4_completed" data-value="{{$item->is_t4_completed}}">
                                        @if($item->is_t4_completed)
                                            <span class="badge badge-primary">Yes</span>
                                        @else
                                            <span class="badge badge-danger">No</span>
                                        @endif
                                    </td>
                                    <td class="x">{{$item->x}}</td>
                                    <td class="y">{{$item->y}}</td>
                                    <td class="est_saving">{{$item->est_saving}}</td>
                                    <td class="area">{{$item->area}}</td>
                                    <td class="comment">{{$item->comment}}</td>
                                    <td>{{date('Y-m-d', strtotime($item->created_at))}}</td>
                                    <td>{{date('Y-m-d', strtotime($item->updated_at))}}</td>
                                    <td>
                                        <a href="javascript:;" data-id="{{$item->id}}" class="btn btn-sm btn-primary btn-edit">Edit</a>
                                        <a href="{{route('leakage.delete', $item->id)}}" class="btn btn-sm btn-danger" onclick="return window.confirm('Are you sure?')">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="15" align="center">No Data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="clearfix">
                        <div class="float-left" style="margin: 0;">
                            <p>Total <strong style="color: red">{{ $data->total() }}</strong> Items</p>
                        </div>
                        <div class="float-right" style="margin: 0;">
                            {!! $data->appends([
                                'zone_id' => $zone_id, 
                                'dma_id' => $dma_id,
                                'woa_id' => $woa_id,
                                'type_id' => $type_id,
                                'stype_id' => $stype_id,
                            ])->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Work Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addForm" method="post" action="{{route('leakage.save')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Select Zone*</label>
                            <div class="col-md-9">
                                <select class="form-control" name="zone_id" required>
                                    <option disabled selected value="">-- Choose an option--</option>
                                    @foreach ($zones as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">WOA*</label>
                            <div class="col-md-9">
                                <select class="form-control" name="woa_id" required>
                                    <option disabled selected value="">-- Choose an option--</option>
                                    @foreach ($woas as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">DMA*</label>
                            <div class="col-md-9">
                                <select class="form-control" name="dma_id" required>
                                    <option disabled selected value="">-- Choose an option--</option>
                                    @foreach ($dmas as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Type *</label>
                            <div class="col-md-9">
                                <select class="form-control" name="type_id" required>
                                    <option disabled selected value="">-- Choose an option--</option>
                                    @foreach ($types as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Suface Type *</label>
                            <div class="col-md-9">
                                <select class="form-control" name="stype_id" required>
                                    <option disabled selected value="">-- Choose an option--</option>
                                    @foreach ($stypes as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Est Saving</label>
                            <div class="col-md-9">
                                <input type="text" name="est_saving" class="form-control" placeholder="Merters Cubed" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">T4 Complete</label>
                            <div class="col-md-9">
                                <select class="form-control" name="is_t4_completed">
                                    <option disabled selected value="">-- Choose an option--</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Comment</label>
                            <div class="col-md-9">
                                <textarea name="comment" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9 offset-md-3">
                                <button type="button" class="btn btn-sm btn-primary btn-acquire" onclick="getLocation()">Acquire Co-Ords</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">X*</label>
                            <div class="col-md-9">
                                <input type="text" name="x" class="form-control latitude" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Y*</label>
                            <div class="col-md-9">
                                <input type="text" name="y" class="form-control longitude" required />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Work Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editForm" method="post" action="{{route('leakage.update')}}">
                    @csrf
                    <input type="hidden" class="id" name="id" />
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Select Zone*</label>
                            <div class="col-md-9">
                                <select class="form-control zone" name="zone_id" required>
                                    <option disabled selected value="">-- Choose an option--</option>
                                    @foreach ($zones as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">WOA*</label>
                            <div class="col-md-9">
                                <select class="form-control woa" name="woa_id" required>
                                    <option disabled selected value="">-- Choose an option--</option>
                                    @foreach ($woas as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">DMA*</label>
                            <div class="col-md-9">
                                <select class="form-control dma" name="dma_id" required>
                                    <option disabled selected value="">-- Choose an option--</option>
                                    @foreach ($dmas as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Type *</label>
                            <div class="col-md-9">
                                <select class="form-control type" name="type_id" required>
                                    <option disabled selected value="">-- Choose an option--</option>
                                    @foreach ($types as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Suface Type *</label>
                            <div class="col-md-9">
                                <select class="form-control stype" name="stype_id" required>
                                    <option disabled selected value="">-- Choose an option--</option>
                                    @foreach ($stypes as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Est Saving</label>
                            <div class="col-md-9">
                                <input type="text" name="est_saving" class="form-control est_saving" placeholder="Merters Cubed" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">T4 Complete</label>
                            <div class="col-md-9">
                                <select class="form-control is_t4_completed" name="is_t4_completed">
                                    <option disabled selected value="">-- Choose an option--</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Comment</label>
                            <div class="col-md-9">
                                <textarea name="comment" class="form-control comment" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9 offset-md-3">
                                <button type="button" class="btn btn-sm btn-primary btn-acquire" onclick="getLocation()">Acquire Co-Ords</button>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">X*</label>
                            <div class="col-md-9">
                                <input type="text" name="x" class="form-control latitude" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Y*</label>
                            <div class="col-md-9">
                                <input type="text" name="y" class="form-control longitude" required />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            // x.innerHTML = "Latitude: " + position.coords.latitude +
            //     "<br>Longitude: " + position.coords.longitude;
            if(document.getElementsByClassName("latitude")[0]){               
                document.getElementsByClassName("latitude")[0].value = position.coords.latitude;
                document.getElementsByClassName("longitude")[0].value = position.coords.longitude; 
            }
            if(document.getElementsByClassName("latitude")[1]){      
                document.getElementsByClassName("latitude")[1].value = position.coords.latitude;
                document.getElementsByClassName("longitude")[1].value = position.coords.longitude;
            }
        }

        $(document).ready(function(){
            $(".btn-edit").click(function () {
                let id = $(this).data('id');
                let zone_id = $(this).parents('tr').find('.zone').data('id');
                let woa_id = $(this).parents('tr').find('.woa').data('id');
                let dma_id = $(this).parents('tr').find('.dma').data('id');
                let type_id = $(this).parents('tr').find('.type').data('id');
                let stype_id = $(this).parents('tr').find('.stype').data('id');
                let comment = $(this).parents('tr').find('.comment').text();
                let est_saving = $(this).parents('tr').find('.est_saving').text();
                let is_t4_completed = $(this).parents('tr').find('.is_t4_completed').data('value');
                let x = $(this).parents('tr').find('.x').text();
                let y = $(this).parents('tr').find('.y').text();

                console.log(is_t4_completed);

                $("#editForm .id").val(id);
                $("#editForm .zone").val(zone_id);
                $("#editForm .woa").val(woa_id);
                $("#editForm .dma").val(dma_id);
                $("#editForm .type").val(type_id);
                $("#editForm .stype").val(stype_id);
                $("#editForm .est_saving").val(est_saving);
                $("#editForm .is_t4_completed").val(is_t4_completed);
                $("#editForm .comment").val(comment);
                $("#editForm .latitude").val(x);
                $("#editForm .longitude").val(y);

                $("#editModal").modal();
            }); 

            $("#btn_reset").click(function () {
                $("#filter_zone").val('');
                $("#filter_woa").val('');
                $("#filter_dma").val('');
                $("#filter_type").val('');
                $("#filter_stype").val('');
            })
        });
    </script>
@endsection