<x-app-layout>
    <x-breadcrumb 
        :list="[
            'Home' => 'home', 
            $report->category->name => ['reports.category', $report->category->slug],
            $report->title => ['report', [$report->category->slug, $report->slug]]
        ]" 
        active="Request Sample" />

    <section class="bg-pattern">
        <x-report-header>
            <h2 class="font-black text-xl mb-2">{{ $report->title }}</h2>
            <div class="flex flex-wrap items-center text-sm font-semibold text-gray-200">
                <span>Published Date: {{ $report->published }}</span>
                <span class="mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle></svg></span>
                <span>SKU: {{ $report->sku }}</span>
                <span class="mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle></svg></span>
                <span>{{ $report->category->name }}</span>
            </div>
        </x-report-header>
    	<x-container containerClasses="-mt-24 relative">
            <div class="bg-white mb-4 p-4 w-full md:w-3/5 mx-auto shadow-sm border rounded">
                <h3 class="text-gray-700 text-lg mt-4 font-black text-center">Get Report Sample</h3>
                <p class="text-sm text-gray-400 text-center mb-8">To get sample copy of this report, please fill the form</p>
                {!! Form::open() !!}
                    <div class="flex flex-wrap">
                        <div class="w-full lg:w-2/4 px-4 mb-4">
                            {!! Form::label('name', 'Full Name*', ['class' => 'block text-gray-600 text-xs font-medium mb-2']) !!}
                            {!! Form::text('name', null, ['class' => 'block w-full rounded-md shadow-sm border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50']) !!}
                        </div>
                        <div class="w-full lg:w-2/4 px-4 mb-4">
                            {!! Form::label('email', 'Email*', ['class' => 'block text-gray-600 text-xs font-medium mb-2']) !!}
                            {!! Form::email('email', null, ['class' => 'block w-full rounded-md shadow-sm border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50']) !!}
                        </div>
                        <div class="w-full lg:w-2/4 px-4 mb-4">
                            {!! Form::label('phone', 'Phone*', ['class' => 'block text-gray-600 text-xs font-medium mb-2']) !!}
                            {!! Form::text('phone', null, ['class' => 'block w-full rounded-md shadow-sm border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50']) !!}
                        </div>
                        <div class="w-full lg:w-2/4 px-4 mb-4">
                            {!! Form::label('country', 'Country*', ['class' => 'block text-gray-600 text-xs font-medium mb-2']) !!}
                            {!! Form::select('country', $countries, null, ['placeholder' => 'Pick a country...', 'class' => 'text-gray-600 block w-full rounded-md shadow-sm border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50']) !!}
                        </div>
                        <div class="w-full lg:w-2/4 px-4 mb-4">
                            {!! Form::label('designation', 'Job Title*', ['class' => 'block text-gray-600 text-xs font-medium mb-2']) !!}
                            {!! Form::text('designation', null, ['class' => 'block w-full rounded-md shadow-sm border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50']) !!}
                        </div>
                        <div class="w-full lg:w-2/4 px-4 mb-4">
                            {!! Form::label('company', 'Company Name*', ['class' => 'block text-gray-600 text-xs font-medium mb-2']) !!}
                            {!! Form::text('company', null, ['class' => 'block w-full rounded-md shadow-sm border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50']) !!}
                        </div>
                        <div class="w-full px-4 mb-4">
                            {!! Form::label('message', 'Share your objective*', ['class' => 'block text-gray-600 text-xs font-medium mb-2']) !!}
                            {!! Form::textarea('message', null, ['rows' => '4', 'class' => 'block w-full rounded-md shadow-sm border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50']) !!}
                        </div>
                        <p class="block w-full mb-4 text-sm text-gray-600 px-4">Your personal details are safe with us <a class="font-black" href="#">Privacy Policy</a></p>
                        {!! Form::submit('Submit Request', ['class' => 'btn mx-4']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
    	</x-container>
    </section>

	<x-slot name="scriptref"></x-slot>
	<x-slot name="script"></x-slot>
</x-app-layout>