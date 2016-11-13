<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

	protected $uploads = '/images/';

	protected $fillable = [
		'file'
	];

	public function getPhotoAttribute($photos){
		
		return $this->uploads . $photos;
	}

}
