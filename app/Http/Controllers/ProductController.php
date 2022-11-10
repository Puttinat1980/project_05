<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
Use Alert;


use function PHPSTORM_META\Product;

class productController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $product = product::all();
        return view('adminpage.product.adminproduct',compact('product'));
    }
    public function formadd()
    {
        return view('adminpage.product.add');
    }

public function insert(Request $request)
{
    $request->validate([
        'name'=>"nullable",
        'price'=>'nullable',
        'detail'=>'nullable',
        'image'=>'nullable',


    ]);
    product::create($request->all());

    return redirect()->route('adminpage.product.adminproduct');
}
}
