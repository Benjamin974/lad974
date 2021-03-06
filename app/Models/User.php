<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'id_role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role');
    }
    public function command()
    {
        return $this->hasMany(Command::class, 'id_user');
    }
    public function company()
    {
        return $this->hasMany(Company::class, 'id_user');
    }

    public function delivery()
    {
        return $this->hasMany(Delivery::class, 'id_delivery_man');
    }
    public function deliveryAddress()
    {
        return $this->hasMany(DeliveryAddress::class, 'id_user');
    }
}
