<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\School_rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RoomsController extends Controller
{
    public function view()
    {
        $data = array();

        if(Session::get('isSuperAdmin')){
            $data['rooms'] = Rooms::all();
        }else{
            $id = Session::get('user')['id'];
            $data['schoolrooms'] = school_rooms::where('school_id',$id)->with('rooms')->get();
        }

        return view('rooms.index')->with($data);
    }

    public function add()
    {
        $data = array();

        if(Session::get('isSchool')){
            $data['rooms'] = Rooms::all();
            return view('rooms.school.add')->with($data);
        }else{
            return view('rooms.add')->with($data);
        }
    }

    public function create(Request $request)
    {
        $rules = array(
            'room_name' => 'required',
            'room_status'=>'required',
        );

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails())
        {
            return Response::json(array(
                'status' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ));

        }else{

            $room = new Rooms();
            $room->room_name = $request->room_name;
            $room->room_status = $request->room_status;

            if($room->save())
            {
                return Response::json(['status' => true, 'message' => 'Room Created']);
            }
        }
    }

    public function create_school_room(Request $request)
    {
        $validator = Validator::make($request->all(),['room' => 'required']);

        if($validator->fails())
        {
            return Response::json(array(
                'status' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ));

        }else{

            if(school_rooms::where(['school_id' => Session::get('user')['id'], 'room_id' => $request->room])->exists()){

                return Response::json(['status' => 'exist', 'message' => 'Room Already Selected']);

            }else{

                $subject = new school_rooms();
                $subject->school_id = Session::get('user')['id'];
                $subject->room_id= $request->room;

                if($subject->save())
                {
                    return Response::json(['status' => true, 'message' => 'Room Selected']);
                }
            }
        }
    }
}
