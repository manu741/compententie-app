<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $pop_id
 * @property string $afspraken
 * @property Pop $pop
 */
class Afspraken extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'afspraken';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['pop_id', 'afspraken'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pop()
    {
        return $this->belongsTo('App\Pop');
    }
}
