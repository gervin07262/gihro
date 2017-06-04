<?php

namespace Gihro;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'province_id', 'location_id', 'name', 'code', 'address', 'cp', 'phone'
    ];

    /**
  	* Get the calendars for the center.
  	*/

    public function calendars () {
      return $this->hasMany('Gihro\Calendar');
    }

}
