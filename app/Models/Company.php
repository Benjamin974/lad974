<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'company';
    protected $fillable = ['name', 'address', 'city', 'note', 'picture', 'secteur', 'id_user'];

    public function products()
    {
        return $this->hasMany(Product::class, 'id_company');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
