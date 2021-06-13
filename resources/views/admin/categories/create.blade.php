<x-admin-layout>
    <x-slot name="header">
		<a class="mr-4 text-white font-semibold text-sm flex items-center" href="{{ route('admin.categories.index') }}">
			<i class="fas fa-chevron-left mr-2"></i>
			Go Back
		</a>
    </x-slot>

    <div class="flex flex-wrap">
	{!! Form::open(['route' => 'admin.categories.store', 'class' => 'flex flex-wrap']) !!}
        <div class="w-full lg:w-8/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-100 border-0">
				<div class="rounded-t bg-white mb-0 px-6 py-6">
					<div class="text-center flex justify-between">
						<h6 class="text-gray-700 text-xl font-bold">
							Create Category
						</h6>
						<button type="submit" class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
							Create
						</button>
					</div>
				</div>
				<div class="flex-auto px-4 py-10 pt-0">
					<h6 class="text-gray-400 text-sm mt-3 mb-6 font-bold uppercase">
						Category Information
					</h6>
					<div class="flex flex-wrap">
						<div class="w-full lg:w-6/12 px-4">
							<div class="relative w-full mb-3">
								{!! Form::label('name', 'Name', ['class' => 'block uppercase text-gray-600 text-xs font-bold mb-2']) !!}
								{!! Form::text('name', null, ['oninput' => 'onSlugTitleChange(this, "slug")', 'class' => 'border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!}
							</div>
						</div>
						<div class="w-full lg:w-6/12 px-4">
							<div class="relative w-full mb-3">
								{!! Form::label('slug', 'Slug', ['class' => 'block uppercase text-gray-600 text-xs font-bold mb-2']) !!}
								{!! Form::text('slug', null, ['class' => 'border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!}
							</div>
						</div>
						<div class="w-full px-4">
							<div class="relative w-full mb-3">
								{!! Form::label('description', 'Description', ['class' => 'block uppercase text-gray-600 text-xs font-bold mb-2']) !!}
								{!! Form::textarea('description', null, ['class' => 'tinymce-editor border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="w-full lg:w-4/12 px-4">
			<x-admin-errors />
			<div class="relative flex flex-col min-w-0 break-words bg-gray-100 border w-full mb-6 shadow-xl rounded-lg">
				<div class="p-4">
					<div class="flex flex-wrap justify-center">
						<div class="w-full">
							<h6 class="text-gray-400 text-sm mb-4 font-bold uppercase">
								Meta Info
							</h6>
							<div class="w-full lg:w-12/12">
								<div class="relative w-full mb-3">
									{!! Form::label('meta_title', 'Title', ['class' => 'block uppercase text-gray-600 text-xs font-bold mb-2']) !!}
									{!! Form::text('meta_title', null, ['class' => 'border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!}
								</div>
							</div>
							<div class="w-full lg:w-12/12">
								<div class="relative w-full mb-3">
									{!! Form::label('meta_keywords', 'Keywords', ['class' => 'block uppercase text-gray-600 text-xs font-bold mb-2']) !!}
									{!! Form::text('meta_keywords', null, ['class' => 'border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!}
								</div>
							</div>
							<div class="w-full lg:w-12/12">
								<div class="relative w-full mb-3">
									{!! Form::label('meta_description', 'Description', ['class' => 'block uppercase text-gray-600 text-xs font-bold mb-2']) !!}
									{!! Form::textarea('meta_description', null, ['rows' => 4, 'class' => 'border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	{!! Form::close() !!}
	</div>

</x-admin-layout>