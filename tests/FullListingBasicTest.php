<?php

/**
 * ListingBasic class tests
 * @author Jeff Perkinson
 */

use PHPUnit\Framework\TestCase;

class FullListingBasicTest extends TestCase
{
    // ListingBasic Object for test cases
    protected $listingBasic;

    // use setUp() to create a ListingBasic object to execute tests against
    protected function setUp(): void
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'website' => 'www.test-listing-site.com',
            'email' => 'test-email@test-listing-site.com',
            'twitter' => '@test-site',
            'status' => 'basic',
            'image' => '',
        ];

        $listingBasic = new ListingBasic($data);
    }
}