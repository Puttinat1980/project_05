<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeProducts;

use function PHPSTORM_META\type;

class TypeController extends Controller
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
        $type = TypeProducts::all();
        return view('adminpage.type.admintype',compact('type'));
    }
    public function formadd()
    {
        return view('adminpage.type.add');
    }

public function add(Request $request)
{
    $request->validate([
        //'picture'=>'null',
        'name'=>"nullable",
        'price'=>'nullable',
        //'typeproduct'=>'null',
        'detail'=>'nullable',

    ]);
    TypeProducts::create($request->all());

    return redirect()->route('adminpage.type.admintype');
}
}
