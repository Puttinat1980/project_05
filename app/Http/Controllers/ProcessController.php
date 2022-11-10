<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Process;

use function PHPSTORM_META\process;

class ProcessController extends Controller
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
        $process = process::all();
        return view('adminpage.process.adminprocess',compact('process'));
    }
    public function formadd()
    {
        return view('adminpage.process.add');
    }

public function insert(Request $request)
{
    $request->validate([
        'name'=>"nullable",
        'detail'=>'nullable',
        'image'=>'nullable',

    ]);
    process::create($request->all());

    return redirect()->route('adminpage.process.adminprocess');
}
}
