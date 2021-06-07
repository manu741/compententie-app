<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popreflectie extends Model
{
    use HasFactory;

    protected $fillable = [
        'soort',
        'methode',
        'naam',
        'situatie',
        'taak',
        'actie',
        'resultaat',
        'reflectie'
    ];

    public function pop()
    {
        return $this->belongsTo(Pop::class);
    }
}
