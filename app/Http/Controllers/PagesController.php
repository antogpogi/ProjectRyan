<?php

namespace App\http\Controllers;

use App\Announcement;
use App\Event;
use App\Course;
use App\lnew;
class PagesController extends Controller
{
	public function getIndex()
	{
		$announcements = Announcement::orderBy('created_at','asc')->limit(5)->get();
		$events = Event::orderBy('created_at','asc')->limit(3)->get();
		$courses = Course::orderBy('created_at','asc')->limit(4)->get();
		$lnew = lnew::orderBy('created_at','asc')->limit(5)->get();
		return view('front')->withAnnouncements($announcements)->withEvents($events)->withCourses($courses)->withLnew($lnew);
		
	}

	public function getAdmission()
	{
		return view('admission');
	}

	public function getFaculty()
	{
		return view('frontFaculty');
	}
	public function getHistory()
	{
		return view('history');
	}
	public function getBoard()
	{
		return view('board');
	}
}