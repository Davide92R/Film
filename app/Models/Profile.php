<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone','city','cap'
    ];

    //funzione di relazione inversa che collega profilo ad un utente.
    public function user(){
        return $this->belongsTo(User::class);
    }

}
