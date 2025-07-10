<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClubMatch extends Model
{
    protected $table = 'matches';

    protected $fillable = ['opponent_id', 'match_date', 'stadium', 'score_rondo', 'score_opponent', 'status'];

    public function opponent()
    {
        return $this->belongsTo(Opponent::class);
    }

    public function lineups()
    {
        return $this->hasMany(MatchLineup::class, 'match_id');
    }
}