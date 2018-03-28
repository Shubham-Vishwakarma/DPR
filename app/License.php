<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
      protected $fillable = [
    protected $table = 'licenses';
    'builder_id',
    'name',
    'address',
    'email',
    'phone',
    'license',
    'pan'];
  
}
