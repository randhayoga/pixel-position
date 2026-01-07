<x-layout>
    <section class="mt-5 space-y-5">
        <div>
            <x-section-title>Featured Jobs</x-section-title>
            <div class="mt-3 grid lg:grid-cols-3 gap-5">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </div>

        <div>
            <x-section-title>Tags</x-section-title>
            <div class="mt-3">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </div>

        <div>
            <x-section-title>Recent Jobs</x-section-title>
        </div>
    </section>
</x-layout>