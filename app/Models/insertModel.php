
//add product model

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insertModel extends Model
{
    use HasFactory;
    //update
	protected $fillable = [
		'name',
		'price',
		'price_id',
		'date',
		'image',
    ];

	public $timestamps = false;
	
	public function relationBetweenPriceRange(){
		return $this -> hasOne(price_range::class,'id','price_id');
	}

}
