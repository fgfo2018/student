<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = new \App\Service\UserService();
        $user = $service->create('君飛', '12345', '12345@gmail.com');

        $service = new \App\Service\UserService();
        $user = $service->create('黃俊耀', '12345', '123456@gmail.com');

        $service = new \App\Service\UserService();
        $user = $service->create('楊芷霖', '12345', '1234567@gmail.com');

    }
}
