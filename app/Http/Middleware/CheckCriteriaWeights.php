<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Weight;

class CheckCriteriaWeights
{
    public function handle(Request $request, Closure $next): Response
    {
        $newWeight = $request->input('value');
        $totalWeight = Weight::sum('value');

        // If updating an existing weight, subtract the current value of the weight being updated
        if ($request->route('kinerja')) {
            $existingWeight = Weight::find($request->route('kinerja'));
            $totalWeight -= $existingWeight->value;
        }

        // Add the new weight to the total
        $totalWeight += $newWeight;

        if ($totalWeight > 100) {
            return redirect()->back()->withErrors(['value' => 'Berat total tidak boleh melebihi 100%']);
        }

        return $next($request);
    }
}
