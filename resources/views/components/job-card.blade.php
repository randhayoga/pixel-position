@props(['job'])

<x-hoverable-card class="flex-col text-center">
    <div class="font-medium place-self-start">{{ $job->employer->name }}</div>
    <div class="my-5">
        <h3 class="font-bold text-2xl group-hover:text-blue-600 transition-colors">
            <a href={{ $job->url }} target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-lg mt-3">{{ $job->schedule }} - {{ $job->salary }}</p>
    </div>
    <div class="flex justify-between items-end mt-auto">
        <div class="flex flex-wrap space-x-1">
            @foreach ($job->tags as $tag)
                <x-tag class="text-xs mb-1" :href="'/tags/'.$tag->name">{{ $tag->name }}</x-tag> 
            @endforeach
        </div>
        <x-company-logo :employer="$job->employer" :width="42"/>
    </div>
</x-hoverable-card>