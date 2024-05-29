<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{
    public function store(Request $request){
        $student = new Student;

        $student->name = $request->name;
        $student->matric_no = $request->matric_no;
        $student->address = $request->address;

        $student->save();
        
        return redirect('/studentshow');
    }
    public function show()
    {
        $data=Student::select('name','matric_no','address','created_at','updated_at')->get();

        return view('studentshow',compact('data'));
    }
}
