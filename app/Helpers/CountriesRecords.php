<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 07/08/18
 * Time: 21:41
 */

namespace App\Helpers;

/**
 * Class to help to manage country records
 *
 * Class CountriesRecords
 * @package App\Helpers
 */
class CountriesRecords
{
    /**
     * Method to format country record label
     *
     * @param bool $bInvert
     * @param array $aRecords
     * @return array
     */
    public function defineFormat($bInvert = false, array $aRecords) {

        // Runs all provided records
        foreach ($aRecords as $iIndex => $aRecord) {
            // If it must be inverted
            if ($bInvert === true) {
                // Then it inverts the order its shown
                $aRecords[$iIndex]['formattedRecord'] = "{$aRecord['name']} - {$aRecord['country_code']}";
                // Goes to nex record
                continue;
            }

            // By default, it would format the record if its does not need to be inverted
            $aRecords[$iIndex]['formattedRecord'] = "{$aRecord['country_code']} - {$aRecord['name']}";
        }

        // Returns all records with its formatted index
        return $aRecords;
    }
}