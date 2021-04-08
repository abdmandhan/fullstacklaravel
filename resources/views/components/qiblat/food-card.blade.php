<div class="pt-12 text-lg font-bold">
    Susu <a href="#" class="text-green-400">Lihat Semua</a>
</div>
<div class="flex pt-6 space-x-12">
    @foreach ($data as $item)
    <a class="flex flex-col w-1/6 shadow-xl rounded-xl" href="{{ route('food.show',$item->id)}}">
        <div class="overflow-hidden rounded-t-xl">
            <img src="{{ $item->img}}" alt="" srcset="">
        </div>
        <div class="p-4 text-sm">
            {{ $item->title }}

            <strong class="block">
                {{ $item->price_rp }}
            </strong>
        </div>
    </a>
    @endforeach
</div>
