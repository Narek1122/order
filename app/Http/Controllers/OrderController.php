<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OrderService;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    private $order_service;

    public function __construct(OrderService $order_service)
    {
        $this->order_service = $order_service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orders = $this->order_service->get();

        return response()->json([
            'status'=>true,
            'data' => $orders
        ],200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'product_name' => 'required|string',
            'weight' => 'nullable|numeric|between:2,9',
            'decription' => 'nullable|string',
            'total_price' => 'required|numeric|between:2,9',
        ]);

        if ($validated->fails()) {
            return response()->json($validated->errors(), 422);
        }

        $order = $this->order_service->store($validated->validate());

        return response()->json([
            'status'=>true,
            'data' => $order,
            'message' => 'Order saved successfully'
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = Validator::make($request->all(),[
            'product_name' => 'nullable|string',
            'weight' => 'nullable|numeric|between:2,9',
            'decription' => 'nullable|string',
            'total_price' => 'nullable|numeric|between:2,9',
        ]);

        if ($validated->fails()) {
            return response()->json($validated->errors(), 422);
        }

        $order = $this->order_service->update($id,$validated->validate());

        if(!$order){
            return response()->json([
                'status'=>false,
                'message' => 'Order not found'
            ],400);
        }

        return response()->json([
            'status'=>true,
            'data' => $order,
            'message' => 'Order updated successfully'
        ],200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $order = $this->order_service->destroy($id);

        if(!$order){
            return response()->json([
                'status'=>false,
                'message' => 'Order not found'
            ],400);
        }

        return response()->json([
            'status'=>true,
            'data' => 'order',
            'message' => 'Order destroyed successfully'
        ],200);
    }
}
