<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CentreDeVote;
use App\Models\ResultatVote;

class BureauDeVote extends Model
{
    use HasFactory;

    protected $fillable = [
        "n°bureau",
        "centre_de_vote_id"
    ];

    public function centreDeVote()
    {
        return $this->belongsTo(CentreDeVote::class);
    }

    public function resultat()
    {
        return $this->hasMany(ResultatVote::class);
    }
}
