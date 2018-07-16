<?php

use Illuminate\Database\Seeder;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Goods::class, 50)->create()->each(function ($u) {
            $u->goods()->save(factory(\App\Goods::class)->make());
        });
    }
}
