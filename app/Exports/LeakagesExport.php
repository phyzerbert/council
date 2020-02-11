<?php

namespace App\Exports;

use App\Models\Leakage;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LeakagesExport implements FromArray, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array(): array
    {
        $leakages = Leakage::all();
        $data = array();
        $i = 0;
        foreach ($leakages as $item) {
            $data[$i] = array();
            $data[$i]['no'] = $i+1;
            $data[$i]['zone'] = $item->zone->name ?? '';
            $data[$i]['woa'] = $item->woa->name ?? '';
            $data[$i]['dma'] = $item->dma->name ?? '';
            $data[$i]['type'] = $item->type->name ?? '';
            $data[$i]['stype'] = $item->stype->name ?? '';
            $data[$i]['is_t4_complete'] = $item->is_t4_complete ? 'Yes' : 'No';
            $data[$i]['x'] = $item->x;
            $data[$i]['y'] = $item->y;
            $data[$i]['created_date'] = date('d/m/Y', strtotime($item->created_at));
            $data[$i]['updated_date'] = date('d/m/Y', strtotime($item->updated_at));;

            $i++;
        }
        return $data;
    }

    public function headings(): array
    {
        return [
            'No',
            'Zone',
            'WOA',
            'DMA',
            'Type',
            'Surface Type',
            'T4 Complete',
            'X',
            'Y',
            'Created Date',
            'Updated Date',
        ];
    }
}
