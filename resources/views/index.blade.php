<x-layout>
    <div class="mt-5 space-y-5">
        <section class="text-center space-y-4 pt-20">
            <div class="inline-flex space-x-1">
                <span class="bg-white w-2 h-2 inline-block"></span>
                <h1 class="text-4xl font-bold">Let's find your next job.</h1>
            </div>
            <form action="">
                <input type="text" placeholder="Web Developer..." class="rounded-lg bg-white/8 p-2.5 border-1 border-white/20 w-full max-w-xl">
            </form>
        </section>

        <section class="pt-20">
            <x-section-title>Featured Jobs</x-section-title>
            <div class="mt-3 grid lg:grid-cols-3 gap-5">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-title>Tags</x-section-title>
            <div class="mt-3 flex flex-wrap gap-3">
                @for ($i = 1; $i <= 50; $i++)
                    <x-tag>Tag</x-tag>
                @endfor
            </div>
        </section>

        <section>
            <x-section-title>Recent Jobs</x-section-title>
            <div class="mt-3 flex flex-col gap-5">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>
</x-layout>