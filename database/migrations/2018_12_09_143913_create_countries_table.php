<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
        });

        DB::table('countries')->insert(
            [
                ['name' => 'Andorra', 'slug' => 'AD'],
                ['name' => 'United Arab Emirates', 'slug' => 'AE'],
                ['name' => 'Afghanistan', 'slug' => 'AF'],
                ['name' => 'Antigua and Barbuda', 'slug' => 'AG'],
                ['name' => 'Anguilla', 'slug' => 'AI'],
                ['name' => 'Albania', 'slug' => 'AL'],
                ['name' => 'Armenia', 'slug' => 'AM'],
                ['name' => 'Angola', 'slug' => 'AO'],
                ['name' => 'Antarctica', 'slug' => 'AQ'],
                ['name' => 'Argentina', 'slug' => 'AR'],
                ['name' => 'Austria', 'slug' => 'AT'],
                ['name' => 'Australia*', 'slug' => 'AU'],
                ['name' => 'Aruba', 'slug' => 'AW'],
                ['name' => 'Aland Islands', 'slug' => 'AX'],
                ['name' => 'Azerbaijan', 'slug' => 'AZ'],
                ['name' => 'Bosnia and Herzegovina', 'slug' => 'BA'],
                ['name' => 'Barbados', 'slug' => 'BB'],
                ['name' => 'Bangladesh', 'slug' => 'BD'],
                ['name' => 'Belgium', 'slug' => 'BE'],
                ['name' => 'Burkina Faso', 'slug' => 'BF'],
                ['name' => 'Bulgaria', 'slug' => 'BG'],
                ['name' => 'Bahrain', 'slug' => 'BH'],
                ['name' => 'Burundi', 'slug' => 'BI'],
                ['name' => 'Benin', 'slug' => 'BJ'],
                ['name' => 'Saint Barthélemy', 'slug' => 'BL'],
                ['name' => 'Bermuda', 'slug' => 'BM'],
                ['name' => 'Brunei Darussalam', 'slug' => 'BN'],
                ['name' => 'Bolivia, Plurinational State of', 'slug' => 'BO'],
                ['name' => 'Bonaire, Sint Eustatius and Saba', 'slug' => 'BQ'],
                ['name' => 'Brazil*', 'slug' => 'BR'],
                ['name' => 'Bahamas', 'slug' => 'BS'],
                ['name' => 'Bhutan', 'slug' => 'BT'],
                ['name' => 'Bouvet Island', 'slug' => 'BV'],
                ['name' => 'Botswana', 'slug' => 'BW'],
                ['name' => 'Belarus', 'slug' => 'BY'],
                ['name' => 'Belize', 'slug' => 'BZ'],
                ['name' => 'Canada*', 'slug' => 'CA'],
                ['name' => 'Cocos (Keeling) Islands', 'slug' => 'CC'],
                ['name' => 'Congo, the Democratic Republic of the', 'slug' => 'CD'],
                ['name' => 'Central African Republic', 'slug' => 'CF'],
                ['name' => 'Congo', 'slug' => 'CG'],
                ['name' => 'Switzerland', 'slug' => 'CH'],
                ['name' => 'Cote d’Ivoire', 'slug' => 'CI'],
                ['name' => 'Cook Islands', 'slug' => 'CK'],
                ['name' => 'Chile', 'slug' => 'CL'],
                ['name' => 'Cameroon', 'slug' => 'CM'],
                ['name' => 'China*', 'slug' => 'CN'],
                ['name' => 'Colombia', 'slug' => 'CO'],
                ['name' => 'Costa Rica', 'slug' => 'CR'],
                ['name' => 'Cuba', 'slug' => 'CU'],
                ['name' => 'Cape Verde', 'slug' => 'CV'],
                ['name' => 'Curaçao', 'slug' => 'CW'],
                ['name' => 'Christmas Island', 'slug' => 'CX'],
                ['name' => 'Cyprus', 'slug' => 'CY'],
                ['name' => 'Czech Republic', 'slug' => 'CZ'],
                ['name' => 'Germany', 'slug' => 'DE'],
                ['name' => 'Djibouti', 'slug' => 'DJ'],
                ['name' => 'Denmark', 'slug' => 'DK'],
                ['name' => 'Dominica', 'slug' => 'DM'],
                ['name' => 'Dominican Republic', 'slug' => 'DO'],
                ['name' => 'Algeria', 'slug' => 'DZ'],
                ['name' => 'Ecuador', 'slug' => 'EC'],
                ['name' => 'Estonia', 'slug' => 'EE'],
                ['name' => 'Egypt', 'slug' => 'EG'],
                ['name' => 'Western Sahara', 'slug' => 'EH'],
                ['name' => 'Eritrea', 'slug' => 'ER'],
                ['name' => 'Spain', 'slug' => 'ES'],
                ['name' => 'Ethiopia', 'slug' => 'ET'],
                ['name' => 'Finland', 'slug' => 'FI'],
                ['name' => 'Fiji', 'slug' => 'FJ'],
                ['name' => 'Falkland Islands (Malvinas)', 'slug' => 'FK'],
                ['name' => 'Faroe Islands', 'slug' => 'FO'],
                ['name' => 'France', 'slug' => 'FR'],
                ['name' => 'Gabon', 'slug' => 'GA'],
                ['name' => 'United Kingdom', 'slug' => 'GB'],
                ['name' => 'Grenada', 'slug' => 'GD'],
                ['name' => 'Georgia', 'slug' => 'GE'],
                ['name' => 'French Guiana', 'slug' => 'GF'],
                ['name' => 'Guernsey', 'slug' => 'GG'],
                ['name' => 'Ghana', 'slug' => 'GH'],
                ['name' => 'Gibraltar', 'slug' => 'GI'],
                ['name' => 'Greenland', 'slug' => 'GL'],
                ['name' => 'Gambia', 'slug' => 'GM'],
                ['name' => 'Guinea', 'slug' => 'GN'],
                ['name' => 'Guadeloupe', 'slug' => 'GP'],
                ['name' => 'Equatorial Guinea', 'slug' => 'GQ'],
                ['name' => 'Greece', 'slug' => 'GR'],
                ['name' => 'South Georgia and the South Sandwich Islands', 'slug' => 'GS'],
                ['name' => 'Guatemala', 'slug' => 'GT'],
                ['name' => 'Guinea-Bissau', 'slug' => 'GW'],
                ['name' => 'Guyana', 'slug' => 'GY'],
                ['name' => 'Heard Island and McDonald Islands', 'slug' => 'HM'],
                ['name' => 'Honduras', 'slug' => 'HN'],
                ['name' => 'Croatia', 'slug' => 'HR'],
                ['name' => 'Haiti', 'slug' => 'HT'],
                ['name' => 'Hungary', 'slug' => 'HU'],
                ['name' => 'Indonesia', 'slug' => 'ID'],
                ['name' => 'Ireland*', 'slug' => 'IE'],
                ['name' => 'Israel', 'slug' => 'IL'],
                ['name' => 'Isle of Man', 'slug' => 'IM'],
                ['name' => 'India*', 'slug' => 'IN'],
                ['name' => 'British Indian Ocean Territory', 'slug' => 'IO'],
                ['name' => 'Iraq', 'slug' => 'IQ'],
                ['name' => 'Iran, Islamic Republic of', 'slug' => 'IR'],
                ['name' => 'Iceland', 'slug' => 'IS'],
                ['name' => 'Italy*', 'slug' => 'IT'],
                ['name' => 'Jersey', 'slug' => 'JE'],
                ['name' => 'Jamaica', 'slug' => 'JM'],
                ['name' => 'Jordan', 'slug' => 'JO'],
                ['name' => 'Japan', 'slug' => 'JP'],
                ['name' => 'Kenya', 'slug' => 'KE'],
                ['name' => 'Kyrgyzstan', 'slug' => 'KG'],
                ['name' => 'Cambodia', 'slug' => 'KH'],
                ['name' => 'Kiribati', 'slug' => 'KI'],
                ['name' => 'Comoros', 'slug' => 'KM'],
                ['name' => 'Saint Kitts and Nevis', 'slug' => 'KN'],
                ['name' => 'Korea, Democratic People’s Republic of', 'slug' => 'KP'],
                ['name' => 'Korea, Republic of', 'slug' => 'KR'],
                ['name' => 'Kuwait', 'slug' => 'KW'],
                ['name' => 'Cayman Islands', 'slug' => 'KY'],
                ['name' => 'Kazakhstan', 'slug' => 'KZ'],
                ['name' => 'Lao People’s Democratic Republic', 'slug' => 'LA'],
                ['name' => 'Lebanon', 'slug' => 'LB'],
                ['name' => 'Saint Lucia', 'slug' => 'LC'],
                ['name' => 'Liechtenstein', 'slug' => 'LI'],
                ['name' => 'Sri Lanka', 'slug' => 'LK'],
                ['name' => 'Liberia', 'slug' => 'LR'],
                ['name' => 'Lesotho', 'slug' => 'LS'],
                ['name' => 'Lithuania', 'slug' => 'LT'],
                ['name' => 'Luxembourg', 'slug' => 'LU'],
                ['name' => 'Latvia', 'slug' => 'LV'],
                ['name' => 'Libyan Arab Jamahiriya', 'slug' => 'LY'],
                ['name' => 'Morocco', 'slug' => 'MA'],
                ['name' => 'Monaco', 'slug' => 'MC'],
                ['name' => 'Moldova, Republic of', 'slug' => 'MD'],
                ['name' => 'Montenegro', 'slug' => 'ME'],
                ['name' => 'Saint Martin (French part)', 'slug' => 'MF'],
                ['name' => 'Madagascar', 'slug' => 'MG'],
                ['name' => 'Macedonia, the former Yugoslav Republic of', 'slug' => 'MK'],
                ['name' => 'Mali', 'slug' => 'ML'],
                ['name' => 'Myanmar', 'slug' => 'MM'],
                ['name' => 'Mongolia', 'slug' => 'MN'],
                ['name' => 'Macao', 'slug' => 'MO'],
                ['name' => 'Martinique', 'slug' => 'MQ'],
                ['name' => 'Mauritania', 'slug' => 'MR'],
                ['name' => 'Montserrat', 'slug' => 'MS'],
                ['name' => 'Malta', 'slug' => 'MT'],
                ['name' => 'Mauritius', 'slug' => 'MU'],
                ['name' => 'Maldives', 'slug' => 'MV'],
                ['name' => 'Malawi', 'slug' => 'MW'],
                ['name' => 'Mexico*', 'slug' => 'MX'],
                ['name' => 'Malaysia', 'slug' => 'MY'],
                ['name' => 'Mozambique', 'slug' => 'MZ'],
                ['name' => 'Namibia', 'slug' => 'NA'],
                ['name' => 'New Caledonia', 'slug' => 'NC'],
                ['name' => 'Niger', 'slug' => 'NE'],
                ['name' => 'Norfolk Island', 'slug' => 'NF'],
                ['name' => 'Nigeria', 'slug' => 'NG'],
                ['name' => 'Nicaragua', 'slug' => 'NI'],
                ['name' => 'Netherlands', 'slug' => 'NL'],
                ['name' => 'Norway', 'slug' => 'NO'],
                ['name' => 'Nepal', 'slug' => 'NP'],
                ['name' => 'Nauru', 'slug' => 'NR'],
                ['name' => 'Niue', 'slug' => 'NU'],
                ['name' => 'New Zealand', 'slug' => 'NZ'],
                ['name' => 'Oman', 'slug' => 'OM'],
                ['name' => 'Panama', 'slug' => 'PA'],
                ['name' => 'Peru', 'slug' => 'PE'],
                ['name' => 'French Polynesia', 'slug' => 'PF'],
                ['name' => 'Papua New Guinea', 'slug' => 'PG'],
                ['name' => 'Philippines', 'slug' => 'PH'],
                ['name' => 'Pakistan', 'slug' => 'PK'],
                ['name' => 'Poland', 'slug' => 'PL'],
                ['name' => 'Saint Pierre and Miquelon', 'slug' => 'PM'],
                ['name' => 'Pitcairn', 'slug' => 'PN'],
                ['name' => 'Palestine', 'slug' => 'PS'],
                ['name' => 'Portugal', 'slug' => 'PT'],
                ['name' => 'Paraguay', 'slug' => 'PY'],
                ['name' => 'Qatar', 'slug' => 'QA'],
                ['name' => 'Reunion', 'slug' => 'RE'],
                ['name' => 'Romania', 'slug' => 'RO'],
                ['name' => 'Serbia', 'slug' => 'RS'],
                ['name' => 'Russian Federation', 'slug' => 'RU'],
                ['name' => 'Rwanda', 'slug' => 'RW'],
                ['name' => 'Saudi Arabia', 'slug' => 'SA'],
                ['name' => 'Solomon Islands', 'slug' => 'SB'],
                ['name' => 'Seychelles', 'slug' => 'SC'],
                ['name' => 'Sudan', 'slug' => 'SD'],
                ['name' => 'Sweden', 'slug' => 'SE'],
                ['name' => 'Singapore', 'slug' => 'SG'],
                ['name' => 'Saint Helena, Ascension and Tristan da Cunha', 'slug' => 'SH'],
                ['name' => 'Slovenia', 'slug' => 'SI'],
                ['name' => 'Svalbard and Jan Mayen', 'slug' => 'SJ'],
                ['name' => 'Slovakia', 'slug' => 'SK'],
                ['name' => 'Sierra Leone', 'slug' => 'SL'],
                ['name' => 'San Marino', 'slug' => 'SM'],
                ['name' => 'Senegal', 'slug' => 'SN'],
                ['name' => 'Somalia', 'slug' => 'SO'],
                ['name' => 'Suriname', 'slug' => 'SR'],
                ['name' => 'South Sudan', 'slug' => 'SS'],
                ['name' => 'Sao Tome and Principe', 'slug' => 'ST'],
                ['name' => 'El Salvador', 'slug' => 'SV'],
                ['name' => 'Sint Maarten (Dutch part)', 'slug' => 'SX'],
                ['name' => 'Syrian Arab Republic', 'slug' => 'SY'],
                ['name' => 'Swaziland', 'slug' => 'SZ'],
                ['name' => 'Turks and Caicos Islands', 'slug' => 'TC'],
                ['name' => 'Chad', 'slug' => 'TD'],
                ['name' => 'French Southern Territories', 'slug' => 'TF'],
                ['name' => 'Togo', 'slug' => 'TG'],
                ['name' => 'Thailand', 'slug' => 'TH'],
                ['name' => 'Tajikistan', 'slug' => 'TJ'],
                ['name' => 'Tokelau', 'slug' => 'TK'],
                ['name' => 'Timor-Leste', 'slug' => 'TL'],
                ['name' => 'Turkmenistan', 'slug' => 'TM'],
                ['name' => 'Tunisia', 'slug' => 'TN'],
                ['name' => 'Tonga', 'slug' => 'TO'],
                ['name' => 'Turkey', 'slug' => 'TR'],
                ['name' => 'Trinidad and Tobago', 'slug' => 'TT'],
                ['name' => 'Tuvalu', 'slug' => 'TV'],
                ['name' => 'Taiwan', 'slug' => 'TW'],
                ['name' => 'Tanzania, United Republic of', 'slug' => 'TZ'],
                ['name' => 'Ukraine', 'slug' => 'UA'],
                ['name' => 'Uganda', 'slug' => 'UG'],
                ['name' => 'United States*', 'slug' => 'US'],
                ['name' => 'Uruguay', 'slug' => 'UY'],
                ['name' => 'Uzbekistan', 'slug' => 'UZ'],
                ['name' => 'Holy See (Vatican City State)', 'slug' => 'VA'],
                ['name' => 'Saint Vincent and the Grenadines', 'slug' => 'VC'],
                ['name' => 'Venezuela, Bolivarian Republic of', 'slug' => 'VE'],
                ['name' => 'Virgin Islands, British', 'slug' => 'VG'],
                ['name' => 'Vietnam', 'slug' => 'VN'],
                ['name' => 'Vanuatu', 'slug' => 'VU'],
                ['name' => 'Wallis and Futuna', 'slug' => 'WF'],
                ['name' => 'Samoa', 'slug' => 'WS'],
                ['name' => 'Yemen', 'slug' => 'YE'],
                ['name' => 'Mayotte', 'slug' => 'YT'],
                ['name' => 'South Africa', 'slug' => 'ZA'],
                ['name' => 'Zambia', 'slug' => 'ZM'],
                ['name' => 'Zimbabwe', 'slug' => 'ZW']
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
