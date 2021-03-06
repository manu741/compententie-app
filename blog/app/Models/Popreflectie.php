<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $pop_id
 * @property string $soort
 * @property string $methode
 * @property string $naam
 * @property string $situatie
 * @property string $taak
 * @property string $actie
 * @property string $resultaat
 * @property string $reflectie
 * @property string $created_at
 * @property string $updated_at
 * @property Pop $pop
 */
class Popreflectie extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'popreflectie';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['pop_id', 'soort', 'methode', 'naam', 'situatie', 'taak', 'actie', 'resultaat', 'reflectie', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pop()
    {
        return $this->belongsTo('App\Pop');
    }
}
