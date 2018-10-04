<?php

namespace Tests\Unit;

use App\Seller;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SellerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_save_seller()
    {
      $seller = factory(Seller::class)->create();
      $this->assertNotEmpty($seller);
      $this->assertTrue($seller->save());
    }
}
