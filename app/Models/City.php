<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    use HasFactory;

    /**
     * the name's table
     *
     * @var string
     */
    protected $table = 'cities';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = [
        'name',
        'departament_id',
    ];

    /**
     * get the departament associated with the city
     */
    public function departament(): BelongsTo
    {
        return $this->belongsTo(Departament::class);
    }
}
