<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Departement;
use App\Models\CentreDeVote;

class Commune extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "departement_id"
    ];

    public function departement(){
        return $this->belongsTo(Departement::class);
    }

    public function centreDevote(){
        return $this->hasMany(CentreDeVote::class);
    }
}
