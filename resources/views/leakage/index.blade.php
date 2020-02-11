@extends('layouts.master')

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
                <br>
                <h1 class="float-left">Leakage Database</h1><br>
                <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addModal"><span class="fa fa-plus"></span> Add New</a></div><br>
            </div>
            <table class="table table-striped" id="leakageTable">
                <thead>
                    <tr>
                        <th>Zone</th>
                        <th>WOA</th>
                        <th>DMA</th>
                        <th>X</th>
                        <th>Y</th>
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
                            <td class="woa" data-id="{{$item->woa}}">{{$item->woa->name ?? ''}}</td>
                            <td class="dma" data-id="{{$item->dma}}">{{$item->dma->name ?? ''}}</td>
                            <td class="x">{{$item->x}}</td>
                            <td class="y">{{$item->y}}</td>
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
                            <td colspan="10" align="center">No Data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
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
                <form id="saveEmpForm" method="post">
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
                                <select class="form-control" name="woa_id">
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
                                <select class="form-control" name="dma_id">
                                    <option disabled selected value="">-- Choose an option--</option>
                                    @foreach ($dmas as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Type*</label>
                            <div class="col-md-9">
                                <select class="form-control" name="type_id">
                                    <option disabled selected value="">-- Choose an option--</option>
                                    @foreach ($types as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Suface Type*</label>
                            <div class="col-md-9">
                                <select class="form-control" name="stype_id">
                                    <option disabled selected value="">-- Choose an option--</option>
                                    @foreach ($stypes as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
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
        $(document).ready(function(){

        });
    </script>
@endsection