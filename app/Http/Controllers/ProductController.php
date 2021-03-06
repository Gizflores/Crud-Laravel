<?php

namespace Rimorsoft\Http\Controllers;

use Rimorsoft\Product;
use Rimorsoft\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('id','ASC')->paginate();
        return view('products.index', compact('products'));
    }

    public function show($id){
        $product = Product::find($id);
        return view('products.show',compact('product'));
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return back()->with('info','El producto fue eliminado');
    }

    public function create(){       
        return view('products.create');
    }

    public function store(ProductRequest $request){       
        $product = new Product;
        $product->name  = $request->name;
        $product->short = $request->short;
        $product->body  = $request->body;
        $product->save();
        return redirect()->route('products.index')->with('info','El prodcuto fue creado');
    }

    public function update(ProductRequest $request, $id){   
        $product = Product::find($id);
        $product->name  = $request->name;
        $product->short = $request->short;
        $product->body  = $request->body;
        $product->save();
        return redirect()->route('products.index')->with('info','El prodcuto fue actualizdo');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('products.edit',compact('product'));
    }
}
