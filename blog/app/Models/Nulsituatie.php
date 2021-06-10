<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $competentie_id
 * @property string $niveau
 * @property int $cijfer
 * @property string $motivatie
 * @property string $compliment
 * @property User $user
 * @property Competentie $competentie
 */
class Nulsituatie extends Model
{


    public $timestamps = false;

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'nulsituatie';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'competentie_id', 'niveau', 'cijfer', 'motivatie', 'compliment'];

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
    public function competentie()
    {
        return $this->belongsTo('App\Competentie');
    }

}
