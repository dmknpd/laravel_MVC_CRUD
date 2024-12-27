@props(['plant'])

<a href="/plants/{{ $plant->id }}"
    class="flex justify-between px-4 py-2 bg-green-800 rounded-lg border border-transparent hover:border-green-500 cursor-pointer group">
    <div class="flex space-x-5 items-center">
        <div>
            <img src="{{ $plant->img }}" alt="plant img" width="90">
        </div>

        <div>
            <p>{{ $plant->seller->name }}</p>

            <div>
                <h3 class="text-xl font-bold group-hover:text-green-500">
                    {{ $plant->title }}
                </h3>

                <p class="text-sm">{{ Str::words($plant->description, 10, '...') }}</p>
            </div>
        </div>
    </div>

    <div class="mt-auto text-xl">
        <h3>${{ $plant->price }}</h3>
    </div>
</a>
