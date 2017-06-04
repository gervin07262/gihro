<?php

namespace Gihro;

use Illuminate\Database\Eloquent\Model;

use DB;

class Kid extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'classroom_id', 'user_id', 'name', 'surnames', 'path'
  ];

	/**
	* Get the reviewsw for the kid.
	*/

  public function reviews() {
    return $this->hasMany('Gihro\Review');
  }

  /**
 * Get the classroom that owns the kid.
 */

 public function classroom () {
   return $this->belongsTo('Gihro\Classroom');
 }

  /**
 *
 * @param id
 * return a profile
 */

  public static function profile ($id) {
    return Kid::select('kids.id', 'kids.user_id', 'kids.name', 'kids.surnames',
           'users.email')
           ->join('users', 'kids.user_id', '=', 'users.id')
           ->where('kids.id', '=', $id)
           ->get();
  }

  /**
 *
 * @param id
 * return kids.id
 */

  public static function findBy($field, $value) {
    return Kid::where('kids.'.$field, '=', $value)->get();
  }

  /**
 *
 * @param path
 * save path file and setPathAttribute
 */

  public function setPathAttribute($path) {
     if(!empty($path)){
       $file = $path;
       $name = time().'-'.$path->getClientOriginalName();
       $this->attributes['path'] = $name;
       $file->move(public_path().'/images/kids', $name);
       session(['path' => 'kids/'.$name]);
     }
   }

}
