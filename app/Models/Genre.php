<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Genre extends Model
{
    use HasFactory;
    protected $fillable = ['genreName'];
    public $timestamps = false;


    public function paintings(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Painting::class);
    }
}
