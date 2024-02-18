<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTitle extends Model
{
    use HasFactory;

    protected $fillable = ['icon', 'title'];

    function rel_to_service(){
        return $this->hasMany(Service::class, 'service_title');
    }
}
