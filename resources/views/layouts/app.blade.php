<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="flex justify-start items-start my-8 mx-4 gap-4 font-sans antialiased bg-white dark:bg-gray-900">
    @include('layouts.navigation')
        <div class="min-h-screen bg-white dark:bg-gray-900 w-full">
            <!-- Page Heading -->

                <header class="flex justify-between items-center w-full">
                    <div class="relative flex justify-start items-center">
                        <label for="search" class="sr-only">Search</label>
                        <input type="search" name="search" id="search" class="w-96 border border-gray-50 bg-gray-100 rounded-full pl-12 pr-8 py-2 text-gray-500 text-sm dark:text-white dark:bg-slate-800 dark:border-slate-800" placeholder="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute top-2 left-3 text-gray-500 w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </div>
                    <div class="flex justify-end items-center gap-4">
                        <div x-data="{
                                open: false,
                                toggle() {
                                    if (this.open) {
                                        return this.close()
                                    }

                                    this.$refs.button.focus()

                                    this.open = true
                                },
                                close(focusAfter) {
                                    if (! this.open) return

                                    this.open = false

                                    focusAfter && focusAfter.focus()
                                }
                            }"
                            x-on:keydown.escape.prevent.stop="close($refs.button)"
                            x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                            x-id="['dropdown-header']"
                        >
                            <button x-ref="button"
                                    x-on:click="toggle()"
                                    :aria-expanded="open"
                                    :aria-controls="$id('dropdown-header-btn')"
                                    type="button"
                                    class="flex justify-center items-center bg-gray-100 hover:bg-gray-200 focus:bg-gray-200 border border-gray-100 rounded-full px-4 py-2 text-sm dark:bg-slate-800 dark:border-slate-800 dark:text-white dark:hover:bg-slate-800/80 dark:focus:bg-slate-800/80 transition-colors duration-200"
                            >
                                {{ Auth::user()->name }}
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="ml-2 w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            <div x-ref="panel"
                                 x-show="open"
                                 x-transition.origin.top
                                 x-on:click.outside="close($refs.button)"
                                 :id="$id('dropdown-header-btn')" style="display: none;"
                                 class="absolute top-20 z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow-md dark:bg-slate-800 dark:divide-slate-600"
                            >
                                <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="font-medium text-xs truncate">{{ Auth::user()->email }}</div>
                                </div>
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
                                    <li>
                                        <a href="{{ route('dashboard') }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('profile.edit') }}" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Account</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <form method="POST" action="{{ route('logout') }}" class="flex w-full">
                                        @csrf
                                        <a href="{{ route('logout') }}" class="block w-full py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" onclick="event.preventDefault();this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <img src="{{ Auth::user()->avatar }}" alt="User avatar" class="w-10 h-10 rounded-full border-2 border-gray-100">
                    </div>
                </header>

            <div class="w-full mx-auto mt-4">
                {{ $header }}
            </div>
            <!-- Page Content -->
            <main class="w-full">
                {{ $slot }}
            </main>
        </div>
        @livewireScripts
    </body>
</html>
