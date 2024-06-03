<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\ProductModel;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = CategoryModel::all();
        return view('categories.index', compact('categories'));
    }

    public function show($id)
    {
        $category = CategoryModel::find($id);
        $products = ProductModel::where('category_id', $id)->get();
        return view('categories.show', compact('category', 'products'));
    }
}
