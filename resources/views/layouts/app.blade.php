<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Multi-Purpose App') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>

</head>

{{-- <body class="font-sans antialiased">
    <div class="min-h-screen bg-base-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
                <header class="bg-base-200 text-base-content shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

        <!-- Page Content -->
        <div class="ml-64 lg:ml-72">
            <main>
                {{ $slot }}
            </main>
        </div>

    </div>
</body> --}}

{{-- <body class="font-sans antialiased">
    <div class="min-h-screen bg-base-100 flex">
        <!-- Left Navbar -->
        <nav class="flex-shrink-0 w-1/7 bg-base-100 border-r-4 border-base-300 h-screen fixed top-0 left-0">
            @include('layouts.navigation')
        </nav>

        <!-- Main Content -->
        <main class="flex mx-auto bg-base-100 p-4">
            {{ $slot }}
        </main>

        <!-- Right Column -->
        <aside class="flex-shrink-0 w-1/7 bg-base-200 p-4 border-l-4 border-base-300">
            <div class="flex justify-center">
                <div class="avatar">
                    <div class="w-16 rounded-full">
                        <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                    </div>
                </div>
            </div>
            <!-- Theme Selector -->
            <label class="form-control w-full max-w-xs">
                <div class="label">
                    <span class="label-text">Select a theme:</span>
                </div>
                <select class="select select-bordered" data-choose-theme>
                    <option value="winter">Default</option>
                    <option value="retro">Retro</option>
                    <option value="lemonade">Lemonade</option>
                    <option value="dim">Dim</option>
                    <option value="dracula">Dracula</option>
                    <option value="night">Night</option>
                </select>
            </label>
        </aside>
    </div>
</body> --}}

