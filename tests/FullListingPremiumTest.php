<?php

/**
 * ListingPremium class tests using global fixture
 * @author Jeff Perkinson
 */

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase
{
    // ListingPremium object for test cases
    protected $listingPremium;

    // use setUp() to create a ListingBasic object to execute tests against
    public function setUp():void
    {
        // 'status' omitted due to object's default property value
        $data = [
            'id' => 2,
            'title' => 'Test Premium Title',
            'website' => 'www.test-premium-listing-site.com',
            'email' => 'test-email@test-premium-listing-site.com',
            'twitter' => '@test-premium-site',
            'image' => '',
            'description' => 'Premium Listing Description',
        ];

        $this->listingPremium = new ListingPremium($data);
    }

    /** @test */
    public function hasPremiumStatus()
    {
        /**
         * The default 'status' property for the ListingPremium object
         * is 'premium'.  This is what should be returned when no status
         * is passed in as part of the object data at instantiation
         */
        $this->assertEquals('premium', $this->listingPremium->getStatus());
    }

    /** @test */
    public function premiumDescriptionIsAsExpected()
    {
        $this->assertEquals('Premium Listing Description', $this->listingPremium->getDescription());
    }
}
