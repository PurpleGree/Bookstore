<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Painting extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'pid';
    public $incrementing = false; // If pid is not auto-incrementing
    protected $keyType = 'string'; // the datatype of the pkey
}
