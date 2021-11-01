<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusDelivery extends Model
{
    use HasFactory;
    protected $table = 'status_delivery';
    protected $fillable = ['status'];

    public function delivery()
    {
        return $this->hasMany(Delivery::class, 'id_status');
    }
}
