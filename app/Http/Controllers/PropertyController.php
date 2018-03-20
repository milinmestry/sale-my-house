<?php

namespace App\Http\Controllers;

use App\Helpers\MestryMilin\Form as MMFormHelper;
use Illuminate\Http\Request;
use Illuminate\Http\Requests\ValidateProperty;

class PropertyController extends Controller
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
    $propertyTypes = MMFormHelper::getPropertyTypes();
    $apartmentTypes = MMFormHelper::getApartmentTypes();
    $propertyMeasurements = MMFormHelper::getPropertyMeasurements();

    return view('property.create', compact(
      'propertyTypes', 'apartmentTypes', 'propertyMeasurements'
    ));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Requests\ValidateProperty  $request
   * @return \Illuminate\Http\Response
   */
  public function store(ValidateProperty $request)
  {
    //
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
