<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $opleiding_id
 * @property integer $competentie_id
 * @property string $niveau
 * @property string $indicator
 * @property Opleiding $opleiding
 * @property Competentie $competentie
 */
class Indicatoren extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'indicatoren';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['opleiding_id', 'competentie_id', 'niveau', 'indicator'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function opleiding()
    {
        return $this->belongsTo('App\Opleiding');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function competentie()
    {
        return $this->belongsTo('App\Competentie');
    }
}
