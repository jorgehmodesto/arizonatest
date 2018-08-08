<?php

namespace App\Http\Controllers;

use App\Countries;
use App\Helpers\CountriesRecords;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Controller to manage countries features
 *
 * Class CountryController
 * @package App\Http\Controllers
 */
class CountryController extends Controller
{
    /**
     * CountryController constructor.
     */
    public function __construct() {}

    /**
     * Action to list all countries
     *
     * @param Request $oRequest
     * @return View
     */
    public function index(Request $oRequest)
    {
        // Gets countries list
        $aCountries = Countries::all()->toArray();

        // Compiles the inversion param
        $bInvert = $oRequest->get('invert') === 'true' ? true : false;

        // Instances country records helper
        $oCountriesRecordsHelper = new CountriesRecords();

        // Calls method to format countries records
        $aCountries = $oCountriesRecordsHelper->defineFormat($bInvert, $aCountries);

        // Returns country list view
        return view('countries.list', [
            'oRequest' => $oRequest,
            'aCountries' => $aCountries,
        ]);
    }
}
