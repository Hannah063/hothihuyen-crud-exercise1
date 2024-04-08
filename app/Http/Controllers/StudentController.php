<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    public function index()
    {
        $students = DB::table('students')->get();
        return view('home', compact('students'));
    }

    public function show($id){
        $student = DB::table('students')->where('id', $id)->first();
        return view('edit', compact('student'));
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'phone_number' => $request->phone_number,
        ];
        $student = DB::table('students')->insert($data);
        if ($student) {
            return redirect()->route('home');
        } else {
            return back()->withInput($request->name);
        }
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'phone_number' => $request->phone_number,
        ];
        $student = DB::table('students')->where('id', $id)->update($data);
        if ($student) {
            return redirect()->route('home');
        } else {
            return back()->withInput($request->name);
        }
    }

    public function destroy($id)
    {
        DB::table('students')->where('id', $id)->delete();
        return redirect()->route('home');
    }
}
