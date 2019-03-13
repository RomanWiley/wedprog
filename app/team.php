<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    protected $fillable = ['team_name','group_id', 'played', 'points','goals_scored','goals_conceded'];
}
