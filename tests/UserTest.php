<?php

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserShouldCreateAccount()
    {
        $user = new User();

        $payload = [
            "name" => "user",
            "email" => "test@email.com",
            "password" => "secret123"
        ];

        $result = $user->postUser($payload);

        $this->assertTrue($result);
    }

}