@props(['job'])

<x-hoverable-card class="gap-x-6">
    <div>
        <x-company-logo :employer="$job->employer" />
    </div>
    <div class="flex flex-col">
        <div class="font-medium text-pixel-gray">{{ $job->employer->name }}</div>
        <h3 class="font-medium text-2xl group-hover:text-blue-600 transition-colors">
            <a href={{ $job->url }} target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-lg mt-auto">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>
    <div class="space-x-0.5 mt-auto ml-auto">
        @foreach ($job->tags as $tag)
            <x-tag class="text-xs" :href="'/tags/'.$tag->name">{{ $tag->name }}</x-tag> 
        @endforeach
    </div>
</x-hoverable-card>