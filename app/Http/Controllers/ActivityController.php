<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\School_activities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ActivityController extends Controller
{
    public function view()
    {
        $data = array();

        if(Session::get('isSuperAdmin')){

            $data['activities'] = Activities::all();

        }elseif(Session::get('isHeadSchool')){

            $id = Session::get('user')['id'];
            $data['schoolactivities'] = School_activities::where('school_id',$id)->with('activities')->get();

        }else{

            $id = Session::get('user')['school_parent'];
            $data['schoolactivities'] = School_activities::where('school_id',$id)->with('activities')->get();
        }

        return view('activities.index')->with($data);
    }

    public function add()
    {
        $data['activities'] = Activities::all();
        return view('activities.add')->with($data);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(),[ 'activity' => 'required']);

        if($validator->fails()){

            return Response::json(array(
                'status' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ));

        }else{

            if(School_activities::where(['school_id' => Session::get('user')['id'], 'activity_id' => $request->activity])->exists()){

                return Response::json(['status' => 'exist', 'message' => 'Activity Already Selected']);

            }else{

                $acitiviy = new School_activities();
                $acitiviy->school_id = Session::get('user')['id'];
                $acitiviy->activity_id = $request->activity;

                if($acitiviy->save())
                {
                    return Response::json(['status' => true, 'message' => 'Activity Selected']);
                }
            }
        }
    }
}
