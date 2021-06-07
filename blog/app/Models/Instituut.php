<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituut extends Model
{
    use HasFactory;

    protected $fillable = [
        'afkorting',
        'naam'
    ];

    public function opleidingen()
    {
        return $this->hasMany(Opleidingen::class);
    }
}
