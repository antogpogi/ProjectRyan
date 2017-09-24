<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pta;
use Session;

class PtaController extends Controller
{
   /* public function __construct()
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
        $ptas = pta::orderBy('id','asc')->paginate(10);
        return view('pta.index')->withPtas($ptas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'ptaFname' => 'required',
            'ptaLname' => 'required',
            'ptaMi' => 'required',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:ptas,slug',
            'ptaPosition' => 'required',
            'ptaMrs' => 'required'
            ));
        $pta = new pta;
        $pta->ptaFname = $request->ptaFname;
        $pta->ptaLname = $request->ptaLname;
        $pta->ptaMi = $request->ptaMi;
        $pta->ptaPosition = $request->ptaPosition;
        $pta->ptaMrs = $request->ptaMrs;
        $pta->slug = $request->slug;
        $pta->save();
        Session::flash('success','The PTA was successfully save!');
        return redirect()->route('pta.show',$pta->id); 
       
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
       $pta = pta::find($id);
       return view('pta.show')->withPta($pta);
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
        $pta = pta::find($id);
        return view('pta.edit')->withPta($pta);
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
        $pta = pta::find($id);

        $this->validate($request, array(
            'ptaFname' => 'required',
            'ptaLname' => 'required',
            'ptaMi' => 'required',
            'ptaPosition' => 'required',
            'ptaMrs' => 'required',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:ptas,slug,$id'
            ));
        $pta->ptaLname = $request->input('ptaLname');
        $pta->ptaFname = $request->input('ptaFname');
        $pta->ptaMi = $request->input('ptaMi');
        $pta->ptaPosition = $request->input('ptaPosition');
        $pta->slug = $request->input('slug');
        $pta->ptaMrs = $request->input('ptaMrs');
        $pta->save();
        Session::flash('success','This PTA was successfully saved.');
        return redirect()->route('pta.show',$pta->id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pta = pta::find($id);
        $pta->delete();
        Session::flash('success','The PTA was successfully deleted');
        return  redirect()->route('pta.index',$pta->id);
    }
}
