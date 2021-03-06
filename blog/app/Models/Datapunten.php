<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $onderwijseenheid_id
 * @property integer $opdrachtgever_id
 * @property integer $beroepsproduct_id
 * @property integer $competentie_id
 * @property integer $user_id
 * @property integer $pop_id
 * @property boolean $bevroren
 * @property string $onderbouwing
 * @property string $feedback
 * @property string $feedup
 * @property string $feedforward
 * @property string $bijlage
 * @property string $created_at
 * @property string $updated_at
 * @property Onderwijseenheid $onderwijseenheid
 * @property Opdrachtgever $opdrachtgever
 * @property Beroepsproduct $beroepsproduct
 * @property Competentie $competentie
 * @property User $user
 * @property Pop $pop
 * @property UsersDatapunt[] $usersDatapunts
 */
class Datapunten extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'datapunten';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['onderwijseenheid_id', 'opdrachtgever_id', 'beroepsproduct_id', 'indicator_id', 'user_id', 'pop_id', 'bevroren', 'naam', 'onderbouwing', 'feedback', 'feedup', 'feedforward', 'bijlage', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function zichtbaar()
    {
        return $this->morphTo();
    }
    
    
     public function onderwijseenheid()
    {
        return $this->belongsTo(Onderwijseenheid::class, 'onderwijseenheid_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function opdrachtgever()
    {
        return $this->belongsTo(Opdrachtgever::class, 'opdrachtgever_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function beroepsproduct()
    {
        return $this->belongsTo(Beroepsproduct::class, 'beroepsproduct_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function indicatoren()
    {
        return $this->belongsTo(Indicatoren::class, 'indicator_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pop()
    {
        return $this->belongsTo('App\Pop');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usersDatapunts()
    {
        return $this->hasMany('App\UsersDatapunt', 'datapunt_id');
    }
}
