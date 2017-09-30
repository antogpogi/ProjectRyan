<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Faculty;
use App\Section;
use Session;
use Image;
use Storage;
use File;

class FacultyController extends Controller
{
    public function __construct()
    {
       
    }


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
        $sections = Section::orderBy('course')->get();
        return view('faculty.create')->withSections($sections);
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
            'level' => 'required',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:Faculties,slug',
            'imageFaculty' => 'sometimes|image|max:1000',
            'advisoryClass' => 'required',
            ));

        $faculty = new Faculty;
        $faculty->firstName=$request->firstName;
        $faculty->level=$request->level;
        $faculty->lastName=$request->lastName;
        $faculty->middleName=$request->middleName;
        $faculty->advisoryClass = Input::get('advisoryClass');
        $faculty->slug=$request->slug;
        if($request->hasfile('imageFaculty')){
            $image = $request->file('imageFaculty');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(420,620)->save($location);
            $faculty->imageFaculty=$filename;
        }

        $faculty->save();
        $section = Section::where('sectionName', Input::get('advisoryClass'))->update(['adviser' => $request->firstName." ".$request->middleName." ".$request->lastName]);
        
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
        $sections = Section::orderBy('course')->get();
        return view('faculty.edit')->withFaculty($faculty)->withSections($sections);
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
                'level' => 'required',
                'imageFaculty' => 'image|max:1500'
            ));
            
            if($request->hasfile('imageFaculty')){
             //add the new photo   
            $image = $request->file('imageFaculty');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);

            File::delete(public_path('images/'. $faculty->imageFaculty));

            Image::make($image)->resize(420,620)->save($location);

            $faculty->imageFaculty = $filename; 

            }



            $faculty->lastName = $request->input('lastName');
            $faculty->firstName = $request->input('firstName');
            $faculty->middleName = $request->input('middleName');
            $faculty->level = $request->input('level');
            $faculty->advisoryClass = $request->input('advisoryClass');
            $faculty->save();
            $section = Section::where('sectionName', Input::get('advisoryClass'))->update(['adviser' => $request->firstName." ".$request->middleName." ".$request->lastName]);
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
