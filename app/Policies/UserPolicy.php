<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function onlyAdmin(User $user)
    {
        if ($user->role === 'admin') {
            return true;
        }
    }

    public function basic(User $user)
    {
        if ($user->role === 'basic') {
            return true;
        }
    }

    public function canIEdit(User $user)
    {
        // dd(Auth::user()->id);
        if ($user->id === Auth::user()->id && $user->role === 'basic') {
            return true;
        }
    }
}
