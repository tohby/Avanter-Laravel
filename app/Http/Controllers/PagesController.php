<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //function to display all products on homepage in descending order
        $products =  Product::orderBy('created_at', 'desc')->paginate(3);
        return view('pages.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $products = Product::find($id);
        return view('buy.create')->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //validation of entries
        $this->validate($request, [
            'CustomerName' => 'required',
            'CustomerAddress'  => 'required',

        ]);

        //create order
        $order = new Order;
        $order->CustomerName = $request->input('CustomerName');
        $order->CustomerAddress  = $request->input('CustomerAddress');
        $order->Product_id = $product->id;
        $order->price  = $product->price;
        $order->quantity  = 1;
        $order->save();
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
        //display each product in details
        $products = Product::find($id);
        return view('pages.show')->with('products', $products);
    }

    public function buy($id){
        //ask for customer details
      
    }

    public function storeBuy(Request $request){
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
