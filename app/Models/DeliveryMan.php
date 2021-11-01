<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryMan extends Model
{
    use HasFactory;
    protected $table = 'delivery_man';
    protected $fillable = ['name', 'address','email','phone_number', 'id_company'];

    public function company()
    {
        return $this->belongsTo(Company::class, 'id_company');
    }

    public function delivery()
    {
        return $this->hasMany(Delivery::class, 'id_delivery_man');
    }
}
