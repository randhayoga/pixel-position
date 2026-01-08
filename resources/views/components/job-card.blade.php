@props(['job'])

<x-hoverable-card class="flex-col text-center">
    <div class="font-medium place-self-start">{{ $job->employer->name }}</div>
    <div class="my-5">
        <h3 class="font-bold text-2xl group-hover:text-blue-600 transition-colors">{{ $job->title }}</h3>
        <p class="text-lg mt-3">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-end mt-auto">
        <div class="space-x-0.5">
            @foreach ($job->tags as $tag)
                <x-tag>{{ $tag->name }}</x-tag> 
            @endforeach
        </div>
        <x-company-logo width=42/>
    </div>
</x-hoverable-card>