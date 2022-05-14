<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{

    public function index() {
        $products = Product::all();
        return view('product', [
            'products' => $products
        ]);
    }

    public function edit($id) {
        $products = Product::all();
        $editProduct = Product::find($id);

        return view('product', [
            'products' => $products,
            'editProduct' => $editProduct
        ]);
    }

    public function store(Request $request) {
        $this->validateRequest($request);

        $product = new Product;
        $product->name = $request->name;
        $product->category_id = $request->category;
        $product->quantity = $request->quantity;
        $product->save();

        return redirect('/product')->with('success', 'Product [' . $product->name . ' added successfully.');
    }

    public function update(Request $request, $id) {
        $this->validateRequest($request);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->category_id = $request->category;
        $product->quantity = $request->quantity;
        $product->save();

        return redirect('/product')->with('success', 'Product [' . $product->name . 'updated successfully.');
    }

    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();

        return redirect('/product')->with('success', 'Product [' . $product->name . ' deleted successfully.');
    }

    private function validateRequest(Request $request) {
        $request->validate([
            'name' => ['required'],
            'quantity' => ['required', 'numeric'],
            'category' => ['required', 'exists:categories,id']
        ]);
    }

}
