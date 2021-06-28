<x-app-layout>
	<x-breadcrumb :list="['Home' => 'home']" active="Search" />

    <x-container containerClasses="flex flex-wrap lg:flex-nowrap justify-between space-x-10 my-4">
    	<div class="px-4 md:px-8 py-6 bg-white rounded border w-full">
			<h2 class="text-xl font-black text-gray-600">Search Results for <span class="text-yellow-400">{{ Request::input('query') }}</span></h2>
    		@if ($reports->total() > 0)
				@foreach ($reports as $report)
					<x-post-entry :post="$report" />
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