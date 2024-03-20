<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BureauDeVote;
use App\Models\Commune;

class CentreDeVote extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "commune_id"
    ];

    public function bureaudevote(){
        return $this->hasMany(BureauDeVote::class);
    }

    public function commune(){
        return $this->belongsTo(Commune::class);
    }
}
