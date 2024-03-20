<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BureauDeVote;
use App\Models\Candidat;

class ResultatVote extends Model
{
    use HasFactory;

    protected $fillable = [
        'bureau_de_vote_id',
        'candidat_id',
        'nombre_voix'
    ];

    
    public function bureauDeVote(){
        return $this->belongsTo(BureauDeVote::class);
    }

    public function candidat(){
        return $this->belongsTo(Candidat::class);
    }

    
}
