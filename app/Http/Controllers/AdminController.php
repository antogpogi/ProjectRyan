<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
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
        $admin = User::orderBy('id','asc')->paginate(10);
        return view('admin.index')->withAdmin($admin);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/create');
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
            'username' => 'required',
            'password' => 'required',
            'position' => 'required'
            ));
        $admin = new Admin;
        $admin->username = $request->username;
        $admin->password = $request->password;
        $admin->position = $request->position;
        $admin->save();
        Session::flash('success','The Admin was successfully save!');
        return redirect()->route('admin.show',$admin->id);
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
        $admin = User::find($id);
        return view('admin.show')->withAdmin($admin);
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
        $admin = User::find($id);
        return view('announcement.edit')->withAdmin($admin);
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
            $this->validate($request, array(
            'username' => 'required',
            'password' => 'required',
            'position' => 'required'));
            
            $admin = User::find($id);
            $admin->username = $request->input('username');
            $admin->password = $request->input('password');
            $admin->position = $request->input('position');
            $admin->save();
            Session::flash('success','This Admin was successfully saved.');
            return redirect()->route('admin.show',$admin->id);
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
        $admin = User::find($id);
        $admin->delete();
        Session::flash('success','The Admin was successfully deleted');
        return redirect()->route('admin.index',$admin->id);
    }
}
