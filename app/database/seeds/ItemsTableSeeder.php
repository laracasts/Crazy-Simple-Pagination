<?php

class ItemsTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        Item::truncate();

        foreach(range(1, 30) as $index)
        {
            Item::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph(4),
                'image' => $faker->imageUrl(300, 200)
            ]);
        }
    }
}