<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Timesheet;

class TimesheetController extends Controller
{
    public function index(Request $request) {
        config(['site.page' => 'timesheet']);
        $mod = new Timesheet();

        $data = $mod->orderBy('created_at', 'desc')->get();

        return view('backend.timesheet', compact('data'));
    }

    public function create(Request $request) {
        
        Timesheet::create([
            'user_id'=> $request->get('employee_id'),
            'employee_absent'=> $request->get('employee_absent'),
            'work_week'=> $request->get('work_week'),
            'reason_for_absense'=> $request->get('reason_for_absense'),
            'assign_hours'=> $request->get('assign_hours'),
        ]);

        return back()->with('success', 'Created Successfully');
    }    

    public function update(Request $request) {
        $item = Timesheet::find($request->get('id'));
        $item->update([
            'user_id'=> $request->get('employee_id'),
            'employee_absent'=> $request->get('employee_absent'),
            'work_week'=> $request->get('work_week'),
            'reason_for_absense'=> $request->get('reason_for_absense'),
            'assign_hours'=> $request->get('assign_hours'),
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    public function delete($id) {
        Timesheet::destroy($id);
        return back()->with('success', 'Deleted Successfully');
    }
}
