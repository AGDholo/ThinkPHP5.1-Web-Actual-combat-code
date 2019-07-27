<?php

use think\migration\Seeder;
use app\user\model\User;

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

        // allowField(false) 屏蔽 Model 中设置的保护字段 $field
        User::get(1)->allowField(false)->save([
            'god' => true
        ]);
    }
}
