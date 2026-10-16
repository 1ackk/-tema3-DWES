<x-layout title="New Idea">
    <form method="POST" action="/ideas">
        @csrf

        <div class="col-span-full">
            <label for="description" class="block">
                <div class="mt-2">
                    <textarea
                        id="description"
                        name="description"
                        rows="3"
                        class="textarea w-full @error('description') textarea-error @enderror"
                    ></textarea>

                    <x-forms.error name="description" />
                </div>
            </label>

            <p class="mt-3 text-sm/6 text-gray-400">
                Have an idea you want to save for later?
            </p>
        </div>

        <div class="mt-6 flex items-center gap-x-1">
            <button type="submit" class="btn">
                Save
            </button>
        </div>
    </form>
</x-layout>
