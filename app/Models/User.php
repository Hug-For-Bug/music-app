<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // protected $guarded = 'id';
    protected $fillable = [
        'id',
        'photo',
        'name',
        'email',
        'phone',
        'password',
        'verified_status',
        'verified_at',
        'id_plan',
        'id_role',
    ];

    protected $hidden = [
        'password',
    ];

    protected $table = 'users';
    protected $primaryKey = 'id';
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
