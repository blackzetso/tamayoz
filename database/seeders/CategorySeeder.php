<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'برمجة المواقع',
            'icon' => 'far fa-phone-laptop'
        ]);
        Category::create([
            'name' => 'برمجة التطبيقات',
            'icon' => 'fas fa-mobile-android-alt'
        ]);
        Category::create([
            'name' => 'التسويق الإلكترونى',
            'icon' => 'fas fa-megaphone'
        ]);
        Category::create([
            'name' => 'تحسين محركات ا لبحث',
            'icon' => 'fas fa-search'
        ]);
    }
}
