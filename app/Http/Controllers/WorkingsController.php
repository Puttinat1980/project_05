<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Workings;

use function PHPSTORM_META\Workings;

class WorkingsController extends Controller
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
        $workings = workings::all();
        return view('adminpage.workings.adminworkings',compact('workings'));
    }
    public function formadd()
    {
        return view('adminpage.workings.add');
    }

public function insert(Request $request)
{
    $request->validate([
        'name'=>"nullable",
        'detail'=>'nullable',
        'image'=>"nullable",


    ]);
    workings::create($request->all());

    return redirect()->route('adminpage.workings.adminworkings');
}
}
