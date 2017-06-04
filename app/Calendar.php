<?php

namespace Gihro;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'center_id','title', 'start', 'end', 'allDay', 'backgroundColor'
  ];

  /**
 * Get the center that owns the calendar.
 */
  public function center()
  {
      return $this->belongsTo('Gihro\Center');
  }
}
