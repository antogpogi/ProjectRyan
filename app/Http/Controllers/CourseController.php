<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Session;
use File;
use Image;
use Storage;

class CourseController extends Controller
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
        $courses = Course::orderBy('id','asc')->paginate(10);
        return view('course.index')->withCourses($courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create');
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

            'titleCourse' => 'required',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:courses,slug',
            'imageCourse' => 'required',
            'bodyCourse' => 'required',
            'imageCourse' => 'sometimes|image'

            ));

        $course = new Course;
        $course->titleCourse = $request->titleCourse;
        $course->slug = $request->slug;
        $course->bodyCourse = $request->bodyCourse;
        if($request->hasfile('imageCourse')){
            $image = $request->file('imageCourse');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);

            
            Image::make($image)->resize(600,400)->save($location);

        $course->imageCourse=$filename;    
        }
        $course->save();
        Session::flash('success','The Course was successfully save!');
        return redirect()->route('course.show',$course->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('course.show')->withCourse($course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        return view('course.edit')->withCourse($course);
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
         $course = Course::find($id);
            
                $this->validate($request, array(
                'titleCourse' => 'required',
                'slug' => "required|alpha_dash|min:5|max:255|unique:Announcements,slug,$id",
                'bodyCourse' => 'required',
                'imageCourse' => 'image'
            ));
            
            if($request->hasfile('imageCourse')){
             //add the new photo   
            $image = $request->file('imageCourse');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);

            File::delete(public_path('images/'. $course->imageCourse));

            Image::make($image)->resize(400,300)->save($location);

            //$oldFilename = $course->imageCourse;
            //update the database
            $course->imageCourse = $filename; 
            //delete the old photo  
           // Storage::delete($oldFilename);

            }

           
            $course->titleCourse = $request->input('titleCourse');
            $course->slug = $request->input('slug');
            $course->bodyCourse = $request->input('bodyCourse');
            $course->save();
            Session::flash('success','This Course was successfully saved.');
            return redirect()->route('course.show',$course->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        Storage::delete($course->imageCourse);
        $course->delete();
        Session::flash('success','The Course was successfully deleted');
        return redirect()->route('course.index',$course->id);
    }
}
