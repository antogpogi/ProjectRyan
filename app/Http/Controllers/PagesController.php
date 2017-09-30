<?php

namespace App\http\Controllers;

use App\Announcement;
use App\Event;
use App\Course;
use App\lnew;
use App\pta;
use App\Faculty;
use App\Discount;
use App\Tuition;
use DB;
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
		$discounts = Discount::orderBy('created_at','asc')->limit(10)->get();
		$tuitions = Tuition::orderBy('created_at','asc')->limit(10)->get();
		return view('admission')->withDiscounts($discounts)->withTuitions($tuitions);
	}

	public function getFaculty()
	{
		$faculty = Faculty::orderBy('created_at','asc')->get();
		return view('frontFaculty')->withFaculty($faculty);
	}
	public function getHistory()
	{
		return view('history');
	}
	public function getBoard()
	{
		return view('board');
	}

	public function getPtaFront()
	{
		$ptas = pta::orderBy('created_at','asc')->get();

		return view('pta-front')->withPtas($ptas);
	}

	public function getDashboard()
	{
		$fac = DB::table('faculties')->count();
		$staf = DB::table('stafs')->count();
		$pta = DB::table('ptas')->count();
		$course = DB::table('courses')->count();
		$new = DB::table('lnews')->count();
		$event = DB::table('events')->count();
		$ann = DB::table('announcements')->count();
		$user = DB::table('users')->count();
		$dis = DB::table('discounts')->count();
		$tui = DB::table('tuitions')->count();

		

		return view('dashboard')->withFac($fac)->withStaf($staf)->withPta($pta)->withCourse($course)
		->withNew($new)->withEvent($event)->withAnn($ann)->withUser($user)->withDis($dis)->withTui($tui);
	}
}