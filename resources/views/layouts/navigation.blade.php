@php
    
    $artistes = \App\Models\Artiste::limit(6)->get();
@endphp

<nav x-data="{ open: false }" class="main-nav">
    <!-- Primary Navigation Menu -->
    <div class="navbar">
        <div class="flex items-center">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}" class="logo">
                    Inked Panda Tattoo
                </a>
            </div>

            <!-- Navigation Links (desktop) -->
            <div class="hidden sm:flex sm:ms-10 nav-links">
                {{-- Accueil --}}
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Accueil') }}
                </x-nav-link>

                {{-- Liens artistes dynamiques (desktop) --}}
                @foreach ($artistes as $artiste)
                    <x-nav-link
                        :href="url('/artiste/' . $artiste->pseudo)"
                        :active="request()->is('artiste/' . $artiste->pseudo)"
                    >
                        {{ $artiste->pseudo }}
                    </x-nav-link>
                @endforeach
            </div>
        </div>

        <!-- Hamburger -->
        <div class="-me-2 flex items-center xl:hidden">
            <button
                @click="open = ! open"
                class="hamburger-btn inline-flex items-center justify-center p-2 rounded-md focus:outline-none transition duration-150 ease-in-out"
            >
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }"
                          class="inline-flex"
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }"
                          class="hidden"
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden xl:hidden mobile-menu">
        <div class="pt-2 pb-3 space-y-1">

            {{-- Accueil (mobile) --}}
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Accueil') }}
            </x-responsive-nav-link>

            {{-- Liens artistes dynamiques (mobile) --}}
            @foreach ($artistes as $artiste)
                <x-responsive-nav-link
                    :href="url('/artiste/' . $artiste->pseudo)"
                    :active="request()->is('artiste/' . $artiste->pseudo)"
                >
                    {{ $artiste->pseudo }}
                </x-responsive-nav-link>
            @endforeach
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-700">
            <div class="px-4">
                <div class="font-medium text-base text-gray-100">
                    @auth  {{ Auth::user()->name }} @endauth
                </div>
                <div class="font-medium text-sm text-gray-400">
                    @auth {{ Auth::user()->email }} @endauth
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
