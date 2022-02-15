<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;
    protected $table = 'command';
    protected $fillable = ['id_status', 'id_user', 'id_delivery_address', 'id_facturation_address', 'price'];

    function commandHasProducts()
    {
        return $this->belongsToMany('App\Models\Product', 'command_has_products', 'id_command', 'id_product');
    }

    public function status()
    {
        return $this->belongsTo(StatusCommand::class, 'id_status');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function delivery()
    {
        return $this->hasMany(Delivery::class, 'id_command');
    }

    public function deliveryAddress()
    {
        return $this->belongsTo(UserAddress::class, 'id_delivery_address');
    }

    public function facturationAddress()
    {
        return $this->belongsTo(UserAddress::class, 'id_facturation_address');
    }

}
