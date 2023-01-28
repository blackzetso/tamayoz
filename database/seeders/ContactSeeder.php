<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'phone'     => '+201090250088',
            'email'     => 'info@semicolon-solution.net',
            'adress'    => '45 st eldokky Cairo , egypt',
            'lat'       => '30.16848522562265',
            'long'      => '31.56877050905572',
            'lang'      => '1',
        ]);
        
        Contact::create([
            'phone'     => '+201090250088',
            'email'     => 'info@semicolon-solution.net',
            'adress'    => '45 st eldokky Cairo , egypt',
            'lat'       => '30.16848522562265',
            'long'      => '31.56877050905572',
            'lang'      => '2',
        ]);
    }
}
