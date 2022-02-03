<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class OrderPizzaController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $pizza_id)
    {
        $pizza = Pizza::find($pizza_id);
        $pizza->album()->attach($request->input('order_id'));
        return redirect()->route('shop.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pizza_id, $order_id)
    {
        $pizza = Pizza::find($pizza_id);
        $pizza->album()->detach($order_id);
        return redirect()->route('shop.index');
    }
}
