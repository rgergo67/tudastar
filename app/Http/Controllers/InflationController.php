<?php

namespace App\Http\Controllers;

use App\Imports\InflationImport;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Facades\Excel;

class InflationController extends Controller
{
    public function theWorthOfMoney(): View
    {
        $index1 = request('index1', 3);
        $index2 = request('index2', 4);
        $inflation = Excel::toCollection(new InflationImport(), 'inflation.xlsx', 'local', \Maatwebsite\Excel\Excel::XLSX)[0];
        $header = $inflation->shift();
        $goods = $header->slice(4);
        $moneyTypes = $header->slice(1,3);
        $data = [];
        foreach ($inflation as $row) {
            foreach ($row as $index => $col) {
                $data[$header[$index]][] = $col;
            }
        }
        $data1 = $data[$header[$index1]];
        $data2 = $data[$header[$index2]];
        $data3 = [];
        foreach ($data1 as $index => $value) {
            $data3[] = $data2[$index] == 0 ? 0 : round($value / $data2[$index], 2);
        }

        return view('inflation', [
            'header' => [$header[$index1], $header[$index2], 'Ennyire elég'],
            'data' => array_map(null, ...[$data['Évek'], $data1, $data2, $data3]),
            'goods' => $goods,
            'moneyTypes' => $moneyTypes
        ]);
    }
}
