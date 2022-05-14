<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    
    public function index() {
        $categories = Category::all();

        return view('category', [
            'categories' => $categories
        ]);
    }

    public function edit($id) {
        $categories = Category::all();
        $editCategory = Category::find($id); // The record we are editing

        return view('category', [
            'categories' => $categories,
            'editCategory' => $editCategory
        ]);
    }

    public function store(Request $request) {
        $this->validateRequest($request);

        $category = new Category;
        $category->name = $request->name;
        $category->save();

        return redirect('/category')->with('success', 'Category [' . $category->name . '] added successfully.');
    }

    public function update(Request $request, $id) {
        $this->validateRequest($request);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        return redirect('/category')->with('success', 'Category [' . $category->name . '] added successfully.');
    }

    public function destroy($id) {
        $category = Category::find($id);
        $category->delete();

        return redirect('/category')->with('success', 'Category [' . $category->name . '] deleted successfully.');
    }

    private function validateRequest(Request $request) {
        $request->validate([
            'name' => ['required', 'unique:categories,name']
        ]);
    }

}
