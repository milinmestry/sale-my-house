<?php

namespace App\Http\Controllers;

use App\Broker;
use App\Http\Requests\ValidateBroker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Lang;

class BrokerController extends Controller
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
    return view('broker.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $broker = new Broker;

    $broker->user_id = Auth::id();
    $broker->agency_name = $request->input('agency_name');
    $broker->present_address = $request->input('present_address');
    $broker->postal_code = $request->input('postal_code');
    $broker->contact_landline = $request->input('contact_landline');
    $broker->alternate_email = $request->input('alternate_email');

    $broker->save();
    
    unset($broker);

    return redirect('/user')->with(
      'status', Lang::get('site.SUCCESS_MESSAGES.BROKER_STORED'
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
