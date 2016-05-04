<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
	//Mass assignment Error
	protected $guarded = [];

	public function project(){

		return $this->belongsTo('App\Project');
	}
}
