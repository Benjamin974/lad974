<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandProducts extends Model
{
    use HasFactory;
    protected $table = 'command_has_products';
    protected $fillable = ['quantite', 'id_company', 'id_command', 'id_product'];
    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }

    public function command()
    {
        return $this->belongsTo(Command::class, 'id_command');
    }
}
