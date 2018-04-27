<?php

namespace App\Http\Controllers;

use App\PropertyEnquiryDetails;
use Illuminate\Http\Request;

class PropertyEnquiryDetailsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {

  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $pEnquiryDetails = new PropertyEnquiryDetails;

    $pEnquiryDetails->property_enquiry_id = $pEnquiry->id;
    $pEnquiryDetails->enquire_visit_type = $request->input('enquiry_visit_type');
    $pEnquiryDetails->price_quoted = $request->input('offer_amount');
    $pEnquiryDetails->price_quoted_by = $request->input('fullname');

    $pEnquiryDetails->save();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\PropertyEnquiryDetails  $propertyEnquiryDetails
   * @return \Illuminate\Http\Response
   */
  public function show(PropertyEnquiryDetails $propertyEnquiryDetails)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\PropertyEnquiryDetails  $propertyEnquiryDetails
   * @return \Illuminate\Http\Response
   */
  public function edit(PropertyEnquiryDetails $propertyEnquiryDetails)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\PropertyEnquiryDetails  $propertyEnquiryDetails
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, PropertyEnquiryDetails $propertyEnquiryDetails)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\PropertyEnquiryDetails  $propertyEnquiryDetails
   * @return \Illuminate\Http\Response
   */
  public function destroy(PropertyEnquiryDetails $propertyEnquiryDetails)
  {
      //
  }
}
