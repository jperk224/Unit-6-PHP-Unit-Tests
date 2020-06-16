<?php

/**
 * ListingPremium class tests using global fixture
 * @author Jeff Perkinson
 */

use PHPUnit\Framework\TestCase;

class FullListingPremiumTest extends TestCase
{
    // ListingPremium object for test cases
    protected $listingPremium;

    // use setUp() to create a ListingPremium object to execute tests against
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

    /** @test */
    public function hasAllowedTags()
    {
        /**
         * The default property value allowed tags are
         * <p><br><b><strong><em><u><ol><ul><li>
         * The method wraps the allowed tags in htmspecialchars
         * which converts special characters to HTML entities
         */
        $this->assertEquals('&lt;p&gt;&lt;br&gt;&lt;b&gt;&lt;strong&gt;&lt;em&gt;&lt;u&gt;&lt;ol&gt;&lt;ul&gt;&lt;li&gt;', 
                            $this->listingPremium->displayAllowedTags());
    }
}
