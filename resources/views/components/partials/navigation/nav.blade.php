<!--Nav-->
<nav id="header" class="fixed w-full z-30 top-0 text-white">

    {{--Container element navigation --}}

    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">

        {{-- Container logo --}}

        <div class="pl-4 flex items-center">
            <x-Logo.flocon />
        </div>
        {{-- Button du manu responsive --}}
        <div class="block lg:hidden pr-4">
            <x-responsiveElement.buttonMenu />
        </div>

        {{-- Container des liens de nav --}}
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
            {{--Lien des pages  --}}
            <div class="w-full flex ">
                <!-- Navigation Links -->
                <ul class="list-reset lg:flex justify-center flex-1 items-center lg:space-x-8 space-y-2 lg:space-y-0">
                    {{-- Home --}}
                    <li class="mr-3">
                        <x-partials.navigation.navlink.principalLink href="/" :active="request()->routeIs('home')">
                            {{ __('Acceuil') }}
                        </x-partials.navigation.navlink.principalLink>
                    </li>
                    {{-- apropos --}}
                    <li class="mr-3">
                        <x-partials.navigation.navlink.principalLink href="{{route('apropos')}}" :active="request()->routeIs('apropos')">
                            {{ __('A propos de Flocons') }}
                        </x-partials.navigation.navlink.principalLink>
                    </li>

                    {{-- Nos services --}}
                    <li class="mr-3">
                        <x-lienDropDown.servicesDropdown align="left" width="full">
                            <x-slot name="trigger">
                                <div class="inline-flex items-center">
                                    <x-partials.navigation.navlink.principalLink href="#" :active="request()->routeIs('tags.index')">
                                        {{ __('Nos Services') }}
                                    </x-partials.navigation.navlink.principalLink>
                                    <svg class="ms-1 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="3 0 20 20" stroke-width="2.2" stroke="#0f766e">
                                        <path fill="" stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </div>
                            </x-slot>
                            <x-slot name="content">
                                <ul class="w-full bg-teal-700">
                                    <li class="border w-full py-2"> 
                                        <x-partials.navigation.navlink.servicesLink href="#"> {{__('Lien')}}

                                        </x-partials.navigation.navlink.servicesLink>
                                    </li>
                                    <li class="border w-full py-2"> <x-partials.navigation.navlink.servicesLink href="#"> {{__('Lien')}}</x-partials.navigation.navlink.servicesLink></li>
                                    <li class="border w-full py-2"> <x-partials.navigation.navlink.servicesLink href="#"> {{__('Lien')}}</x-partials.navigation.navlink.servicesLink></li>
                                    <li class="border w-full py-2"> <x-partials.navigation.navlink.servicesLink href="#"> {{__('Lien')}}</x-partials.navigation.navlink.servicesLink></li>
                                    <li class="border w-full py-2"> <x-partials.navigation.navlink.servicesLink href="#"> {{__('Lien')}}</x-partials.navigation.navlink.servicesLink></li>
                                    <li class="border w-full py-2"> <x-partials.navigation.navlink.servicesLink href="#"> {{__('Lien')}}</x-partials.navigation.navlink.servicesLink></li>
                                    <li class="border w-full py-2"> <x-partials.navigation.navlink.servicesLink href="#"> {{__('Lien')}}</x-partials.navigation.navlink.servicesLink></li>
                                </ul>
                            </x-slot>

                        </x-lienDropDown.servicesDropdown>

                    </li>
                    {{-- Contact --}}
                    <li class="mr-3">
                        <x-partials.navigation.navlink.principalLink href="#" :active="request()->routeIs('authors.index')">
                            {{ __('Contactez nous') }}
                        </x-partials.navigation.navlink.principalLink>
                    </li>
                    {{-- Authors Single--}}
                    <li class="mr-3">
                        <x-partials.navigation.navlink.principalLink href="#" :active="request()->routeIs('authors.show')">
                            {{ __('Langues') }}
                        </x-partials.navigation.navlink.principalLink>
                    </li>
                </ul>
            </div>
            {{-- Lien connection et non connection --}}
            <ul class="list-reset lg:flex justify-end flex-1 items-center pt-2 pb-2 lg:p-0">
                {{-- DASHBOARD --}}
                @auth
                <li class="mr-3">
                    <x-partials.navigation.navlink.principalLink href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-partials.navigation.navlink.principalLink>
                </li>

                @else

                <li id="navAction" class="mr-3 mb-3 p-2 lg:mb-0 rounded-sm bg-gray-200 text-center">
                    <x-partials.navigation.navlink.principalLink href="{{ route('login')}}">
                        Connecter

                    </x-partials.navigation.navlink.principalLink >
                </li>

                @endauth
            </ul>

            @auth

            <div class="ms-3 relative">
                <x-dropdown align="left" width="32">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                        @else
                        <div class="w-full inline-flex items-center rounded-md ">
                            <button type="button" class="w-full inline-flex items-center justify-center px-3 py-2 border border-transparent text-md leading-4 font-medium rounded-md text-gray-50 bg-teal-600 hover:text-gray-700 focus:outline-none focus:bg-teal-300 active:bg-gray-500 transition ease-in-out duration-150">
                                {{ Auth::user()->name }}

                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                        </div>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-dropdown-link href="{{ route('api-tokens.index') }}">
                            {{ __('API Tokens') }}
                        </x-dropdown-link>
                        @endif

                        <div class="border-t border-gray-200"></div>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            @endauth
        </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>