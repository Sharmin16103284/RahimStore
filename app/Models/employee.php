<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class employee extends Model
{
    use HasFactory;
    use SoftDeletes;
	//update
	protected $fillable = [
		'name',
		'category_id',
		'nid',
		'address',
		'number',
		'blood_group',
    ];



	//joining with category table
	function relationBetweenEmployeeAndCategory()
    {
    	return $this->hasOne('App\Models\category','id','category_id');
    }



    public $timestamps = false;
}
