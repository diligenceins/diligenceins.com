<x-app-layout>
	<x-breadcrumb :list="['Home' => 'home']" :active="$page->name" />

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