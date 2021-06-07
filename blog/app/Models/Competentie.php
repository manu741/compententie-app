<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $nulsituatie_id
 * @property string $competentie
 * @property string $type
 * @property boolean $eindkwalificatie
 * @property Nulsituatie $nulsituatie
 * @property Datapunten[] $datapuntens
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
    protected $fillable = ['nulsituatie_id', 'competentie', 'type', 'eindkwalificatie'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nulsituatie()
    {
        return $this->belongsTo('App\Nulsituatie');
    }

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
