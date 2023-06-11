<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $order = Order::all();
        if($order -> count() > 0){
            return response()->json([
                'code' => "200",
                'message' => "Success",
                'data' => $order
            ]);
        }
        else{
            return response()->json([
                'code' => "404",
                'message' => "Not Found"
            ]);
        }
    }

    public function show($id)
    {
        $order = Order::find($id);
        if($order){
        return response()->json([
            'code' => "200",
            'message' => "Success",
            'data' => $order
        ]);
    }
    else{
        return response()->json([
            'code' => "404",
            'message' => "Not Found"
        ]);
    }
    }

}
