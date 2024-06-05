<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Services\CpiService;

class CandidateController extends Controller
{
    protected $cpiService;

    public function __construct(CpiService $cpiService)
    {
        $this->cpiService = $cpiService;
    }

    /**
     * Show the CPI process details.
     */
    public function showCpiProcess()
    {
        $data = $this->cpiService->calculate();
        return view('candidates.index', $data);
    }
}
