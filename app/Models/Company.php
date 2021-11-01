<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'company';
    protected $fillable = ['name', 'address', 'city', 'id_user'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
