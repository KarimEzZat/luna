<?php

namespace Database\Seeders;

use App\Company;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Company::create([
            'name' => '',
            'description' => '',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'phone' => '966575322403',
            'photo' => 'عن الشركة'
        ]);
    }
}
