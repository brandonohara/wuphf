<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wuphf extends Model
{
    protected $fillable = ['text', 'url'];

    public function author()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
