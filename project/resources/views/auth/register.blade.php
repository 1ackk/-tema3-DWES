<x-layout title="Register">
    <form action="/register" method="POST">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">Register</legend>

            <label class="label" for="name">Name</label>
            <input class="input" id="name" name="name" placeholder="Your Name" required />
            <x-forms.error name="name" />

            <label class="label" for="email">Email</label>
            <input class="input" type="email" id="email" name="email" placeholder="Your Email" required />
            <x-forms.error name="email" />

            <label class="label" for="password">Password</label>
            <input type="password" class="input" id="password" name="password" placeholder="Password" required />
            <x-forms.error name="password" />

            <button class="btn btn-neutral mt-4">Register</button>
        </fieldset>
    </form>
</x-layout>
