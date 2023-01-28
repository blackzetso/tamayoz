<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::create([
            'title'      => 'تصميم وبرمجه المواقع الإلكترونية',
            'subtitle'   => 'خبراء في تصميم وبرمجة المواقع الإلكترونية , بشكل إحترافى',
            'button'     => 'معرض الأعمال',
            'url'        => './portfolio',
            'img'        => '1.jpg',
        ]);
        Home::create([
            'title'      => 'تصميم وبرمجه تطبيقات الهواتف الذكيه',
            'subtitle'   => 'فريق من الخبراء قادرين علي بناء وتنفيذ تطبيقات الهواتف الذكية بجوده وإحترافيه عاليه',
            'button'     => 'معرض الأعمال',
            'url'        => './portfolio',
            'img'        => '2.jpg',
        ]);
        Home::create([
            'title'      => 'حلول و انظمة لإدارة  الأنشطة التجارية و الخدمية',
            'subtitle'   => 'مجموعة متميزه من الأنظمة والحلول  لإدارة الأنشطة و الخدمات التجاريه ',
            'button'     => 'معرض الأعمال',
            'url'        => './portfolio',
            'img'        => '3.jpg',
        ]);
        Home::create([
            'title'      => 'تصميم وبرمجه المواقع الإلكترونية',
            'subtitle'   => 'خبراء في تصميم وبرمجة المواقع الإلكترونية , بشكل إحترافى',
            'button'     => 'معرض الأعمال',
            'url'        => './portfolio',
            'img'        => '4.jpg',
        ]);
    }
}
