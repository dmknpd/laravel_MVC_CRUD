<x-layout>
    <h1 class="font-bold text-4xl text-center mb-10">Plants list</h1>

    <div class="space-y-2">
        @foreach ($plants as $plant)
            <x-plant-card :$plant></x-plant-card>
        @endforeach
    </div>
</x-layout>
