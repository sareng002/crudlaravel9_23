<x-guest-layout>
    <div class="container mx-auto px-8 py-4 text-sm dark:text-white">
        @foreach ($filterd as $item)
            <div class="flex">
                <p class="flex px-4 py-2">{{ $j++ }}</p>
                <p class="flex px-4 py-2">{{ $item->nik }}</p>
                <p class="flex px-4 py-2">{{ $item->nama }}</p>
                <p class="flex px-4 py-2">{{ $item->kelamin }}</p>
                <p class="flex px-4 py-2">{{ $item->usia }}</p>
            </div>
        @endforeach
    </div>
</x-guest-layout>
