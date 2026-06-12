<!-- resources/views/partials/header.blade.php -->
<header id="main-header" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <a class="flex items-center gap-2.5" href="/">
                <div class="w-9 h-9 bg-gradient-to-br from-[#6B4EE6] to-[#A78BFA] rounded-xl flex items-center justify-center shadow-lg shadow-purple-500/25">
                    <span class="text-white font-black text-sm">NP</span>
                </div>
                <span class="font-heading font-bold text-lg text-white drop-shadow-md">NursesPrint</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-1">
                <a class="px-3 py-2 rounded-lg text-sm font-medium transition-colors text-white/90 hover:text-white hover:bg-white/10" href="/">Home</a>
                <a class="px-3 py-2 rounded-lg text-sm font-medium transition-colors text-white/90 hover:text-white hover:bg-white/10" href="/#exams">Exams</a>
                <a class="px-3 py-2 rounded-lg text-sm font-medium transition-colors text-white/90 hover:text-white hover:bg-white/10" href="/#features">Features</a>
            </nav>

            <!-- Right Side Actions -->
            <div class="flex items-center gap-2">
                <!-- Stats (Hidden on small screens) -->
                <div class="hidden lg:flex items-center gap-4 mr-2 text-xs text-white/80">
                    <div class="flex items-center gap-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-flame h-4 w-4 text-orange-400">
                            <path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"></path>
                        </svg>
                        <span class="font-semibold">12</span>
                    </div>
                    <div class="flex items-center gap-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target h-4 w-4 text-green-400">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="12" r="6"></circle>
                            <circle cx="12" cy="12" r="2"></circle>
                        </svg>
                        <span class="font-semibold">92%</span>
                    </div>
                </div>

                <!-- Auth Buttons -->
                <a href="/login">
                    <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 hover:text-accent-foreground h-8 rounded-md px-3 text-xs text-white hover:bg-white/10">
                        Sign In
                    </button>
                </a>
                <a href="/register">
                    <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 hover:bg-primary/90 h-8 rounded-md px-3 text-xs bg-gradient-to-r from-[#6B4EE6] to-[#8B5CF6] hover:from-[#5B3ED6] hover:to-[#7B4CE6] text-white shadow-lg shadow-purple-500/25">
                        Start Free Trial
                    </button>
                </a>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 hover:bg-accent hover:text-accent-foreground h-9 w-9 md:hidden text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu h-5 w-5">
                        <line x1="4" x2="20" y1="12" y2="12"></line>
                        <line x1="4" x2="20" y1="6" y2="6"></line>
                        <line x1="4" x2="20" y1="18" y2="18"></line>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Dropdown (Hidden by default) -->
    <div id="mobile-menu" class="hidden md:hidden absolute top-16 left-0 w-full bg-white/95 backdrop-blur-md shadow-xl border-t border-gray-100">
        <div class="px-4 py-4 space-y-2">
            <a class="block px-3 py-2 rounded-lg text-base font-medium text-gray-700 hover:bg-purple-50 hover:text-purple-700" href="/">Home</a>
            <a class="block px-3 py-2 rounded-lg text-base font-medium text-gray-700 hover:bg-purple-50 hover:text-purple-700" href="/#exams">Exams</a>
            <a class="block px-3 py-2 rounded-lg text-base font-medium text-gray-700 hover:bg-purple-50 hover:text-purple-700" href="/#features">Features</a>
            <div class="border-t border-gray-200 my-2"></div>
            <a href="/login" class="block px-3 py-2 text-center rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-100">Sign In</a>
            <a href="/register" class="block px-3 py-2 text-center rounded-lg text-sm font-medium bg-purple-600 text-white hover:bg-purple-700">Start Free Trial</a>
        </div>
    </div>
</header>