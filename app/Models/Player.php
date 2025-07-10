<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['name', 'number', 'position', 'birth_date', 'nationality', 'photo'];

    public function lineups()
    {
        return $this->hasMany(MatchLineup::class, 'player_id');
    }
}