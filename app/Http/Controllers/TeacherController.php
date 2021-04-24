<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Auth;

class TeacherController extends Controller
{
    public function view()
    {
        $data = array();

        $data['teachers'] = Teacher::all();
        return view('teachers.index')->with($data);
    }

    public function add()
    {
        $data = array();

        dd(Session::get('user'));
        $data['teachers'] = Teacher::all();
        return view('teachers.add')->with($data);
    }

    public function create(Request $request)
    {
        $rules = array(
            'teacher_code' => 'required|unique:teachers',
            'joined_date' => 'required',
            'name' => 'required',
            'contact' => 'required',
            'address' => 'required',
            'email'=>'required|unique:teachers',
        );

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails())
        {
            return Response::json(array(
                'status' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ));

        }else{



            $t = new Teacher();
            $t->branch_id = Auth::user()->getId();
            $t->teacher_code = $request->teacher_code;
            $t->name = $request->name;
            $t->joined_date = $request->joined_date;
            $t->gender = $request->gender;
            $t->subject_id = $request->subject_id;
            $t->room_id = $request->room_id;
            $t->relation = $request->relation;
            $t->contact = $request->contact;
            $t->contact1 = $request->contact1;
            $t->address = $request->address;

            $currentPhoto = $t->image;

            $img = time().'.' . $request->image->getClientOriginalExtension();
            // dd($img);
            // $img = time().'.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];

            \Image::make($request->image)->save(public_path('img/').$img);
            $request->merge(['image' => $img]);

            $userPhoto = public_path('img/').$currentPhoto;
            $t->image = $img;

            $t->email = $request->email;

            if($t->save())
            {
                return Response::json(['status' => true, 'message' => 'Created']);
            }
        }
    }

}
