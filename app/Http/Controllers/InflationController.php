<?php

namespace App\Http\Controllers;

use App\Imports\InflationImport;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Facades\Excel;

class InflationController extends Controller
{
    public function theWorthOfMoney(): View
    {
        $index1 = request('index1', 1);
        $index2 = request('index2', 4);
        $inflation = Excel::toCollection(new InflationImport(), 'files/inflation.xlsx', 'resources', \Maatwebsite\Excel\Excel::XLSX)[0];
        $header = $inflation->shift();
        $goods = $header->slice(4);
        $moneyTypes = $header->slice(1,3);
        $data = [];
        foreach ($inflation as $row) {
            foreach ($row as $index => $col) {
                $data[$header[$index]][] = $col;
            }
        }
        $moneyData = $data[$header[$index1]];
        $goodsData = $data[$header[$index2]];
        $quantity = [];
        foreach ($moneyData as $index => $value) {
            $quantity[] = $goodsData[$index] == 0 ? 0 : round($value / $goodsData[$index], 2);
        }

        $data = array_map(null, ...[$data['Évek'], $moneyData, $goodsData, $quantity]);
        $firstMeaningfulRow = [];
        foreach ($data as $row) {
            if ($row[2] > 0) {
                $firstMeaningfulRow = $row;
                break;
            }
        }
        $lastMeaningfulRow = end($data);

        return view('inflation', [
            'header' => [$header[$index1], $header[$index2], 'Ennyire elég'],
            'data' => $data,
            'goods' => $goods,
            'moneyTypes' => $moneyTypes,
            'firstMeaningfulRow' => $firstMeaningfulRow,
            'lastMeaningfulRow' => $lastMeaningfulRow
        ]);
    }
}
