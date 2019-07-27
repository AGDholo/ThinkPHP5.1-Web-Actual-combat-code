<?php

use think\migration\Seeder;

class Users extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 200; $i++) {
            $data[] = [
                'name'      => $faker->userName,
                'password'      => $faker->password,
                'email'         => $faker->email,
            ];
        }

        $this->table('users')->insert($data)->save();
    }
}
