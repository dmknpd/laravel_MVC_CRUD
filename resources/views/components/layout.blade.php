<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Green</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-emerald-900 text-white/80 px-10 py-1">

    <nav class="flex justify-between font-bold">
        <x-link href="/">logo</x-link>

        <div class="space-x-20">
            <x-link href="/">Plants</x-link>
            <x-link href="#">Seeds</x-link>
            <x-link href="#">Contacts</x-link>
        </div>

        @auth
            <div class="space-x-5">
                <x-link href="/plants/create">Add plant</x-link>
                <form class="inline" action="/logout" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="hover:text-red-500">Log Out</button>
                </form>
            </div>
        @endauth

        @guest
            <div class="space-x-5">
                <x-link href="/login">Log In</x-link>
                <x-link href="/register">Sign In</x-link>
            </div>
        @endguest
    </nav>


    <main class="max-w-[986px] mx-auto my-14">
        {{ $slot }}
    </main>

</body>

</html>
