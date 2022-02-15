<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = 'address';
    protected $fillable = ['address', 'name', 'pays', 'postal_code', 'ville', 'id_user'];

    public function command_delivery()
    {
        return $this->hasMany(Command::class, 'id_delivery_address');
    }

    public function command_facturation()
    {
        return $this->hasMany(Command::class, 'id_facturation_address');
    }
}
