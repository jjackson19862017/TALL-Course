<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="mb-6 text-2xl font-bold text-gray-600 underline">
                        Subscribers
                    </p>
                    @if ($subscribers->isEmpty())
                    <div class="flex w-full p-5 bg-red-100 rounded-lg">
                        <p class="text-red-600">
                            No Subscribers found!
                        </p>
                    </div>
                    @else
                    <table class="w-full">

                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
