<?php

namespace App\UseCases\Auth;

use App\Entity\User;

class VerificationService
{
    public function verify($id): void
    {
        /** @var  $user */
        $user = User::findOrFail($id);
        $user->verify();
    }
}
