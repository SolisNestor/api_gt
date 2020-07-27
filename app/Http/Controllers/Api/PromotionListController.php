<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromotionListController extends Controller
{
    public function index(){
        $data = json_decode(file_get_contents(public_path().'/data.json'));
        $promotion = collect($data);
        $dataFiltered = $promotion -> forPage(request('page'),request('length'));
        $dataFiltered = $dataFiltered->values()->all();
        $response = [
            'total_elements' => count($data),
            'total_filtered' => count($dataFiltered),
            'data' => $dataFiltered
        ];
        return response()->json($response,200);
    }
}
