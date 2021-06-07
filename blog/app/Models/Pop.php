<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pop extends Model
{
    protected $fillable = [
        'popnaam',
        'niveau',
        'behaald',
        'resultaat',
        'afsluiting',
        'popfase'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function popCyclusDatum()
    {
        return $this->belongsTo(User::class);
    }

    public function popReflectie()
    {
        return $this->hasMany(Popreflectie::class);
    }
}
