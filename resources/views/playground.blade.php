<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three Column Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

    <div class="flex flex-col min-h-screen">
        <div class="flex flex-grow">
            <!-- Aside Section -->
            <nav
                class="bg-gray-50 pt-6 p-1 w-/12 hidden md:block lg:block md:w-[74px] lg:w-[74px] xl:w-[13.5%] 2xl:w-[13.5%] border border-gray-300 fixed top-0 left-0 h-screen">
                <div class="flex items-center justify-center p-4">
                    <a href="{{ route('dashboard') }}" class="shrink-0">
                        <x-application-logo class="block h-9 w-auto fill-current base-content" />
                    </a>
                </div>
                <ul class="mt-4 space-y-4">
                    <li>
                        <a href="#" class="block p-2 mx-2 rounded hover:bg-gray-200">
                            <div class="flex items-center justify-center xl:justify-start 2xl:justify-start gap-3">
                                <img src="images/home.svg" alt="">
                                <p class="hidden xl:block 2xl:block font-bold">Home</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#home" class="block p-2 mx-2 rounded hover:bg-gray-200">
                            <div class="flex items-center justify-center xl:justify-start 2xl:justify-start gap-3">
                                <img src="images/profile-outline.svg" alt="">
                                <p class="hidden xl:block 2xl:block">Profile</p>
                            </div>
                        </a>
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
            <main class="flex p-5 mx-auto">
                <h1 class="text-2xl font-bold">Main Content</h1>
                <p class="h-lvh">Main content here</p>
            </main>

            <!-- Aside Section -->
            <aside
                class="bg-gray-50 pt-6 p-1 w-/12 hidden md:block lg:block md:w-[74px] lg:w-[74px] xl:w-[13.5%] 2xl:w-[13.5%] border border-gray-300 fixed top-0 right-0 h-screen">
                <div class="flex items-center justify-center p-4">
                    <a href="#" class="shrink-0">
                        <div class="avatar">
                            <div class="w-12 xl:w-16 2xl:w-20 rounded-full">
                                <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                            </div>
                        </div>
                    </a>
                </div>
                <ul class="space-y-4">
                    <li>
                        <a href="#" class="block mx-2 py-2 rounded-xl hover:bg-gray-200">
                            <div class="flex items-center justify-center">
                                <p class="hidden xl:block 2xl:block font-bold text-xl">Jane Doe</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="fixed bottom-0 w-full py-4 items-center justify-center">
                            <a href="#"
                                class="flex items-center justify-between p-2 mx-2 rounded hover:bg-gray-200 gap-3">
                                <div class="flex items-center gap-2 justify-center">
                                    <img src="images/logout.svg" alt="">
                                    <p class="hidden xl:block">Logout</p>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
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
            <button>
                <img src="images/logout.svg" alt="">
            </button>
        </div>
    </div>
</body>

</html>
