<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tuition;
use Session;
class TuitionController extends Controller
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
        $tuitions = Tuition::orderBy('Created_at','asc')->paginate(10);
        return view('tuition.index')->withTuitions($tuitions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tuition.create');
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
         $this->validate($request,array(
            'level' => 'required',
            'title' => 'required',
            'downPayment' => 'required',
            'computerFee' => 'required',
            'monthlyFee' => 'required'
            )); 

        $tuition = new Tuition;
        $tuition->title = $request->title;
        $tuition->level = $request->level;
        $tuition->downPayment = $request->downPayment;
        $tuition->computerFee = $request->computerFee;
        $tuition->monthlyFee = $request->monthlyFee;
        $tuition->save();
        Session::flash('success','The Tuition was successfully save!');  
        return redirect()->route('tuition.show',$tuition->id);
       
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
        $tuition = Tuition::find($id);
        return view('tuition.show')->withTuition($tuition);
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
        $tuition = Tuition::find($id);
        return view('tuition.edit')->withTuition($tuition);
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
        $discount = Tuition::find($id);
            $this->validate($request,array(
            'level' => 'required',
            'title' => 'required',
            'downPayment' => 'required',
            'computerFee' => 'required',
            'monthlyFee' => 'required'
            )); 
        $tuition = Tuition::find($id);
        $tuition->title = $request->input('title');
        $tuition->level = $request->input('level');
        $tuition->downPayment = $request->input('downPayment');
        $tuition->computerFee = $request->input('computerFee');
        $tuition->monthlyFee = $request->input('monthlyFee');
        $tuition->save();
        return redirect()->route('tuition.show',$tuition->id);
        Session::flash('success','The Tuition was successfully save!');  
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
        $tuition = Tuition::find($id);
        $tuition->delete();
        Session::flash('success','The Discount was successfully deleted');
        return  redirect()->route('tuition.index',$tuition->id);
    }
}
