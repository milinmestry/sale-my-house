<?php

namespace App\Http\Controllers;

use App\PropertyEnquiry;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyEnquiryController extends Controller
{

  public function __construct() {
    $this->middleware('auth'); // All routes are protected

    // Routes [create/store/edit/delete] are protected
    // $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);

    // All routes are protected except [search]
    // $this->middleware('auth', ['except' => ['search']]);
  }

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
    $seller = User::find(Auth::id())->seller;

    if (null === $seller) {
      unset($seller);

      return view('property.info');
    } else {
      $properties = Property::getAllActiveProperties([
        'sellerId' => Auth::id(),
        'arrayOnly' => true,
      ]);
      // $properties = array_prepend($properties, '--Select--');
      // $apartmentTypes = MMFormHelper::getApartmentTypes();
      // $propertyMeasurements = MMFormHelper::getPropertyMeasurements();
// dd($properties);
      return view('property-enquiry.create', compact(
        'properties'
      ));
    }
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $pEnquiry = new PropertyEnquiry;

    $pEnquiry->property_id = $request->input('property_id');
    $pEnquiry->fullname = $request->input('fullname');
    $pEnquiry->mobile = $request->input('mobile');
    $pEnquiry->contact_numbers = $request->input('contact_numbers');
    $pEnquiry->address = $request->input('address');
    $pEnquiry->zipcode = $request->input('zipcode');
    $pEnquiry->enquiry_from = $request->input('enquiry_from');
    $pEnquiry->broker_name = $request->input('broker_name');
    $pEnquiry->broker_details = $request->input('broker_details');
    $pEnquiry->referer_name = $request->input('referer_name');
    $pEnquiry->referer_contact = $request->input('referer_contact');
    $pEnquiry->referer_address = $request->input('referer_address');
    $pEnquiry->cash_in_hand = $request->input('cash_in_hand');
    $pEnquiry->need_homeloan = $request->input('need_homeloan');
    $pEnquiry->homeloan_presanctioned = $request->input('homeloan_presanctioned');
    $pEnquiry->homeloan_details = $request->input('homeloan_details');

    $pEnquiry->save();

    unset($pEnquiry);

    return redirect('/enquiry')->with(
      'status', Lang::get('enquiry.SUCCESS_MESSAGES.STORED')
    );
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\PropertyEnquiry  $propertyEnquiry
   * @return \Illuminate\Http\Response
   */
  public function show(PropertyEnquiry $propertyEnquiry)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\PropertyEnquiry  $propertyEnquiry
   * @return \Illuminate\Http\Response
   */
  public function edit(PropertyEnquiry $propertyEnquiry)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\PropertyEnquiry  $propertyEnquiry
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, PropertyEnquiry $propertyEnquiry)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\PropertyEnquiry  $propertyEnquiry
   * @return \Illuminate\Http\Response
   */
  public function destroy(PropertyEnquiry $propertyEnquiry)
  {
      //
  }
}
