<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Calendar;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;



use function PHPSTORM_META\Calendar;

class CalendarController extends Controller
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
        $calendar= calendar::all();
        return view('adminpage.calendar.admincalendar',compact('calendar'));
    }
    public function formadd()
    {
        return view('adminpage.calendar.add');
    }
    public function insert(Request $request)
    {
        $calendar = new calendar();

        $calendar->name = $request->name;
        $calendar->detail = $request->detail;

        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/calendar/', $filename);
            Image::make(public_path() . '/admin/upload/calendar/' . $filename);
            $calendar->image = $filename;
        }else {
            $calendar->image = 'nopic.jpg';
        }
        $calendar->save();
        toast('บันทึกข้อมูลสำเร็จ', 'success');

        return redirect()->route('adminpage.calendar.admincalendar');
}
public function delete($id)
    {
        $calendar = calendar::find($id);

        if ($calendar->image != 'nopic.jpg') {
            File::delete(public_path() . '/admin/upload/calendar/' . $calendar->image);
        }
        $calendar->forcedelete();
        toast('ลบข้อมูลสำเร็จ', 'success');

        return redirect()->route('adminpage.calendar.admincalendar');
    }
    public function edit($id)
    {
        return view('adminpage.calendar.edit')->with('calendar', calendar::find($id));
    }
    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $calendar = calendar::find($id);

            // delete image
            if ($calendar->image != 'nopic.jpg') {
                File::delete(public_path() . '/admin/upload/calendar/' . $calendar->image);
            }

            // update image
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/calendar/', $filename);
            Image::make(public_path() . '/admin/upload/calendar/' . $filename);
            $calendar->image = $filename;

            // add field->have an image
            $calendar->name = $request->name;
            $calendar->detail = $request->detail;
        } else{

        // add field->don't have an image
        $calendar = calendar::find($id);
        $calendar->name = $request->name;
        $calendar->detail = $request->detail;

        }

        $calendar->update();
        toast('แก้ไขข้อมูลสำเร็จ', 'success');

        return redirect()->route('adminpage.calendar.admincalendar');
    }
}


