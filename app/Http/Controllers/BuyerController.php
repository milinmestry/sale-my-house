<?php

namespace App\Http\Controllers;

use App\Buyer;
use App\Http\Requests\ValidateBuyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Lang;

class BuyerController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return __METHOD__;
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $cashInHandRange = [
      Lang::get('forms.DEFAULT_SELECT_TEXT'),
      Lang::get('forms.CASH_IN_HAND_RANGES.INR_LT_1_LAKH'),
      Lang::get('forms.CASH_IN_HAND_RANGES.INR_1-5_LAKH'),
      Lang::get('forms.CASH_IN_HAND_RANGES.INR_5-10_LAKH'),
      Lang::get('forms.CASH_IN_HAND_RANGES.INR_GT-10_LAKH'),
    ];
    return view('buyer.create', compact(
      'cashInHandRange'
    ));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\ValidateBuyer  $request
   * @return \Illuminate\Http\Response
   */
  public function store(ValidateBuyer $request)
  {
    $buyer = new Buyer;
    $homeloanCollection = collect([
      'data' => $request->input('homeloan_details')
    ]);

    $buyer->user_id = Auth::id();
    $buyer->permanent_address = $request->input('permanent_address');
    $buyer->present_address = $request->input('present_address');
    $buyer->alternate_email = $request->input('alternate_email');
    $buyer->contact_landline = $request->input('contact_landline');
    $buyer->cash_in_hand = $request->input('cash_in_hand');
    $buyer->homeloan_required = $request->input('homeloan_required');
    $buyer->homeloan_details = $homeloanCollection;

    $buyer->save();
    
    unset($buyer);

    return redirect('/user')->with(
      'status', Lang::get('site.SUCCESS_MESSAGES.BUYER_STORED'
    ));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    return __METHOD__;
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    return __METHOD__;
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
    return __METHOD__;
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    return __METHOD__;
  }
}
