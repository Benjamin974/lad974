<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;
    protected $table = 'command';
    protected $fillable = ['quantite', 'id_user', 'id_product', 'id_status', 'id_delivery_address'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function status()
    {
        return $this->belongsTo(StatusCommand::class, 'id_status');
    }

    public function delivery()
    {
        return $this->hasMany(Delivery::class, 'id_command');
    }

    public function deliveryAddress()
    {
        return $this->belongsTo(DeliveryAddress::class, 'id_delivery_address');
    }

}
