<x-app-layout>
    <div class="container">
        <div class="grid grid-cols-3 gap-4">
            <div>
                <img src="{{ $data->img }}" alt="" srcset="" class="w-full p-2 shadow-lg rounded-xl">
            </div>
            <div>
                {{ $data->title }}
                {{ $data->price_rp }}
            </div>
            <div class="flex shadow-xl h-1/2 rounded-xl">
                <div>
                    <button class="bottom-0">
                        Beli
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
