<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $cyclus
 * @property string $cyclusvolgorde
 * @property boolean $eerstecyclus
 * @property string $begin
 * @property string $eind
 * @property Pop[] $pops
 * @property Popcompetentie[] $popcompetenties
 */
class Popcyclusdatum extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'popcyclusdatum';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['cyclus', 'cyclusvolgorde', 'eerstecyclus', 'begin', 'eind'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pops()
    {
        return $this->hasMany('App\Pop');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function popcompetenties()
    {
        return $this->hasMany('App\Popcompetentie');
    }
}
