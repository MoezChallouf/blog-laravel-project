<x-layout>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"
      xmlns="http://www.w3.org/1999/html">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<section class="px-6 py-8">
    <main class="max-w-lg mx-auto border border-gray-400 px-5 bg-gray-100 rounded-xl">
        <h1 class="text-center text-xl ">Register!</h1>
        <form method="POST" action="/register">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="name"
                >
                    name
                </label>
                <input class="border border-gray-400 py-2 w-full px-2"
                       type="text"
                       name="name"
                       id="name"
                       value="{{old('name')}}"
                       required
                >

                @error('name')
                <p class="text-red-500 text-xs mt-1 px-1">{{$message}}</p>
                @enderror


                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="username"
                >
                    username
                </label>
                <input class="border border-gray-400 py-2 w-full px-2"
                       type="text"
                       name="username"
                       id="username"
                       value="{{old('username')}}"
                       required
                >
                @error('username')
                <p class="text-red-500 text-xs mt-1 px-1">{{$message}}</p>
                @enderror

                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="email"
                >
                    email
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

                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="password"
                >
                    Password
                </label>
                <input class="border border-gray-400 py-2 w-full px-2"
                       type="password"
                       name="password"
                       id="password"
                       required
                >
                @error('password')
                <p class="text-red-500 text-xs mt-1 px-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit"
                        class="bg-red-400 text-bleu rounded py-2 px-4 hover:bg-bleu-500">
                    submit
                </button>
            </div>

            <ul>
                @foreach($errors->all() as $error)
                    <li class="text-red-500 text-xs">{{$error}}</li>
                @endforeach
            </ul>


        </form>

    </main>
</section>
</x-layout>
