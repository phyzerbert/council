<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Expense;

use Auth;

class ExpenseController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index(Request $request) {
        config(['site.page' => 'expense']);
        $mod = new Expense();
        if(!Auth::user()->is_admin) {
            $mod = $mod->where('user_id', Auth::id());
        }
        $data = $mod->orderBy('created_at', 'desc')->paginate(10);
        return view('backend.expense', compact('data'));
    }

    public function create(Request $request) {

        Expense::create([
            'user_id' => Auth::id(),
            'start_km' => $request->get('start_km'),
            'end_km' => $request->get('end_km'),
            'total_km' => $request->get('total_km'),
            'date' => $request->get('date'),
            'start_time' => $request->get('start_time'),
            'end_time' => $request->get('end_time'),
            'subsistence_claim' => $request->get('subsistence_claim'),
            'reason' => $request->get('reason'),
        ]);
        return back()->with('success', 'Created Successfully');
    }

    public function update(Request $request) {
        $item = Expense::find($request->get('id'));
        $item->update([
            'start_km' => $request->get('start_km'),
            'end_km' => $request->get('end_km'),
            'total_km' => $request->get('total_km'),
            'date' => $request->get('date'),
            'start_time' => $request->get('start_time'),
            'end_time' => $request->get('end_time'),
            'subsistence_claim' => $request->get('subsistence_claim'),
            'reason' => $request->get('reason'),
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    public function approve($id) {
        $item = Expense::find($id);
        $item->update(['status' => 1]);
        return back()->with('success', 'Approved Successfully');
    }

    public function delete($id) {
        Expense::destroy($id);
        return back()->with('success', 'Deleted Successfully');
    }
}
