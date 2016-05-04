<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
	//Mass assignment Error
	protected $guarded = [];

	public function tasks(){

		return $this->hasMany('App\Task');
	}
}
