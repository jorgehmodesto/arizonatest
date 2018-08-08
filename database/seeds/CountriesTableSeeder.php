<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aData = [
            [
                'country_code' => 'AD',
                'name' => 'Andorra',
            ],
            [
                'country_code' => 'AE',
                'name' => 'United Arab Emirates',
            ],
            [
                'country_code' => 'AF',
                'name' => 'Afghanistan',
            ],
            [
                'country_code' => 'AG',
                'name' => 'Antigua and Barbuda',
            ],
            [
                'country_code' => 'AI',
                'name' => 'Anguilla',
            ],
            [
                'country_code' => 'AL',
                'name' => 'Albania',
            ],
            [
                'country_code' => 'AM',
                'name' => 'Armenia',
            ],
            [
                'country_code' => 'AN',
                'name' => 'Netherlands Antilles',
            ],
            [
                'country_code' => 'AO',
                'name' => 'Angola',
            ],
            [
                'country_code' => 'AQ',
                'name' => 'Antarctica',
            ],
            [
                'country_code' => 'AR',
                'name' => 'Argentina',
            ],
            [
                'country_code' => 'AS',
                'name' => 'American Samoa',
            ],
            [
                'country_code' => 'AT',
                'name' => 'Austria',
            ],
            [
                'country_code' => 'AU',
                'name' => 'Australia',
            ],
            [
                'country_code' => 'AW',
                'name' => 'Aruba',
            ],
            [
                'country_code' => 'AZ',
                'name' => 'Azerbaijan',
            ],
            [
                'country_code' => 'Bosnia and Herzegovina',
                'name' => 'BA',
            ],
            [
                'country_code' => 'BB',
                'name' => 'Barbados',
            ],
            [
                'country_code' => 'BD',
                'name' => 'Bangladesh',
            ],
            [
                'country_code' => 'BE',
                'name' => 'Belgium',
            ],
            [
                'country_code' => 'BF',
                'name' => 'Burkina Faso',
            ],
            [
                'country_code' => 'BG',
                'name' => 'Bulgaria',
            ],
            [
                'country_code' => 'BH',
                'name' => 'Bahrain',
            ],
            [
                'country_code' => 'BI',
                'name' => 'Burundi',
            ],
            [
                'country_code' => 'BJ',
                'name' => 'Benin',
            ],
            [
                'country_code' => 'BM',
                'name' => 'Bermuda',
            ],
            [
                'country_code' => 'BN',
                'name' => 'Brunei Darussalam',
            ],
            [
                'country_code' => 'BO',
                'name' => 'Bolivia',
            ],
            [
                'country_code' => 'BR',
                'name' => 'Brazil',
            ],
            [
                'country_code' => 'BS',
                'name' => 'Bahamas',
            ],
            [
                'country_code' => 'BT',
                'name' => 'Bhutan',
            ],
            [
                'country_code' => 'BV',
                'name' => 'Bouvet Island',
            ],
            [
                'country_code' => 'BW',
                'name' => 'Botswana',
            ],
            [
                'country_code' => 'BY',
                'name' => 'Belarus',
            ],
            [
                'country_code' => 'BZ',
                'name' => 'Belize',
            ],
            [
                'country_code' => 'CA',
                'name' => 'Canada',
            ],
            [
                'country_code' => 'CC',
                'name' => 'Cocos (Keeling) Islands',
            ],
            [
                'country_code' => 'CF',
                'name' => 'Central African Republic',
            ],
            [
                'country_code' => 'CG',
                'name' => 'Congo',
            ],
            [
                'country_code' => 'CH',
                'name' => 'Switzerland',
            ],
            [
                'country_code' => 'CI',
                'name' => 'Cote D\'Ivoire (Ivory Coast)',
            ],
            [
                'country_code' => 'CK',
                'name' => 'Cook Islands',
            ],
            [
                'country_code' => 'CL',
                'name' => 'Chile',
            ],
            [
                'country_code' => 'CM',
                'name' => 'Cameroon',
            ],
            [
                'country_code' => 'CN',
                'name' => 'China',
            ],
            [
                'country_code' => 'CO',
                'name' => 'Colombia',
            ],
            [
                'country_code' => 'CR',
                'name' => 'Costa Rica',
            ],
            [
                'country_code' => 'CS',
                'name' => 'Czechoslovakia (former)',
            ],
            [
                'country_code' => 'CU',
                'name' => 'Cuba',
            ],
            [
                'country_code' => 'CV',
                'name' => 'Cape Verde',
            ],
            [
                'country_code' => 'CX',
                'name' => 'Christmas Island',
            ],
            [
                'country_code' => 'CY',
                'name' => 'Cyprus',
            ],
            [
                'country_code' => 'CZ',
                'name' => 'Czech Republic',
            ],
            [
                'country_code' => 'DE',
                'name' => 'Germany',
            ],
            [
                'country_code' => 'DJ',
                'name' => 'Djibouti',
            ],
            [
                'country_code' => 'DK',
                'name' => 'Denmark',
            ],
            [
                'country_code' => 'DM',
                'name' => 'Dominica',
            ],
            [
                'country_code' => 'DO',
                'name' => 'Dominican Republic',
            ],
            [
                'country_code' => 'DZ',
                'name' => 'Algeria',
            ],
            [
                'country_code' => 'EC',
                'name' => 'Ecuador',
            ],
            [
                'country_code' => 'EE',
                'name' => 'Estonia',
            ],
            [
                'country_code' => 'EG',
                'name' => 'Egypt',
            ],
            [
                'country_code' => 'EH',
                'name' => 'Western Sahara',
            ],
            [
                'country_code' => 'ER',
                'name' => 'Eritrea',
            ],
            [
                'country_code' => 'ES',
                'name' => 'Spain',
            ],
            [
                'country_code' => 'ET',
                'name' => 'Ethiopia',
            ],
            [
                'country_code' => 'FI',
                'name' => 'Finland',
            ],
            [
                'country_code' => 'FJ',
                'name' => 'Fiji',
            ],
            [
                'country_code' => 'FK',
                'name' => 'Falkland Islands (Malvinas)',
            ],
            [
                'country_code' => 'FM',
                'name' => 'Micronesia',
            ],
            [
                'country_code' => 'FO',
                'name' => 'Faroe Islands',
            ],
            [
                'country_code' => 'FR',
                'name' => 'France',
            ],
            [
                'country_code' => 'FX',
                'name' => 'France, Metropolitan',
            ],
            [
                'country_code' => 'GA',
                'name' => 'Gabon',
            ],
            [
                'country_code' => 'GB',
                'name' => 'Great Britain (UK)',
            ],
            [
                'country_code' => 'GD',
                'name' => 'Grenada',
            ],
            [
                'country_code' => 'GE',
                'name' => 'Georgia',
            ],
            [
                'country_code' => 'GF',
                'name' => 'French Guiana',
            ],
            [
                'country_code' => 'GH',
                'name' => 'Ghana',
            ],
            [
                'country_code' => 'GI',
                'name' => 'Gibraltar',
            ],
            [
                'country_code' => 'GL',
                'name' => 'Greenland',
            ],
            [
                'country_code' => 'GM',
                'name' => 'Gambia',
            ],
            [
                'country_code' => 'GN',
                'name' => 'Guinea',
            ],
            [
                'country_code' => 'GP',
                'name' => 'Guadeloupe',
            ],
            [
                'country_code' => 'GQ',
                'name' => 'Equatorial Guinea',
            ],
            [
                'country_code' => 'GR',
                'name' => 'Greece',
            ],
            [
                'country_code' => 'GS',
                'name' => 'S. Georgia and S. Sandwich Isls.',
            ],
            [
                'country_code' => 'GT',
                'name' => 'Guatemala',
            ],
            [
                'country_code' => 'GU',
                'name' => 'Guam',
            ],
            [
                'country_code' => 'GW',
                'name' => 'Guinea-Bissau',
            ],
            [
                'country_code' => 'GY',
                'name' => 'Guyana',
            ],
            [
                'country_code' => 'HK',
                'name' => 'Hong Kong',
            ],
            [
                'country_code' => 'HM',
                'name' => 'Heard and McDonald Islands',
            ],
            [
                'country_code' => 'HN',
                'name' => 'Honduras',
            ],
            [
                'country_code' => 'HR',
                'name' => 'Croatia (Hrvatska)',
            ],
            [
                'country_code' => 'HT',
                'name' => 'Haiti',
            ],
            [
                'country_code' => 'HU',
                'name' => 'Hungary',
            ],
            [
                'country_code' => 'ID',
                'name' => 'Indonesia',
            ],
            [
                'country_code' => 'IE',
                'name' => 'Ireland',
            ],
            [
                'country_code' => 'IL',
                'name' => 'Israel',
            ],
            [
                'country_code' => 'IN',
                'name' => 'India',
            ],
            [
                'country_code' => 'IO',
                'name' => 'British Indian Ocean Territory',
            ],
            [
                'country_code' => 'IQ',
                'name' => 'Iraq',
            ],
            [
                'country_code' => 'IR',
                'name' => 'Iran',
            ],
            [
                'country_code' => 'IS',
                'name' => 'Iceland',
            ],
            [
                'country_code' => 'IT',
                'name' => 'Italy',
            ],
            [
                'country_code' => 'JM',
                'name' => 'Jamaica',
            ],
            [
                'country_code' => 'JO',
                'name' => 'Jordan',
            ],
            [
                'country_code' => 'JP',
                'name' => 'Japan',
            ],
            [
                'country_code' => 'KE',
                'name' => 'Kenya',
            ],
            [
                'country_code' => 'KG',
                'name' => 'Kyrgyzstan',
            ],
            [
                'country_code' => 'KH',
                'name' => 'Cambodia',
            ],
            [
                'country_code' => 'KI',
                'name' => 'Kiribati',
            ],
            [
                'country_code' => 'KM',
                'name' => 'Comoros',
            ],
            [
                'country_code' => 'KN',
                'name' => 'Saint Kitts and Nevis',
            ],
            [
                'country_code' => 'KP',
                'name' => 'Korea (North)',
            ],
            [
                'country_code' => 'KR',
                'name' => 'Korea (South)',
            ],
            [
                'country_code' => 'KW',
                'name' => 'Kuwait',
            ],
            [
                'country_code' => 'KY',
                'name' => 'Cayman Islands',
            ],
            [
                'country_code' => 'KZ',
                'name' => 'Kazakhstan',
            ],
            [
                'country_code' => 'LA',
                'name' => 'Laos',
            ],
            [
                'country_code' => 'LB',
                'name' => 'Lebanon',
            ],
            [
                'country_code' => 'LC',
                'name' => 'Saint Lucia',
            ],
            [
                'country_code' => 'LI',
                'name' => 'Liechtenstein',
            ],
            [
                'country_code' => 'LK',
                'name' => 'Sri Lanka',
            ],
            [
                'country_code' => 'LR',
                'name' => 'Liberia',
            ],
            [
                'country_code' => 'LS',
                'name' => 'Lesotho',
            ],
            [
                'country_code' => 'LT',
                'name' => 'Lithuania',
            ],
            [
                'country_code' => 'LU',
                'name' => 'Luxembourg',
            ],
            [
                'country_code' => 'LV',
                'name' => 'Latvia',
            ],
            [
                'country_code' => 'LY',
                'name' => 'Libya',
            ],
            [
                'country_code' => 'MA',
                'name' => 'Morocco',
            ],
            [
                'country_code' => 'MC',
                'name' => 'Monaco',
            ],
            [
                'country_code' => 'MD',
                'name' => 'Moldova',
            ],
            [
                'country_code' => 'MG',
                'name' => 'Madagascar',
            ],
            [
                'country_code' => 'MH',
                'name' => 'Marshall Islands',
            ],
            [
                'country_code' => 'MK',
                'name' => 'Macedonia',
            ],
            [
                'country_code' => 'ML',
                'name' => 'Mali',
            ],
            [
                'country_code' => 'MM',
                'name' => 'Myanmar',
            ],
            [
                'country_code' => 'MN',
                'name' => 'Mongolia',
            ],
            [
                'country_code' => 'MO',
                'name' => 'Macau',
            ],
            [
                'country_code' => 'MP',
                'name' => 'Northern Mariana Islands',
            ],
            [
                'country_code' => 'MQ',
                'name' => 'Martinique',
            ],
            [
                'country_code' => 'MR',
                'name' => 'Mauritania',
            ],
            [
                'country_code' => 'MS',
                'name' => 'Montserrat',
            ],
            [
                'country_code' => 'MT',
                'name' => 'Malta',
            ],
            [
                'country_code' => 'MU',
                'name' => 'Mauritius',
            ],
            [
                'country_code' => 'MV',
                'name' => 'Maldives',
            ],
            [
                'country_code' => 'MW',
                'name' => 'Malawi',
            ],
            [
                'country_code' => 'MX',
                'name' => 'Mexico',
            ],
            [
                'country_code' => 'MY',
                'name' => 'Malaysia',
            ],
            [
                'country_code' => 'MZ',
                'name' => 'Mozambique',
            ],
            [
                'country_code' => 'NA',
                'name' => 'Namibia',
            ],
            [
                'country_code' => 'NC',
                'name' => 'New Caledonia',
            ],
            [
                'country_code' => 'NE',
                'name' => 'Niger',
            ],
            [
                'country_code' => 'NF',
                'name' => 'Norfolk Island',
            ],
            [
                'country_code' => 'NG',
                'name' => 'Nigeria',
            ],
            [
                'country_code' => 'NI',
                'name' => 'Nicaragua',
            ],
            [
                'country_code' => 'NL',
                'name' => 'Netherlands',
            ],
            [
                'country_code' => 'NO',
                'name' => 'Norway',
            ],
            [
                'country_code' => 'NP',
                'name' => 'Nepal',
            ],
            [
                'country_code' => 'NR',
                'name' => 'Nauru',
            ],
            [
                'country_code' => 'NT',
                'name' => 'Neutral Zone',
            ],
            [
                'country_code' => 'NU',
                'name' => 'Niue',
            ],
            [
                'country_code' => 'NZ',
                'name' => 'New Zealand (Aotearoa)',
            ],
            [
                'country_code' => 'OM',
                'name' => 'Oman',
            ],
            [
                'country_code' => 'PA',
                'name' => 'Panama',
            ],
            [
                'country_code' => 'PE',
                'name' => 'Peru',
            ],
            [
                'country_code' => 'PF',
                'name' => 'French Polynesia',
            ],
            [
                'country_code' => 'PG',
                'name' => 'Papua New Guinea',
            ],
            [
                'country_code' => 'PH',
                'name' => 'Philippines',
            ],
            [
                'country_code' => 'PK',
                'name' => 'Pakistan',
            ],
            [
                'country_code' => 'PL',
                'name' => 'Poland',
            ],
            [
                'country_code' => 'PM',
                'name' => 'St. Pierre and Miquelon',
            ],
            [
                'country_code' => 'PN',
                'name' => 'Pitcairn',
            ],
            [
                'country_code' => 'PR',
                'name' => 'Puerto Rico',
            ],
            [
                'country_code' => 'PT',
                'name' => 'Portugal',
            ],
            [
                'country_code' => 'PW',
                'name' => 'Palau',
            ],
            [
                'country_code' => 'PY',
                'name' => 'Paraguay',
            ],
            [
                'country_code' => 'QA',
                'name' => 'Qatar',
            ],
            [
                'country_code' => 'RE',
                'name' => 'Reunion',
            ],
            [
                'country_code' => 'RO',
                'name' => 'Romania',
            ],
            [
                'country_code' => 'RU',
                'name' => 'Russian Federation',
            ],
            [
                'country_code' => 'RW',
                'name' => 'Rwanda',
            ],
            [
                'country_code' => 'SA',
                'name' => 'Saudi Arabia',
            ],
            [
                'country_code' => 'SB',
                'name' => 'Solomon Islands',
            ],
            [
                'country_code' => 'SC',
                'name' => 'Seychelles',
            ],
            [
                'country_code' => 'SD',
                'name' => 'Sudan',
            ],
            [
                'country_code' => 'SE',
                'name' => 'Sweden',
            ],
            [
                'country_code' => 'SG',
                'name' => 'Singapore',
            ],
            [
                'country_code' => 'SH',
                'name' => 'St. Helena',
            ],
            [
                'country_code' => 'SI',
                'name' => 'Slovenia',
            ],
            [
                'country_code' => 'SJ',
                'name' => 'Svalbard and Jan Mayen Islands',
            ],
            [
                'country_code' => 'SK',
                'name' => 'Slovak Republic',
            ],
            [
                'country_code' => 'SL',
                'name' => 'Sierra Leone',
            ],
            [
                'country_code' => 'SM',
                'name' => 'San Marino',
            ],
            [
                'country_code' => 'SN',
                'name' => 'Senegal',
            ],
            [
                'country_code' => 'SO',
                'name' => 'Somalia',
            ],
            [
                'country_code' => 'SR',
                'name' => 'Suriname',
            ],
            [
                'country_code' => 'ST',
                'name' => 'Sao Tome and Principe',
            ],
            [
                'country_code' => 'SU',
                'name' => 'USSR (former)',
            ],
            [
                'country_code' => 'SV',
                'name' => 'El Salvador',
            ],
            [
                'country_code' => 'SY',
                'name' => 'Syria',
            ],
            [
                'country_code' => 'SZ',
                'name' => 'Swaziland',
            ],
            [
                'country_code' => 'TC',
                'name' => 'Turks and Caicos Islands',
            ],
            [
                'country_code' => 'TD',
                'name' => 'Chad',
            ],
            [
                'country_code' => 'TF',
                'name' => 'French Southern Territories',
            ],
            [
                'country_code' => 'TG',
                'name' => 'Togo',
            ],
            [
                'country_code' => 'TH',
                'name' => 'Thailand',
            ],
            [
                'country_code' => 'TJ',
                'name' => 'Tajikistan',
            ],
            [
                'country_code' => 'TK',
                'name' => 'Tokelau',
            ],
            [
                'country_code' => 'TM',
                'name' => 'Turkmenistan',
            ],
            [
                'country_code' => 'TN',
                'name' => 'Tunisia',
            ],
            [
                'country_code' => 'TO',
                'name' => 'Tonga',
            ],
            [
                'country_code' => 'TP',
                'name' => 'East Timor',
            ],
            [
                'country_code' => 'TR',
                'name' => 'Turkey',
            ],
            [
                'country_code' => 'TT',
                'name' => 'Trinidad and Tobago',
            ],
            [
                'country_code' => 'TV',
                'name' => 'Tuvalu',
            ],
            [
                'country_code' => 'TW',
                'name' => 'Taiwan',
            ],
            [
                'country_code' => 'TZ',
                'name' => 'Tanzania',
            ],
            [
                'country_code' => 'UA',
                'name' => 'Ukraine',
            ],
            [
                'country_code' => 'UG',
                'name' => 'Uganda',
            ],
            [
                'country_code' => 'UK',
                'name' => 'United Kingdom',
            ],
            [
                'country_code' => 'UM',
                'name' => 'US Minor Outlying Islands',
            ],
            [
                'country_code' => 'US',
                'name' => 'United States',
            ],
            [
                'country_code' => 'UY',
                'name' => 'Uruguay',
            ],
            [
                'country_code' => 'UZ',
                'name' => 'Uzbekistan',
            ],
            [
                'country_code' => 'VA',
                'name' => 'Vatican City State (Holy See)',
            ],
            [
                'country_code' => 'VC',
                'name' => 'Saint Vincent and the Grenadines',
            ],
            [
                'country_code' => 'VE',
                'name' => 'Venezuela',
            ],
            [
                'country_code' => 'VG',
                'name' => 'Virgin Islands (British)',
            ],
            [
                'country_code' => 'VI',
                'name' => 'Virgin Islands (U.S.)',
            ],
            [
                'country_code' => 'VN',
                'name' => 'Viet Nam',
            ],
            [
                'country_code' => 'VU',
                'name' => 'Vanuatu',
            ],
            [
                'country_code' => 'WF',
                'name' => 'Wallis and Futuna Islands',
            ],
            [
                'country_code' => 'WS',
                'name' => 'Samoa',
            ],
            [
                'country_code' => 'YE',
                'name' => 'Yemen',
            ],
            [
                'country_code' => 'YT',
                'name' => 'Mayotte',
            ],
            [
                'country_code' => 'YU',
                'name' => 'Yugoslavia',
            ],
            [
                'country_code' => 'ZA',
                'name' => 'South Africa',
            ],
            [
                'country_code' => 'ZM',
                'name' => 'Zambia',
            ],
            [
                'country_code' => 'ZR',
                'name' => 'Zambia',
            ],
            [
                'country_code' => 'ZW',
                'name' => 'Zimbabwe',
            ],
            [
                'country_code' => 'COM',
                'name' => 'US Commercial',
            ],
            [
                'country_code' => 'EDU',
                'name' => 'US Educational',
            ],
            [
                'country_code' => 'GOV',
                'name' => 'US Government',
            ],
            [
                'country_code' => 'INT',
                'name' => 'International',
            ],
            [
                'country_code' => 'MIL',
                'name' => 'US Military',
            ],
            [
                'country_code' => 'NET',
                'name' => 'Network',
            ],
            [
                'country_code' => 'ORG',
                'name' => 'Non-Profit Organization',
            ],
            [
                'country_code' => 'ARPA',
                'name' => 'Old style Arpanet',
            ],
            [
                'country_code' => 'NATO',
                'name' => 'Nato Field',
            ]
        ];

        foreach($aData as $aCountry) {
            DB::table('countries')->insert($aCountry);
        }
    }
}
