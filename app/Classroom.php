<?php

namespace Gihro;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'center_id', 'age_range_id', 'name'
  ];

  /**
	* Get the kids for the classroom.
	*/

  public function kids () {
    return $this->hasMany('Gihro\Kid');
  }

  /**
	* Get the menus for the classroom.
	*/

  public function menus () {
    return $this->hasMany('Gihro\Menu')->select(['id', 'title', 'date']);
  }


}
