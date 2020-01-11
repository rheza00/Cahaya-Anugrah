<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class LaravelGoogleGraph extends Controller
{
    function index(){
        $data = Barang::all()
                ->select(
                    Barang::raw('kondisi as kondisi'),
                    Barang::raw('count(*)as number'))
                ->groupBy('kondisi')
                ->get();
        $array[] = ['Kondisi', 'Number'];
        foreach($data as $key => $value)
        {
            $array[++$key] = [$value->kondisi, $value->number];
        }
        return vie('google_pie_chart')->with('kondisi', json_encode($array));
    }
}
