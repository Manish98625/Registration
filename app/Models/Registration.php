<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $table = 'registrations';

    protected $fillable = [
        'name',
        'username',
        'email',
        'state',
        'phonenumber',
        'address',
        'password',
        'gender',
        'skill',
        'image',
    ];
}
