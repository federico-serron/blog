<x-app-layout>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="py-8">
            <h1 class=" text-center text-2xl font-bold uppercase text-gray-600 mb-8">Category: {{ $category ->name }}</h1>
            
            @foreach ($posts as $post)
                <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
                    <img class="w-full h-72 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">

                    <div class="px-6 py-4">
                        <h1 class="font-bold text-xl mb-2">
                            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
                        </h1>

                        <div class="text-gray-700 text-base">
                            {{ $post->extract }}
                        </div>

                        <div class="px-6 pt-4 pb-2">
                            @foreach ($post->tags as $tag)
                                <a class="inline-block rounded-full px-2 bg-{{ $tag->color }}-500 text-sm text-gray-700 mr-2" href="">{{'#' . $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </article>
            @endforeach

            <div class="mt-4">
                {{ $posts->links() }}
            </div>
        </div>

    </div>

</x-app-layout>