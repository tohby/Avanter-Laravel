<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products =  Product::orderBy('created_at', 'desc')->paginate(12);
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //function to store products to database
        //validation of entries
        $this->validate($request, [
            'prodName' => 'required',
            'desc'  => 'required',
            'price'  => 'required',
            'quantity'  => 'required',
            'product_image' => 'image|required|max:1999'
        ]);

        //handle file uploads
        //get file name with the extension
        $fileNameWithExt = $request->file('product_image')->getClientOriginalName();
        //get just file name
        $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //get extension
        $extension = $request->file('product_image')->getClientOriginalExtension();
        //filename to store
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        //image upload
        $path = $request->file('product_image')->storeAs('public/product_image', $fileNameToStore);

        //create product
        $product = new Product;
        $product->prodName = $request->input('prodName');
        $product->desc  = $request->input('desc');
        $product->price  = $request->input('price');
        $product->quantity  = $request->input('quantity');
        $product->user_id = auth()->user()->id;
        $product->product_image = $fileNameToStore;
        $product->save();
 
        return redirect('/products')->with('success', 'Product has been succesfully inserted to catalog');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //display each product
        $products = Product::find($id);
        return view('products.show')->with('products', $products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //funtion to display edit product page
        $product = Product::find($id);
        return view('products.update')->with('product', $product);
        //check for correct user
        //if(auth()->user()->id !==$posts->user_id){
        //    return redirect('/posts')->with('error', 'Unauthorized Page');
        //}
        
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
        //funtion to update product
        $this->validate($request, [
            'prodName' => 'required',
            'desc'  => 'required',
            'price'  => 'required',
            'quantity'  => 'required'
        ]);
        //create product
        $product = Product::find($id);
        $product->prodName = $request->input('prodName');
        $product->desc  = $request->input('desc');
        $product->price  = $request->input('price');
        $product->quantity  = $request->input('quantity');
        $product->save();
 
        return redirect('/products')->with('success', 'Product has been succesfully updated to catalog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //function to delete products
        $product = Product::find($id);
        $product->delete();
        return redirect('/products')->with('success', 'Product Deleted');
    }
}
