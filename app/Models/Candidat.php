<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ResultatVote;


class Candidat extends Model
{
    use HasFactory;

    protected $fillable = [
        "prenom",
        "nom",
        "parti_politique",
        "fonction"
    ];

    public function resultatsVotes(){
        return $this->hasMany(ResultatVote::class);
    }
}
