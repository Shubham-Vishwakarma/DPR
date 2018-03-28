<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    public $timestamps = false;
	protected $fillable = [
		'implementing_agency_id',
		'phase1_id',
		'phase1_status',
		'phase2_id',
		'phase2_status',
		'phase3_id',
		'phase3_status'
  ];
}
