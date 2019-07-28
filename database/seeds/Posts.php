<?php

use think\migration\Seeder;

class Posts extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 200; $i++) {
            $user_id = !($i % 2) ? 1 : 2;

            $data[] = [
                'content'      => $faker->text,
                'user_id'      => $user_id,
            ];
        }

        $this->table('posts')->insert($data)->save();
    }
}
