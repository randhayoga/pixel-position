<x-layout>
    <div class="mt-5 space-y-10">
        <section class="space-y-4">
            <x-page-heading>Let's find your next job.</x-page-heading>
            <x-forms.form action="/search">
                <x-forms.input :label="false" name="q" placeholder="Search for jobs..."/>
            </x-forms.form>
        </section>

        <section class="pt-20">
            <x-section-title>Featured Jobs</x-section-title>
            <div class="mt-3 grid lg:grid-cols-3 gap-5">
                @foreach ($jobs as $job)
                    @if ($job->featured)
                        <x-job-card :job="$job"/>
                    @endif 
                @endforeach
            </div>
        </section>

        <section>
            <x-section-title>Tags</x-section-title>
            <div class="mt-3 flex flex-wrap gap-3">
                @foreach ($tags as $tag)
                   <x-tag class="text-lg" :href="'/tags/'.$tag->name">{{ $tag->name }}</x-tag>
                @endforeach
            </div>
        </section>

        <section>
            <x-section-title>Recent Jobs</x-section-title>
            <div class="mt-3 flex flex-col gap-5">
                @foreach ($jobs as $job)
                    <x-job-card-wide :job="$job" />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>