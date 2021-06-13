@if ($categories)
    <h3 class="mb-2 font-black">INDUSTRIES</h3>
    <ul class="leading-7">
        @foreach ($categories as $category)
            <li><a href="{{ route('reports.category', $category->slug) }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
@endif