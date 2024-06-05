<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKinerjaRequest;
use App\Http\Requests\UpdateKinerjaRequest;
use App\Models\Candidate;
use App\Models\Criteria;
use App\Models\Score;
use Illuminate\Http\Request;

class KinerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scores = Score::with(['criteria', 'candidate'])->paginate(5);
        return view('kinerja.index', compact('scores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $candidates = Candidate::all();
        $criterias = Criteria::all();
        return view('kinerja.create', compact('candidates', 'criterias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKinerjaRequest $request)
    {
        Score::create($request->validated());
        return redirect()->route('kinerja.index')->with('success', 'Score created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $score = Score::findOrFail($id);
        $candidates = Candidate::all();
        $criterias = Criteria::all();
        return view('kinerja.edit', compact('score', 'candidates', 'criterias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKinerjaRequest $request, string $id)
    {
        $score = Score::findOrFail($id);
        $score->update($request->validated());
        return redirect()->route('kinerja.index')->with('success', 'Score updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $score = Score::findOrFail($id);
        $score->delete();
        return redirect()->route('kinerja.index')->with('success', 'Score deleted successfully');
    }
}
