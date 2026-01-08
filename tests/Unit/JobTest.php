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
    $jobs = Job::factory()->count(2)->create();
    $tags = Tag::factory()->count(4)->create();

    # Act
    foreach ($jobs as $job) {
        foreach ($tags as $tag) {
            $job->tag($tag);
        }
    }

    # Assert
    expect($job->tags)->toHaveCount(4);
});