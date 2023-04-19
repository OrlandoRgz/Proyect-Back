<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /* function test(Request $request)
    {
        return Collect([
            "message"=> "peticion post de prueba",
            "param" => $request->message
        ]);
    }*/

    public function index(Request $request){
        $students = Student::with('general_data','group','career')->get();
        return Collect([
            "process" => "select all students",
            "status" => "1",
            "error" => "0",
            "data" => $students
        ]);


    }
    public function show(Request $request){
        $student = Student::where("serial_number","=",$request['serial_number'])->get();
        return Collect([
            "process" => "select student",
            "status" => "1",
            "error" => "0",
            "data" => $student
        ]);

    }

    public function store(Request $request){
        $student = Student::create([
            "serial_number" => $request['serial_number'],
            "general_data_id" => $request['general_data_id'],
            "career_id" => $request['career_id'],
            "group_id" => $request['group_id']
        ]);
        return Collect([
            "process" => "select student",
            "status" => "1",
            "error" => "0",
            "data" => $student
        ]);

    }
    
    public function update(Request $request){
        $studentUpdated = Student::join("general_datas","general_datas.id","=","student.general_data_id")
        ->where("student.serial_number", "=",$request['serial_number'])
        ->update(["email" => $request['email']]);

        return collect([
            "process" => "Update student",
            "status" => "1",
            "error" => "0",
            "message" => "student updated"
        ]);
        
    }

    public function destroy(Request $request){
        $result = Student::where("serial_number","=",$request['serial_number'])->delete();
        
        return collect([
            "process" => "Delete student",
            "status" => "1",
            "error" => "0",
            "message" => "student removed"
        ]);
    }
}