<body class="bg-gray-100">

    <div class="flex flex-col min-h-screen">
        <div class="flex flex-grow">
            <!-- Nav Section -->
            <nav
                class="bg-base-100 pt-6 p-1 w-/12 hidden md:block lg:block md:w-[74px] lg:w-[74px] xl:w-[13.25%] 2xl:w-[13.25%] border border-base-300 fixed top-0 left-0 h-screen">
                <div class="flex items-center justify-center p-4">
                    <a href="{{ route('dashboard') }}" class="shrink-0">
                        <x-application-logo class="block h-9 w-auto fill-current base-content" />
                    </a>
                </div>
                <ul class="mt-4 space-y-4">
                    <li>
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                            class="block p-2 mx-2 rounded hover:bg-base-300">
                            <div
                                class="flex items-center justify-center xl:justify-start 2xl:justify-start gap-3 text-primary">
                                @if (request()->routeIs('dashboard'))
                                    {{-- SVG fill --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                                        viewBox="0 0 20 20">
                                        <path fill="currentColor"
                                            d="M11.003 2.388a1.5 1.5 0 0 0-2.005 0l-5.5 4.942A1.5 1.5 0 0 0 3 8.445V15.5A1.5 1.5 0 0 0 4.5 17h2A1.5 1.5 0 0 0 8 15.5v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 0 1.5 1.5h2a1.5 1.5 0 0 0 1.5-1.5V8.445a1.5 1.5 0 0 0-.497-1.115z" />
                                    </svg>
                                @else
                                    {{-- SVG outline --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                                        viewBox="0 0 20 20">
                                        <path fill="currentColor"
                                            d="M8.998 2.388a1.5 1.5 0 0 1 2.005 0l5.5 4.942A1.5 1.5 0 0 1 17 8.445V15.5a1.5 1.5 0 0 1-1.5 1.5H13a1.5 1.5 0 0 1-1.5-1.5V12a.5.5 0 0 0-.5-.5H9a.5.5 0 0 0-.5.5v3.5A1.5 1.5 0 0 1 7 17H4.5A1.5 1.5 0 0 1 3 15.5V8.445c0-.425.18-.83.498-1.115zm1.336.744a.5.5 0 0 0-.668 0l-5.5 4.942A.5.5 0 0 0 4 8.445V15.5a.5.5 0 0 0 .5.5H7a.5.5 0 0 0 .5-.5V12A1.5 1.5 0 0 1 9 10.5h2a1.5 1.5 0 0 1 1.5 1.5v3.5a.5.5 0 0 0 .5.5h2.5a.5.5 0 0 0 .5-.5V8.445a.5.5 0 0 0-.166-.371z" />
                                    </svg>
                                @endif

                                <p
                                    class="hidden xl:block 2xl:block {{ request()->routeIs('dashboard') ? 'font-bold' : '' }}">
                                    Home
                                </p>
                            </div>
                        </x-nav-link>


                    </li>
                    <li>
                        <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')"
                            class="block p-2 mx-2 rounded hover:bg-base-300">
                            <div
                                class="flex items-center justify-center xl:justify-start 2xl:justify-start gap-3 text-primary">
                                @if (request()->routeIs('posts.index'))
                                    {{-- SVG fill --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                                        viewBox="0 0 48 48">
                                        <g fill="none">
                                            <path d="M0 0h48v48H0z" />
                                            <path fill="currentColor" d="M32 20a8 8 0 1 1-16 0a8 8 0 0 1 16 0" />
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M23.184 43.984C12.517 43.556 4 34.772 4 24C4 12.954 12.954 4 24 4s20 8.954 20 20s-8.954 20-20 20h-.274q-.272 0-.542-.016M11.166 36.62a3.028 3.028 0 0 1 2.523-4.005c7.796-.863 12.874-.785 20.632.018a2.99 2.99 0 0 1 2.498 4.002A17.94 17.94 0 0 0 42 24c0-9.941-8.059-18-18-18S6 14.059 6 24c0 4.916 1.971 9.373 5.166 12.621"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em"
                                        viewBox="0 0 48 48">
                                        <g fill="none">
                                            <path d="M0 0h48v48H0z" />
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M24 27a8 8 0 1 0 0-16a8 8 0 0 0 0 16m0-2a6 6 0 1 0 0-12a6 6 0 0 0 0 12"
                                                clip-rule="evenodd" />
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M44 24c0 11.046-8.954 20-20 20S4 35.046 4 24S12.954 4 24 4s20 8.954 20 20M33.63 39.21A17.9 17.9 0 0 1 24 42a17.9 17.9 0 0 1-9.831-2.92q-.36-.45-.73-.93A2.14 2.14 0 0 1 13 36.845c0-1.077.774-1.98 1.809-2.131c6.845-1 11.558-.914 18.412.035A2.08 2.08 0 0 1 35 36.818c0 .48-.165.946-.463 1.31q-.461.561-.907 1.082m3.355-2.744c-.16-1.872-1.581-3.434-3.49-3.698c-7.016-.971-11.92-1.064-18.975-.033c-1.92.28-3.335 1.856-3.503 3.733A17.94 17.94 0 0 1 6 24c0-9.941 8.059-18 18-18s18 8.059 18 18a17.94 17.94 0 0 1-5.015 12.466"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                @endif

                                <p
                                    class="hidden xl:block 2xl:block {{ request()->routeIs('posts.index') ? 'font-bold' : '' }}">
                                    Profile
                                </p>
                            </div>
                        </x-nav-link>
                    </li>
                    <li>
                        <a href="#" class="block p-2 mx-2 rounded hover:bg-gray-200">
                            <div class="flex items-center justify-center xl:justify-start 2xl:justify-start gap-3">
                                <img src="images/settings-outline.svg" alt="">
                                <p class="hidden xl:block 2xl:block">Settings</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#home" class="block p-2 mx-2 rounded hover:bg-gray-200">
                            <div class="flex items-center justify-center xl:justify-start 2xl:justify-start gap-3">
                                <img src="images/heart-outline.svg" alt="">
                                <p class="hidden xl:block 2xl:block">Favorites</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#home" class="block p-2 mx-2 rounded hover:bg-gray-200">
                            <div class="flex items-center justify-center xl:justify-start 2xl:justify-start gap-3">
                                <img src="images/github.svg" alt="">
                                <p class="hidden xl:block 2xl:block">Github</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Main Content -->
            <main class="flex p-5 mx-auto w-full bg-base-100">
                <div class="container mx-auto">
                    <div class="p-4 max-w-lg md:max-w-xl lg:max-w-2xl xl:max-w-4xl 2xl:max-w-5xl mx-auto">
                        {{ $slot }}
                    </div>
                </div>
            </main>

            <!-- Aside Section -->
            <aside
                class="bg-base-100 pt-6 p-1 w-/12 hidden md:block lg:block md:w-[74px] lg:w-[74px] xl:w-[13.25%] 2xl:w-[13.25%] border border-base-300 fixed top-0 right-0 h-screen">
                <div class="flex items-center justify-center p-4">
                    <a href="{{ route('profile.edit') }}" class="shrink-0">
                        <div class="avatar">
                            <div class="w-12 xl:w-16 2xl:w-20 rounded-full border border-primary">
                                <img src="{{ Storage::url(Auth::user()->avatar) }}"
                                    alt="{{ Auth::user()->name }}'s Avatar">
                            </div>
                        </div>
                    </a>
                </div>
                <ul class="space-y-4">
                    <li>
                        <a href="{{ route('profile.edit') }}" class="block mx-2 py-2 rounded-xl hover:bg-gray-200">
                            <div class="flex items-center justify-center">
                                <p class="hidden xl:block 2xl:block font-bold text-xl">{{ Auth::user()->name }}</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="fixed bottom-0 w-full py-4 items-center justify-center">
                            <form method="POST" action="{{ route('logout') }}" class="w-full">
                                @csrf
                                <button type="submit"
                                    class="w-full flex items-center justify-between p-2 mx-2 rounded hover:bg-gray-200 gap-3">
                                    <div class="flex items-center gap-2 justify-center">
                                        <img src="images/logout.svg" alt="">
                                        <p class="hidden xl:block">Logout</p>
                                    </div>
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
                <label class="form-control w-full max-w-xs px-8">
                    <div class="label">
                        <span class="label-text">Select a theme:</span>
                    </div>
                    <select class="select select-bordered" data-choose-theme>
                        <option value="winter">Light</option>.
                        <option value="night">Dark</option>
                        <option value="retro">Retro</option>
                        <option value="lemonade">Lemonade</option>
                        <option value="dim">Dim</option>
                        <option value="dracula">Dracula</option>
                    </select>
                </label>
            </aside>
        </div>


        <!-- Footer -->
        <footer class="bg-gray-800 text-white p-4 mt-auto">
            <div class="container mx-auto">
                Footer Content
            </div>
        </footer>
    </div>

    <div class="block md:hidden lg:hidden">
        <div class="flex btm-nav btm-nav-sm w-full fixed bottom-0">
            <button>
                <img src="images/settings-outline.svg" alt="">
            </button>
            <button>
                <img src="images/profile-outline.svg" alt="">
            </button>
            <button class="active">
                <img src="images/home-outline.svg" alt="">
            </button>
            <button>
                <img src="images/heart-outline.svg" alt="">
            </button>
            <button>
                <img src="images/github.svg" alt="">
            </button>
            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <button type="submit">
                    <img src="images/logout.svg" alt="">
                </button>
            </form>
        </div>
    </div>
</body>





</html>
