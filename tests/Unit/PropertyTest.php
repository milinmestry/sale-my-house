<?php

namespace Tests\Unit;

use App\Helpers\MestryMilin\Form as MMFormHelper;
use App\Property;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PropertyTest extends TestCase {
  /**
   * Check the helper function getPropertyMeasurements has correct values.
   *
   * @see getPropertyMeasurements
   * @return void
   */
  public function test_form_getPropertyMeasurements() {
    $propertyMeasurements = MMFormHelper::getPropertyMeasurements();

    $this->assertCount(4, $propertyMeasurements);

    $this->assertContains('-- Select --', $propertyMeasurements);
    $this->assertContains('Carpet sq. ft.', $propertyMeasurements);
    $this->assertContains('Built-up sq. ft.', $propertyMeasurements);
    $this->assertContains('Super Built-up sq. ft.', $propertyMeasurements);

    $this->assertArrayHasKey('carpet-sq-ft', $propertyMeasurements);
    $this->assertArrayHasKey('builtup-sq-ft', $propertyMeasurements);
    $this->assertArrayHasKey('super-builtup-sq-ft', $propertyMeasurements);
    unset($propertyMeasurements);
  }

  /**
   * Check the helper function getPropertyTypes has correct values.
   *
   * @see getPropertyTypes
   * @return void
   */
  public function test_form_getPropertyTypes() {
    $propertyTypes = MMFormHelper::getPropertyTypes();

    $this->assertCount(3, $propertyTypes);

    $this->assertContains('-- Select --', $propertyTypes);
    $this->assertContains('Apartment', $propertyTypes);
    $this->assertContains('Shop', $propertyTypes);

    $this->assertArrayHasKey('apartment', $propertyTypes);
    $this->assertArrayHasKey('shop', $propertyTypes);
    unset($propertyTypes);
  }

  /**
   * Check the helper function getApartmentTypes has correct values.
   *
   * @see getApartmentTypes
   * @return void
   */
  public function test_form_getApartmentTypes() {
    $apartmentTypes = MMFormHelper::getApartmentTypes();

    $this->assertCount(6, $apartmentTypes);

    $this->assertContains('-- Select --', $apartmentTypes);
    $this->assertContains('1 RK', $apartmentTypes);
    $this->assertContains('1 BHK', $apartmentTypes);
    $this->assertContains('2 BHK', $apartmentTypes);
    $this->assertContains('3 BHK', $apartmentTypes);
    $this->assertContains('4 BHK', $apartmentTypes);

    $this->assertArrayHasKey('1-RK', $apartmentTypes);
    $this->assertArrayHasKey('1-BHK', $apartmentTypes);
    $this->assertArrayHasKey('2-BHK', $apartmentTypes);
    $this->assertArrayHasKey('3-BHK', $apartmentTypes);
    $this->assertArrayHasKey('4-BHK', $apartmentTypes);
    unset($apartmentTypes);
  }

  /**
   * Check the helper function getEnquiryPurposes has correct values.
   *
   * @see getEnquiryPurposes
   * @return void
   */
  public function test_form_getEnquiryPurposes() {
    $enquiryPurposes = MMFormHelper::getEnquiryPurposes();

    $this->assertCount(5, $enquiryPurposes);

    $this->assertContains('-- Select --', $enquiryPurposes);
    $this->assertContains('Buyer Call', $enquiryPurposes);
    $this->assertContains('Buyer Site Visit', $enquiryPurposes);
    $this->assertContains('Broker Call', $enquiryPurposes);
    $this->assertContains('Broker Site Visit', $enquiryPurposes);

    $this->assertArrayHasKey('buyer-call', $enquiryPurposes);
    $this->assertArrayHasKey('buyer-site-visit', $enquiryPurposes);
    $this->assertArrayHasKey('broker-call', $enquiryPurposes);
    $this->assertArrayHasKey('broker-site-visit', $enquiryPurposes);
    unset($enquiryPurposes);
  }

  public function test_form_boolToString() {
    $this->assertContains('No', MMFormHelper::boolToString(false));
    $this->assertContains('No', MMFormHelper::boolToString(0));
    $this->assertContains('Yes', MMFormHelper::boolToString(true));
    $this->assertContains('Yes', MMFormHelper::boolToString(1));
  }

  public function test_class_constant() {
    $this->assertEquals(0, Property::INACTIVE);
    $this->assertEquals(1, Property::ACTIVE);
    $this->assertEquals(2, Property::SOLD);
  }

  public function test_getAllActiveProperties_no_seller_id() {
    $properties = Property::getAllActiveProperties([]);

    $this->assertEmpty($properties);
    $this->assertCount(0, $properties);
  }

  public function test_getAllActiveProperties_limit_records() {
    $properties = Property::getAllActiveProperties([
      'sellerId' => 1,
    ]);

    $this->assertNotEmpty($properties);
    $this->assertNotCount(0, $properties);
    $this->assertGreaterThan(0, count($properties));
  }
}
