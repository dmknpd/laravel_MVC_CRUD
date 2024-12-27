@props(['plant'])

<x-layout>

    <h1 class="font-bold text-4xl text-center mb-20">Plant Info</h1>

    <div class="flex space-x-5">
        <div class="flex-shrink-0 w-64 h-64">
            <img src="{{ $plant->img }}" alt="plant img" class="object-cover w-full h-full">
        </div>
        <div class="flex flex-col flex-1 justify-between">
            <div class="space-y-5">
                <h3 class="font-bold text-2xl">{{ $plant->title }}</h3>
                <p>{{ $plant->description }}</p>
            </div>
            <div class="flex items-end justify-between">
                <h3 class="text-xl">${{ $plant->price }}</h3>

                @can('edit', $plant)
                    <div class="flex space-x-5 text-blue-300">
                        <a href="/plants/{{ $plant->id }}/edit">edit</a>
                        <form action="/plants/{{ $plant->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500">delete</button>
                        </form>
                    </div>
                @endcan

            </div>
        </div>
    </div>


</x-layout>
