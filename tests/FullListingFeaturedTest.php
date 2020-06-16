<?php

/**
 * ListingFeatured class tests using global fixture
 * @author Jeff Perkinson
 */

use PHPUnit\Framework\TestCase;

class FullListingFeaturedTest extends TestCase
{
    // ListingFeatured object for test cases
    protected $listingFeatured;

    // use setUp() to create a ListingFeatured object to execute tests against
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
            'coc' => 'COC-test',
        ];

        $this->listingFeatured = new ListingFeatured($data);
    }

    /** @test */
    public function hasFeaturedStatus()
    {
        /**
         * The default 'status' property for the ListingFeatured object
         * is 'featured'.  This is what should be returned when no status
         * is passed in as part of the object data at instantiation
         */
        $this->assertEquals('featured', $this->listingFeatured->getStatus());
    }

    /** @test */
    public function featuredCocIsAsExpected()
    {
        $this->assertEquals('COC-test', $this->listingFeatured->getCoc());
    }
}
