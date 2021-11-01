<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusCommand extends Model
{
    use HasFactory;
    protected $table = 'status_command';
    protected $fillable = ['status'];

    public function command()
    {
        return $this->hasMany(Command::class, 'id_status');
    }
}
