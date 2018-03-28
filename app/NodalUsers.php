<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NodalUsers extends Model
{
    protected $fillable = [
  'emp_name',
  'username',
  'password',
  'completed',
  'pending'];
}
