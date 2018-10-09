<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    protected $fillable = ['marca', 'modelo', 'kms', 'precio', 'matriculada'];
}
