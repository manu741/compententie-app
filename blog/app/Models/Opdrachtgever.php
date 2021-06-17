<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\VarDumper\Cloner\Data;

/**
 * @property integer $id
 * @property string $voornaam
 * @property string $achternaam
 * @property string $locatie
 * @property string $woonplaats
 * @property string $contactpersoon
 * @property string $telefoonnummer
 * @property Datapunten[] $datapuntens
 */
class Opdrachtgever extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'opdrachtgever';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['voornaam', 'achternaam', 'locatie', 'woonplaats', 'contactpersoon', 'telefoonnummer'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function datapuntens()
    {
        return $this->hasMany(Datapunten::class);
    }
}
