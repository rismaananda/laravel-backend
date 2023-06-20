<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function list()
    {
        $student = Student::all();
        $responseData = [
            'status' => 200,
            'student' => $student
        ];
    
        return response()->json($responseData, 200);
    }
    public function create(Request $request) 
    {
        $student = new Student();

        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');

        $student->save();

        if($student){
        return response()->json([
            'status' => 200,
            'message' => 'Successfully Added Data',
        ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong',
            ], 500);
        }
    }

    public function updateById(Request $request, $id) 
    {
        //$student = new Student();
        $student = Student::find($id);
        //dd($student->toArray());
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');

        $student->save();

        if($student){
        return response()->json([
            'status' => 200,
            'message' => 'Successfully Edit Data',
        ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Something went wrong',
            ], 500);
        }
    }

    public function deleteById(Request $request, $id) 
    {
        //$student = new Student();
        $student = Student::find($id);
        $student->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Successfully Delete Data',
            ], 200);
        
    }

    public function showById($id) 
    {
        $student = Student::find($id);
        $responseData = [
            'status' => 200,
            'student' => $student
        ];
        return response()->json($responseData, 200);
    }
}
