<nav class="absolute top-0 z-50 flex flex-wrap items-center justify-between w-full px-2 py-3 bg-white">
    <div class="container flex flex-wrap items-center justify-between px-4 mx-auto">
        <div class="static justify-start block w-auto">
            <a class="inline-block py-2 mr-4 text-sm font-bold leading-relaxed uppercase whitespace-nowrap"
                href="{{ route('/')}}">
                <span class="text-green-400">Food</span> Market
            </a>
        </div>
        <div class="flex-grow">
            <div class="flex px-10">
                <input type="text" name="" id="" placeholder="Search Food"
                    class="w-full border rounded-l-xl focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent">
                <button
                    class="px-3 bg-gray-100 border border-l-0 border-black rounded-r-xl focus:outline-none focus:ring-2 focus:ring-green-400">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
        @auth
        <!-- Settings Dropdown -->
        <div class="hidden sm:flex sm:items-center sm:ml-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button
                        class="flex items-center text-sm font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ml-1">
                            <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
        @endauth
        @guest
        <div class="flex items-center bg-transparent bg-white shadow-none">
            <ul class="flex flex-col list-none lg:flex-row lg:ml-auto">
                <li class="flex items-center">
                    <a href="{{ route('login')}}"
                        class="px-4 py-2 mb-3 ml-3 text-xs font-bold text-gray-800 uppercase bg-white rounded shadow outline-none active:bg-gray-100 hover:shadow-md focus:outline-none lg:mr-1 lg:mb-0"
                        type="button" style="transition: all 0.15s ease 0s;">
                        Masuk
                    </a>
                </li>
                <li class="flex items-center">
                    <button
                        class="px-4 py-2 mb-3 ml-3 text-xs font-bold text-gray-800 uppercase bg-green-400 rounded shadow outline-none active:bg-gray-100 hover:shadow-md focus:outline-none lg:mr-1 lg:mb-0"
                        type="button" style="transition: all 0.15s ease 0s;">
                        Daftar
                    </button>
                </li>
            </ul>
        </div>
        @endguest
    </div>
</nav>
