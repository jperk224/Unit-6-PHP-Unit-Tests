<?php

/**
 * ListingBasic class individual non-global-fixture tests
 * @author Jeff Perkinson
 */

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{

    protected $data = [
        'id' => 1,
        'title' => 'Test Listing Title'
    ];

    /** @test */
    public function createListingWithOnlyIdAndTitle()
    {
        /**
         * The minimum data needed to creating a ListingBasic object
         * is Id and Title, else exceptions are thrown.
         * Test to ensure a ListingBasic object is created with only the 
         * minimum data needed and the Id and title are as expected.
         */

        $listingBasic = new ListingBasic($this->data);
        $this->assertInstanceOf('ListingBasic', $listingBasic);
        $this->assertEquals(1, $listingBasic->getId());
        $this->assertEquals('Test Listing Title', $listingBasic->getTitle());
    } 

    /** @test */
    public function hasBasicStatus()
    {
        /**
         * The default 'status' property for the ListingBasic object
         * is 'basic'.  This is what should be returned when no status
         * is passed in as part of the object data at instantiation
         */

        $listingBasic = new ListingBasic($this->data);
        $this->assertEquals('basic', $listingBasic->getStatus());
    }
}