<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $pop_id
 * @property string $toelichting
 * @property string $rating
 * @property Pop $pop
 */
class Midtermreview extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'midtermreview';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['pop_id', 'toelichting', 'rating'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pop()
    {
        return $this->belongsTo('App\Pop');
    }
}
