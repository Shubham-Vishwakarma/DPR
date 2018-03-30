<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assigned extends Model
{
    protected $table = 'assigneds';

	protected $fillable = [
		'phase_no',
		'status',
		'nodal_id',
		'phase_id',
		'project_id'
  ];
}
