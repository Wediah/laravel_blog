<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Login</h1>
                <form method="POST" action="/login" class="mt-10">
                    @csrf

                    <x-form.input name="email" type="email" autocomplete="username"/>
                    <x-form.input name="password" type="password"  autocomplete="new-password"/>


                    <div class="mb-6 mt-4">
                        <input
                            type="submit"
                            class="bg-blue-400 text-white rounded-full py-2 px-4 hover:bg-blue-500 cursor-pointer"
                            value="Log In"
                        >
                    </div>

                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
