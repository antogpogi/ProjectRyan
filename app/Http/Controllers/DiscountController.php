<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discount;
use Session;

class DiscountController extends Controller
{
    /*public function __construct()
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
        $discounts = Discount::orderBy('Created_at','asc')->paginate(10);
        return view('discount.index')->withDiscounts($discounts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('discount.create');
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
            'titleDiscount' => 'required',
            'percent' => 'required'
            )); 

        $discount = new Discount;
        $discount->titleDiscount = $request->titleDiscount;
        $discount->percent = $request->percent;
        $discount->save();
        return redirect()->route('discount.show',$discount->id);
        Session::flash('success','The Discount was successfully save!');  
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
        $discount = Discount::find($id);
        return view('discount.show')->withDiscount($discount);
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
        $discount = Discount::find($id);
        return view('discount.edit')->withDiscount($discount);
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

        $discount = Discount::find($id);
         $this->validate($request,array(
            'titleDiscount' => 'required',
            'percent' => 'required'
            )); 

        $discount->titleDiscount = $request->input('titleDiscount');
        $discount->percent = $request->input('percent');
        $discount->save();
        return redirect()->route('discount.show',$discount->id);
        Session::flash('success','The Discount was successfully save!');  
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
        $discount = Discount::find($id);
        $discount->delete();
        Session::flash('success','The Discount was successfully deleted');
        return  redirect()->route('discount.index',$discount->id);
    }
}
