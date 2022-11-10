<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\History;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

use function PHPSTORM_META\History;

class HistoryController extends Controller
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
        $history= history::all();
        return view('adminpage.history.adminhistory',compact('history'));
    }
    public function formadd()
    {
        return view('adminpage.history.add');
    }
    public function insert(Request $request)
    {
        $history = new history();

        $history->detail = $request->detail;

        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/history/', $filename);
            Image::make(public_path() . '/admin/upload/history/' . $filename);
            $history->image = $filename;
        }else {
            $history->image = 'nopic.jpg';
        }
        $history->save();
        toast('บันทึกข้อมูลสำเร็จ', 'success');

        return redirect()->route('adminpage.history.adminhistory');
}
public function delete($id)
    {
        $history = history::find($id);

        if ($history->image != 'nopic.jpg') {
            File::delete(public_path() . '/admin/upload/history/' . $history->image);
        }
        $history->forcedelete();
        toast('ลบข้อมูลสำเร็จ', 'success');

        return redirect()->route('adminpage.history.adminhistory');
    }
    public function edit($id)
    {
        return view('adminpage.history.edit')->with('history', history::find($id));
    }
    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $history = history::find($id);

            // delete image
            if ($history->image != 'nopic.jpg') {
                File::delete(public_path() . '/admin/upload/history/' . $history->image);
            }

            // update image
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/history/', $filename);
            Image::make(public_path() . '/admin/upload/history/' . $filename);
            $history->image = $filename;

            // add field->have an image
            $history->name = $request->name;
            $history->detail = $request->detail;
        } else{

        // add field->don't have an image
        $history = history::find($id);
        $history->detail = $request->detail;

        }

        $history->update();
        toast('แก้ไขข้อมูลสำเร็จ', 'success');

        return redirect()->route('adminpage.history.adminhistory');
    }
}
