<x-app-layout>
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="py-8">
            <h1 class=" text-center text-2xl font-bold uppercase text-gray-600 mb-8">Tag: {{ $tag ->name }}</h1>
            
            @foreach ($posts as $post)
                <x-card-post :post="$post"/>
            @endforeach

            <div class="mt-4">
                {{ $posts->links() }}
            </div>
        </div>

    </div>

</x-app-layout>