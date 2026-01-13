

@props(['employer', 'width' => 130])

<img src={{ asset('storage/' . $employer->logo) }} alt="Company Logo" class="rounded-md" width={{ $width }}>