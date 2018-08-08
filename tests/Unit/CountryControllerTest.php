<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class CountryControllerTest
 *
 * @author Jorge Modesto
 * @package Tests\Unit
 */
class CountryControllerTest extends TestCase
{
    /**
     * Tests controller index functionality.
     *
     * @return void
     */
    public function test_controller_index_method()
    {
        // Calls controller method
        $oResponse = $this->get('/countries');

        // Asserts its status
        $oResponse->assertStatus(200);

        // Asserts if view receives country records
        $oResponse->assertViewHas('aCountries');

        // Asserts if view receives request
        $oResponse->assertViewHas('oRequest');

        // Asserts if the right view was provided
        $oResponse->assertViewIs('countries.list');
    }
}
