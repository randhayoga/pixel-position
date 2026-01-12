<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Tag;

class TagController extends Controller
{
    public function __invoke(Tag $tag): View
    {
        return view('search', ['jobs' => $tag->jobs->load(['employer', 'tags'])]);
    }
}
