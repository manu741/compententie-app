<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $instituut_id
 * @property string $naam
 * @property string $afkorting
 * @property int $jaren
 * @property string $type
 * @property string $cyclus
 * @property Instituut $instituut
 * @property Onderwijseenheid[] $onderwijseenheids
 * @property User[] $users
 * @property Popcompetentie[] $popcompetenties
 * @property Indicatoren[] $indicatorens
 */
class Opleiding extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'opleiding';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['instituut_id', 'naam', 'afkorting', 'jaren', 'type', 'cyclus'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function instituut()
    {
        return $this->belongsTo('App\Instituut');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function onderwijseenheids()
    {
        return $this->hasMany('App\Onderwijseenheid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function popcompetenties()
    {
        return $this->hasMany('App\Popcompetentie');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function indicatorens()
    {
        return $this->hasMany('App\Indicatoren');
    }
}
