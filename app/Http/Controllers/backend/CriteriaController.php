<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCriteriaRequest;
use App\Models\Criteria;
use App\Models\Weight;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $criterias = Criteria::with('weight')->get();
        return view('criteria.index', compact('criterias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('criteria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCriteriaRequest $request)
    {
        $criteria = Criteria::create($request->only('name', 'type'));
        Weight::create([
            'criteria_id' => $criteria->id,
            'value' => $request->value
        ]);

        return redirect()->route('kriteria.index')->with('success', 'Criteria created successfully');

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
        $criteria = Criteria::findOrFail($id);
        return view('criteria.edit', compact('criteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCriteriaRequest $request, string $id)
    {
        $criteria = Criteria::findOrFail($id);
        $criteria->update($request->only('name', 'type'));
        $criteria->weight->update(['value' => $request->value]);

        return redirect()->route('kriteria.index')->with('success', 'Criteria updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $criteria = Criteria::findOrFail($id);
        // Delete related weight first
        $criteria->weight()->delete();
        // Now delete the criteria
        $criteria->delete();
        return redirect()->route('kriteria.index')->with('success', 'Criteria deleted successfully');
    }
}
