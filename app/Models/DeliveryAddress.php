<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryAddress extends Model
{
    use HasFactory;
    protected $table = 'delivery_address';
    protected $fillable = ['address','postal_code','phone_number', 'id_usser'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function command()
    {
        return $this->hasMany(Command::class, 'id_delivery_address');
    }
}
