<x-layout>

    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if($posts->count())
            <x-post-grid :posts="$posts"/>
            {{--            pagiation link--}}
            {{$posts->links()}}
        @else
            <p class="text-center">No post yet. Please chek back later.</p>
        @endif

    </main>
</x-layout>
