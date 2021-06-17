<x-app-layout>
	<header class="bg-blue-50 border-b border-blue-100 py-2 leading-6 text-sm text-gray-600">
        <x-container>
        	<ul class="flex items-center flex-wrap">
        		<li><a href="{{ route('home') }}">Home</a></li>
        		<li class="mx-1">/</li>
        		<li class="text-gray-400">{{ $page->name }}</li>
        	</ul>
        </x-container>
    </header>

    <section class="bg-pattern">
		<x-report-header>
            <h1 class="text-2xl font-semibold">{{ $page->name }}</h1>
		</x-report-header>
    	<x-container containerClasses="flex flex-wrap lg:flex-nowrap justify-center items-start -mt-24 mb-4 relative">
            <div class="w-full bg-white rounded overflow-hidden border p-4 md:p-8 mdx-content">
                {!! $page->description !!}
            </div>
            <div class="w-72 p-4 bg-white rounded border flex-shrink-0 mt-4 lg:mt-0 lg:ml-4">
                <x-category-list />
            </div>
    	</x-container>
    </section>

	<x-slot name="scriptref"></x-slot>
	<x-slot name="script"></x-slot>
</x-app-layout>