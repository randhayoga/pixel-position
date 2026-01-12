<x-layout>
    <h1 class="font-bold text-center text-4xl mt-15 mb-5">Welcome back</h1>
    <x-forms.form method="POST" action="/login" class="pb-10">
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />

        <x-forms.button>Log in</x-forms.button>
    </x-forms.form>
</x-layout>
