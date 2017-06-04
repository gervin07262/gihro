<?php

namespace Gihro;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'classroom_id','title', 'date'
  ];

    //

    /**
   * Get the classroom that owns the menu.
   */

   public function classroom () {
    return $this->belongsTo('Gihro\Classroom');
   }
}
