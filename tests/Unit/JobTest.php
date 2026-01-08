<?php

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;

test('job belongs to an employer', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);

    expect($job->employer->is($employer))->toBeTrue();
});

test('job can have tags', function() {
    # Arrange
    $tags = Tag::factory()->count(4)->create();
    $jobs = Job::factory(20)->hasAttached($tags)->create();

    # Assert
    foreach ($jobs as $job) {
        expect($job->tags)->toHaveCount(4);
    }
});