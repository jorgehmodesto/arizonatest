<?php

namespace Tests\Unit;

use App\Countries;
use App\Helpers\CountriesRecords;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Class CountriesRecordsHelperTest
 *
 * @author Jorge Modesto
 * @package Tests\Unit
 */
class CountriesRecordsHelperTest extends TestCase
{
    /**
     * Define format feature test.
     *
     * @return void
     */
    public function test_define_format()
    {
        // Instances the class to be tested
        $oCountriesRecordsHelper = new CountriesRecords();

        // Creates a fake record
        $oCountryRecord = new Countries([
            'id' => 1,
            'name' => 'Brazil',
            'country_code' => 'BR',
        ]);

        // Adapts it to the class expected format
        $aCountryRecord = [$oCountryRecord->toArray()];

        // Retrieves a not inverted record from the class
        $aNotInvertedRecord = $oCountriesRecordsHelper->defineFormat(false, $aCountryRecord);

        // Retrieves an inverted record from the class
        $aInvertedRecord = $oCountriesRecordsHelper->defineFormat(true, $aCountryRecord);

        // Asserts if this returned fine
        $this->assertEquals('BR - Brazil', $aNotInvertedRecord[0]['formattedRecord']);

        // Asserts if this returned fine
        $this->assertEquals('Brazil - BR', $aInvertedRecord[0]['formattedRecord']);
    }
}
