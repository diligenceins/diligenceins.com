<x-app-layout>
	<header class="bg-blue-50 border-b border-blue-100 py-2 leading-6 text-sm text-gray-600">
        <x-container>
        	<ul class="flex items-center flex-wrap">
        		<li><a href="{{ route('home') }}">Home</a></li>
        		<li class="mx-1">/</li>
        		<li class="text-gray-400">Reports</li>
        	</ul>
        </x-container>
    </header>

    <x-container containerClasses="flex justify-between space-x-10 my-4">
    	<div class="px-8 py-6 bg-white rounded border w-full">
			<h2 class="text-xl font-black text-gray-600">Reports</h2>
    		@if ($reports->total() > 0)
				@foreach ($reports as $report)
					<div class="py-4 border-b">
						<a class="inline-block font-black text-lg" href="{{ route('report', [$report->category->slug, $report->slug]) }}">
							<h3>{{ $report->title }}</h3>
						</a>
						<p class="text-gray-600 mb-2">
							{{ Str::limit(strip_tags($report->description), 255) }}
							<a class="text-blue-400 font-semibold" href="{{ route('report', [$report->category->slug, $report->slug]) }}">read more</a>
						</p>
						<div class="flex items-center flex-wrap justify-between text-sm font-black text-gray-600 w-full">
							<div class="flex flex-wrap items-center">
								<span>Published on {{ $report->published }}</span>
								<span class="mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle></svg></span>
								<span>{{ $report->sku }}</span>
							</div>
							<span class="border border-blue-400 text-xs px-2 py-1 rounded text-blue-400">$ {{ $report->single_price }}</span>
						</div>
					</div>
				@endforeach
			@else
				<x-empty-box />
			@endif
			<div class="text-sm mt-4">
				{{ $reports->onEachSide(5)->links() }}
			</div>
    	</div>
    	<div class="w-64 flex-shrink-0 text-sm pt-4">
    		<x-category-list />
    	</div>
    </x-container>

	<x-slot name="scriptref"></x-slot>
	<x-slot name="script"></x-slot>
</x-app-layout>