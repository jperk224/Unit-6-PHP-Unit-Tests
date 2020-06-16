<?php

/**
 * ListingBasic class exception tests
 * @author Jeff Perkinson
 */

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
    /** @test */
    public function createListingWithOnlyIdAndTitle()
    {
        /**
         * The minimum data needed to creating a ListingBasic object
         * is Id and Title, else exceptions are thrown.
         * Test to ensure a ListingBasic object is created with only the 
         * minimum data needed and the Id and title are as expected.
         */
        $data = [
            'id' => 1,
            'title' => 'Test Listing Title'
        ];

        $listingBasic = new ListingBasic($data);
        $this->assertInstanceOf('ListingBasic', $listingBasic);
        $this->assertEquals(1, $listingBasic->getId());
        $this->assertEquals('Test Listing Title', $listingBasic->getTitle());
    } 
}