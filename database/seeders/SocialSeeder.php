<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Social::create([
            'name'  => 'facebook',
            'icon'  => 'fab fa-facebook-f',
            'url'   => 'https://facebook.com/',
        ]);
        Social::create([
            'name'  => 'youtube',
            'icon'  => 'fab fa-youtube-f',
            'url'   => 'https://youtube.com/',
        ]);
        Social::create([
            'name'  => 'linked in',
            'icon'  => 'fab fa-linked-in',
            'url'   => 'https://linkedin.com/',
        ]);
    }
}
