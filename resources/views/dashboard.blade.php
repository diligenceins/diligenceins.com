<x-app-layout>
    <x-breadcrumb :list="['Home' => 'home']" active="Profile" />

    <div class="bg-pattern">
        <x-report-header>
            <h1 class="text-2xl font-semibold">Profile</h1>
		</x-report-header>
        <x-container containerClasses="-mt-24 flex flex-wrap relative items-start">
            <ul class="w-full md:w-1/5 bg-white border p-4 rounded">
                <li><a class="flex items-center mb-2" href="{{ route('dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="{{ request()->routeIs('dashboard') ? 'fill-current text-blue-400' : '' }} mr-4" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle></svg>
                    Profile
                </a></li>
                <li><a class="flex items-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="{{ request()->routeIs('home') ? 'fill-current text-blue-400' : '' }} mr-4" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle></svg>
                    Orders
                </a></li>
            </ul>
            <div class="flex flex-wrap w-full md:w-4/5 pl-8">
                {!! Form::model(Auth::user(), ['method' => 'PATCH', 'route' => ['admin.profile.update', Auth::user()->id], 'class' => 'flex flex-wrap w-full']) !!}
                    <div class="w-full lg:w-2/3">
                        <div class="relative flex flex-col min-w-0 break-words w-full mb-4 shadow rounded bg-gray-100 border">
                            <div class="rounded-t bg-white mb-0 px-6 py-6">
                                <div class="text-center flex justify-between">
                                <h6 class="text-gray-700 text-xl font-bold">
                                    Edit Profile
                                </h6>
                                <button type="submit" class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150">
                                    Update
                                </button>
                                </div>
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <div class="flex flex-wrap pt-6" x-data="{ open: false }">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                        {!! Form::label('name', 'Username', ['class' => 'block uppercase text-gray-600 text-xs font-bold mb-2']) !!}
                                        {!! Form::text('name', null, ['class' => 'border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full']) !!}
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-6/12 px-4">
                                        <div class="relative w-full mb-3">
                                        {!! Form::label('email', 'Email address', ['class' => 'block uppercase text-gray-600 text-xs font-bold mb-2']) !!}
                                        {!! Form::email('email', null, ['class' => 'border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full']) !!}
                                        </div>
                                    </div>
            
                                    <button type="button" @click="open = !open" class="bg-gray-200 py-2 px-4 text-sm rounded border border-gray-300 mb-3 ml-4">Change Password</button>
                                    <input type="hidden" :value="open" name="password_change_request" id="password_change_request">
                                    <div x-show="open" class="w-full flex flex-wrap">
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                            {!! Form::label('password', 'Password', ['class' => 'block uppercase text-gray-600 text-xs font-bold mb-2']) !!}
                                            {!! Form::password('password', ['class' => 'border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full']) !!}
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                            {!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'block uppercase text-gray-600 text-xs font-bold mb-2']) !!}
                                            {!! Form::password('password_confirmation', ['class' => 'border-0 px-3 py-3 placeholder-gray-300 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3 pl-8">
                        <x-admin-messages />
                        <x-admin-errors />
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-8">
                            <div class="px-6">
                                <div class="flex flex-wrap justify-center">
                                    <div class="w-full px-4 flex justify-center">
                                        <div class="relative">
                                            <img src="{{ asset('images/user-avatar.svg') }}" class="rounded-full h-auto align-middle border-none relative -mt-20 w-48 max-w-full"/>
                                        </div>
                                    </div>
                                  <div class="w-full px-4 text-center mt-2">
                                    <div class="mr-4 p-3 text-center py-4 lg:pt-4 pt-8">
                                        <span class="text-xl font-bold block uppercase tracking-wide text-gray-600">
                                          {{ Auth::user()->reports->count() }}
                                        </span>
                                        <span class="text-sm text-gray-400">Orders</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="text-center">
                                    <h3 class="text-xl font-semibold leading-normal mb-2 text-gray-700">
                                        {{ Auth::user()->name }}
                                    </h3>
                                    <div class="text-sm leading-normal mt-0 mb-2 text-gray-400 font-bold">
                                        <i class="fas fa-envelope mr-2 text-sm text-gray-400"></i>
                                        {{ Auth::user()->email }}
                                    </div>
                                </div>
                            </div>
            
                            <div class="px-4 py-8">
                                <div class="flex flex-wrap justify-center">
                                <div class="w-full">
                                    
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </x-container>
    </div>

    <x-slot name="scriptref"></x-slot>
    <x-slot name="script"></x-slot>
</x-app-layout>
