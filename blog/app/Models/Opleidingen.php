<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opleidingen extends Model
{
    use HasFactory;

    protected $fillable = [
        'afkorting',
        'naam',
        'jaren',
        'type',
        'cyclus'
    ];

    public function instituut()
    {
        return $this->belongsTo(Instituut::class);
    }
}
