<x-app-layout>
	<header class="bg-blue-50 border-b border-blue-100 py-2 leading-6 text-sm text-gray-600">
        <x-container>
        	<ul class="flex items-center">
        		<li><a href="#">Home</a></li>
        		<li class="mx-1">/</li>
        		<li class="text-gray-400">Reports</li>
        	</ul>
        </x-container>
    </header>

    <x-container containerClasses="flex justify-between space-x-10 my-4">
    	<div class="p-4 bg-white rounded border w-full">
    		
    	</div>
    	<div class="w-64 flex-shrink-0 text-sm pt-4">
    		<h3 class="mb-2 font-black">INDUSTRIES</h3>
    		<ul class="leading-7">
    			<li><a href="#">{{ __('Advanced Materials') }}</a></li>
    			<li><a href="#">{{ __('Aerospace') }}</a></li>
    			<li><a href="#">{{ __('Agriculture') }}</a></li>
    			<li><a href="#">{{ __('Electronics & Semiconductors') }}</a></li>
    			<li><a href="#">{{ __('Energy & Power') }}</a></li>
    			<li><a href="#">{{ __('Food & Beverages') }}</a></li>
    			<li><a href="#">{{ __('Healthcare') }}</a></li>
    			<li><a href="#">{{ __('Packaging') }}</a></li>
    		</ul>
    	</div>
    </x-container>

	<x-slot name="scriptref"></x-slot>
	<x-slot name="script"></x-slot>
</x-app-layout>