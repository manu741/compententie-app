<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $opleiding_id
 * @property string $vorm
 * @property string $fase
 * @property string $type
 * @property int $studiepunten
 * @property int $studiejaar
 * @property Opleiding $opleiding
 * @property Datapunten[] $datapuntens
 */
class Onderwijseenheid extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'onderwijseenheid';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['opleiding_id', 'vorm', 'fase', 'type', 'studiepunten', 'studiejaar'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function opleiding()
    {
        return $this->belongsTo('App\Opleiding');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function datapuntens()
    {
        return $this->hasMany(Datapunten::class);
    }
}
