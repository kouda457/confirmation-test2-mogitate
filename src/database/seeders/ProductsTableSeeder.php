<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Season;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spring = Season::where('name', '春')->first();
        $spring = Season::where('name', '夏')->first();
        $spring = Season::where('name', '秋')->first();
        $spring = Season::where('name', '冬')->first();

        $kiwi = Product::create([
            'name' => 'キウイ',
            'price' => 800,
            'image' => 'images/fruits-img/kiwi.png',
            'description' => 'キウイは甘みと酸味のバランスが絶妙なフルーツです。ビタミンCなどの栄養素も豊富のため、美肌効果や疲労回復効果も期待できます。もぎたてフルーツのスムージーをお召し上がりください！'
        ]);
        $kiwi->seasons()->attach([3, 4]);

        $strawberry = Product::create([
            'name' => 'ストロベリー',
            'price' => 1200,
            'image' => 'images/fruits-img/strawberry.png',
            'description' => '大人から子供まで大人気のストロベリー。当店では鮮度抜群の完熟いちごを使用しています。ビタミンCはもちろん食物繊維も豊富なため、腸内環境の改善も期待できます。もぎたてフルーツのスムージーをお召し上がりください！'
        ]);
        $strawberry->seasons()->attach([1]);

        $orange = Product::create([
            'name' => 'オレンジ',
            'price' => 850,
            'image' => 'images/fruits-img/orange.png',
            'description' => '当店では酸味と甘みのバランスが抜群のネーブルオレンジを使用しています。酸味は控えめで、甘さと濃厚な果汁が魅力の商品です。もぎたてフルーツのスムージをお召し上がりください！'
        ]);
        $orange->seasons()->attach([4]);

        $watermelon = Product::create([
            'name' => 'スイカ',
            'price' => 700,
            'image' => 'images/fruits-img/watermelon.png',
            'description' => '甘くてシャリシャリ食感が魅力のスイカ。全体の90％が水分のため、暑い日の水分補給や熱中症予防、カロリーが気になる方にもおすすめの商品です。もぎたてフルーツのスムージーをお召し上がりください！'
        ]);
        $watermelon->seasons()->attach([2]);

        $peach = Product::create([
            'name' => 'ピーチ',
            'price' => 1000,
            'image' => 'images/fruits-img/peach.png',
            'description' => '豊潤な香りととろけるような甘さが魅力のピーチ。美味しさはもちろん見た目の可愛さも抜群の商品です。ビタミンEが豊富なため、生活習慣病の予防にもおすすめです。もぎたてフルーツのスムージーをお召し上がりください！'
        ]);
        $peach->seasons()->attach([2]);

        $muscat = Product::create([
            'name' => 'シャインマスカット',
            'price' => 1400,
            'image' => 'images/fruits-img/muscat.png',
            'description' => '爽やかな香りと上品なublic甘みが特長的なシャインマスカットは大人から子どもまで大人気のフルーツです。疲れた脳や体のエネルギー補給にも最適の商品です。もぎたてフルーツのスムージーをお召し上がりください！'
        ]);
        $muscat->seasons()->attach([2, 3]);

        $pineapple = Product::create([
            'name' => 'パイナップル',
            'price' => 800,
            'image' => 'images/fruits-img/pineapple.png',
            'description' => '甘酸っぱさとトロピカルな香りが特徴のパイナップル。当店では甘さと酸味のバランスが絶妙な国産のパイナップルを使用しています。もぎたてフルーツのスムージをお召し上がりください！'
        ]);
        $pineapple->seasons()->attach([1, 2]);

        $grapes = Product::create([
            'name' => 'ブドウ',
            'price' => 1100,
            'image' => 'images/fruits-img/grapes.png',
            'description' => 'ブドウの中でも人気の高い国産の「巨峰」を使用しています。高い糖度と適度な酸味が魅力で、鮮やかなパープルで見た目も可愛い商品です。もぎたてフルーツのスムージーをお召し上がりください！'
        ]);
        $grapes->seasons()->attach([2, 3]);

        $banana = Product::create([
            'name' => 'バナナ',
            'price' => 600,
            'image' => 'images/fruits-img/banana.png',
            'description' => '低カロリーでありながら栄養満点のため、ダイエット中の方にもおすすめの商品です。1杯でバナナの濃厚な甘みを存分に堪能できます。もぎたてフルーツのスムージーをお召し上がりください！'
        ]);
        $banana->seasons()->attach([2]);

        $melon = Product::create([
            'name' => 'メロン',
            'price' => 900,
            'image' => 'images/fruits-img/melon.png',
            'description' => '香りがよくジューシーで品のある甘さが人気のメロンスムージー。カリウムが多く含まれているためむくみ解消効果も抜群です。もぎたてフルーツのスムージーをお召し上がりください！'
        ]);
        $melon->seasons()->attach([1, 2]);
    }
}
