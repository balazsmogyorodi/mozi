<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    //az elsődleges kulcsnak másnevet adtunk
    protected $primaryKey = "film_id";
    

    protected $fillable = [
        'director',
        'year',
        'title',
    ];
}
