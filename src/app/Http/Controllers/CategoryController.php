<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $items = Category::all();
        return view('category.index', ['items' => $items]);
    }
    public function add()
    {
        return view('category.add');
    }
    public function create(Request $request)
    {
        $this->validate($request, Category::$rules);
        $form = $request->all();
        Category::create($form);
        return redirect('/category');
    }
}