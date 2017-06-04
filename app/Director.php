<?php

namespace Gihro;

use Illuminate\Database\Eloquent\Model;

use DB;

class Director extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'center_id', 'user_id', 'name', 'surnames', 'dni', 'path'
    ];

    /**
   *
   * @param id
   * return a profile
   */

   public static function profile($id) {
       return Director::select('directors.id','directors.center_id','directors.user_id',
                       'directors.name','directors.surnames','directors.dni',
                       'centers.province_id','centers.location_id',
                       'centers.name as name_center','centers.code','centers.address',
                       'centers.cp','centers.phone','users.email')
               ->join('centers','directors.center_id','=','centers.id')
               ->join('users','directors.user_id','=','users.id')
               ->where('directors.id','=',$id)
               ->get();
   }

   /**
  *
  * @param field
  * @param value
  * return register
  */

   public static function findBy($field, $value) {
     return Director::where('directors.'.$field, '=', $value)->get();
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
        $file->move(public_path().'/images/directors', $name);
        session(['path' => 'directors/'.$name]);
      }
    }

}
