<x-app-layout>
	<x-breadcrumb :list="['Home' => 'home', 'Reports' => 'reports']" :active="$category->name" />

    <x-container containerClasses="flex flex-wrap lg:flex-nowrap justify-between space-x-10 my-4">
    	<div class="w-full">
			<div class="px-4 md:px-8 py-4 mb-4 bg-white rounded border w-full text-gray-600 text-sm">
				<h2 class="text-lg font-black mb-2">{{ Str::ucfirst($category->name) }}</h2>
				<p>{!! $category->description !!}</p>
			</div>
			
			<div class="px-8 py-2 bg-white rounded border w-full">
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
    	</div>
    	<div class="w-64 flex-shrink-0 text-sm pt-4">
    		<x-category-list />
    	</div>
    </x-container>

	<x-slot name="scriptref"></x-slot>
	<x-slot name="script"></x-slot>
</x-app-layout>