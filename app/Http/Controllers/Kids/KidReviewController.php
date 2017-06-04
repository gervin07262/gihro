<?php

namespace Gihro\Http\Controllers\Kids;

use Illuminate\Http\Request;

use Gihro\Http\Requests;
use Gihro\Http\Controllers\Controller;

use Gihro\Review;
use Gihro\Kid;
use Session;

class KidReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $reviews = Kid::find($id)->reviews;
      $lastId = Kid::find($id)->reviews->last();
      $numRows = count($reviews);
      return view ('panel.kids.kidreview.index',[
                  'reviews' => $reviews,
                  'numRows' => $numRows,
                  'lastReviewId' => $lastId->id]
                  );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $kidId
     * @param  int  $reviewId
     * @return \Illuminate\Http\Response
     */
    public function show($kidId,$reviewId)
    {
        $review = Review::getReviewElements($reviewId);

        return view('panel.kids.kidreview.show', $review);
    }
}
