<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use Session;
use Image;
use Storage;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $staff = Staff::orderBy('id','asc')->paginate(10);
        return view('staff.index')->withStaff($staff);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, array(
            'firstName' => 'required',
            'lastName' => 'required',
            'imageStaff' => 'sometimes|image',
            'position' => 'required'
            ));

        $staff = new Staff;
        $staff->firstName=$request->firstName;
        $staff->lastName=$request->lastName;
        $staff->middleName=$request->middleName;
        $staff->position=$request->position;
        if($request->hasfile('imageStaff')){
            $image = $request->file('imageStaff');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(200,400)->save($location);
            $staff->imageStaff=$filename;
        }
        $staff->save();
        Session::flash('success','The Staff was successfully save.');
        return redirect()->route('staff.show',$staff->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $staff = Staff::find($id);
        return view('staff.show')->withStaff($staff);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $staff = Staff::find($id);
        return view('staff.edit')->withStaff($staff);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $staff = Staff::find($id);
            
                $this->validate($request, array(
                'lastName' => 'required',
                'firstName' => 'required',
                'middleName' => 'required',
                'imageStaff' => 'image'
            ));
            
            if($request->hasfile('imageStaff')){
             //add the new photo   
            $image = $request->file('imageStaff');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);

            File::delete(public_path('images/'. $staff->imageStaff));

            Image::make($image)->resize(1200,620)->save($location);

            $staff->imageStaff = $filename; 

            }

            $staff->lastName = $request->input('lastName');
            $staff->firstName = $request->input('firstName');
            $staff->middleName = $request->input('middleName');
            $staff->position = $request->input('position');
            $staff->save();
            Session::flash('success','This Staff Member was successfully saved.');
            return redirect()->route('staff.show',$staff->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $staff = Staff::find($id);
        Storage::delete($staff->imageStaff);
        $staff->delete();
        Session::flash('success','The Staff Member was successfully deleted');
        return redirect()->route('staff.index',$staff->id);
    }
}
