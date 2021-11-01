<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    protected $table = 'delivery';
    protected $fillable = ['id_delivery_man', 'id_command', 'id_status'];

    public function command()
    {
        return $this->belongsTo(Command::class, 'id_command');
    }

    public function deliveryMan()
    {
        return $this->belongsTo(DeliveryMan::class, 'id_delivery_man');
    }

    public function status()
    {
        return $this->belongsTo(StatusDelivery::class, 'id_status');
    }
}
