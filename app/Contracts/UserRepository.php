<?php

namespace App\Contracts;

use Illuminate\Database\Eloquent\Model;

interface UserRepository
{
    /**
     * Login a user
     *
     * @param string $email
     * @param string $password
     * @param bool $remember
     *
     * @return string
     */
    public function login(string $email, string $password, bool $remember = false): string;

    /**
     * Register a user
     *
     * @param array $data
     *
     * @return Model
     */
    public function register(array $data): Model;

    /**
     * Logout a user
     *
     * @return void
     */
    public function logout(): void;
}
