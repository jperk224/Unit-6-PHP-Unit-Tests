<?php

/**
 * ListingBasic class exception tests
 * @author Jeff Perkinson
 */

use PHPUnit\Framework\TestCase;

class ListingBasicExceptionTest extends TestCase
{
    /** @test */
    public function emptyConstructDataThrowsException() 
    {
        $this->expectExceptionMessage('Unable to create a listing, data unavailable');
        $listingBasic = new ListingBasic();
    }

    /** @test */
    public function emptyIdThrowsException()
    {
        /**
        * The class constructor calls setValues() using the data array passed into the
        * constructor.  To bypass the first exception, data is needed, but no Id is
        * provided in order to throw the 'invalid id' exception
        */
        $data = [
            'title' => 'Test Title'
        ];
        $this->expectExceptionMessage('Unable to create a listing, invalid id');
        $listingBasic = new ListingBasic($data);
    }

    /** @test */
    public function emptyTitleThrowsException()
    {
        /**
        * The class constructor calls setValues() using the data array passed into the
        * constructor.  To bypass the first exception, data is needed, but no title is
        * provided in order to throw the 'invalid title' exception
        */
        $data = [
            'id' => 1
        ];
        $this->expectExceptionMessage('Unable to create a listing, invalid title');
        $listingBasic = new ListingBasic($data);
    }
}