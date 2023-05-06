<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category_list()
    {
        $catdata=Category::paginate(5);
        return view('backend.pages.category.view_category',compact('catdata'));
    }
    public function add_category()
    {
        return view('backend.pages.category.add_category');
    }
    public function store_category(Request $category)


        {
            //dd($category->all());
            $category->validate(["name"=>'required']);

            Category::create([
                "category_name"=>$category->name,
                "description"=>$category->description,
            ]);

            return to_route('category');
        }

}
