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

        return view('greenway.timesheet.index', compact('data'));
    }

    public function create(Request $request) {
        
        Timesheet::create([
            'employee_id'=> $request->get('employee_id'),
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
            'name'=> $request->get('name'),
            'contact_number'=> $request->get('contact_number'),
            'job_title'=> $request->get('job_title'),
            'role'=> implode(', ', $request->get('role')),
            'email'=> $request->get('email'),
            'reference_number'=> $request->get('reference_number'),
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    public function delete($id) {
        Timesheet::destroy($id);
        return back()->with('success', 'Deleted Successfully');
    }
}
