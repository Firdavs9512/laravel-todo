<header class="bg-white shadow-sm dark:bg-gray-800" x-data="{ open: false }">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center flex-shrink-0">
                    <a href="/" class="text-2xl font-bold text-gray-800 dark:text-white">
                        {{ config('app.name') }}
                    </a>
                </div>

                <!-- Navigation Menu -->
                <nav class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    @foreach ($menuItems as $item)
                        <a href="{{ $item['route'] }}"
                            class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-500 border-b-2 border-transparent hover:text-gray-900 hover:border-gray-300 dark:text-gray-400 dark:hover:text-white dark:hover:border-gray-700">
                            {{ $item['label'] }}
                        </a>
                    @endforeach

                </nav>
            </div>

            <div class="flex items-center">
                <div class="mr-2 sm:mr-6">
                    <x-bladewind::theme-switcher />
                </div>

                @auth
                    <div class="flex items-center space-x-4">
                        <span class="text-sm text-gray-500">{{ auth()->user()->name }}</span>
                        <form method="POST" action="{{ route('auth.logout') }}">
                            @csrf
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Logout
                            </button>
                        </form>
                    </div>
                @else
                    <div class="flex items-center space-x-4">
                        <x-bladewind::button color="primary" class="hidden sm:block" href="{{ route('auth.login') }}"
                            tag="a">
                            Login
                        </x-bladewind::button>

                        <div class="hidden text-sm text-gray-500 sm:block">or</div>

                        <x-bladewind::button color="green" href="{{ route('auth.register') }}" tag="a">
                            Register
                        </x-bladewind::button>
                    </div>
                @endauth

                <!-- Mobile menu button -->
                <div class="flex items-center ml-2 sm:hidden">
                    <button type="button"
                        class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-800 dark:hover:border-gray-700"
                        @click="open = !open" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu icon -->
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Mobile menu -->
    <div class="sm:hidden" x-show="open" x-transition>
        <div class="pt-2 pb-3 space-y-1">
            @foreach ($menuItems as $item)
                <a href="{{ $item['route'] }}"
                    class="block py-2 pl-3 pr-4 text-base font-medium text-gray-500 border-l-4 border-transparent hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-800 dark:hover:border-gray-700">
                    {{ $item['label'] }}
                </a>
            @endforeach

            <div class="flex items-center px-4 pt-2 space-x-4">
                <x-bladewind::button color="primary" href="{{ route('auth.login') }}" tag="a">
                    Login
                </x-bladewind::button>

                <div class="text-sm text-gray-500">or</div>

                <x-bladewind::button color="green" href="{{ route('auth.register') }}" tag="a">
                    Register
                </x-bladewind::button>
            </div>
        </div>
    </div>
</header>
