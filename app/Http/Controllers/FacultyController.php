<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use Session;
use Image;
use Storage;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculty = Faculty::orderBy('id','asc')->paginate(10);
        return view('faculty.index')->withFaculty($faculty);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $advisoryClass = Faculty::pluck('advisoryClass')->all();
        return view('faculty.create', compact('advisoryClass'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'firstName' => 'required',
            'lastName' => 'required',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:Faculties,slug',
            'imageFaculty' => 'sometimes|image',
            'advisoryClass' => 'required'
            ));

        $faculty = new Faculty;
        $faculty->firstName=$request->firstName;
        $faculty->lastName=$request->lastName;
        $faculty->middleName=$request->middleName;
        $faculty->advisoryClass=$request->advisoryClass;
        $faculty->slug=$request->slug;
        if($request->hasfile('imageFaculty')){
            $image = $request->file('imageFaculty');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(200,400)->save($location);
            $faculty->imageFaculty=$filename;
        }
        $faculty->save();
        Session::flash('success','The Faculty was successfully save.');
        return redirect()->route('faculty.show',$faculty->id);
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
        $faculty = Faculty::find($id);
        return view('faculty.show')->withFaculty($faculty);
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
        $faculty = Faculty::find($id);
        $advisoryClass = Faculty::pluck('advisoryClass')->all();
        return view('faculty.edit', compact('advisoryClass'))->withFaculty($faculty);
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
         $faculty = Faculty::find($id);
            
                $this->validate($request, array(
                'lastName' => 'required',
                'firstName' => 'required',
                'middleName' => 'required',
                'imageFaculty' => 'image'
            ));
            
            if($request->hasfile('imageFaculty')){
             //add the new photo   
            $image = $request->file('imageFaculty');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);

            File::delete(public_path('images/'. $faculty->imageFaculty));

            Image::make($image)->resize(1200,620)->save($location);

            $faculty->imageFaculty = $filename; 

            }

            $faculty->lastName = $request->input('lastName');
            $faculty->firstName = $request->input('firstName');
            $faculty->middleName = $request->input('middleName');
            $faculty->advisoryClass = $request->input('advisoryClass');
            $faculty->save();
            Session::flash('success','This Faculty Member was successfully saved.');
            return redirect()->route('faculty.show',$faculty->id);
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
        $faculty = Faculty::find($id);
        Storage::delete($faculty->imageFaculty);
        $faculty->delete();
        Session::flash('success','The Faculty Member was successfully deleted');
        return redirect()->route('faculty.index',$faculty->id);
    }
}
