<div class="flex flex-col h-full">
    <!-- Logo -->
    <div class="flex items-center justify-center p-4">
        <a href="{{ route('dashboard') }}" class="shrink-0">
            <x-application-logo class="block h-9 w-auto fill-current base-content" />
        </a>
    </div>

    <!-- Navigation Links -->
    <div class="flex flex-col space-y-4 mt-6 px-4">
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            <span class="text-base-content font-bold">Dashboard</span>
        </x-nav-link>
        <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
            </svg>
            <span class="text-base-content font-bold">Blog</span>
        </x-nav-link>
    </div>

    <div class="mt-auto">
        <!-- User Profile Dropdown -->
        <div class="px-4 pb-4">
            <div class="dropdown dropdown-top dropdown-end">
                <div tabindex="0" role="button" class="flex items-center space-x-3 cursor-pointer">
                    <div class="avatar">
                        <div class="w-12 rounded-full object-cover">
                            <img src="{{ Storage::url(Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}'s Avatar">
                        </div>
                    </div>
                    <div class="text-base text-base-content font-medium">{{ Auth::user()->name }}</div>
                    <svg class="w-4 h-4 text-base-content" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow mt-4">
                    <li>
                        <a href="{{ route('profile.edit') }}" class="text-sm text-accent hover:underline">Edit
                            Profile</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                            @csrf
                            <button type="submit" class="w-full text-left text-sm text-accent hover:underline">Log
                                Out</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
