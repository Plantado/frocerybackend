<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //route to blade
        //return view('Post.create);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        // $request->validate([
        //     'name' => 'required',
        //     'price' => 'required',
        //     'category' => 'required',
        //     'imageUrl' => 'required,'

        // ]);

        // $product = Product::create([
        //     'name' => $request->name,
        //     'price' => $request->price,
        //     'category' => $request->category,
        //     'imageUrl' => $request->imageUrl,
        //     'description' => $request->description
        // ]);


        // //return response
        // return response()->json($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //sample code
        //return view('Post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //sample code
        //$post = Post::find($id);
        //return view('Post.edit', compact('post'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // // Validation
        // $request->validate([
        //     'name' => 'required',
        //     'price' => 'required',
        //     'category' => 'required',
        //     'imageUrl' => 'required,'

        // ]);

        // $product->update([
        //     'name' => $request->name,
        //     'price' => $request->price,
        //     'category' => $request->category,
        //     'imageUrl' => $request->imageUrl,
        //     'description' => $request->description
        // ]);


        // //return response
        // return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $product->delete();
        // return response()->json($product);
    }
}
