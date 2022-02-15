<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'rating';
    protected $fillable = ['note', 'id_company'];

    public function company()
    {
        return $this->belongsTo(Company::class, 'id_company');
    }

}
