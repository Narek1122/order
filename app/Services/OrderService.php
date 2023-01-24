<?php
namespace App\Services;

use App\Models\Order;

class OrderService{

    public function get(){
        $orders = Order::query();

        return $orders->paginate(10);
    }

    public function store($data){
        return Order::create($data);
    }

    public function update($id,$data){
        $order = Order::find($id);

        if(!$order){
            return false;
        }

        return $order->update($data);

    }

    public function destroy($id){
        $order = Order::find($id);

        if(!$order){
            return false;
        }

        return $order->delete();

    }
}
