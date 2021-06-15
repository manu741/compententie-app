<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $beroepsproduct
 * @property string $beschrijving
 * @property Datapunten[] $datapuntens
 */
class Beroepsproduct extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'beroepsproduct';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['beroepsproduct', 'beschrijving'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function datapuntens()
    {
        return $this->hasMany('App\Datapunten');
    }
}
