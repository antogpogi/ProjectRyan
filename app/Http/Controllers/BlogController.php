<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use App\Course;
use App\lnew;
use Image;

class BlogController extends Controller
{
   	public function getSingle($slug){
   		//fetch from the database on slug
   		$announcement = Announcement::where('slug', '=',$slug)->first();
   		
   		//return the view and pass in the post object
   		return view('blog.single')->withAnnouncement($announcement);
   	}

   	public function getCourse($slug){
   		$course = Course::where('slug','=',$slug)->first();
   		return view('slug-course.single')->withCourse($course);
   	}
     public function getNews($slug){
         $lnew = lnew::where('slug','=',$slug)->first();
         return view('slug-news.single')->withLnew($lnew);
      }
}
