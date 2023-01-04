<?php

namespace App\Http\Controllers;

use App\Models\ImageCRUD;
use Illuminate\Http\Request;
use Session;
class ImageCrudController extends Controller
{
    public function index()
    {
        $products = ImageCRUD::all();
        // dd($products);
        // return $products;
        return view('product.index', compact('products'));
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

        $imageName = "";
        if($image = $request->file('image')){
        //   $imageName = time(). '.' . $request->file('image')->getClientOriginalExtension();
          $imageName =  time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
          $image->move('image/product', $imageName);
        }
        ImageCRUD::create([
            'name' => $request->name,
            'image' => $imageName

        ]);
        Session::flash('message', 'Product Create Successfully');
        return redirect()->back();
    }



    public function edit($id)
    {
       // return $id;
       $product = ImageCRUD::findOrFail($id);
        return view('product.edit', compact('product'));
    }


    
    public function distroy($id)
    {
        $product = ImageCRUD::findOrFail($id);
         $product->delete();
        return redirect()->back()->with('deleteMessage', 'Delete Successfully');
    }

}
