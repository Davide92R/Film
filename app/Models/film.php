<?php

namespace App\Models;

use App\Models\User;
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
}
