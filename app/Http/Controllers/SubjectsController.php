<?php

namespace App\Http\Controllers;

use App\Models\School_subjects;
use App\Models\Subjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SubjectsController extends Controller
{
    public function view()
    {
        $data = array();

        if(Session::get('isSuperAdmin')){
            $data['subjects'] = Subjects::all();
        }else{
            $id = Session::get('user')['id'];
            $data['schoolsubjects'] = School_subjects::where('school_id',$id)->with('subjects')->get();
        }

        return view('subjects.index')->with($data);
    }

    public function add()
    {
        $data = array();

        if(Session::get('isSchool')){
            $data['subjects'] = Subjects::all();
            return view('subjects.school.add')->with($data);
        }else{
            return view('subjects.add')->with($data);
        }
    }

    public function create(Request $request)
    {
        $rules = array(
            'subject_name' => 'required',
            'subject_status'=>'required',
        );

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails())
        {
            return Response::json(array(
                'status' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ));

        }else{

            $subject = new Subjects();
            $subject->subject_name = $request->subject_name;
            $subject->subject_status = $request->subject_status;

            if($subject->save())
            {
                return Response::json(['status' => true, 'message' => 'Subject Created']);
            }
        }
    }

    public function create_school_subject(Request $request)
    {
        $validator = Validator::make($request->all(),['subject' => 'required']);

        if($validator->fails())
        {
            return Response::json(array(
                'status' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ));

        }else{

            if(school_subjects::where(['school_id' => Session::get('user')['id'], 'subject_id' => $request->subject])->exists()){

                return Response::json(['status' => 'exist', 'message' => 'Subject Already Selected']);

            }else{

                $subject = new school_subjects();
                $subject->school_id = Session::get('user')['id'];
                $subject->subject_id = $request->subject;

                if($subject->save())
                {
                    return Response::json(['status' => true, 'message' => 'Subject Selected']);
                }
            }
        }
    }
}
