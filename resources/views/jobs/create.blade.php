<x-layout>
    <x-page-heading>Create a job listing</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Job title" name="title" placeholder="Associate lawyer" />
        <x-forms.input label="Salary (in USD, per hour, written without separator)" 
                        name="salary" 
                        placeholder="100000" />
        <x-forms.input label="Location" name="location" placeholder="New Mexico" />
        <x-forms.select label="Schedule" name="schedule">
            <option>Full-time</option>
            <option>Hybrid</option>
            <option>Remote</option>
        </x-forms.select>
        <x-forms.input label="URL" name="url" placeholder="https://hhm.com/careers" />
        <x-forms.checkbox label="Featured? (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (written with comma separated for multiple tags)"
                        name="tags"
                        placeholder="law,justice" />

        <x-forms.button class="mt-6 mb-15">Post job</x-forms.button>
    </x-forms.form>
</x-layout>