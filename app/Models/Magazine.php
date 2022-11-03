<?php

namespace App\Models;

use App\Models\film;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Magazine extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'number'
    ];

    public function films(){
        return $this->belongsToMany(film::class);
    }
}
