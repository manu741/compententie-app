<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $opleiding_id
 * @property string $cohort
 * @property string $firstname
 * @property string $lastname
 * @property string $studentnr
 * @property string $email
 * @property string $telefoonnummer
 * @property string $email_verified_at
 * @property string $password
 * @property string $clearance
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Opleiding $opleiding
 * @property Nulsituatie[] $nulsituaties
 * @property Pop[] $pops
 * @property Datapunten[] $datapuntens
 * @property Popcompetentie[] $popcompetenties
 * @property UsersDatapunt[] $usersDatapunts
 */
class Users extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['opleiding_id', 'cohort', 'firstname', 'lastname', 'studentnr', 'email', 'telefoonnummer', 'email_verified_at', 'password', 'clearance', 'remember_token', 'created_at', 'updated_at'];

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
    public function nulsituaties()
    {
        return $this->hasMany('App\Nulsituatie');
    }

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
    public function usersDatapunts()
    {
        return $this->hasMany('App\UsersDatapunt');
    }
}
