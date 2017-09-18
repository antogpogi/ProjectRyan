<?php

namespace App\http\Controllers;

use App\Announcement;
use App\Event;
use App\Course;
use App\lnew;
use App\pta;
use App\Discount;
use App\Tuition;
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

	public function getPtaFront()
	{
		$ptas = pta::orderBy('created_at','asc')->get();

		return view('pta-front')->withPtas($ptas);
	}
}