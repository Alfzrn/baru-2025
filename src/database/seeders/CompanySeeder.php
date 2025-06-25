<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::firstOrCreate([
            'logo' => '',
            'name' => 'PT ABC',
            'phone' => '08126262213',
            'address' => 'JL.Terus Jadian Kaga',
            'state' => 'Jakarta',
            'country' => 'Indonesia',
            'postcode' => '1221',
        ]);
    }
}
