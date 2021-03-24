<div class="flex flex-col w-full h-screen bg-indigo-900" x-data="{
    showSubscribe: false,}">
    <nav class="container flex justify-between pt-5 mx-auto text-indigo-200">
        <a class="text-4xl font-bold" href="/">
            <x-application-logo class="w-16 h-16 fill-current"></x-application-logo>
        </a>

        <div class="flex justify-end">
            @auth
            <a href="{{ route('dashboard') }}">Dashboard</a>
            @else
            <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
    </nav>

    <div class="container flex items-center h-full mx-auto">
        <div class="flex flex-col items-start w-1/3">
            <h1 class="mb-4 text-5xl font-bold leading-tight text-white">
                Simple generic landing page to subscribe</h1>
            <p class="mb-10 text-xl text-indigo-200">
                We are just checking the <span class="font-bold underline">TALL</span> stack. Would you mind
                subscribing?</p>
            <x-button class="px-8 py-3 bg-red-500 hover:bg-red-600" x-on:click="showSubscribe = true">
                Subscribe</x-button>
        </div>
    </div>
    <div class="fixed top-0 flex items-center w-full h-full bg-gray-900 bg-opacity-60" x-show="showSubscribe" x-on:click.self="showSubscribe = false" x-on:keydown.escape.window="showSubscribe = false">
        <!-- Sets a darker background, while putting the popup in the middle of the screen. -->
        <div class="p-8 m-auto bg-pink-500 shadow-2xl rounded-xl">
            <p class="text-5xl font-extrabold text-center text-white">Let's do it!</p>
            <form class="flex flex-col items-center p-24" wire:submit.prevent="subscribe">
                <x-input class="px-5 py-3 border border-blue-400 w-80" type="email" name="email" placeholder="E-mail Address" wire:model.lazy="email"></x-input>
                <span class="text-xs text-gray-100">We will send you a confirmation email.</span>
                <x-button class="justify-center px-5 py-3 mt-5 bg-blue-500 w-80">Get In</x-button>
            </form>
        </div>
    </div>
</div>
