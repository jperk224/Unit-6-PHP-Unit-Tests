<?php

/**
 * ListingBasic class tests using global fixture
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
            'status' => 'Not-Basic',    // test instantiation w/ non-basic status
            'image' => '',
        ];

        $this->listingBasic = new ListingBasic($data);
    }

    /** @test */
    public function hasNonBasicStatusAtInstantiation()
    {
        /**
         * The default 'status' property for the ListingBasic object
         * is 'basic'.  This is what should be returned when no status
         * is passed in as part of the object data at instantiation
         * That case is tested in ListingBasicTest.php
         * This case tests instantiation with a non-basic status
         */
        $this->assertEquals('Not-Basic', $this->listingBasic->getStatus());
    }
    
    /** @test */
    public function hasIdGiven()
    {
        $this->assertEquals(1, $this->listingBasic->getId());
    }

    /** @test */
    public function hasTitleGiven()
    {
        $this->assertEquals('Test Title', $this->listingBasic->getTitle());
    }

    /** @test */
    public function hasWebsiteGiven()
    {
        $this->assertEquals('http://www.test-listing-site.com', $this->listingBasic->getWebsite());
    }

    /** @test */
    public function hasEmailGiven()
    {
        $this->assertEquals('test-email@test-listing-site.com', $this->listingBasic->getEmail());
    }

    /** @test */
    public function hasTwitterGiven()
    {
        $this->assertEquals('test-site', $this->listingBasic->getTwitter());
    }

    /** @test */
    public function arrayValuesMatchPropertyValuesSet()
    {
        /**
         * Verify the toArray method returns an array 
         * where each item equals the expected results for
         * id, title, website, email, and twitter
         */

        $this->assertEquals(1, $this->listingBasic->toArray()['id']);
        $this->assertEquals('Test Title', $this->listingBasic->toArray()['title']);
        $this->assertEquals('http://www.test-listing-site.com', $this->listingBasic->toArray()['website']);
        $this->assertEquals('test-email@test-listing-site.com', $this->listingBasic->toArray()['email']);
        $this->assertEquals('test-site', $this->listingBasic->toArray()['twitter']);
    }

    // Additional Setter Tests

    /** @test */
    public function canSetNullWebsite()
    {
        $this->listingBasic->setWebsite('');
        $this->assertEquals(null, $this->listingBasic->getWebsite());
    }

    /** @test */
    public function hasBasicStatusIfNoneGiven()
    {
        $this->listingBasic->setStatus('');
        $this->assertEquals('basic', $this->listingBasic->getStatus());
    }

    /** @test */
    public function canSetNonBasicStatus()
    {
        $this->listingBasic->setStatus('Not-Basic');
        $this->assertEquals('Not-Basic', $this->listingBasic->getStatus());
    }
}
