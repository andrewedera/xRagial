<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vend extends Model
{
    //
    //protected $guarded = array();
    protected $table ='shopcont';
    protected $dates = ['timstamp'];

    public function getRouteKeyName()
	{
	    return 'shopOwnerID';
	}
}
