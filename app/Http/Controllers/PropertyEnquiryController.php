<?php

namespace App\Http\Controllers;

use App\Helpers\MestryMilin\Form as MMFormHelper;
use App\Property;
use App\PropertyEnquiry;
use App\PropertyEnquiryDetails;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Lang;

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
    return 'THnks';
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
      $enquiryPurposes = MMFormHelper::getEnquiryPurposes();

      return view('property-enquiry.create', compact(
        'properties', 'enquiryPurposes'
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
    $pEnquiry->primary_mobile = $request->input('mobile');
    $pEnquiry->contact_numbers = $request->input('contact_numbers');
    $pEnquiry->address = $request->input('address');
    $pEnquiry->zipcode = $request->input('zipcode');
    // $pEnquiry->enquiry_from = $request->input('enquiry_from');
    $pEnquiry->broker_name = $request->input('broker_name');
    $pEnquiry->broker_details = $request->input('broker_details');
    $pEnquiry->refer_by_name = $request->input('referer_name');
    $pEnquiry->refer_by_contact = $request->input('referer_contact');
    $pEnquiry->refer_by_address = $request->input('referer_address');
    $pEnquiry->cash_in_hand = $request->input('cash_in_hand');
    $pEnquiry->need_homeloan = $request->input('need_homeloan');
    $pEnquiry->presanctioned_homeloan = $request->input('homeloan_presanctioned');
    $pEnquiry->homeloan_details = $request->input('homeloan_details');

    $pEnquiry->save();

    if ($pEnquiry->id > 0) {
      $pEnquiryDetails = new PropertyEnquiryDetails;

      $pEnquiryDetails->property_enquiry_id = $pEnquiry->id;
      $pEnquiryDetails->enquire_visit_type = $request->input('enquiry_visit_type');
      $pEnquiryDetails->price_quoted = $request->input('offer_amount');
      $pEnquiryDetails->price_quoted_by = $request->input('fullname');

      $pEnquiryDetails->save();
      unset($pEnquiryDetails);
    }

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
