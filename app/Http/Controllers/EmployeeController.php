<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(Request $request) {
        config(['site.page' => 'employee']);
        $mod = new Employee();

        $data = $mod->orderBy('created_at', 'desc')->paginate(15);

        return view('greenway.employee.index', compact('data'));
    }

    public function create(Request $request) {
        
        Employee::create([
            'name'=> $request->get('name'),
            'contact_number'=> $request->get('contact_number'),
            'job_title'=> $request->get('job_title'),
            'role'=> implode(', ', $request->get('role')),
            'email'=> $request->get('email'),
            'reference_number'=> $request->get('reference_number'),
        ]);

        return back()->with('success', 'Created Successfully');
    }    

    public function update(Request $request) {
        $item = Employee::find($request->get('id'));
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
        Employee::destroy($id);
        return back()->with('success', 'Deleted Successfully');
    }
}
