<x-app-layout>
	<header class="bg-blue-50 border-b border-blue-100 py-2 leading-6 text-sm text-gray-600">
        <x-container>
        	<ul class="flex items-center flex-wrap">
        		<li><a href="{{ route('home') }}">Home</a></li>
        		<li class="mx-1">/</li>
        		<li><a href="{{ route('reports.category', $report->category->slug) }}">{{ $report->category->name }}</a></li>
        		<li class="mx-1">/</li>
        		<li class="text-gray-400">{{ $report->title }}</li>
        	</ul>
        </x-container>
    </header>

    <section class="py-4 bg-pattern">
    	<x-container containerClasses="flex">
    		<div class="w-full bg-white p-4 border rounded">
    			<div class="flex mb-4">
    				<div class="mr-6 bg-gray-50 w-28 rounded overflow-hidden flex-shrink-0">
    					<img src="https://www.accurayresearch.com/images/report-cover.jpg" alt="">
    				</div>
    				<div class="w-full">
    					<h1 class="text-xl text-gray-700 font-semibold mb-1">{{ $report->title }}</h1>
	    				<div class="flex flex-wrap items-center text-sm font-semibold text-gray-600">
							<span>Published Date: {{ $report->published }}</span>
							<span class="mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle></svg></span>
							<span>SKU: {{ $report->sku }}</span>
						</div>
	    				<div class="flex items-center py-2 text-gray-600 text-sm">
	    					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
	    					<a class="ml-1 leading-none" href="#">{{ $report->category->name }}</a>
	    				</div>
	    				<div class="flex items-center pt-2">
                            <span class="uppercase text-xs text-gray-400 tracking-wide pr-2 mr-2 border-r border-gray-400">Share</span>
                            <a class="mr-1" href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}" title="facebook" target="_blank" rel="nofollow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-6 h-6 fill-current text-blue-700"><path d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zm2.274 6.634h-1.443c-.171 0-.361.225-.361.524V8.6h1.805l-.273 1.486H10.47v4.461H8.767v-4.461H7.222V8.6h1.545v-.874c0-1.254.87-2.273 2.064-2.273h1.443v1.581z"></path></svg>
                            </a>
                            <a class="mr-1" href="https://twitter.com/home?status={{ Request::url() }}" title="twitter" target="_blank" rel="nofollow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-6 h-6 fill-current text-blue-500"><path d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zm3.905 7.864c.004.082.005.164.005.244 0 2.5-1.901 5.381-5.379 5.381a5.335 5.335 0 01-2.898-.85c.147.018.298.025.451.025.886 0 1.701-.301 2.348-.809a1.895 1.895 0 01-1.766-1.312 1.9 1.9 0 00.853-.033 1.892 1.892 0 01-1.517-1.854v-.023c.255.141.547.227.857.237a1.89 1.89 0 01-.585-2.526 5.376 5.376 0 003.897 1.977 1.891 1.891 0 013.222-1.725 3.797 3.797 0 001.2-.459 1.9 1.9 0 01-.831 1.047 3.799 3.799 0 001.086-.299 3.834 3.834 0 01-.943.979z"></path></svg>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{ Request::url() }}" title="linkedin" target="_blank" rel="nofollow">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="w-6 h-6 fill-current text-blue-400"><path d="M10 .4C4.698.4.4 4.698.4 10s4.298 9.6 9.6 9.6 9.6-4.298 9.6-9.6S15.302.4 10 .4zM7.65 13.979H5.706V7.723H7.65v6.256zm-.984-7.024c-.614 0-1.011-.435-1.011-.973 0-.549.409-.971 1.036-.971s1.011.422 1.023.971c0 .538-.396.973-1.048.973zm8.084 7.024h-1.944v-3.467c0-.807-.282-1.355-.985-1.355-.537 0-.856.371-.997.728-.052.127-.065.307-.065.486v3.607H8.814v-4.26c0-.781-.025-1.434-.051-1.996h1.689l.089.869h.039c.256-.408.883-1.01 1.932-1.01 1.279 0 2.238.857 2.238 2.699v3.699z"></path></svg>
                            </a>
                        </div>
    				</div>
    			</div>
    			<hr>
    			<div class="flex items-center mt-4 font-semibold text-center text-sm border-b-2 border-blue-400">
    				<a class="py-3 px-6 bg-blue-400 border-t border-r border-l border-blue-400 text-white w-full" href="#">Summary</a>
    				<a class="py-3 px-6 bg-gray-50 border-t border-r w-full hover:bg-gray-100" href="#">Table of Contents</a>
    				<a class="py-3 px-6 bg-gray-50 border-t w-full hover:bg-gray-100" href="#">Methodology</a>
    				<a class="py-3 px-6 bg-gray-50 border-t border-r border-l border-b-2 -mb-0.5 border-gray-500 w-full hover:bg-gray-100" href="#">Request Sample</a>
    			</div>
                <div class="py-8 mdx-content">
					{!! $report->description !!}
				</div>
    		</div>
    		<div class="w-72 flex-shrink-0 ml-4">
    			<div class="bg-yellow-50 border border-yellow-400 rounded overflow-hidden">
    				<h3 class="text-center bg-yellow-400 p-2 text-white font-black">Choose License Type</h3>
    				<div class="p-4 font-semibold text-sm">
                        <form>
                            <label class="flex items-center justify-between w-full mb-2">
                                <span>Single User - $ {{ $report->single_price }}</span>
                                <input type="radio" name="price1">
                            </label>
                            <hr>
                            <label class="flex items-center justify-between w-full my-2">
                                <span>Multiple User - $ {{ $report->multiple_price }}</span>
                                <input type="radio" name="price2">
                            </label>
                            <hr>
                            <label class="flex items-center justify-between w-full my-2">
                                <span>Corporate Price - $ {{ $report->corporate_price }}</span>
                                <input type="radio" name="price3">
                            </label>
                            <button class="w-full mt-2 rounded px-6 py-3 bg-yellow-400 font-blck text-sm text-white tracking-wide hover:bg-yellow-300 focus:outline-none" type="submit">ADD TO CART</button>
                        </form>
                    </div>
    			</div>
                <button class="my-4 bg-gradient-to-r from-blue-300 to-blue-400 text-white w-full px-4 py-8 font-semibold rounded">Inquiry Before Buy</button>
    		</div>
    	</x-container>
    </section>

	<x-slot name="scriptref"></x-slot>
	<x-slot name="script"></x-slot>
</x-app-layout>