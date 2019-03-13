<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class match extends Model
{
    protected $fillable = ['match_name', 'referee', 'group_id',
     'hometeam_id', 'awayteam_id',
     'homescore', 'awayscore', 'matchstart', 'notes'];
}
