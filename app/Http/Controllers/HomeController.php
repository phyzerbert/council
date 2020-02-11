<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Leakage;
use App\Models\Zone;
use App\Models\Woa;
use App\Models\Dma;
use App\Models\Type;
use App\Models\Stype;
use App\User;

use Excel;
use App\Exports\LeakagesExport;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $zones = Zone::all();
        $woas = Woa::all();
        $dmas = Dma::all();
        $types = Type::all();
        $stypes = Stype::all();
        $mod = new Leakage();

        $zone_id = $woa_id = $dma_id = $type_id = $stype_id = '';

        if($request->get('zone_id') != '') {
            $zone_id = $request->get('zone_id');
            $mod = $mod->where('zone_id', $zone_id);
        }

        if($request->get('woa_id') != '') {
            $woa_id = $request->get('woa_id');
            $mod = $mod->where('woa_id', $woa_id);
        }

        if($request->get('dma_id') != '') {
            $dma_id = $request->get('dma_id');
            $mod = $mod->where('dma_id', $dma_id);
        }

        if($request->get('type_id') != '') {
            $type_id = $request->get('type_id');
            $mod = $mod->where('type_id', $type_id);
        }

        if($request->get('stype_id') != '') {
            $stype_id = $request->get('stype_id');
            $mod = $mod->where('stype_id', $stype_id);
        }

        $data = $mod->orderBy('created_at', 'desc')->paginate(10);

        return view('leakage.index', compact('data', 'zones', 'woas', 'dmas', 'types', 'stypes', 'zone_id', 'woa_id', 'dma_id', 'type_id', 'stype_id'));
    }

    public function add($zone_id) {
        $zones = Zone::all();
        $woas = Woa::all();
        $dmas = Dma::all();
        $types = Type::all();
        $stypes = Stype::all();
        return view('leakage.add', compact('zone_id', 'zones', 'woas', 'dmas', 'types', 'stypes'));
    }

    public function save(Request $request) {
        Leakage::create([
            'area' => $request->get('area'),
            'zone_id' => $request->get('zone_id'),
            'woa_id' => $request->get('woa_id'),
            'dma_id' => $request->get('dma_id'),
            'type_id' => $request->get('type_id'),
            'stype_id' => $request->get('stype_id'),
            'is_t4_completed' => $request->get('is_t4_completed'),
            'x' => $request->get('x'),
            'y' => $request->get('y'),
        ]);
        return redirect('home')->with('success', 'Successfully Sent!');
    }

    public function update(Request $request) {
        
        $item = Leakage::find($request->get('id'));

        $item->zone_id = $request->get('zone_id');
        $item->woa_id = $request->get('woa_id');
        $item->dma_id = $request->get('dma_id');
        $item->type_id = $request->get('type_id');
        $item->stype_id = $request->get('stype_id');
        $item->is_t4_completed = $request->get('is_t4_completed');
        $item->x = $request->get('x');
        $item->y = $request->get('y');

        $item->save();
        return back()->with('success', 'Updated Successfully!');
    }

    public function delete($id) {
        Leakage::destroy($id);
        return back()->with('success', 'Deleted Successfully!');
    }

    public function export(Request $request) {
        return Excel::download(new LeakagesExport, 'database.xlsx');
    }
}
