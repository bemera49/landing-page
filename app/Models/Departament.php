<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departament extends Model
{
    /** @use HasFactory<\Database\Factories\DepartamentFactory> */
    use HasFactory;

    /**
     * we don't need timestamps
     *
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    /**
     * get all cities associated with the departament
     */
    public function cities(): HasMany
    {

        return $this->hasMany(City::class);
    }
}
