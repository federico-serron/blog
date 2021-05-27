<x-app-layout>
    <div class="container py-8">
        
        {{-- POSTS SHOWING --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($posts as $post)
                <article class="w-full h-60 bg-cover bg-center @if($loop->first) col-span-1 lg:col-span-2 @endif" style="background-image: url('{{ $post->image->url }}')">

                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        
                        {{-- TAGS --}}
                        <div class="mb-2">
                            @foreach ($post->tags as $tag)
                                <a class="inline-block bg-{{ $tag->color }}-400 text-white rounded-lg px-2" href="{{ route('posts.tag', $tag) }}"> {{ '#' . $tag->name }}</a>
                            @endforeach
                        </div>

                        {{-- POST NAME --}}
                        <h1 class="text-4xl text-white leading-8 font-bold">
                            <a href="{{ route('posts.show', $post) }}">
                                {{ $post->name }}
                            </a>
                        </h1>

                    </div>

                </article>
            @endforeach

        </div>


        {{-- PAGINATION --}}
        <div class="mt-4">
            {{ $posts->links() }}
        </div>

    </div>
</x-app-layout>