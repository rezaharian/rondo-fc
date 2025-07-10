<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClubProfile extends Model
{
    protected $fillable = ['name', 'logo', 'founded_year', 'stadium', 'description'];
}