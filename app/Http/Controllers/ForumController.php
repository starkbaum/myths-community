<?php

namespace Myths\Http\Controllers;

use Illuminate\Http\Request;
use Myths\Category;

class ForumController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('forums.index', compact('categories'));
    }
}
