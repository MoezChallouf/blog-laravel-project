<x-layout>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"
      xmlns="http://www.w3.org/1999/html">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<section class="px-6 py-8">
    <main class="max-w-lg mx-auto border border-gray-400 px-5 bg-gray-100 rounded-xl">
        <h1 class="text-center text-xl ">Log In!</h1>
        <form method="POST" action="/login">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="name"
                >
                    Email
                </label>
                <input class="border border-gray-400 py-2 w-full px-2"
                       type="email"
                       name="email"
                       id="email"
                       value="{{old('email')}}"
                       required
                >

                @error('email')
                <p class="text-red-500 text-xs mt-1 px-1">{{$message}}</p>
                @enderror


                <label class="block mb-2 uppercase font-bold text-xs text-gray-700 mt-3"
                       for="username"
                >
                    Password
                </label>
                <input class="border border-gray-400 py-2 w-full px-2"
                       type="password"
                       name="password"
                       id="password"
                       value="{{old('password')}}"
                       required
                >
                @error('password')
                <p class="text-red-500 text-xs mt-1 px-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit"
                        class="bg-red-400 text-bleu rounded py-2 px-4 hover:bg-bleu-500">
                    Login
                </button>
            </div>
        </form>
    </main>
</section>
</x-layout>
