<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class match extends Model
{
    protected $fillable = ['group_id', 'hometeam_id', 'awayteam_id'];
}
