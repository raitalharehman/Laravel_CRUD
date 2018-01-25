<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use Auth;
use App\Shop;
use Riazxrazor\LaravelSweetAlert\LaravelSweetAlert;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        if(\Auth::check()){

            $data = Auth::user()->products;

            return view('UserView', compact('data'));
        }
        else{
            return redirect('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {

        return view('AddUser');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=[
            'user_id'=>Auth::id(),
            'product_name'=>$request->input('product_name'),
            'price'=>$request->input('price')
        ];
         $product=Product::create($data);

        $data=[

            'shop_name'=>$request->input('shop_name'),
        ];
        $shop=Shop::where('shop_name',$request->input('shop_name'))->count();
        if ($shop == 0){
            $shop=Shop::create($data);
        }
        else{
            $shop=Shop::where('shop_name',$request->input('shop_name'))->first();

        }
//        $products->name=$request->input('name');
//        $data = $request->all();
        $request->request->add(['user_id'=>Auth::id()]);
        $shop->products()->attach($product->id);
        LaravelSweetAlert::setMessageSuccessConfirm("Product Created Successfully!");
//        LaravelSweetAlert::setMessageErrorConfirm("Product has not been successfully created...");


        return redirect('Admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('UpdateProduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::findorfail($id);

        $this->validate($request, ['product_name' => 'required','price' => 'required']);

        $input = $request->all();

        $product->fill($input)->save();

        return redirect('Admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findorfail($id);
        $product->active=0;
        $product->save();

        LaravelSweetAlert::setMessageSuccess("Product Deleted Successfully");
//        LaravelSweetAlert::setMessageError("Error! Product not deleted...");
//        LaravelSweetAlert::setMessageSuccessConfirm("Product has been successfully deleted");
//        LaravelSweetAlert::setMessageErrorConfirm("Error! Product has not been successfully deleted...");
        return redirect('Admin');
    }
}
