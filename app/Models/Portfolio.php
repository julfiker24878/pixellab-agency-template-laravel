<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'sub_title', 'image'];

    function rel_to_tab(){
        return $this->belongsTo(Tab::class, 'tab_id', 'id');
    }
}
