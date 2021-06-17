<nav x-data="{ open: false }" class="bg-white border-gray-100">
    <!-- Primary Navigation Menu -->
    <div id="topNav" class="w-full">
        <x-container containerClasses="flex justify-between h-14">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        {{-- <x-application-logo class="block h-12 w-auto fill-current text-gray-600" /> --}}
                        <img src="{{ asset('images/logo-sm.jpg') }}" class="block h-12 w-auto" alt="" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-6 sm:-my-px sm:ml-10 sm:flex">
                    @if (Auth::check())
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2 text-gray-400"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        @if (Auth::user()->isAdmin() || Auth::user()->isEmployee())
                            <x-nav-link :href="route('admin')" :active="request()->routeIs('admin')">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-2 text-gray-400"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                                {{ __('Admin Panel') }}
                            </x-nav-link>
                        @endif
                    @endif
                    
                </div>
            </div>

            <!-- Search Dropdown -->
            <div class="hidden space-x-4 sm:-my-px sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="w-56">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <x-dropdown-header>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                            {{ __('search') }}
                        </x-dropdown-header>
                        <form method="POST" action="{{ route('home') }}" class="px-1 pt-1">
                            @csrf
                            <input class="w-full bg-gray-100 py-2 px-4 rounded-md focus:outline-none focus:bg-gray-200" />
                            <button class="hidden" onclick="event.preventDefault();
                                            this.closest('form').submit();">Search</button>
                        </form>
                    </x-slot>
                </x-dropdown>
                @if (!Auth::check())
                    <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                        {{ __('Login') }}
                    </x-nav-link>
                    <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                        {{ __('Register') }}
                    </x-nav-link>
                @else
                    <x-nav-link :href="route('login')" :active="request()->routeIs('cart')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                    </x-nav-link>
                    
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            <x-dropdown-header>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                {{ Auth::user()->name }}
                            </x-dropdown-header>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endif
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </x-container>
    </div>

    {{-- Bottom menu --}}
    <div id="btmNav" class="w-full top-0 left-0 z-30 bg-white border-b border-t">
        <x-container containerClasses="h-12 hidden space-x-8 sm:-my-px sm:flex justify-center">
            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-nav-link>
            <x-nav-link :href="route('home')" :active="request()->routeIs('about')">
                {{ __('About Us') }}
            </x-nav-link>
            <x-nav-link :href="route('reports')" :active="request()->routeIs('reports')">
                {{ __('Reports') }}
            </x-nav-link>

            <x-dropdown triggerClasses="h-full" align="right" width="w-56">
                <x-slot name="trigger">
                    <button class="inline-flex h-full items-center text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 focus:outline-none">
                        {{ __('Industries') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-header>
                        {{ __('Industries') }}
                    </x-dropdown-header>
                    @if($categories)
                        @foreach ($categories as $category)
                            <x-dropdown-link :href="route('reports.category', $category->slug)">{{ $category->name }}</x-dropdown-link>
                        @endforeach
                    @endif
                </x-slot>
            </x-dropdown>
            
            <x-dropdown triggerClasses="h-full" align="right" width="w-56">
                <x-slot name="trigger">
                    <button class="inline-flex h-full items-center text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 focus:outline-none">
                        {{ __('Services') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-header>
                        {{ __('Services') }}
                    </x-dropdown-header>
                    <x-dropdown-link :href="route('reports')">{{  __('Syndicated Research') }}</x-dropdown-link>
                    <x-dropdown-link :href="route('reports')">{{  __('Custom Research') }}</x-dropdown-link>
                    <x-dropdown-link :href="route('reports')">{{  __('Consulting') }}</x-dropdown-link>
                </x-slot>
            </x-dropdown>
            
            <x-nav-link :href="route('home')" :active="request()->routeIs('contact')">
                {{ __('Contact Us') }}
            </x-nav-link>
        </x-container>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden border-b">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin')" :active="request()->routeIs('admin')">
                {{ __('Admin') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('About Us') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('reports')" :active="request()->routeIs('reports')">
                {{ __('Reports') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="#">
                {{ __('Industries') }}
            </x-responsive-nav-link>
            <div class="bg-gray-50 border p-4">
                @if($categories)
                    @foreach ($categories as $category)
                        <x-responsive-nav-link :href="route('reports.category', $category->slug)">{{ $category->name }}</x-responsive-nav-link>
                    @endforeach
                @endif
            </div>
            <x-responsive-nav-link href="#">
                {{ __('Services') }}
            </x-responsive-nav-link>
            <div class="bg-gray-50 border p-4">
                <x-responsive-nav-link :href="route('reports')">{{ __('Syndicated Research') }}</x-responsive-nav-link>
                <x-responsive-nav-link :href="route('reports')">{{ __('Custom Research') }}</x-responsive-nav-link>
                <x-responsive-nav-link :href="route('reports')">{{ __('Consulting') }}</x-responsive-nav-link>
            </div>
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Contact Us') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        @if (Auth::check())
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>

                    <div class="ml-3">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @endif
    </div>
</nav>
