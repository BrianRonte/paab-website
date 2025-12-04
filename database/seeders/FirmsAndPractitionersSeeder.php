<?php

namespace Database\Seeders;

use App\Models\Firm;
use App\Models\Practitioner;
use Illuminate\Database\Seeder;

class FirmsAndPractitionersSeeder extends Seeder
{
    public function run(): void
    {
        // Create Firms
        $firms = [
            [
                'name' => 'KPMG Zimbabwe',
                'registration_number' => 'PAAB/F/001',
                'category' => 'audit',
                'status' => 'active',
                'address' => '100 The Chase (West), Emerald Hill',
                'city' => 'Harare',
                'phone' => '+263 24 2302600',
                'email' => 'info@kpmg.co.zw',
                'website' => 'https://home.kpmg/zw',
                'partners_count' => 8,
                'managing_partner' => 'John Doe',
                'registration_date' => '1990-01-15',
                'expiry_date' => '2025-12-31',
            ],
            [
                'name' => 'Deloitte Zimbabwe',
                'registration_number' => 'PAAB/F/002',
                'category' => 'audit',
                'status' => 'active',
                'address' => 'West Block, Borrowdale Office Park',
                'city' => 'Harare',
                'phone' => '+263 24 2852100',
                'email' => 'info@deloitte.co.zw',
                'website' => 'https://www2.deloitte.com/zw',
                'partners_count' => 6,
                'managing_partner' => 'Jane Smith',
                'registration_date' => '1992-03-20',
                'expiry_date' => '2025-12-31',
            ],
            [
                'name' => 'Ernst & Young Zimbabwe',
                'registration_number' => 'PAAB/F/003',
                'category' => 'audit',
                'status' => 'active',
                'address' => 'Angwa City, Corner Julius Nyerere Way',
                'city' => 'Harare',
                'phone' => '+263 24 2750905',
                'email' => 'info@zw.ey.com',
                'website' => 'https://www.ey.com/zw',
                'partners_count' => 5,
                'managing_partner' => 'Peter Moyo',
                'registration_date' => '1991-06-10',
                'expiry_date' => '2025-12-31',
            ],
            [
                'name' => 'BDO Zimbabwe',
                'registration_number' => 'PAAB/F/004',
                'category' => 'audit',
                'status' => 'active',
                'address' => '3 Elcombe Avenue, Belgravia',
                'city' => 'Harare',
                'phone' => '+263 24 2251262',
                'email' => 'info@bdo.co.zw',
                'partners_count' => 4,
                'managing_partner' => 'Sarah Ncube',
                'registration_date' => '1995-02-28',
                'expiry_date' => '2025-12-31',
            ],
            [
                'name' => 'ABC Tax Consultants',
                'registration_number' => 'PAAB/F/010',
                'category' => 'tax',
                'status' => 'active',
                'address' => '15 Samora Machel Avenue',
                'city' => 'Harare',
                'phone' => '+263 24 2701234',
                'partners_count' => 2,
                'managing_partner' => 'Tendai Moyo',
                'registration_date' => '2010-07-15',
                'expiry_date' => '2025-12-31',
            ],
            [
                'name' => 'Bulawayo Accounting Services',
                'registration_number' => 'PAAB/F/015',
                'category' => 'accounting',
                'status' => 'active',
                'address' => '45 Fife Street',
                'city' => 'Bulawayo',
                'phone' => '+263 29 2881234',
                'partners_count' => 3,
                'managing_partner' => 'Grace Dube',
                'registration_date' => '2005-11-20',
                'expiry_date' => '2025-12-31',
            ],
        ];

        foreach ($firms as $firmData) {
            Firm::create($firmData);
        }

        // Create Practitioners
        $practitioners = [
            [
                'name' => 'John Moyo',
                'registration_number' => 'PAAB/PA/0001',
                'category' => 'public_auditor',
                'status' => 'active',
                'gender' => 'male',
                'constituent_body' => 'ICAZ',
                'firm_id' => 1,
                'registration_date' => '2005-03-15',
                'expiry_date' => '2025-12-31',
            ],
            [
                'name' => 'Sarah Ncube',
                'registration_number' => 'PAAB/PA/0002',
                'category' => 'public_auditor',
                'status' => 'active',
                'gender' => 'female',
                'constituent_body' => 'ACCA',
                'firm_id' => 4,
                'registration_date' => '2008-06-20',
                'expiry_date' => '2025-12-31',
            ],
            [
                'name' => 'David Chikwanha',
                'registration_number' => 'PAAB/PAcc/0010',
                'category' => 'public_accountant',
                'status' => 'active',
                'gender' => 'male',
                'constituent_body' => 'CIMA',
                'firm_id' => 2,
                'registration_date' => '2010-01-10',
                'expiry_date' => '2025-12-31',
            ],
            [
                'name' => 'Grace Mutasa',
                'registration_number' => 'PAAB/PAcc/0015',
                'category' => 'public_accountant',
                'status' => 'active',
                'gender' => 'female',
                'constituent_body' => 'ICAZ',
                'firm_name' => 'Independent Practice',
                'registration_date' => '2012-08-05',
                'expiry_date' => '2025-12-31',
            ],
            [
                'name' => 'Tendai Mushonga',
                'registration_number' => 'PAAB/GA/0050',
                'category' => 'general_accountant',
                'status' => 'active',
                'gender' => 'male',
                'constituent_body' => 'IAC',
                'firm_name' => 'Mushonga Bookkeeping',
                'registration_date' => '2015-04-18',
                'expiry_date' => '2025-12-31',
            ],
            [
                'name' => 'Rumbidzai Zimuto',
                'registration_number' => 'PAAB/TA/0025',
                'category' => 'tax_accountant',
                'status' => 'active',
                'gender' => 'female',
                'constituent_body' => 'SAAA',
                'firm_id' => 5,
                'registration_date' => '2018-09-22',
                'expiry_date' => '2025-12-31',
            ],
            [
                'name' => 'James Banda',
                'registration_number' => 'PAAB/PA/0003',
                'category' => 'public_auditor',
                'status' => 'suspended',
                'gender' => 'male',
                'constituent_body' => 'ICAZ',
                'firm_name' => 'Former Big4',
                'registration_date' => '2006-02-14',
                'expiry_date' => '2024-12-31',
            ],
            [
                'name' => 'Mary Chirwa',
                'registration_number' => 'PAAB/PAcc/0020',
                'category' => 'public_accountant',
                'status' => 'retired',
                'gender' => 'female',
                'constituent_body' => 'ACCA',
                'firm_name' => 'Retired',
                'registration_date' => '1995-05-30',
                'expiry_date' => '2023-12-31',
            ],
        ];

        foreach ($practitioners as $practitionerData) {
            Practitioner::create($practitionerData);
        }
    }
}