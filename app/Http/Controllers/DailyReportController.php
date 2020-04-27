<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DailyReport;

class DailyReportController extends Controller
{
    public function index(Request $request) {
        config(['site.page' => 'daily_report']);
        $mod = new DailyReport();

        $data = $mod->orderBy('created_at', 'desc')->get();
        return view('backend.daily_report', compact('data'));
    }

    public function create(Request $request) {
        // $request->validate([

        // ]);
        $item = new DailyReport();
        $item->project_id = $request->project;
        $item->weather = $request->weather;
        $item->temperature = $request->temperature;
        $item->wind = $request->wind;
        $item->preciptation_am = $request->preciptation_am;
        $item->preciptation_pm = $request->preciptation_pm;
        $item->additional_comment = $request->additional_comment;
        $item->contractor_company_id = $request->contractor_company_id;
        $item->contractor_no_of_crew = $request->contractor_no_of_crew;
        $item->contractor_total_no_of_hours = $request->contractor_total_no_of_hours;
        $item->contractor_additional_comment = $request->contractor_additional_comment;
        $item->subcontractor_company_id = $request->project;
        $item->subcontractor_no_of_crew = $request->subcontractor_no_of_crew;
        $item->subcontractor_total_no_of_hours = $request->subcontractor_total_no_of_hours;
        $item->subcontractor_additional_comment = $request->subcontractor_additional_comment;
        $item->daily_activity = $request->daily_activity;
        $item->more_info_1 = $request->more_info_1;
        $item->more_info_detail_1 = $request->more_info_detail_1;
        $item->more_info_2 = $request->more_info_2;
        $item->more_info_detail_2 = $request->more_info_detail_2;
        $item->more_info_3 = $request->more_info_3;
        $item->more_info_detail_3 = $request->more_info_detail_3;
        $item->more_info_4 = $request->more_info_4;
        $item->more_info_detail_4 = $request->more_info_detail_4;
        $item->more_info_5 = $request->more_info_5;
        $item->more_info_detail_5 = $request->more_info_detail_5;
        $item->health_safety_1 = $request->health_safety_1;
        $item->health_safety_2 = $request->health_safety_2;
        $item->health_safety_3 = $request->health_safety_3;
        $item->visitor_information = $request->visitor_information;
        $item->visitor_information_additional_comment = $request->visitor_information_additional_comment;
        $item->completed_by = $request->completed_by;

        if($request->has("attachment")){
            $attach = request()->file('attachment');
            $attach_name = time() . '.' . $attach->getClientOriginalExtension();
            $attach->move(public_path('uploaded/daily_report/'), $attach_name);
            $item->attachment = 'uploaded/daily_report/'.$attach_name;
        }
        $item->save();

        return back()->with('success', 'Saved Successfully');
    }

    public function show($id) {
        $item = DailyReport::find($id);
        return view('backend.daily_report_show', compact('item'));
    }
    
    public function view(Request $request) {
        $item = DailyReport::find($request->get('id'));
        $returnHTML = view('backend.daily_report_show')->with('item', $item)->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }
}
