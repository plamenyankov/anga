<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->truncate();
        DB::table('pages')->insert([
            [
            'title'=>'Home',
            'uri'=>'#home',
            'content'=>'This is about page',
                'parent_id'=>null,
                'lft'=>1,
                'rgt'=>2,
                'depth'=>0
        ],
            [
                'title'=>'About',
                'uri'=>'#about',
                'content'=>'This is contact page',
                'parent_id'=>null,
                'lft'=>3,
                'rgt'=>4,
                'depth'=>0
            ],
            [
                'title'=>'Contact',
                'uri'=>'#contact',
                'content'=>'This is about page',
                'parent_id'=>null,
                'lft'=>5,
                'rgt'=>6,
                'depth'=>0
            ],
            [
                'title'=>'Offers',
                'uri'=>'#offers',
                'content'=>'This is about page',
                'parent_id'=>null,
                'lft'=>7,
                'rgt'=>8,
                'depth'=>0
            ]]
            );
    }
}
