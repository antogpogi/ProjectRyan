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
use App\Section;
use App\Staf;
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
		$sta = DB::table('stafs')->count();
		$pt = DB::table('ptas')->count();
		$cour = DB::table('courses')->count();
		$new = DB::table('lnews')->count();
		$eve = DB::table('events')->count();
		$ann = DB::table('announcements')->count();
		$sec = DB::table('sections')->count();
		$dis = DB::table('discounts')->count();
		$tui = DB::table('tuitions')->count();

		$courses = Course::orderBy('created_at','asc')->paginate(4);
		$events = Event::orderBy('created_at','asc')->paginate(4);
		$discounts = Discount::orderBy('created_at','asc')->paginate(4);
		$tuitions = Tuition::orderBy('created_at','asc')->paginate(4);
		$sections = Section::orderBy('created_at','asc')->paginate(4);
		$news = lnew::orderBy('created_at','asc')->paginate(4);
		$posts = Announcement::orderBy('created_at','asc')->paginate(4);
		$ptas = pta::orderBy('created_at','asc')->paginate(10);
		$faculty = Faculty::orderBy('created_at','asc')->paginate(10);
		$staff = staf::orderBy('created_at','asc')->paginate(10);



		return view('dashboard')->withFac($fac)->withSta($sta)->withPt($pt)->withCour($cour)
		->withNew($new)->withEve($eve)->withAnn($ann)->withSec($sec)->withDis($dis)->withTui($tui)
		->withCourses($courses)->withEvents($events)->withDiscounts($discounts)->withTuitions($tuitions)
		->withSections($sections)->withNews($news)->withPosts($posts)->withPtas($ptas)
		->withFaculty($faculty)->withStaff($staff);
	}
}