<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageCrudController extends Controller
{
    public function index()
    {
        return view('product.index');
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'image' => 'required'
        ]);

        
    }
}
