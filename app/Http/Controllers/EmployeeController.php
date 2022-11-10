<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Employee;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

use function PHPSTORM_META\Employee;


class EmployeeController extends Controller
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
        $employee= employee::all();
        // return view('home');
        return view('adminpage.employee.adminemployee', compact('employee'));
    }
    public function formadd()
    {
        return view('adminpage.employee.add');
    }
    public function insert(Request $request)
    {
        $employee = new employee();

        $employee->name = $request->name;
        $employee->username = $request->username;
        $employee->email  = $request->email ;
        $employee->phone = $request->phone;
        $employee->address = $request->address;


        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/employee/', $filename);
            Image::make(public_path() . '/admin/upload/employee/' . $filename);
            $employee->image = $filename;
        }else {
            $employee->image = 'nopic.jpg';
        }
        $employee->save();
        toast('บันทึกข้อมูลสำเร็จ', 'success');

        return redirect()->route('adminpage.employee.adminemployee');
}
public function delete($id)
    {
        $employee = employee::find($id);

        if ($employee->image != 'nopic.jpg') {
            File::delete(public_path() . '/admin/upload/employee/' . $employee->image);
        }
        $employee->forcedelete();
        toast('ลบข้อมูลสำเร็จ', 'success');

        return redirect()->route('adminpage.employee.adminemployee');
    }
    public function edit($id)
    {
        return view('adminpage.employee.edit')->with('employee', employee::find($id));
    }
    public function update(Request $request, $id)
    {
        $read = employee::find($id);
        $read->name = $request->name;
        $read->username = $request->username;
        $read->phone = $request->phone;
        $read->address = $request->address;
        $read->email = $request->email;
        $read->save();
        toast('Update Successfully', 'success');

        return redirect()->route('adminpage.employee.adminemployee');
    }
}
