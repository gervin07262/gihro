<?php

namespace Gihro;

use Illuminate\Database\Eloquent\Model;

use DB;

class Teacher extends Model
{
  //
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'classroom_id', 'user_id', 'name', 'surnames', 'path'
  ];

    /**
   *
   * @param id
   * return a profile
   */

   public static function profile($id) {
       return Teacher::select('teachers.id','teachers.user_id','teachers.name','teachers.surnames',
               'users.email')
               ->join('users','teachers.user_id','=','users.id')
               ->where('teachers.id','=',$id)
               ->get();
   }

   /**
  *
  * @param id
  * return teachers.id
  */

   public static function findBy($field, $value) {
     return Teacher::where('teachers.'.$field, '=', $value)->get();
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
        $file->move(public_path().'/images/teachers', $name);
        session(['path' => 'teachers/'.$name]);
      }
    }

}
