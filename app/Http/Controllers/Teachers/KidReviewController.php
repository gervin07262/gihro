<?php

namespace Gihro\Http\Controllers\Teachers;

use Illuminate\Http\Request;

use Gihro\Http\Requests;
use Gihro\Http\Controllers\Controller;

use Gihro\Kid;
use Gihro\Review;
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
      $num_rows = count($reviews);
      return view ('panel.teachers.kidreview.index',['reviews' => $reviews, 'num_rows' => $num_rows]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('panel.teachers.kidreview.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
      Review::create([
        'kid_id' => $id,
        'breakfast' => $request->resultBreakfastCup.','.$request->resultBreakfastFace,
        'lunch' => $request->resultLunchDish.','.$request->resultLunchFace,
        'snack' => $request->resultSnackCup.','.$request->resultSnackFace,
        'bowl_movement' => $request->bowl_movement,
        'urination' => $request->urination,
        'escapes' => $request->escapes,
        'activities' => $request->activities,
        'nap' => $request->resultNapFace,
        'nap_time' => $request->nap_time,
        'observations' => $request->observations
      ]);
      Session::flash('message','Agenda de hoy añadida correctamente');
      return redirect('panelTeachers/kids/'.$id.'/reviews/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kidId,$reviewId)
    {
      $review = Review::getReviewElements($reviewId);

      return view('panel.teachers.kidreview.show', $review);
    }

}
