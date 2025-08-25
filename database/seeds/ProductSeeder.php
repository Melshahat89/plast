<?php

//namespace Database\Seeders;

use App\Application\Model\Products;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            Products::create([
                'name' => "عبوة بلاستيك شفافة {$i}00 مل",
                'description' => 'عبوة بلاستيكية عالية الجودة مناسبة لتعبئة السوائل مثل العصائر والزيوت والمنظفات.',
                'shortdescription' => "عبوة شفافة بسعة {$i}00 مل، مثالية لتعبئة السوائل.",
                'slug' => Str::slug("عبوة بلاستيك شفافة {$i}00 مل"),
                'price' => rand(10, 25),
                'image' => "product{$i}.jpg",
                'quantity' => rand(50, 200),
                'futured' => $i % 5 == 0,
                'published' => true,
                'bestseller' => $i % 7 == 0,
                'type' => 'عبوات شفافة',
                'youtubelink' => 'https://www.youtube.com/embed/WoFQ0B4D-4M',
                'metadescription' => "عبوة بلاستيكية شفافة بسعة {$i}00 مل، مثالية لتعبئة العصائر والزيوت والمنظفات.",
                'metatitle' => "عبوة بلاستيك شفافة {$i}00 مل | المصرية الدولية بلاست",
                'seokeywords' => json_encode([
                    'عبوات بلاستيك',
                    'عبوة شفافة',
                    'تعبئة السوائل',
                    'عبوات زيوت',
                    'مصنع بلاستيك',
                    'عبوات غذائية'
                ]),
            ]);
        }
    }
}
