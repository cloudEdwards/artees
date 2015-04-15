<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

use Artees\Statuses\Status;
use Artees\Users\User;


class StatusesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$users = User::lists('id');

		foreach(range(1, 50) as $index)
		{
			Status::create([
				'user_id'=>$faker->randomElement($users),
				'body'=>$faker->sentence()

			]);
		}
	}

}
