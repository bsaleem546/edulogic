<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Rooms;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Auth;

class StudentController extends Controller
{
    public function view()
    {
        $data = array();

        $data['students'] = Student::all();
        return view('students.index')->with($data);
    }

    public function add()
    {
        $data = array();

        $data['rooms'] = Rooms::all();
        return view('students.add')->with($data);
    }

    public function create(Request $request)
    {
        $rules = array(
            'std_code' => 'required|unique:students',
            'joined_at' => 'required',
            'fname' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'email'=>'required|unique:students',
        );

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails())
        {
            return Response::json(array(
                'status' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ));

        }else{

            $s = new Student();
            $s->branch_id = Auth::user()->id;
            $s->std_code = $request->std_code;
            $s->fname = $request->fname;
            $s->lname = $request->lname;
            $s->dob = $request->dob;
            $s->gender = $request->gender;
            $s->father_name = $request->father_name;
            $s->contact = $request->contact;
            $s->contact1 = $request->contact1;
            $s->mother_name = $request->mother_name;
            $s->father_ocuppation = $request->father_ocuppation;
            $s->email = $request->email;
            $s->address = $request->address;
            $s->joined_at = $request->joined_at;
            $s->room_id = $request->room_id;

            $currentPhoto = $s->image;

            $img = time().'.' . $request->image->getClientOriginalExtension();
            // dd($img);
            // $img = time().'.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];

            \Image::make($request->image)->save(public_path('img/').$img);
            $request->merge(['image' => $img]);

            $userPhoto = public_path('img/').$currentPhoto;
            $s->image = $img;

            $s->status = $request->status;

            if($s->save())
            {
                return Response::json(['status' => true, 'message' => 'Created']);
            }
        }
    }


}
