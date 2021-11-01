<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $fillable = ['name', 'description', 'price','quantite', 'id_company'];

    public function company()
    {
        return $this->belongsTo(Company::class, 'id_company');
    }

    public function command()
    {
        return $this->hasMany(Command::class, 'id_product');
    }
}
