<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Validation\Rule;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('index', ['jobs' => Job::with('employer', 'tags')->latest()->get(), 'tags' => Tag::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required'],
            'salary' => ['required', 'numeric'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in(['Full-time', 'Hybrid', 'Remote'])],
            'url' => ['required', 'url'],
            'tags' => ['nullable'],
        ]);

        $validated['featured'] = $request->has('featured');
        $validated['salary'] = '$' . number_format($validated['salary']);

        // Store job data to jobs
        $job = Auth::user()->employer->jobs()->create(Arr::except($validated, 'tags'));

        // Store tag datas (each one) to tags
        if ($validated['tags']) {
            foreach(explode(',', $validated['tags']) as $tag) {
                $job->tags($tag);
            }
        }

        return redirect()->intended();
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
