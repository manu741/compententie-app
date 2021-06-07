<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $popcyclusdatum_id
 * @property string $popnaam
 * @property int $niveau
 * @property boolean $behaald
 * @property int $resultaat
 * @property string $afsluiting
 * @property string $popfase
 * @property User $user
 * @property Popcyclusdatum $popcyclusdatum
 * @property Midtermreview[] $midtermreviews
 * @property Datapunten[] $datapuntens
 * @property Popreflectie[] $popreflecties
 * @property Afspraken[] $afsprakens
 */
class Pop extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pop';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'popcyclusdatum_id', 'popnaam', 'niveau', 'behaald', 'resultaat', 'afsluiting', 'popfase'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function popcyclusdatum()
    {
        return $this->belongsTo('App\Popcyclusdatum');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function midtermreviews()
    {
        return $this->hasMany('App\Midtermreview');
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
    public function popreflecties()
    {
        return $this->hasMany('App\Popreflectie');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function afsprakens()
    {
        return $this->hasMany('App\Afspraken');
    }
}
