<?php

namespace App\Http\Controllers;

class RatingController extends Controller
{
    public function __construct()
    {
        //
    }

    public function getNewRatings($match, $type = 'basicElo') {
    	if(!method_exists($this, $type)) {
    		throw new \Exception('Rating type does not exist.');
		}
    	return $this->$type($match->ratable_1, $match->ratable_2, $match->score_1, $match->score_2);
	}

	public function basicElo($ratingOne, $ratingTwo, $scoreOne, $scoreTwo) {
		/**
		 * How strong a match will impact the players’ ratings
		 * @var int The K Factor used.
		 */
		$KFACTOR = 16;

		$expectedScoreOne = 1 / (1 + (pow(10, ($ratingTwo - $ratingOne) / 400)));
		$expectedScoreTwo = 1 / (1 + (pow(10, ($ratingOne - $ratingTwo) / 400)));
		$newRatingOne = $ratingOne + ($KFACTOR * ($scoreOne - $expectedScoreOne));
		$newRatingTwo = $ratingTwo + ($KFACTOR * ($scoreTwo - $expectedScoreTwo));

		return [$newRatingOne, $newRatingTwo];
	}
}
