<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lnew;
use File;
use Image;
use Session;
use Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lnews = lnew::orderBy('id','asc')->paginate(10);
        return view('news.index')->withLnews($lnews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
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
            'titleNews' => 'required',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:lnews,slug',
            'imageNews' => 'sometimes|image',
            'bodyNews' => 'required'
            ));


        $lnew = new lnew;
        $lnew->titleNews = $request->titleNews;
        $lnew->bodyNews = $request->bodyNews;
        $lnew->slug = $request->slug;
        if($request->hasfile('imageNews')){
            $image = $request->file('imageNews');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(1200,620)->save($location);
            $lnew->imageNews=$filename;   
        }

        $lnew->save();
         Session::flash('success','The News was successfully save!');
        return redirect()->route('news.show',$lnew->id);
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
        $lnew = lnew::find($id);
        return view('news.show')->withLnew($lnew);
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
        $lnew = Lnew::find($id);
        return view('news.edit')->withLnew($lnew);
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
            $lnew = lnew::find($id);
            
                $this->validate($request, array(
                'titleNews' => 'required',
                'slug' => "required|alpha_dash|min:5|max:255|unique:lnews,slug,$id",
                'bodyNews' => 'required',
                'imageNews' => 'image'
            ));
            
            if($request->hasfile('imageNews')){
             //add the new photo   
            $image = $request->file('imageNews');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);

            File::delete(public_path('images/'. $lnew->imageNews));

            Image::make($image)->resize(1200,620)->save($location);

            $lnew->imageNews = $filename; 

            }

            $lnew->titleNews = $request->input('titleNews');
            $lnew->slug = $request->input('slug');
            $lnew->bodyNews = $request->input('bodyNews');
            $lnew->save();
            Session::flash('success','This Course was successfully saved.');
            return redirect()->route('news.show',$lnew->id);
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
        $lnew = lnew::find($id);
        Storage::delete($lnew->imageNews);
        $lnew->delete();
        Session::flash('success','The Course was successfully deleted');
        return redirect()->route('news.index',$lnew->id);
    }
}
