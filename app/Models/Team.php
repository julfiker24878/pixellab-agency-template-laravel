<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'designation', 'image'];

    function rel_to_account(){
        return $this->hasMany(Account::class, 'team_id');
    }

}
