<?php

namespace App\Services;

use App\Models\Candidate;
use App\Models\Criteria;
use App\Models\Score;
use App\Models\Weight;

class CpiService
{
    public function calculate()
    {
        $candidates = Candidate::all();
        $criteria = Criteria::all();
        $weights = Weight::pluck('value', 'criteria_id')->all();
        $scores = Score::all();

        // Find the minimum and maximum values for each criterion
        $minValues = [];
        $maxValues = [];
        foreach ($criteria as $criterion) {
            $minValues[$criterion->id] = $scores->where('criteria_id', $criterion->id)->min('value');
            $maxValues[$criterion->id] = $scores->where('criteria_id', $criterion->id)->max('value');
        }

        $results = [];
        $details = [];

        foreach ($candidates as $candidate) {
            $totalScore = 0;
            $candidateDetails = [];

            foreach ($criteria as $criterion) {
                $score = $scores->where('candidate_id', $candidate->id)
                    ->where('criteria_id', $criterion->id)
                    ->first()
                    ->value;

                if ($criterion->type == 'cost') {
                    $normalizedScore = ($minValues[$criterion->id] / $score) * 100;
                } else {
                    $normalizedScore = ($score / $maxValues[$criterion->id]) * 100;
                }

                $weightedScore = $normalizedScore * $weights[$criterion->id];
                $totalScore += $weightedScore;

                $candidateDetails[] = [
                    'criteria' => $criterion->name,
                    'score' => $score,
                    'normalized_score' => $normalizedScore,
                    'weighted_score' => $weightedScore,
                ];
            }

            $results[] = [
                'candidate' => $candidate->name,
                'score' => $totalScore,
            ];

            $details[] = [
                'candidate' => $candidate->name,
                'details' => $candidateDetails,
            ];
        }

        usort($results, function($a, $b) {
            return $b['score'] <=> $a['score'];
        });

        return ['results' => $results, 'details' => $details];
    }
}
