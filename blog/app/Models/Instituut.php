<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $afkorting
 * @property string $naam
 * @property Opleiding[] $opleidings
 */
class Instituut extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'instituut';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['afkorting', 'naam'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function opleidings()
    {
        return $this->hasMany('App\Opleiding');
    }
}
