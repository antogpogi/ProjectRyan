<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use Session;

class AnnouncementController extends Controller
{
    /**
     * Dissplay a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $posts = Announcement::orderBy('id','asc')->paginate(10);
        return view('announcement.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcement/create');
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
            'titleAnnouncement' => 'required',
            'dateAnnouncement' => 'required',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:Announcements,slug',
            'bodyAnnouncement' => 'required'
            ));
        $post = new Announcement;
        $post->titleAnnouncement = $request->titleAnnouncement;
        $post->dateAnnouncement = $request->dateAnnouncement;
        $post->slug = $request->slug;
        $post->bodyAnnouncement = $request->bodyAnnouncement;
        $post->save();
        Session::flash('success','The Announcement was successfully save!');
        return redirect()->route('announcement.show',$post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Announcement::find($id);
        return view('announcement.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Announcement::find($id);
        return view('announcement.edit')->withPost($post);
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
            $post = Announcement::find($id);
            if($request->input('slug') == $post->slug ){
                $this->validate($request, array(
                'titleAnnouncement' => 'required',
                'dateAnnouncement' => 'required',
                'bodyAnnouncement' => 'required'
            ));
            }
            else{
                $this->validate($request, array(
                'titleAnnouncement' => 'required',
                'dateAnnouncement' => 'required',
                'slug' => 'required|alpha_dash|min:5|max:255|unique:Announcements,slug',
                'bodyAnnouncement' => 'required'
            ));
            }
            
            $post = Announcement::find($id);
            $post->titleAnnouncement = $request->input('titleAnnouncement');
            $post->dateAnnouncement = $request->input('dateAnnouncement');
            $post->slug = $request->input('slug');
            $post->bodyAnnouncement = $request->input('bodyAnnouncement');
            $post->save();
            Session::flash('success','This Announcement was successfully saved.');
            return redirect()->route('announcement.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Announcement::find($id);
        $post->delete();
        Session::flash('success','The Announcement was successfully deleted');
        return redirect()->route('announcement.index',$post->id);
    }
}
