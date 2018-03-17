<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    return __METHOD__;
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
