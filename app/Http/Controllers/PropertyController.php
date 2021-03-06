<?php

namespace App\Http\Controllers;

use App\Helpers\MestryMilin\Form as MMFormHelper;
use App\Http\Requests\ValidateProperty;
use App\Property;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Lang;

class PropertyController extends Controller
{

  public function __construct() {
    // $this->middleware('auth'); // All routes are protected

    // Routes [create/store/edit/delete] are protected
    // $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);

    // All routes are protected except [search]
    $this->middleware('auth', ['except' => ['search']]);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
     $allProperties = Property::getAllActiveProperties([
      'sellerId' => Auth::id(),
     ]);

    return view('property.index', compact(
      'allProperties'
    ));
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
      $propertyTypes = MMFormHelper::getPropertyTypes();
      $apartmentTypes = MMFormHelper::getApartmentTypes();
      $propertyMeasurements = MMFormHelper::getPropertyMeasurements();

      return view('property.create', compact(
        'propertyTypes', 'apartmentTypes', 'propertyMeasurements'
      ));
    }

  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Requests\ValidateProperty  $request
   * @return \Illuminate\Http\Response
   */
  public function store(ValidateProperty $request)
  {
    $seller = User::find(Auth::id())->seller;
    $property = new Property;

    $property->seller_id = $seller->id;
    $property->is_private = $request->input('is_private');
    $property->property_type = $request->input('property_type');
    $property->apartment_type = $request->input('apartment_type');
    $property->measurement = $request->input('measurement');
    $property->measurement_type = $request->input('measurement_type');
    $property->maintenance_charges = $request->input('maintenance_charges');
    $property->ownership = $request->input('ownership');
    $property->joint_owners_name = $request->input('joint_owners_name');
    $property->sale_price = $request->input('sale_price');
    $property->min_expected_price = $request->input('min_expected_price');
    $property->address = $request->input('address');
    $property->homeloan_details = $request->input('homeloan_details');
    $property->amenities = $request->input('amenities');
    $property->locality_features = $request->input('locality_features');
    $property->is_active = Property::ACTIVE; // May be Admin should verify and then approve it.

    if (1 === (int) $request->input('is_private')) {
      $dtObj = new \DateTime();
      $property->is_private_ts = $dtObj->format('Y-m-d H:i:s');
      unset($dtObj);
    }

    $property->save();

    unset($property, $seller);

    return redirect('/property')->with(
      'status', Lang::get('site.SUCCESS_MESSAGES.APARTMENT_STORED'
    ));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id = 0)
  {
    if ($id < 1) {
      return redirect('/property')->with(
        'error', Lang::get('property.ERROR_MESSAGES.EDIT_ID_MISSING'
      ));
    }

    // Check ID exists in the system, before updating the data
    if (! $property = Property::find($id) ) {
      return redirect('/property')->with(
        'warn', Lang::get('property.ERROR_MESSAGES.EDIT_ID_NOT_EXISTS'
      ));
    }

    return view('property.show', compact('property'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id = 0)
  {
    if ($id < 1) {
      return redirect('/property')->with(
        'error', Lang::get('property.ERROR_MESSAGES.EDIT_ID_MISSING'
      ));
    }

    // Property::findOrFail($id);

    // Check ID exists in the system, before updating the data
    if (! $property = Property::find($id) ) {
      return redirect('/property')->with(
        'warn', Lang::get('property.ERROR_MESSAGES.EDIT_ID_NOT_EXISTS'
      ));
    }

    $propertyTypes = MMFormHelper::getPropertyTypes();
    $apartmentTypes = MMFormHelper::getApartmentTypes();
    $propertyMeasurements = MMFormHelper::getPropertyMeasurements();
    $editForm = 'T';

    return view('property.create', compact(
      'propertyTypes', 'apartmentTypes', 'propertyMeasurements', 'property', 'editForm', 'id'
    ));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\ValidateProperty  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(ValidateProperty $request, $id = 0)
  {
    // Check ID exists in the system, before updating the data
    if (! $property = Property::find($id) ) {
      return redirect('/property')->with(
        'warn', Lang::get('property.ERROR_MESSAGES.EDIT_ID_NOT_EXISTS'
      ));
    }

    $property->property_type = $request->input('property_type');
    $property->apartment_type = $request->input('apartment_type');
    $property->measurement = $request->input('measurement');
    $property->measurement_type = $request->input('measurement_type');
    $property->maintenance_charges = $request->input('maintenance_charges');
    $property->ownership = $request->input('ownership');
    $property->joint_owners_name = $request->input('joint_owners_name');
    $property->sale_price = $request->input('sale_price');
    $property->min_expected_price = $request->input('min_expected_price');
    $property->address = $request->input('address');
    $property->homeloan_details = $request->input('homeloan_details');
    $property->amenities = $request->input('amenities');
    $property->locality_features = $request->input('locality_features');

    $property->save();

    unset($property);

    return redirect('/property')->with(
      'status', Lang::get('site.SUCCESS_MESSAGES.APARTMENT_UPDATED'
    ));
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

  public function search() {
    $allProperties = Property::where([
      ['is_active', '=', Property::ACTIVE],
      ])
      ->orderBy('id', 'desc')
      ->take(10)
      ->get();

    return view('property.search', compact(
      'allProperties'
    ));
  }
}
