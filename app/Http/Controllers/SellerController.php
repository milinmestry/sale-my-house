<?php

namespace App\Http\Controllers;

use App\Seller;
use App\Http\Requests\ValidateSeller;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Lang;

class SellerController extends Controller
{
  /**
   *
   * @var string
   */
  protected $redirectTo = '/'; // asset

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return 'index';
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('seller.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(ValidateSeller $request)
  {
    // dd(Auth::id());
    // return Seller::create([
    //   'user_id' => Auth::id(),
    //   'permanent_address' => $request->input('permanent_address'),
    //   'present_address' => $request->input('present_address'),
    //   'alternate_email' => $request->input('alternate_email'),
    //   'contact_landline' => $request->input('contact_landline'),
    // ]);

    $seller = new Seller;

    $seller->user_id = Auth::id();
    $seller->permanent_address = $request->input('permanent_address');
    $seller->present_address = $request->input('present_address');
    $seller->alternate_email = $request->input('alternate_email');
    $seller->contact_landline = $request->input('contact_landline');

    $seller->save();
    // return redirect()->route('/user');
    return redirect('/user')->with(
      'status', Lang::get('site.SUCCESS_MESSAGES.SELLER_STORED'
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
      //
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
  }

}
