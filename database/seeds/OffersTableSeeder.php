<?php

use Illuminate\Database\Seeder;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->truncate();
        DB::table('offers')->insert([
            [
                'title'=>'Mercedes CLK 320',
                'body'=>'Lorem ipsum dolo',
                'active'=>1,
                'filename'=>'cv.pdf'
            ],
            [
                'title'=>'BMW 530d',
                'body'=>'Lorem ipsum dolo',
                'active'=>1,
                'filename'=>'cv.pdf'
            ],
            [
                'title'=>'Renault Clio',
                'body'=>'Lorem ipsum dolo some more text just to test the limit',
                'active'=>0,
                'filename'=>'cv.pdf'
            ]
            ]);

    }
}
