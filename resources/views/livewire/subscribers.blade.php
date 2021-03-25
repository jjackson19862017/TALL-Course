<div class="p-6 bg-white border-b border-gray-200">
    <p class="mb-6 text-2xl font-bold text-gray-600 underline">
        Subscribers
    </p>

    <div class="px-8">
        <x-input type="text" class="float-right w-1/3 pl-8 mb-4 border border-gray-300 rounded-lg" placeholder="Search" wire:model='search'></x-input>


        @if ($subscribers->isEmpty())
        <div class="flex w-full p-5 bg-red-100 rounded-lg">
            <p class="text-red-600">
                No Subscribers found!
            </p>
        </div>
        @else
        <table class="w-full table-fixed">
            <thead class="text-indigo-600 border-b-2 border-gray-300">
                <tr class="text-sm text-indigo-900 border-b border-gray-400">
                    <th class="w-1/2 px-6 py-3 text-left">Email</th>
                    <th class="w-1/4 px-6 py-3 text-left">Verified</th>
                    <th class="w-1/4"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subscribers as $subscriber)
                <tr class="text-sm text-indigo-900 border-b border-gray-400">
                    <td class="px-6 py-4">
                        {{$subscriber->email}}
                    </td>
                    <td class="px-6 py-4">
                        {{optional($subscriber->email_verified_at)->diffForHumans() ?? 'Never'}}
                    </td>
                    <td class="px-6 py-4">
                        <x-button class="text-red-500 border border-red-500 bg-red-50 hover:bg-red-200" wire:click='delete({{$subscriber->id}})'>
                            Delete
                        </x-button>
                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>
        @endif
    </div>
</div>
