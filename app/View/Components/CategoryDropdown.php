<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Models\Category;
use App\Models\Product;

class CategoryDropdown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $id = \Request::segment(2);
        $selectedCategory = "";
        if(isset($id)) {
            $selectedCategory = Product::find($id)->category->id;
        }

        return view('components.category-dropdown', [
            'categories' => Category::all(),
            'selectedCategory' => $selectedCategory
        ]);
    }
}
