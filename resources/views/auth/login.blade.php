<x-layout>

    <h1 class="font-bold text-4xl text-center mb-20">Login User</h1>

    <div class="max-w-[50%] mx-auto">
        <form action="/login" method="POST">
            @csrf

            <div class="sm:col-span-4 mb-4">
                <label for="email" class="block text-lg">Email</label>
                <div class="mt-1">
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input type="email" name="email" id="email"
                            class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                            placeholder="Cactuslover@mail.com" value="{{ old('email') }}" required>
                    </div>

                    @error('email')
                        <p class="text-xs text-red-500 font-semibold mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>
            </div>

            <div class="sm:col-span-4 mb-4">
                <label for="password" class="block text-lg">Password</label>
                <div class="mt-1">
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                        <input type="password" name="password" id="password"
                            class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                            value="{{ old('password') }}" required>
                    </div>

                    @error('password')
                        <p class="text-xs text-red-500 font-semibold mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Login
                </button>
            </div>
        </form>
    </div>



</x-layout>
