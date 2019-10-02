<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = ['handle', 'first', 'last', 'email', 'password'];
    protected $hidden = ['password', 'remember_token', 'api_token', 'email_verified_at'];
    protected $casts = ['email_verified_at' => 'datetime'];

    public function fullname()
    {
        return $this->first . ' ' . $this->last;
    }

    public function verified()
    {
        return isset($this->email_verified_at);
    }
}
