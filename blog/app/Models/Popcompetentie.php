<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $popcyclusdatum_id
 * @property integer $opleiding_id
 * @property integer $user_id
 * @property integer $competentie_id
 * @property boolean $communiceren
 * @property boolean $samenwerken
 * @property boolean $organiseren
 * @property boolean $leadership
 * @property boolean $persoonlijke_effectiviteit
 * @property boolean $kritisch
 * @property boolean $probleemoplossend
 * @property boolean $onderzoekend
 * @property boolean $systemisch
 * @property boolean $abstraheren
 * @property boolean $schakelend
 * @property boolean $innovatief
 * @property boolean $vakmanschap
 * @property boolean $oordeelsvormend
 * @property boolean $reflectief
 * @property string $functie
 * @property string $created_at
 * @property string $updated_at
 * @property Popcyclusdatum $popcyclusdatum
 * @property Opleiding $opleiding
 * @property User $user
 * @property Competentie $competentie
 */
class Popcompetentie extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'popcompetentie';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['popcyclusdatum_id', 'opleiding_id', 'user_id', 'competentie_id', 'communiceren', 'samenwerken', 'organiseren', 'leadership', 'persoonlijke_effectiviteit', 'kritisch', 'probleemoplossend', 'onderzoekend', 'systemisch', 'abstraheren', 'schakelend', 'innovatief', 'vakmanschap', 'oordeelsvormend', 'reflectief', 'functie', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function popcyclusdatum()
    {
        return $this->belongsTo('App\Popcyclusdatum');
    }

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
