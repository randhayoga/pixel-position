<x-layout>
    <x-page-heading>Search jobs</x-page-heading>
    <x-forms.form action="/search" class="my-5">
        <x-forms.input :label="false" name="q" placeholder="Search for another jobs..."/>
    </x-forms.form>
    <x-section-title class="pt-5">Search results:</x-section-title>
    <div class="flex flex-col mt-5 gap-5">
        {{-- {{ dd($jobs->first()) }} --}}
        @foreach ($jobs as $job)
            <x-job-card-wide :job="$job" />
        @endforeach
    </div>
</x-layout>