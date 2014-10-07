<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TagsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 30) as $index)
		{
            $word = $faker->word;
			Tag::create([
                'name' => $word,
                'slug' => $word . $index,
			]);
		}
	}

}
