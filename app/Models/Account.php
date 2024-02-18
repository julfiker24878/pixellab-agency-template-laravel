<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'link', 'icon'];

    function rel_to_team(){
        return $this->belongsTo(Team::class, 'team_id', 'id');
    }
}
