<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert(
            [
                'image' => 'images/banners/bannerLogoBlue.jpg',
                'description' => 'Banner with blue logo.',
                'expiryAt' => date("Y-m-d", strtotime("+3 Months")),
                'isActive' => true,
            ]
        );

        DB::table('banners')->insert(
            [
                'image' => 'images/banners/bannerLogoBrown.jpg',
                'description' => 'Banner with brown logo.',
                'expiryAt' => date("Y-m-d", strtotime("+3 Months")),
                'isActive' => true,
            ]
        );

        DB::table('banners')->insert(
            [
                'image' => 'images/banners/bannerLogoWhite.jpg',
                'description' => 'Banner with white logo.',
                'expiryAt' => date("Y-m-d", strtotime("+3 Months")),
                'isActive' => true,
            ]
        );
    }
}
