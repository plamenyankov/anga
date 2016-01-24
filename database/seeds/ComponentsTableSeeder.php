<?php

use Illuminate\Database\Seeder;

class ComponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('components')->truncate();
        DB::table('components')->insert([
            [
                'title'=>'something about',
                'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, beatae
                    consequatur ipsa mollitia placeat quibusdam voluptatem. Consequatur corporis dolore eaque eum iure
                    nisi ullam. Amet iste iusto magni nisi quas quos sed tempore voluptatum! Ad amet animi architecto
                    blanditiis commodi cumque deserunt dignissimos doloribus eos ex excepturi iure magnam maiores nemo
                    nesciunt nostrum perferendis perspiciatis',
                'type'=>'about'
            ],
            [
                'title'=>'Wellcome to Anga!',
                'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, beatae
                    consequatur ipsa mollitia placeat quibusdam voluptatem. Consequatur corporis dolore eaque eum iure
                    nisi ullam. Amet iste iusto magni nisi quas quos sed tempore voluptatum! Ad amet animi architecto
                    blanditiis commodi cumque deserunt dignissimos doloribus eos ex excepturi iure magnam maiores nemo
                    nesciunt nostrum perferendis perspiciatis',
                'type'=>'header'
            ]]);
    }
}
