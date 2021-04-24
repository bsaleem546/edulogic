<?php

namespace App\Http\Controllers;

use App\Models\Schools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SchoolController extends Controller
{
    public function view()
    {
        $data = array();

        if(Session::get('isSuperAdmin')){
            $data['schools'] = Schools::where('school_parent',0)->get();

        }else{
            $id = Session::get('user')['id'];
            $data['schools'] = Schools::where('school_parent',$id)->get();
        }

        return view('schools.index')->with($data);
    }

    public function add()
    {
        if(Session::get('isSuperAdmin')){
            return view('schools.add');
        }else{
            return view('schools.branches.add');
        }
    }

    public function create(Request $request)
    {
        $rules = [
            'school_name' => 'required',
            'school_logo' => 'required|image|mimes:jpg,png,gif|max:2000',
            'school_type'=>'required',
            'school_branches'=>'required',
            'school_owner'=>'required',
            'school_owner_no'=>'required',
            'school_principal'=>'required',
            'school_principal_no'=>'required',
            'school_landline'=>'required',
            'school_email'=>'required|email|unique:schools,school_email',
            'school_password'=>'required|min:6',
            'school_confirm_password'=>'required|min:6|same:school_password',
            'school_days'=>'required',
            'school_shift'=>'required',
            'school_address'=>'required',
            'school_state'=>'required',
            'school_city'=>'required',
            'school_zip'=>'required|integer',
            'school_country'=>'required',
            'school_website'=>'required',
            'school_notes'=>'required',
        ];

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails())
        {
            return Response::json(array(
                'status' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ));

        }else{

            $name = $request->file('school_logo')->getClientOriginalName();
            $destinationPath = public_path('/uploads');
            $request->file('school_logo')->move($destinationPath, $name);

            $school = new Schools();
            $school->school_name = $request->school_name;
            $school->school_logo = $name;
            $school->school_type = $request->school_type;
            $school->school_branches = $request->school_branches;
            $school->school_headoffice = $request->school_headoffice;
            $school->school_owner = $request->school_owner;
            $school->school_owner_no = $request->school_owner_no;
            $school->school_principal = $request->school_principal;
            $school->school_principal_no = $request->school_principal_no;
            $school->school_landline = $request->school_landline;
            $school->school_email = $request->school_email;
            $school->school_password = md5($request->school_password);
            $school->school_days = $request->school_days;
            $school->school_shift = $request->school_shift;
            $school->school_address = $request->school_address;
            $school->school_state = $request->school_state;
            $school->school_city = $request->school_city;
            $school->school_zip = $request->school_zip;
            $school->school_country = $request->school_country;
            $school->school_website = $request->school_website;
            $school->school_notes = $request->school_notes;
            $school->school_parent = Session::get('isSuperAdmin') ? 0 : Session::get('user')['id'];

            if($school->save()){
                return Response::json(['status' => true, 'message' => 'School Created']);
            }
        }
    }

    public function create_branch(Request $request)
    {
        $rules = [
            'school_principal'=>'required',
            'school_principal_no'=>'required',
            'school_landline'=>'required',
            'school_email'=>'required|email|unique:schools,school_email',
            'school_password'=>'required|min:6',
            'school_confirm_password'=>'required|min:6|same:school_password',
            'school_days'=>'required',
            'school_shift'=>'required',
            'school_address'=>'required',
            'school_state'=>'required',
            'school_city'=>'required',
            'school_zip'=>'required|integer',
            'school_website'=>'required',
            'school_notes'=>'required',
        ];

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails())
        {
            return Response::json(array(
                'status' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ));

        }else{

            $school = new Schools();
            $school->school_name = Session::get('user')['school_name'];
            $school->school_logo = Session::get('user')['school_logo'];
            $school->school_type = Session::get('user')['school_type'];
            $school->school_branches = 0;
            $school->school_headoffice = 'No';
            $school->school_owner = Session::get('user')['school_owner'];
            $school->school_owner_no = Session::get('user')['school_owner_no'];
            $school->school_principal = $request->school_principal;
            $school->school_principal_no = $request->school_principal_no;
            $school->school_landline = $request->school_landline;
            $school->school_email = $request->school_email;
            $school->school_password = md5($request->school_password);
            $school->school_days = $request->school_days;
            $school->school_shift = $request->school_shift;
            $school->school_address = $request->school_address;
            $school->school_state = $request->school_state;
            $school->school_city = $request->school_city;
            $school->school_zip = $request->school_zip;
            $school->school_country = Session::get('user')['school_country'];
            $school->school_website = $request->school_website;
            $school->school_notes = $request->school_notes;
            $school->school_parent = Session::get('isSuperAdmin') ? 0 : Session::get('user')['id'];

            if(Session::get('isHeadSchool') && Schools::where('school_parent',Session::get('user')['id'])->count() >= Session::get('user')['school_branches']){
                return Response::json(['status' => 'exist', 'message' => 'Branches Limit Exceeded']);
            }else
            {
                if($school->save()){
                    return Response::json(['status' => true, 'message' => 'School Created']);
                }
            }
        }
    }
}
