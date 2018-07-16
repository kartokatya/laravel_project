<?php

use Illuminate\Database\Seeder;

class PhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Photos::class, 50)->create()->each(function ($u) {
            $u->photos()->save(factory(\App\Photos::class)->make());
        });
    }
}
