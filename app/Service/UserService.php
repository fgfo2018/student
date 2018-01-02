<?php
namespace App\Service; //命名路徑(必打，為了要關聯)
use App\User;

class UserService//類別

{
    public function create($name, $password, $email)
    {

        $user = User::create([
            'name' => $name,
            'password' => bcrypt($password),
            'email' => $email,
        ]);

        return $user;
    }
}
