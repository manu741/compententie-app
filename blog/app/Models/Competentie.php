<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * @property integer $id
 * @property string $competentie
 * @property string $type
 * @property boolean $eindkwalificatie
 * @property Datapunten[] $datapuntens
 * @property Nulsituatie[] $nulsituaties
 * @property Popcompetentie[] $popcompetenties
 * @property Indicatoren[] $indicatorens
 */
class Competentie extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'competentie';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['competentie', 'type', 'eindkwalificatie'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function datapuntens()
    {
        return $this->hasMany('App\Datapunten');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nulsituaties()
    {
        return $this->hasMany('App\Nulsituatie');
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
