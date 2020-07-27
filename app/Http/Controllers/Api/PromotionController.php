<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index($id){
           $data = json_decode(file_get_contents(public_path().'/data.json'));
           $promotion = collect($data);
           $dataFiltered = $promotion -> firstWhere('id', $id);
           if(null == $dataFiltered){
                $dataFiltered=[
                 'message' => 'The id is not correct'
                ];
                return response()->json($dataFiltered,404);
           } else {
                return response()->json($dataFiltered,200);
           }
       }
}
