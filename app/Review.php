<?php

namespace Gihro;

use Illuminate\Database\Eloquent\Model;

use DB;

class Review extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'kid_id', 'breakfast', 'lunch', 'snack', 'bowl_movement', 'urination',
      'escapes', 'activities', 'nap', 'nap_time', 'observations'
  ];

  /**
 * Get the kid that owns the review.
 */
  public function kid()
  {
      return $this->belongsTo('Gihro\Kid');
  }

  public static function getReviewElements ($id) {
    $review = Review::find($id);
    $breakfast = explode(',', $review->breakfast);
    $cupBreakFast = $this->getCup($breakfast[0]);
    $faceBreakFast = $this->getFace($breakfast[1]);

    $lunch = explode(',', $review->lunch);
    $dishLunch = $this->getDish($lunch[0]);
    $faceLunch = $this->getFace($lunch[1]);

    $snack = explode(',', $review->snack);
    $cupSnack = $this->getCup($snack[0]);
    $faceSnack = $this->getFace($snack[1]);

    $faceNap = $this->getFace($review->nap);

    return  [
              'cupBreakFast' => $cupBreakFast,
              'faceBreakFast' => $faceBreakFast,
              'dishLunch' => $dishLunch,
              'faceLunch' => $faceLunch,
              'cupSnack' => $cupSnack,
              'faceSnack' => $faceSnack,
              'faceNap' => $faceNap,
              'review' => $review,
            ];
  }


  /**
   * get the image of cup.
   *
   * @param  elemnent of array
   * @return string
   */
  private function getCup($item) {
    switch ($item) {
      case '1':
        return 'full-cup';
        break;
      case '2':
        return 'medium-cup';
      default:
        return 'empty-cup';
        break;
    }
  }

  /**
   * get the image face.
   *
   * @param  collection  $review
   * @return string
   */
  private function getFace($breakfast) {
    switch ($breakfast) {
      case '1':
        return 'face-happy';
        break;
      case '2':
        return 'face-regular';
      default:
        return 'face-sad';
        break;
    }
  }

  /**
   * get the image of dish.
   *
   * @param  elemnent of array
   * @return string
   */
  private function getDish($lunch) {
    switch ($lunch) {
      case '1':
        return 'full-dish';
        break;
      case '2':
        return 'medium-dish';
      default:
        return 'empty-cup';
        break;
    }
  }
}
