<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = ['tournament_name','groups', 'playfields', 'match_time'];
}
