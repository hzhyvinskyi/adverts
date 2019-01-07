<?php

namespace App\UseCases\Auth;

use App\Entities\User;
use App\Mail\Auth\VerifyMail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;

class RegisterService
{
    public function register(array $data): void
    {
        $user = User::register(
            $data['name'],
            $data['email'],
            $data['password']
        );

        Mail::to($user->email)->send(new VerifyMail($user));
        event(new Registered($user));
    }
}
