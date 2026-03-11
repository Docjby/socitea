<?php

namespace App\Actions\Fortify;

use App\Concerns\PasswordValidationRules;
use App\Concerns\ProfileValidationRules;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules, ProfileValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'email' => $this->emailRules(),
            'password' => $this->passwordRules(),
        ])->validate();


        return User::create([
            'username' => $this->generateUsername(),
            'email' => $input['email'],
            'password' => $input['password'],
        ]);
    }

    private function generateUsername(): string
    {
        do {
            $username = 'unknown' . random_int(1000000, 9999999999);
        } while (User::where('username', $username)->exists()); // ensure unique

        return $username;
    }
}
