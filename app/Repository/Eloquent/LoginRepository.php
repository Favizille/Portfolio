<?php
namespace App\Repository\Eloquent;

use App\Models\User;

class LoginRepository
{
    public function __construct(protected User $user) {}

    public function login(array $data):bool{
        return auth()->attempt($data);
    }
}
