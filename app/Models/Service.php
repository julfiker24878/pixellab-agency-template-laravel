<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['service'];

    function rel_to_service_title(){
        return $this->belongsTo(ServiceTitle::class, 'service_title', 'id');
    }
}
