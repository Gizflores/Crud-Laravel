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
        return 'producto guardado';
    }

    public function update(ProductRequest $request, $id){       
        return 'producto guardado' . $id;
    }

    public function edit($id){
        $product = Product::find($id);
        return view('products.edit',compact('product'));
    }
}
