<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg p-6 mx-auto mt-10 bg-gray-100 border border-gray-200 rounded-xl">
            <h1 class="mb-8 text-2xl font-bold text-center">
                Login
            </h1>
            <form action="/sessions" method="post">
                @csrf

                <x-form.input name="email" type="email" autocomplete="email"/>
                <x-form.input name="password" type="password" autocomplete="password"/>

                <x-form.button name="Log In" />
            </form>
        </main>
    </section>

</x-layout>
