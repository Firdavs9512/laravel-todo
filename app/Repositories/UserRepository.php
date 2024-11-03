<?php

namespace App\Repositories;

use App\Contracts\UserRepository as UserRepositoryContract;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserRepositoryContract
{
    public function __construct(private User $user)
    {
        //
    }

    /**
     * Login a user
     *
     * @param string $email
     * @param string $password
     * @param bool $remember
     *
     * @return string
     */
    public function login(string $email, string $password, bool $remember = false): string
    {
        $credentials = [
            'email' => $email,
            'password' => $password,
        ];

        return Auth::attempt($credentials, $remember);
    }

    /**
     * Register a user
     *
     * @param array $data
     *
     * @return Model
     */
    public function register(array $data): Model
    {
        $this->user->create($data);

        Auth::login($this->user);

        return $this->user;
    }

    /**
     * Logout a user
     *
     * @return void
     */
    public function logout(): void
    {
        Auth::logout();
    }
}
