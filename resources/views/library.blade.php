<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subjectName }} - {{ $examName }} Practice Questions | NursesPrint</title>
    <meta name="description" content="Master {{ $subjectName }} for {{ $examName }} with {{ $examName }} practice questions, test banks, and detailed rationales. Start studying now.">
    <meta name="keywords" content="{{ $examName }}, {{ $subjectName }}, Nursing Questions, NCLEX, ATI, HESI, TEAS">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- External Custom CSS -->
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    
    <!-- BreadcrumbList Schema -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "BreadcrumbList",
      "itemListElement": [{
        "@@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://nursesprint.com/"
      },{
        "@@type": "ListItem",
        "position": 2,
        "name": "{{ $examName }}",
        "item": "https://nursesprint.com/library/{{ $examSlug }}"
      },{
        "@@type": "ListItem",
        "position": 3,
        "name": "{{ $subjectName }}"
      }]
    }
    </script>
</head>
<body class="bg-gray-50 font-sans antialiased flex flex-col min-h-screen">

    <!-- Library Specific Header -->
    <header id="library-header" class="sticky top-0 z-50 transition-all bg-white/98 backdrop-blur-xl border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a class="flex items-center gap-2.5" href="/">
                    <div class="w-9 h-9 bg-gradient-to-br from-[#6B4EE6] to-[#A78BFA] rounded-xl flex items-center justify-center shadow-lg shadow-purple-500/25">
                        <span class="text-white font-black text-sm">NP</span>
                    </div>
                    <span class="font-heading font-bold text-lg text-gray-900">NursesPrint</span>
                </a>
                
                <nav class="hidden md:flex items-center gap-1">
                    <a class="px-3 py-2 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100" href="/">Home</a>
                    <a class="px-3 py-2 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100" href="/#exams">Exams</a>
                    <a class="px-3 py-2 rounded-lg text-sm font-medium transition-colors text-gray-500 hover:text-gray-900 hover:bg-gray-100" href="/#features">Features</a>
                </nav>

                <div class="flex items-center gap-2">
                    <div class="hidden lg:flex items-center gap-4 mr-2 text-xs text-gray-500">
                        <div class="flex items-center gap-1.5">
                            <i data-lucide="flame" class="h-4 w-4 text-orange-400"></i>
                            <span class="font-semibold">12</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <i data-lucide="target" class="h-4 w-4 text-green-400"></i>
                            <span class="font-semibold">92%</span>
                        </div>
                    </div>
                    <a href="/login">
                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 hover:bg-gray-100 hover:text-gray-900 h-8 rounded-md px-3 text-xs">Sign In</button>
                    </a>
                    <a href="/register">
                        <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 hover:bg-primary/90 h-8 rounded-md px-3 text-xs bg-gradient-to-r from-[#6B4EE6] to-[#8B5CF6] hover:from-[#5B3ED6] hover:to-[#7B4CE6] text-white shadow-lg shadow-purple-500/25">Start Free Trial</button>
                    </a>
                    
                    <!-- Mobile Menu Button -->
                    <button id="mobile-menu-btn" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 hover:bg-gray-100 hover:text-gray-900 h-9 w-9 md:hidden">
                        <i data-lucide="menu" class="h-5 w-5"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu Dropdown -->
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

    <!-- Stats Bar -->
    <div class="bg-white border-b border-gray-200 px-4 py-2">
        <div class="max-w-7xl mx-auto flex items-center justify-between text-sm">
            <div class="flex items-center gap-4">
                <span class="text-gray-500">Practice Questions <span class="text-[#6B4EE6] font-bold">12,921</span></span>
                <span class="text-gray-500 hidden sm:inline">Simulated Questions <span class="text-[#6B4EE6] font-bold">3,325</span></span>
            </div>
            <a href="/login">
                <button class="px-4 py-1.5 bg-gradient-to-r from-[#6B4EE6] to-[#8B5CF6] text-white text-sm font-semibold rounded-lg shadow-md shadow-purple-500/20">Login</button>
            </a>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="flex max-w-7xl mx-auto px-4 gap-8 py-8 min-h-[calc(100vh-112px)]">
        
        <!-- Left Sidebar: Topics -->
        <aside class="hidden lg:block w-44 flex-shrink-0 pt-1">
            <p class="text-[11px] font-bold uppercase tracking-widest text-gray-400 mb-3">Topics</p>
            <ul class="space-y-0.5">
                <li><button class="topic-link w-full text-left py-2 text-sm text-gray-500 leading-tight pl-3 rounded-r-md">Medication Safety</button></li>
                <li><button class="topic-link w-full text-left py-2 text-sm text-gray-500 leading-tight pl-3 rounded-r-md">Dosage Calculations</button></li>
                <li><button class="topic-link w-full text-left py-2 text-sm text-gray-500 leading-tight pl-3 rounded-r-md">Drug Classifications</button></li>
                <li><button class="topic-link w-full text-left py-2 text-sm text-gray-500 leading-tight pl-3 rounded-r-md">Adverse Effects</button></li>
                <li><button class="topic-link w-full text-left py-2 text-sm text-gray-500 leading-tight pl-3 rounded-r-md">Patient Teaching</button></li>
            </ul>
        </aside>

        <!-- Center Content -->
        <main class="flex-1 min-w-0">
            
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-1 text-sm text-gray-500 mb-5 flex-wrap">
                <a class="hover:text-gray-900 flex items-center gap-1 transition-colors" href="/">
                    <i data-lucide="house" class="h-3.5 w-3.5"></i> Home
                </a>
                <i data-lucide="chevron-right" class="h-3.5 w-3.5 opacity-50"></i>
                <span>RN Exams</span>
                <i data-lucide="chevron-right" class="h-3.5 w-3.5 opacity-50"></i>
                <a class="hover:text-gray-900 transition-colors" href="/">{{ $examName }}</a>
                <i data-lucide="chevron-right" class="h-3.5 w-3.5 opacity-50"></i>
                <span class="text-[#6B4EE6] font-semibold">{{ $subjectName }}</span>
            </nav>

            <!-- Page Header -->
            <div class="mb-7">
                <div class="flex items-center gap-2 mb-3">
                    <span class="px-3 py-1 bg-orange-100 text-orange-700 text-xs font-bold rounded-full">{{ $examName }}</span>
                    <span class="px-3 py-1 bg-gray-100 text-gray-500 text-xs font-semibold rounded-full">Content Mastery</span>
                </div>
                <h1 class="font-heading font-black text-3xl md:text-4xl text-gray-900 mb-2">{{ $subjectName }}</h1>
                <p class="text-gray-500 text-base leading-relaxed">Study {{ $subjectName }} with practice questions, test banks, and detailed rationales for {{ $examName }}.</p>
            </div>

            <!-- Action Cards Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10">
                <!-- Replace the existing Practice Questions button in library.blade.php with this -->
<a href="{{ route('practice.start', ['exam' => $examSlug, 'subject' => $subjectSlug]) }}" class="action-card group flex flex-col gap-3 p-6 rounded-2xl border-2 border-gray-200 hover:border-[#6B4EE6]/40 bg-white text-left">
    <div class="w-11 h-11 rounded-xl bg-emerald-100 flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
        <i data-lucide="play" class="h-5 w-5 text-emerald-600"></i>
    </div>
    <div>
        <h3 class="font-bold text-gray-900 text-base mb-1">Practice Questions</h3>
        <p class="text-sm text-gray-500 leading-relaxed">Practice mode with instant feedback and rationales.</p>
    </div>
    <span class="self-start px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-700">84 Questions</span>
</a>

                <button class="action-card group flex flex-col gap-3 p-6 rounded-2xl border-2 border-gray-200 hover:border-[#6B4EE6]/40 bg-white text-left">
                    <div class="w-11 h-11 rounded-xl bg-blue-100 flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                        <i data-lucide="book-open" class="h-5 w-5 text-blue-600"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-base mb-1">Testbanks / Books</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Pre-built test banks for timed practice.</p>
                    </div>
                    <span class="self-start px-3 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-700">63 Questions</span>
                </button>

                <button class="action-card group flex flex-col gap-3 p-6 rounded-2xl border-2 border-gray-200 hover:border-[#6B4EE6]/40 bg-white text-left">
                    <div class="w-11 h-11 rounded-xl bg-purple-100 flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                        <i data-lucide="file-text" class="h-5 w-5 text-[#6B4EE6]"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-base mb-1">Module Questions</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Organized by topic for focused study.</p>
                    </div>
                    <span class="self-start px-3 py-1 rounded-full text-xs font-bold bg-purple-100 text-[#6B4EE6]">84 Questions</span>
                </button>

                <button class="action-card group flex flex-col gap-3 p-6 rounded-2xl border-2 border-gray-200 hover:border-[#6B4EE6]/40 bg-white text-left">
                    <div class="w-11 h-11 rounded-xl bg-amber-100 flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                        <i data-lucide="graduation-cap" class="h-5 w-5 text-amber-600"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-base mb-1">Final Exams</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Full-length exam simulations with timer.</p>
                    </div>
                    <span class="self-start px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-700">63 Questions</span>
                </button>
            </div>

            <!-- Sample Questions List -->
            <div>
                <h2 class="font-heading font-bold text-xl text-gray-900 mb-4">Sample Questions</h2>
                <div class="border border-gray-200 rounded-2xl divide-y divide-gray-200 overflow-hidden shadow-sm bg-white">
                    
                    <button class="question-item w-full flex items-center gap-4 p-4 md:p-5 text-left group">
                        <span class="flex-shrink-0 text-xs font-bold text-gray-400 w-6">Q1</span>
                        <div class="flex-1 min-w-0">
                            <p class="font-medium text-sm text-gray-900 leading-relaxed mb-2">A nurse is administering digoxin to a patient. Which assessment finding would require the nurse to hold the medication?</p>
                            <div class="flex items-center gap-2">
                                <span class="px-2.5 py-0.5 bg-gray-100 text-gray-500 text-xs rounded-full font-medium">Intermediate</span>
                                <span class="px-2.5 py-0.5 bg-gray-100 text-gray-500 text-xs rounded-full font-medium">Multiple Choice</span>
                            </div>
                        </div>
                        <i data-lucide="chevron-right" class="chevron-icon h-4 w-4 text-gray-400 flex-shrink-0 transition-all"></i>
                    </button>

                    <button class="question-item w-full flex items-center gap-4 p-4 md:p-5 text-left group">
                        <span class="flex-shrink-0 text-xs font-bold text-gray-400 w-6">Q2</span>
                        <div class="flex-1 min-w-0">
                            <p class="font-medium text-sm text-gray-900 leading-relaxed mb-2">A patient is prescribed warfarin. Which laboratory value should the nurse monitor most closely?</p>
                            <div class="flex items-center gap-2">
                                <span class="px-2.5 py-0.5 bg-gray-100 text-gray-500 text-xs rounded-full font-medium">Intermediate</span>
                                <span class="px-2.5 py-0.5 bg-gray-100 text-gray-500 text-xs rounded-full font-medium">Multiple Choice</span>
                            </div>
                        </div>
                        <i data-lucide="chevron-right" class="chevron-icon h-4 w-4 text-gray-400 flex-shrink-0 transition-all"></i>
                    </button>

                    <button class="question-item w-full flex items-center gap-4 p-4 md:p-5 text-left group">
                        <span class="flex-shrink-0 text-xs font-bold text-gray-400 w-6">Q3</span>
                        <div class="flex-1 min-w-0">
                            <p class="font-medium text-sm text-gray-900 leading-relaxed mb-2">A nurse is caring for a patient receiving IV vancomycin. Which adverse effect is most important to monitor?</p>
                            <div class="flex items-center gap-2">
                                <span class="px-2.5 py-0.5 bg-gray-100 text-gray-500 text-xs rounded-full font-medium">Advanced</span>
                                <span class="px-2.5 py-0.5 bg-gray-100 text-gray-500 text-xs rounded-full font-medium">Multiple Choice</span>
                            </div>
                        </div>
                        <i data-lucide="chevron-right" class="chevron-icon h-4 w-4 text-gray-400 flex-shrink-0 transition-all"></i>
                    </button>

                </div>
            </div>
        </main>

        <!-- Right Sidebar: Other Subjects -->
        <aside class="hidden xl:block w-52 flex-shrink-0 pt-1">
            <p class="text-[11px] font-bold uppercase tracking-widest text-gray-400 mb-3">Other Subjects</p>
            <ul class="space-y-0.5">
                <li><button class="w-full text-left text-sm text-gray-500 hover:text-[#6B4EE6] py-2 transition-colors leading-tight">Medical Surgical</button></li>
                <li><button class="w-full text-left text-sm text-gray-500 hover:text-[#6B4EE6] py-2 transition-colors leading-tight">Anatomy and Physiology</button></li>
                <li><button class="w-full text-left text-sm text-gray-500 hover:text-[#6B4EE6] py-2 transition-colors leading-tight">Mental Health</button></li>
                <li><button class="w-full text-left text-sm text-gray-500 hover:text-[#6B4EE6] py-2 transition-colors leading-tight">Fundamentals</button></li>
                <li><button class="w-full text-left text-sm text-gray-500 hover:text-[#6B4EE6] py-2 transition-colors leading-tight">Community Health</button></li>
                <li><button class="w-full text-left text-sm text-gray-500 hover:text-[#6B4EE6] py-2 transition-colors leading-tight">Pediatrics</button></li>
                <li><button class="w-full text-left text-sm text-gray-500 hover:text-[#6B4EE6] py-2 transition-colors leading-tight">Leadership</button></li>
            </ul>
        </aside>
    </div>

    @include('partials.footer')

    <!-- External Custom JS -->
    <script src="{{ asset('script.js') }}"></script>
    
    <!-- Initialize Lucide Icons -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            lucide.createIcons();
        });
    </script>
</body>
</html>