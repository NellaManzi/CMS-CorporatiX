<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate([
            'header_name'           => 'name project',
            'header_title'          => 'Payments tool for software companies',
            'header_description'    => 'From checkout to global sales tax compliance, companies around the world use Flowbite to simplify their payment stack.',
            'section_title'         => 'section title',
            'section_subtitle'      => 'Lorem ipsum dolor sit amet',
            'section_description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.',
            'section_about'         => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo posuere et sit amet ligula.',
            'footer_phone'          => '99999999999',
            'footer_email'          => 'rafaelblum_digital@hotmail.com'
        ]);
    }
}
