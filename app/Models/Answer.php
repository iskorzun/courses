<?php

namespace App/Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model {

	protected $table = 'answers';
	public $timestamps = true;
	protected $fillable = array('title', 'question_id', 'sort', 'ball');

}