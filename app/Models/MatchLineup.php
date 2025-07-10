<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MatchLineup extends Model
{
    protected $fillable = ['match_id', 'player_id', 'role', 'note'];

    public function match()
    {
        return $this->belongsTo(ClubMatch::class, 'match_id');
    }

    public function player()
    {
        return $this->belongsTo(Player::class, 'player_id');
    }
}