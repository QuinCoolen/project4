<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class PizzaOrderController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $order_id)
    {
        $order = Order::find($order_id);
        $order->album()->attach($request->input('pizza_id'));
        return redirect()->route('shop.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($order_id, $pizza_id)
    {
        $order = Order::find($order_id);
        $order->album()->detach($pizza_id);
        return redirect()->route('shop.index');
    }
}
