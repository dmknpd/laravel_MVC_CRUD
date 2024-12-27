@props(['plant'])

<x-layout>

    <h1 class="font-bold text-4xl text-center mb-20">Edit Plant - {{ $plant->title }}</h1>

    <div class="max-w-[50%] mx-auto">
        <form action="/plants/{{ $plant->id }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="sm:col-span-4 mb-4">
                <label for="title" class="block text-lg">Title</label>
                <div class="mt-1">
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input type="text" name="title" id="title"
                            class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                            placeholder="Cactus" value="{{ $plant->title }}" required>
                    </div>

                    @error('title')
                        <p class="text-xs text-red-500 font-semibold mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>
            </div>

            <div class="sm:col-span-4 mb-4">
                <label for="description" class="block text-lg">Description</label>
                <div class="mt-1">
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <textarea type="text" name="description" id="description"
                            class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                            rows="5" placeholder="Lorem ipsum dolor sit amet..." required>{{ $plant->description }}</textarea>
                    </div>


                    @error('description')
                        <p class="text-xs text-red-500 font-semibold mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>
            </div>

            <div class="sm:col-span-4 mb-4">
                <label for="price" class="block text-lg">Price</label>
                <div class="mt-1">
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">$</div>
                        <input type="number" name="price" id="price"
                            class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                            placeholder="100" value="{{ $plant->price }}" required>
                    </div>

                    @error('price')
                        <p class="text-xs text-red-500 font-semibold mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>
            </div>

            <div class="sm:col-span-4 mb-8">
                <label for="img" class="block text-lg">Image URL</label>
                <div class="mt-1">
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input type="text" name="img" id="img"
                            class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                            placeholder="https://whateveruwant.com" value="{{ $plant->img }}" required>
                    </div>

                    @error('img')
                        <p class="text-xs text-red-500 font-semibold mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update
                </button>
            </div>
        </form>
    </div>



</x-layout>
