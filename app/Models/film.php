<?php

namespace App\Models;

use App\Models\User;
use App\Models\Magazine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class film extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        //non più necessario
        // 'author',
        'year',
        'description',
        'img',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function magazines(){
        return $this->belongsToMany(Magazine::class);
    }
}
