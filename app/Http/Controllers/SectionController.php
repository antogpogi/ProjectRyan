<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Section;
use Session;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('section.create');
        
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

            'sectionName' => 'required|unique:Sections',
            'timeAm' => 'required',
            'timePm' => 'required'

            ));
        $section = new Section;
        $section->sectionName = $request->sectionName;
        $section->timeAm = $request->timeAm;
        $section->timePm = $request->timePm;
        $section->adviser = "";
        $section->course = $request->title;
        $section->save();
        Session::flash('success','The Course was successfully save!');
        return redirect()->route('course.show',$request->id);

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
        $course = Course::find($id);
        return view('section.create')->withCourse($course);
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
        
        $section = Section::find($id);
        $course = Course::where('titleCourse', $section->course)->first();
        return View('section.edit')->withCourse($course)->withSection($section);
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

        $sections = Section::find($id);
        $this->validate($request, array(

            'sectionName' => 'required',
            'timeAm' => 'required',
            'timePm' => 'required'

            ));
        $sections->sectionName = $request->sectionName;
        $sections->timeAm = $request->timeAm;
        $sections->timePm = $request->timePm;
        $sections->save();
        Session::flash('success','The Section was successfully save!');
        return redirect()->route('course.index');
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
        $sections = Section::find($id);
        $sections->delete();
        Session::flash('success','The section was successfully deleted');
        return redirect()->route('course.index');
    }
}
