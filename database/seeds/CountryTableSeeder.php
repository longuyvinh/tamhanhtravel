<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('country')->truncate();

        DB::table('country')->insert(array(
            0 =>
            array(
                'id' => '1',
                'name' => 'United States',
                'code' => 'US',
                'priority' => '0',
            ),
            1 =>
            array(
                'id' => '2',
                'name' => 'Canada',
                'code' => 'CA',
                'priority' => '0',
            ),
            2 =>
            array(
                'id' => '3',
                'name' => 'Afghanistan',
                'code' => 'AF',
                'priority' => '0',
            ),
            3 =>
            array(
                'id' => '4',
                'name' => 'Albania',
                'code' => 'AL',
                'priority' => '0',
            ),
            4 =>
            array(
                'id' => '5',
                'name' => 'Algeria',
                'code' => 'DZ',
                'priority' => '0',
            ),
            5 =>
            array(
                'id' => '6',
                'name' => 'American Samoa',
                'code' => 'DS',
                'priority' => '0',
            ),
            6 =>
            array(
                'id' => '7',
                'name' => 'Andorra',
                'code' => 'AD',
                'priority' => '0',
            ),
            7 =>
            array(
                'id' => '8',
                'name' => 'Angola',
                'code' => 'AO',
                'priority' => '0',
            ),
            8 =>
            array(
                'id' => '9',
                'name' => 'Anguilla',
                'code' => 'AI',
                'priority' => '0',
            ),
            9 =>
            array(
                'id' => '10',
                'name' => 'Antarctica',
                'code' => 'AQ',
                'priority' => '0',
            ),
            10 =>
            array(
                'id' => '11',
                'name' => 'Antigua and/or Barbuda',
                'code' => 'AG',
                'priority' => '0',
            ),
            11 =>
            array(
                'id' => '12',
                'name' => 'Argentina',
                'code' => 'AR',
                'priority' => '0',
            ),
            12 =>
            array(
                'id' => '13',
                'name' => 'Armenia',
                'code' => 'AM',
                'priority' => '0',
            ),
            13 =>
            array(
                'id' => '14',
                'name' => 'Aruba',
                'code' => 'AW',
                'priority' => '0',
            ),
            14 =>
            array(
                'id' => '15',
                'name' => 'Australia',
                'code' => 'AU',
                'priority' => '0',
            ),
            15 =>
            array(
                'id' => '16',
                'name' => 'Austria',
                'code' => 'AT',
                'priority' => '0',
            ),
            16 =>
            array(
                'id' => '17',
                'name' => 'Azerbaijan',
                'code' => 'AZ',
                'priority' => '0',
            ),
            17 =>
            array(
                'id' => '18',
                'name' => 'Bahamas',
                'code' => 'BS',
                'priority' => '0',
            ),
            18 =>
            array(
                'id' => '19',
                'name' => 'Bahrain',
                'code' => 'BH',
                'priority' => '0',
            ),
            19 =>
            array(
                'id' => '20',
                'name' => 'Bangladesh',
                'code' => 'BD',
                'priority' => '0',
            ),
            20 =>
            array(
                'id' => '21',
                'name' => 'Barbados',
                'code' => 'BB',
                'priority' => '0',
            ),
            21 =>
            array(
                'id' => '22',
                'name' => 'Belarus',
                'code' => 'BY',
                'priority' => '0',
            ),
            22 =>
            array(
                'id' => '23',
                'name' => 'Belgium',
                'code' => 'BE',
                'priority' => '0',
            ),
            23 =>
            array(
                'id' => '24',
                'name' => 'Belize',
                'code' => 'BZ',
                'priority' => '0',
            ),
            24 =>
            array(
                'id' => '25',
                'name' => 'Benin',
                'code' => 'BJ',
                'priority' => '0',
            ),
            25 =>
            array(
                'id' => '26',
                'name' => 'Bermuda',
                'code' => 'BM',
                'priority' => '0',
            ),
            26 =>
            array(
                'id' => '27',
                'name' => 'Bhutan',
                'code' => 'BT',
                'priority' => '0',
            ),
            27 =>
            array(
                'id' => '28',
                'name' => 'Bolivia',
                'code' => 'BO',
                'priority' => '0',
            ),
            28 =>
            array(
                'id' => '29',
                'name' => 'Bosnia and Herzegovina',
                'code' => 'BA',
                'priority' => '0',
            ),
            29 =>
            array(
                'id' => '30',
                'name' => 'Botswana',
                'code' => 'BW',
                'priority' => '0',
            ),
            30 =>
            array(
                'id' => '31',
                'name' => 'Bouvet Island',
                'code' => 'BV',
                'priority' => '0',
            ),
            31 =>
            array(
                'id' => '32',
                'name' => 'Brazil',
                'code' => 'BR',
                'priority' => '0',
            ),
            32 =>
            array(
                'id' => '33',
                'name' => 'British lndian Ocean Territory',
                'code' => 'IO',
                'priority' => '0',
            ),
            33 =>
            array(
                'id' => '34',
                'name' => 'Brunei Darussalam',
                'code' => 'BN',
                'priority' => '0',
            ),
            34 =>
            array(
                'id' => '35',
                'name' => 'Bulgaria',
                'code' => 'BG',
                'priority' => '0',
            ),
            35 =>
            array(
                'id' => '36',
                'name' => 'Burkina Faso',
                'code' => 'BF',
                'priority' => '0',
            ),
            36 =>
            array(
                'id' => '37',
                'name' => 'Burundi',
                'code' => 'BI',
                'priority' => '0',
            ),
            37 =>
            array(
                'id' => '38',
                'name' => 'Cambodia',
                'code' => 'KH',
                'priority' => '0',
            ),
            38 =>
            array(
                'id' => '39',
                'name' => 'Cameroon',
                'code' => 'CM',
                'priority' => '0',
            ),
            39 =>
            array(
                'id' => '40',
                'name' => 'Cape Verde',
                'code' => 'CV',
                'priority' => '0',
            ),
            40 =>
            array(
                'id' => '41',
                'name' => 'Cayman Islands',
                'code' => 'KY',
                'priority' => '0',
            ),
            41 =>
            array(
                'id' => '42',
                'name' => 'Central African Republic',
                'code' => 'CF',
                'priority' => '0',
            ),
            42 =>
            array(
                'id' => '43',
                'name' => 'Chad',
                'code' => 'TD',
                'priority' => '0',
            ),
            43 =>
            array(
                'id' => '44',
                'name' => 'Chile',
                'code' => 'CL',
                'priority' => '0',
            ),
            44 =>
            array(
                'id' => '45',
                'name' => 'China',
                'code' => 'CN',
                'priority' => '0',
            ),
            45 =>
            array(
                'id' => '46',
                'name' => 'Christmas Island',
                'code' => 'CX',
                'priority' => '0',
            ),
            46 =>
            array(
                'id' => '47',
                'name' => 'Cocos (Keeling) Islands',
                'code' => 'CC',
                'priority' => '0',
            ),
            47 =>
            array(
                'id' => '48',
                'name' => 'Colombia',
                'code' => 'CO',
                'priority' => '0',
            ),
            48 =>
            array(
                'id' => '49',
                'name' => 'Comoros',
                'code' => 'KM',
                'priority' => '0',
            ),
            49 =>
            array(
                'id' => '50',
                'name' => 'Congo',
                'code' => 'CG',
                'priority' => '0',
            ),
            50 =>
            array(
                'id' => '51',
                'name' => 'Cook Islands',
                'code' => 'CK',
                'priority' => '0',
            ),
            51 =>
            array(
                'id' => '52',
                'name' => 'Costa Rica',
                'code' => 'CR',
                'priority' => '0',
            ),
            52 =>
            array(
                'id' => '53',
                'name' => 'Croatia (Hrvatska)',
                'code' => 'HR',
                'priority' => '0',
            ),
            53 =>
            array(
                'id' => '54',
                'name' => 'Cuba',
                'code' => 'CU',
                'priority' => '0',
            ),
            54 =>
            array(
                'id' => '55',
                'name' => 'Cyprus',
                'code' => 'CY',
                'priority' => '0',
            ),
            55 =>
            array(
                'id' => '56',
                'name' => 'Czech Republic',
                'code' => 'CZ',
                'priority' => '0',
            ),
            56 =>
            array(
                'id' => '57',
                'name' => 'Denmark',
                'code' => 'DK',
                'priority' => '0',
            ),
            57 =>
            array(
                'id' => '58',
                'name' => 'Djibouti',
                'code' => 'DJ',
                'priority' => '0',
            ),
            58 =>
            array(
                'id' => '59',
                'name' => 'Dominica',
                'code' => 'DM',
                'priority' => '0',
            ),
            59 =>
            array(
                'id' => '60',
                'name' => 'Dominican Republic',
                'code' => 'DO',
                'priority' => '0',
            ),
            60 =>
            array(
                'id' => '61',
                'name' => 'East Timor',
                'code' => 'TP',
                'priority' => '0',
            ),
            61 =>
            array(
                'id' => '62',
                'name' => 'Ecuador',
                'code' => 'EC',
                'priority' => '0',
            ),
            62 =>
            array(
                'id' => '63',
                'name' => 'Egypt',
                'code' => 'EG',
                'priority' => '0',
            ),
            63 =>
            array(
                'id' => '64',
                'name' => 'El Salvador',
                'code' => 'SV',
                'priority' => '0',
            ),
            64 =>
            array(
                'id' => '65',
                'name' => 'Equatorial Guinea',
                'code' => 'GQ',
                'priority' => '0',
            ),
            65 =>
            array(
                'id' => '66',
                'name' => 'Eritrea',
                'code' => 'ER',
                'priority' => '0',
            ),
            66 =>
            array(
                'id' => '67',
                'name' => 'Estonia',
                'code' => 'EE',
                'priority' => '0',
            ),
            67 =>
            array(
                'id' => '68',
                'name' => 'Ethiopia',
                'code' => 'ET',
                'priority' => '0',
            ),
            68 =>
            array(
                'id' => '69',
                'name' => 'Falkland Islands (Malvinas)',
                'code' => 'FK',
                'priority' => '0',
            ),
            69 =>
            array(
                'id' => '70',
                'name' => 'Faroe Islands',
                'code' => 'FO',
                'priority' => '0',
            ),
            70 =>
            array(
                'id' => '71',
                'name' => 'Fiji',
                'code' => 'FJ',
                'priority' => '0',
            ),
            71 =>
            array(
                'id' => '72',
                'name' => 'Finland',
                'code' => 'FI',
                'priority' => '0',
            ),
            72 =>
            array(
                'id' => '73',
                'name' => 'France',
                'code' => 'FR',
                'priority' => '0',
            ),
            73 =>
            array(
                'id' => '74',
                'name' => 'France, Metropolitan',
                'code' => 'FX',
                'priority' => '0',
            ),
            74 =>
            array(
                'id' => '75',
                'name' => 'French Guiana',
                'code' => 'GF',
                'priority' => '0',
            ),
            75 =>
            array(
                'id' => '76',
                'name' => 'French Polynesia',
                'code' => 'PF',
                'priority' => '0',
            ),
            76 =>
            array(
                'id' => '77',
                'name' => 'French Southern Territories',
                'code' => 'TF',
                'priority' => '0',
            ),
            77 =>
            array(
                'id' => '78',
                'name' => 'Gabon',
                'code' => 'GA',
                'priority' => '0',
            ),
            78 =>
            array(
                'id' => '79',
                'name' => 'Gambia',
                'code' => 'GM',
                'priority' => '0',
            ),
            79 =>
            array(
                'id' => '80',
                'name' => 'Georgia',
                'code' => 'GE',
                'priority' => '0',
            ),
            80 =>
            array(
                'id' => '81',
                'name' => 'Germany',
                'code' => 'DE',
                'priority' => '0',
            ),
            81 =>
            array(
                'id' => '82',
                'name' => 'Ghana',
                'code' => 'GH',
                'priority' => '0',
            ),
            82 =>
            array(
                'id' => '83',
                'name' => 'Gibraltar',
                'code' => 'GI',
                'priority' => '0',
            ),
            83 =>
            array(
                'id' => '84',
                'name' => 'Greece',
                'code' => 'GR',
                'priority' => '0',
            ),
            84 =>
            array(
                'id' => '85',
                'name' => 'Greenland',
                'code' => 'GL',
                'priority' => '0',
            ),
            85 =>
            array(
                'id' => '86',
                'name' => 'Grenada',
                'code' => 'GD',
                'priority' => '0',
            ),
            86 =>
            array(
                'id' => '87',
                'name' => 'Guadeloupe',
                'code' => 'GP',
                'priority' => '0',
            ),
            87 =>
            array(
                'id' => '88',
                'name' => 'Guam',
                'code' => 'GU',
                'priority' => '0',
            ),
            88 =>
            array(
                'id' => '89',
                'name' => 'Guatemala',
                'code' => 'GT',
                'priority' => '0',
            ),
            89 =>
            array(
                'id' => '90',
                'name' => 'Guinea',
                'code' => 'GN',
                'priority' => '0',
            ),
            90 =>
            array(
                'id' => '91',
                'name' => 'Guinea-Bissau',
                'code' => 'GW',
                'priority' => '0',
            ),
            91 =>
            array(
                'id' => '92',
                'name' => 'Guyana',
                'code' => 'GY',
                'priority' => '0',
            ),
            92 =>
            array(
                'id' => '93',
                'name' => 'Haiti',
                'code' => 'HT',
                'priority' => '0',
            ),
            93 =>
            array(
                'id' => '94',
                'name' => 'Heard and Mc Donald Islands',
                'code' => 'HM',
                'priority' => '0',
            ),
            94 =>
            array(
                'id' => '95',
                'name' => 'Honduras',
                'code' => 'HN',
                'priority' => '0',
            ),
            95 =>
            array(
                'id' => '96',
                'name' => 'Hong Kong',
                'code' => 'HK',
                'priority' => '0',
            ),
            96 =>
            array(
                'id' => '97',
                'name' => 'Hungary',
                'code' => 'HU',
                'priority' => '0',
            ),
            97 =>
            array(
                'id' => '98',
                'name' => 'Iceland',
                'code' => 'IS',
                'priority' => '0',
            ),
            98 =>
            array(
                'id' => '99',
                'name' => 'India',
                'code' => 'IN',
                'priority' => '0',
            ),
            99 =>
            array(
                'id' => '100',
                'name' => 'Indonesia',
                'code' => 'ID',
                'priority' => '0',
            ),
            100 =>
            array(
                'id' => '101',
                'name' => 'Iran (Islamic Republic of)',
                'code' => 'IR',
                'priority' => '0',
            ),
            101 =>
            array(
                'id' => '102',
                'name' => 'Iraq',
                'code' => 'IQ',
                'priority' => '0',
            ),
            102 =>
            array(
                'id' => '103',
                'name' => 'Ireland',
                'code' => 'IE',
                'priority' => '0',
            ),
            103 =>
            array(
                'id' => '104',
                'name' => 'Israel',
                'code' => 'IL',
                'priority' => '0',
            ),
            104 =>
            array(
                'id' => '105',
                'name' => 'Italy',
                'code' => 'IT',
                'priority' => '0',
            ),
            105 =>
            array(
                'id' => '106',
                'name' => 'Ivory Coast',
                'code' => 'CI',
                'priority' => '0',
            ),
            106 =>
            array(
                'id' => '107',
                'name' => 'Jamaica',
                'code' => 'JM',
                'priority' => '0',
            ),
            107 =>
            array(
                'id' => '108',
                'name' => 'Japan',
                'code' => 'JP',
                'priority' => '0',
            ),
            108 =>
            array(
                'id' => '109',
                'name' => 'Jordan',
                'code' => 'JO',
                'priority' => '0',
            ),
            109 =>
            array(
                'id' => '110',
                'name' => 'Kazakhstan',
                'code' => 'KZ',
                'priority' => '0',
            ),
            110 =>
            array(
                'id' => '111',
                'name' => 'Kenya',
                'code' => 'KE',
                'priority' => '0',
            ),
            111 =>
            array(
                'id' => '112',
                'name' => 'Kiribati',
                'code' => 'KI',
                'priority' => '0',
            ),
            112 =>
            array(
                'id' => '113',
                'name' => 'Korea, Democratic People\'s Republic of',
                'code' => 'KP',
                'priority' => '0',
            ),
            113 =>
            array(
                'id' => '114',
                'name' => 'Korea, Republic of',
                'code' => 'KR',
                'priority' => '0',
            ),
            114 =>
            array(
                'id' => '115',
                'name' => 'Kosovo',
                'code' => 'XK',
                'priority' => '0',
            ),
            115 =>
            array(
                'id' => '116',
                'name' => 'Kuwait',
                'code' => 'KW',
                'priority' => '0',
            ),
            116 =>
            array(
                'id' => '117',
                'name' => 'Kyrgyzstan',
                'code' => 'KG',
                'priority' => '0',
            ),
            117 =>
            array(
                'id' => '118',
                'name' => 'Lao People\'s Democratic Republic',
                'code' => 'LA',
                'priority' => '0',
            ),
            118 =>
            array(
                'id' => '119',
                'name' => 'Latvia',
                'code' => 'LV',
                'priority' => '0',
            ),
            119 =>
            array(
                'id' => '120',
                'name' => 'Lebanon',
                'code' => 'LB',
                'priority' => '0',
            ),
            120 =>
            array(
                'id' => '121',
                'name' => 'Lesotho',
                'code' => 'LS',
                'priority' => '0',
            ),
            121 =>
            array(
                'id' => '122',
                'name' => 'Liberia',
                'code' => 'LR',
                'priority' => '0',
            ),
            122 =>
            array(
                'id' => '123',
                'name' => 'Libyan Arab Jamahiriya',
                'code' => 'LY',
                'priority' => '0',
            ),
            123 =>
            array(
                'id' => '124',
                'name' => 'Liechtenstein',
                'code' => 'LI',
                'priority' => '0',
            ),
            124 =>
            array(
                'id' => '125',
                'name' => 'Lithuania',
                'code' => 'LT',
                'priority' => '0',
            ),
            125 =>
            array(
                'id' => '126',
                'name' => 'Luxembourg',
                'code' => 'LU',
                'priority' => '0',
            ),
            126 =>
            array(
                'id' => '127',
                'name' => 'Macau',
                'code' => 'MO',
                'priority' => '0',
            ),
            127 =>
            array(
                'id' => '128',
                'name' => 'Macedonia',
                'code' => 'MK',
                'priority' => '0',
            ),
            128 =>
            array(
                'id' => '129',
                'name' => 'Madagascar',
                'code' => 'MG',
                'priority' => '0',
            ),
            129 =>
            array(
                'id' => '130',
                'name' => 'Malawi',
                'code' => 'MW',
                'priority' => '0',
            ),
            130 =>
            array(
                'id' => '131',
                'name' => 'Malaysia',
                'code' => 'MY',
                'priority' => '2',
            ),
            131 =>
            array(
                'id' => '132',
                'name' => 'Maldives',
                'code' => 'MV',
                'priority' => '0',
            ),
            132 =>
            array(
                'id' => '133',
                'name' => 'Mali',
                'code' => 'ML',
                'priority' => '0',
            ),
            133 =>
            array(
                'id' => '134',
                'name' => 'Malta',
                'code' => 'MT',
                'priority' => '0',
            ),
            134 =>
            array(
                'id' => '135',
                'name' => 'Marshall Islands',
                'code' => 'MH',
                'priority' => '0',
            ),
            135 =>
            array(
                'id' => '136',
                'name' => 'Martinique',
                'code' => 'MQ',
                'priority' => '0',
            ),
            136 =>
            array(
                'id' => '137',
                'name' => 'Mauritania',
                'code' => 'MR',
                'priority' => '0',
            ),
            137 =>
            array(
                'id' => '138',
                'name' => 'Mauritius',
                'code' => 'MU',
                'priority' => '0',
            ),
            138 =>
            array(
                'id' => '139',
                'name' => 'Mayotte',
                'code' => 'TY',
                'priority' => '0',
            ),
            139 =>
            array(
                'id' => '140',
                'name' => 'Mexico',
                'code' => 'MX',
                'priority' => '0',
            ),
            140 =>
            array(
                'id' => '141',
                'name' => 'Micronesia, Federated States of',
                'code' => 'FM',
                'priority' => '0',
            ),
            141 =>
            array(
                'id' => '142',
                'name' => 'Moldova, Republic of',
                'code' => 'MD',
                'priority' => '0',
            ),
            142 =>
            array(
                'id' => '143',
                'name' => 'Monaco',
                'code' => 'MC',
                'priority' => '0',
            ),
            143 =>
            array(
                'id' => '144',
                'name' => 'Mongolia',
                'code' => 'MN',
                'priority' => '0',
            ),
            144 =>
            array(
                'id' => '145',
                'name' => 'Montenegro',
                'code' => 'ME',
                'priority' => '0',
            ),
            145 =>
            array(
                'id' => '146',
                'name' => 'Montserrat',
                'code' => 'MS',
                'priority' => '0',
            ),
            146 =>
            array(
                'id' => '147',
                'name' => 'Morocco',
                'code' => 'MA',
                'priority' => '0',
            ),
            147 =>
            array(
                'id' => '148',
                'name' => 'Mozambique',
                'code' => 'MZ',
                'priority' => '0',
            ),
            148 =>
            array(
                'id' => '149',
                'name' => 'Myanmar',
                'code' => 'MM',
                'priority' => '0',
            ),
            149 =>
            array(
                'id' => '150',
                'name' => 'Namibia',
                'code' => 'NA',
                'priority' => '0',
            ),
            150 =>
            array(
                'id' => '151',
                'name' => 'Nauru',
                'code' => 'NR',
                'priority' => '0',
            ),
            151 =>
            array(
                'id' => '152',
                'name' => 'Nepal',
                'code' => 'NP',
                'priority' => '0',
            ),
            152 =>
            array(
                'id' => '153',
                'name' => 'Netherlands',
                'code' => 'NL',
                'priority' => '0',
            ),
            153 =>
            array(
                'id' => '154',
                'name' => 'Netherlands Antilles',
                'code' => 'AN',
                'priority' => '0',
            ),
            154 =>
            array(
                'id' => '155',
                'name' => 'New Caledonia',
                'code' => 'NC',
                'priority' => '0',
            ),
            155 =>
            array(
                'id' => '156',
                'name' => 'New Zealand',
                'code' => 'NZ',
                'priority' => '0',
            ),
            156 =>
            array(
                'id' => '157',
                'name' => 'Nicaragua',
                'code' => 'NI',
                'priority' => '0',
            ),
            157 =>
            array(
                'id' => '158',
                'name' => 'Niger',
                'code' => 'NE',
                'priority' => '0',
            ),
            158 =>
            array(
                'id' => '159',
                'name' => 'Nigeria',
                'code' => 'NG',
                'priority' => '0',
            ),
            159 =>
            array(
                'id' => '160',
                'name' => 'Niue',
                'code' => 'NU',
                'priority' => '0',
            ),
            160 =>
            array(
                'id' => '161',
                'name' => 'Norfork Island',
                'code' => 'NF',
                'priority' => '0',
            ),
            161 =>
            array(
                'id' => '162',
                'name' => 'Northern Mariana Islands',
                'code' => 'MP',
                'priority' => '0',
            ),
            162 =>
            array(
                'id' => '163',
                'name' => 'Norway',
                'code' => 'NO',
                'priority' => '0',
            ),
            163 =>
            array(
                'id' => '164',
                'name' => 'Oman',
                'code' => 'OM',
                'priority' => '0',
            ),
            164 =>
            array(
                'id' => '165',
                'name' => 'Pakistan',
                'code' => 'PK',
                'priority' => '0',
            ),
            165 =>
            array(
                'id' => '166',
                'name' => 'Palau',
                'code' => 'PW',
                'priority' => '0',
            ),
            166 =>
            array(
                'id' => '167',
                'name' => 'Panama',
                'code' => 'PA',
                'priority' => '0',
            ),
            167 =>
            array(
                'id' => '168',
                'name' => 'Papua New Guinea',
                'code' => 'PG',
                'priority' => '0',
            ),
            168 =>
            array(
                'id' => '169',
                'name' => 'Paraguay',
                'code' => 'PY',
                'priority' => '0',
            ),
            169 =>
            array(
                'id' => '170',
                'name' => 'Peru',
                'code' => 'PE',
                'priority' => '0',
            ),
            170 =>
            array(
                'id' => '171',
                'name' => 'Philippines',
                'code' => 'PH',
                'priority' => '0',
            ),
            171 =>
            array(
                'id' => '172',
                'name' => 'Pitcairn',
                'code' => 'PN',
                'priority' => '0',
            ),
            172 =>
            array(
                'id' => '173',
                'name' => 'Poland',
                'code' => 'PL',
                'priority' => '0',
            ),
            173 =>
            array(
                'id' => '174',
                'name' => 'Portugal',
                'code' => 'PT',
                'priority' => '0',
            ),
            174 =>
            array(
                'id' => '175',
                'name' => 'Puerto Rico',
                'code' => 'PR',
                'priority' => '0',
            ),
            175 =>
            array(
                'id' => '176',
                'name' => 'Qatar',
                'code' => 'QA',
                'priority' => '0',
            ),
            176 =>
            array(
                'id' => '177',
                'name' => 'Reunion',
                'code' => 'RE',
                'priority' => '0',
            ),
            177 =>
            array(
                'id' => '178',
                'name' => 'Romania',
                'code' => 'RO',
                'priority' => '0',
            ),
            178 =>
            array(
                'id' => '179',
                'name' => 'Russian Federation',
                'code' => 'RU',
                'priority' => '0',
            ),
            179 =>
            array(
                'id' => '180',
                'name' => 'Rwanda',
                'code' => 'RW',
                'priority' => '0',
            ),
            180 =>
            array(
                'id' => '181',
                'name' => 'Saint Kitts and Nevis',
                'code' => 'KN',
                'priority' => '0',
            ),
            181 =>
            array(
                'id' => '182',
                'name' => 'Saint Lucia',
                'code' => 'LC',
                'priority' => '0',
            ),
            182 =>
            array(
                'id' => '183',
                'name' => 'Saint Vincent and the Grenadines',
                'code' => 'VC',
                'priority' => '0',
            ),
            183 =>
            array(
                'id' => '184',
                'name' => 'Samoa',
                'code' => 'WS',
                'priority' => '0',
            ),
            184 =>
            array(
                'id' => '185',
                'name' => 'San Marino',
                'code' => 'SM',
                'priority' => '0',
            ),
            185 =>
            array(
                'id' => '186',
                'name' => 'Sao Tome and Principe',
                'code' => 'ST',
                'priority' => '0',
            ),
            186 =>
            array(
                'id' => '187',
                'name' => 'Saudi Arabia',
                'code' => 'SA',
                'priority' => '0',
            ),
            187 =>
            array(
                'id' => '188',
                'name' => 'Senegal',
                'code' => 'SN',
                'priority' => '0',
            ),
            188 =>
            array(
                'id' => '189',
                'name' => 'Serbia',
                'code' => 'RS',
                'priority' => '0',
            ),
            189 =>
            array(
                'id' => '190',
                'name' => 'Seychelles',
                'code' => 'SC',
                'priority' => '0',
            ),
            190 =>
            array(
                'id' => '191',
                'name' => 'Sierra Leone',
                'code' => 'SL',
                'priority' => '0',
            ),
            191 =>
            array(
                'id' => '192',
                'name' => 'Singapore',
                'code' => 'SG',
                'priority' => '2',
            ),
            192 =>
            array(
                'id' => '193',
                'name' => 'Slovakia',
                'code' => 'SK',
                'priority' => '0',
            ),
            193 =>
            array(
                'id' => '194',
                'name' => 'Slovenia',
                'code' => 'SI',
                'priority' => '0',
            ),
            194 =>
            array(
                'id' => '195',
                'name' => 'Solomon Islands',
                'code' => 'SB',
                'priority' => '0',
            ),
            195 =>
            array(
                'id' => '196',
                'name' => 'Somalia',
                'code' => 'SO',
                'priority' => '0',
            ),
            196 =>
            array(
                'id' => '197',
                'name' => 'South Africa',
                'code' => 'ZA',
                'priority' => '0',
            ),
            197 =>
            array(
                'id' => '198',
                'name' => 'South Georgia South Sandwich Islands',
                'code' => 'GS',
                'priority' => '0',
            ),
            198 =>
            array(
                'id' => '199',
                'name' => 'Spain',
                'code' => 'ES',
                'priority' => '0',
            ),
            199 =>
            array(
                'id' => '200',
                'name' => 'Sri Lanka',
                'code' => 'LK',
                'priority' => '0',
            ),
            200 =>
            array(
                'id' => '201',
                'name' => 'St. Helena',
                'code' => 'SH',
                'priority' => '0',
            ),
            201 =>
            array(
                'id' => '202',
                'name' => 'St. Pierre and Miquelon',
                'code' => 'PM',
                'priority' => '0',
            ),
            202 =>
            array(
                'id' => '203',
                'name' => 'Sudan',
                'code' => 'SD',
                'priority' => '0',
            ),
            203 =>
            array(
                'id' => '204',
                'name' => 'Suriname',
                'code' => 'SR',
                'priority' => '0',
            ),
            204 =>
            array(
                'id' => '205',
                'name' => 'Svalbarn and Jan Mayen Islands',
                'code' => 'SJ',
                'priority' => '0',
            ),
            205 =>
            array(
                'id' => '206',
                'name' => 'Swaziland',
                'code' => 'SZ',
                'priority' => '0',
            ),
            206 =>
            array(
                'id' => '207',
                'name' => 'Sweden',
                'code' => 'SE',
                'priority' => '0',
            ),
            207 =>
            array(
                'id' => '208',
                'name' => 'Switzerland',
                'code' => 'CH',
                'priority' => '0',
            ),
            208 =>
            array(
                'id' => '209',
                'name' => 'Syrian Arab Republic',
                'code' => 'SY',
                'priority' => '0',
            ),
            209 =>
            array(
                'id' => '210',
                'name' => 'Taiwan',
                'code' => 'TW',
                'priority' => '0',
            ),
            210 =>
            array(
                'id' => '211',
                'name' => 'Tajikistan',
                'code' => 'TJ',
                'priority' => '0',
            ),
            211 =>
            array(
                'id' => '212',
                'name' => 'Tanzania, United Republic of',
                'code' => 'TZ',
                'priority' => '0',
            ),
            212 =>
            array(
                'id' => '213',
                'name' => 'Thailand',
                'code' => 'TH',
                'priority' => '0',
            ),
            213 =>
            array(
                'id' => '214',
                'name' => 'Togo',
                'code' => 'TG',
                'priority' => '0',
            ),
            214 =>
            array(
                'id' => '215',
                'name' => 'Tokelau',
                'code' => 'TK',
                'priority' => '0',
            ),
            215 =>
            array(
                'id' => '216',
                'name' => 'Tonga',
                'code' => 'TO',
                'priority' => '0',
            ),
            216 =>
            array(
                'id' => '217',
                'name' => 'Trinidad and Tobago',
                'code' => 'TT',
                'priority' => '0',
            ),
            217 =>
            array(
                'id' => '218',
                'name' => 'Tunisia',
                'code' => 'TN',
                'priority' => '0',
            ),
            218 =>
            array(
                'id' => '219',
                'name' => 'Turkey',
                'code' => 'TR',
                'priority' => '0',
            ),
            219 =>
            array(
                'id' => '220',
                'name' => 'Turkmenistan',
                'code' => 'TM',
                'priority' => '0',
            ),
            220 =>
            array(
                'id' => '221',
                'name' => 'Turks and Caicos Islands',
                'code' => 'TC',
                'priority' => '0',
            ),
            221 =>
            array(
                'id' => '222',
                'name' => 'Tuvalu',
                'code' => 'TV',
                'priority' => '0',
            ),
            222 =>
            array(
                'id' => '223',
                'name' => 'Uganda',
                'code' => 'UG',
                'priority' => '0',
            ),
            223 =>
            array(
                'id' => '224',
                'name' => 'Ukraine',
                'code' => 'UA',
                'priority' => '0',
            ),
            224 =>
            array(
                'id' => '225',
                'name' => 'United Arab Emirates',
                'code' => 'AE',
                'priority' => '0',
            ),
            225 =>
            array(
                'id' => '226',
                'name' => 'United Kingdom',
                'code' => 'GB',
                'priority' => '0',
            ),
            226 =>
            array(
                'id' => '227',
                'name' => 'United States minor outlying islands',
                'code' => 'UM',
                'priority' => '0',
            ),
            227 =>
            array(
                'id' => '228',
                'name' => 'Uruguay',
                'code' => 'UY',
                'priority' => '0',
            ),
            228 =>
            array(
                'id' => '229',
                'name' => 'Uzbekistan',
                'code' => 'UZ',
                'priority' => '0',
            ),
            229 =>
            array(
                'id' => '230',
                'name' => 'Vanuatu',
                'code' => 'VU',
                'priority' => '0',
            ),
            230 =>
            array(
                'id' => '231',
                'name' => 'Vatican City State',
                'code' => 'VA',
                'priority' => '0',
            ),
            231 =>
            array(
                'id' => '232',
                'name' => 'Venezuela',
                'code' => 'VE',
                'priority' => '0',
            ),
            232 =>
            array(
                'id' => '233',
                'name' => 'Vietnam',
                'code' => 'VN',
                'priority' => '3',
            ),
            233 =>
            array(
                'id' => '234',
                'name' => 'Virgin Islands (British)',
                'code' => 'VG',
                'priority' => '0',
            ),
            234 =>
            array(
                'id' => '235',
                'name' => 'Virgin Islands (U.S.)',
                'code' => 'VI',
                'priority' => '0',
            ),
            235 =>
            array(
                'id' => '236',
                'name' => 'Wallis and Futuna Islands',
                'code' => 'WF',
                'priority' => '0',
            ),
            236 =>
            array(
                'id' => '237',
                'name' => 'Western Sahara',
                'code' => 'EH',
                'priority' => '0',
            ),
            237 =>
            array(
                'id' => '238',
                'name' => 'Yemen',
                'code' => 'YE',
                'priority' => '0',
            ),
            238 =>
            array(
                'id' => '239',
                'name' => 'Yugoslavia',
                'code' => 'YU',
                'priority' => '0',
            ),
            239 =>
            array(
                'id' => '240',
                'name' => 'Zaire',
                'code' => 'ZR',
                'priority' => '0',
            ),
            240 =>
            array(
                'id' => '241',
                'name' => 'Zambia',
                'code' => 'ZM',
                'priority' => '0',
            ),
            241 =>
            array(
                'id' => '242',
                'name' => 'Zimbabwe',
                'code' => 'ZW',
                'priority' => '0',
            ),
        ));
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    }
}
