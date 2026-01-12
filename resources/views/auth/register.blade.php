<x-layout>
    <h1 class="font-bold text-center text-4xl mt-15">Register</h1>
    <x-forms.form method="POST" action="/register" class="pb-10" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name" />
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />
        <x-forms.input label="Password confirmation" name="password_confirmation" type="password" />

        <x-forms.divider />

        <x-forms.input label="Employer name" name="employer_name" />
        <x-forms.input label="Employer logo" name="employer_logo" type="file" />

        <x-forms.button>Create account</x-forms.button>
    </x-forms.form>
</x-layout>