<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\School_rooms;
use App\Models\Teacher;
use App\Models\School_subjects;
use App\Models\Schools;
use App\Models\Subjects;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CrudController extends Controller
{
    public function delete(Request $request)
    {
        if($request->isMethod('delete'))
        {
            if($request->type = 'subjects') {
                Subjects::where('id',$request->id)->delete();
            }
            if($request->type = 'sub-subjects') {
                School_subjects::where('id',$request->id)->delete();
            }
            if($request->type = 'schools'){
                Schools::where('id',$request->id)->delete();
            }
            if($request->type = 'rooms'){
                Rooms::where('id',$request->id)->delete();
            }
            if($request->type = 'sub-rooms'){
                School_rooms::where('id',$request->id)->delete();
            }
            if($request->type = 'teachers'){
                Teacher::where('id',$request->id)->delete();
            }
            if($request->type = 'students'){
                Student::where('id',$request->id)->delete();
            }
            return Response::json(['status' => true, 'message' => 'Deleted']);
        }
    }
}
