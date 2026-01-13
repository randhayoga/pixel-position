<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\View\View;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        $jobs = Job::with(['employer', 'tags'])
        ->where('title', 'LIKE', '%'.request('q').'%')
        ->get();

        return view('search', ['jobs' => $jobs, 'q' => request('q')]);
    }
}
