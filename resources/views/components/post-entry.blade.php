<div {{ $attributes->merge(['class' => 'py-4 border-b']) }}>
    <a class="inline-block font-black text-lg" href="{{ route('report', [$post->category->slug, $post->slug]) }}">
        <h3>{{ $post->title }}</h3>
    </a>
    <p class="text-gray-600 mb-2">
        {{ Str::limit(strip_tags($post->description), 255) }}
        <a class="text-blue-400 font-semibold" href="{{ route('report', [$post->category->slug, $post->slug]) }}">read more</a>
    </p>
    <div class="flex items-center flex-wrap justify-between text-sm font-black text-gray-600 w-full">
        <div class="flex flex-wrap items-center">
            <span>Published on {{ $post->published }}</span>
            <span class="mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle></svg></span>
            <span>{{ $post->sku }}</span>
        </div>
        <span class="border m-1 border-blue-400 text-xs px-2 py-1 rounded text-blue-400">$ {{ $post->single_price }}</span>
    </div>
</div>