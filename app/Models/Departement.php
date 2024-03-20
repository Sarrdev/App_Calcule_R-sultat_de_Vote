<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commune;
use App\Models\Region;

class Departement extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "region_id"
    ];

    public function commune(){
        return $this->hasMany(Commune::class);
    }

    public function region(){
        return $this->belongsTo(Region::class);
    }
}
