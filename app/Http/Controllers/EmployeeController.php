<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class EmployeeController extends Controller
{
    public function index(Request $request) {
        config(['site.page' => 'employee']);
        $mod = new User();
        $mod = $mod->where('is_admin', 0);
        $data = $mod->orderBy('created_at', 'desc')->paginate(10);

        return view('backend.employee', compact('data'));
    }

    public function create(Request $request) {
        
        User::create([
            'name'=> $request->get('name'),
            'email'=> $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'contact_number'=> $request->get('contact_number'),
            'job_title'=> $request->get('job_title'),
            'role'=> implode(', ', $request->get('role')),
            'reference_number'=> $request->get('reference_number'),
        ]);

        return back()->with('success', 'Created Successfully');
    }    

    public function update(Request $request) {
        $item = User::find($request->get('id'));
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
        User::destroy($id);
        return back()->with('success', 'Deleted Successfully');
    }
}
