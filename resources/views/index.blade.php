<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NursesPrint - US Nursing Exam Prep & Question Bank</title>
    <meta name="description" content="Master your NCLEX-RN, NCLEX-PN, and TEAS exams with NursesPrint. The most comprehensive US-based nursing question bank and study resources.">
    <meta name="keywords" content="NursesPrint, NCLEX RN, NCLEX PN, TEAS Exam, Nursing Question Bank, US Nursing Exams">
    <link rel="canonical" href="https://nursesprint.com/">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- External Custom CSS -->
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    
    <!-- Enhanced SEO Schema Markup (Fixed Syntax) -->
    <script type="application/ld+json">
    [
      {
        "@@context": "https://schema.org",
        "@@type": "WebSite",
        "name": "NursesPrint",
        "url": "https://nursesprint.com/",
        "potentialAction": {
          "@@type": "SearchAction",
          "target": "https://nursesprint.com/search?q={search_term_string}",
          "query-input": "required name=search_term_string"
        }
      },
      {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "NursesPrint",
        "url": "https://nursesprint.com/",
        "logo": "https://nursesprint.com/logo.png",
        "sameAs": []
      },
      {
        "@@context": "https://schema.org",
        "@@type": "SoftwareApplication",
        "name": "NursesPrint Exam Prep",
        "applicationCategory": "EducationalApplication",
        "operatingSystem": "Web",
        "offers": {
          "@t@ype": "Offer",
          "price": "0",
          "priceCurrency": "USD"
        },
        "aggregateRating": {
          "@@type": "AggregateRating",
          "ratingValue": "4.9",
          "ratingCount": "2400"
        }
      }
    ]
    </script>
</head>
<body class="bg-gray-50 font-sans antialiased flex flex-col min-h-screen">

    @include('partials.header')

    <main class="flex-grow">
        
        <!-- 1. Hero Section (Your Exact Code) -->
        <section class="relative -mt-16 h-screen min-h-[640px] overflow-hidden flex items-center justify-center">
            <video autoplay="" loop="" playsinline="" class="absolute inset-0 w-full h-full object-cover" style="filter: brightness(0.88);">
                <source src="https://videos.pexels.com/video-files/3195394/3195394-hd_1920_1080_25fps.mp4" type="video/mp4">
                <source src="https://videos.pexels.com/video-files/6097003/6097003-hd_1920_1080_30fps.mp4" type="video/mp4">
                <source src="https://videos.pexels.com/video-files/5726108/5726108-hd_1920_1080_25fps.mp4" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-[#1E0A5E]/55 to-white"></div>
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_65%_25%,rgba(107,78,230,0.25),transparent_65%)]"></div>
            <div class="absolute bottom-0 left-0 right-0 h-48 bg-gradient-to-t from-white to-transparent z-10"></div>
            
            <div class="relative z-20 text-center px-4 max-w-5xl mx-auto">
                <div style="opacity: 1; transform: none;">
                    <div class="inline-flex items-center gap-2.5 bg-white/10 backdrop-blur-md border border-white/20 rounded-full px-5 py-2 mb-7 shadow-xl">
                        <div class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></div>
                        <span class="text-white/85 text-sm font-medium tracking-wide">Trusted by 50,000+ nursing students worldwide</span>
                    </div>
                    <h1 class="font-heading font-black text-5xl sm:text-6xl md:text-[4.5rem] lg:text-[5.5rem] text-white leading-[1.02] tracking-tight mb-5 drop-shadow-lg">
                        Pass Your Nursing Exam<br>
                        <span class="bg-gradient-to-r from-[#C4B5FD] via-[#A78BFA] to-[#67E8F9] bg-clip-text text-transparent">The Smart Way</span>
                    </h1>
                    <p class="text-white/65 text-lg md:text-xl max-w-2xl mx-auto mb-9 leading-relaxed font-light drop-shadow-md">
                        300,000+ expert questions, AI-powered rationales, and real-time progress tracking — all designed for how nurses actually learn.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12">
                        <a href="/register">
                            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-white text-[#6B4EE6] hover:bg-white/92 font-bold px-10 h-14 text-base rounded-full shadow-2xl shadow-purple-900/40 hover:scale-105 transition-all duration-200">
                                Start Free — No Card Required 
                                <i data-lucide="arrow-right" class="ml-2 h-5 w-5"></i>
                            </button>
                        </a>
                        <a href="#browse">
                            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 hover:text-accent-foreground text-white border border-white/25 hover:bg-white/10 px-8 h-14 text-base rounded-full backdrop-blur-sm">
                                <i data-lucide="circle-play" class="mr-2 h-5 w-5"></i> Explore Exam Library
                            </button>
                        </a>
                    </div>
                    <div class="flex flex-wrap items-center justify-center gap-5 md:gap-8">
                        <div class="flex items-center gap-2 text-white/60"><i data-lucide="users" class="h-4 w-4 text-white/40"></i><span class="font-bold text-white">50K+</span><span class="text-sm">Active students</span></div>
                        <div class="flex items-center gap-2 text-white/60"><i data-lucide="target" class="h-4 w-4 text-white/40"></i><span class="font-bold text-white">98%</span><span class="text-sm">Pass rate</span></div>
                        <div class="flex items-center gap-2 text-white/60"><i data-lucide="book-open" class="h-4 w-4 text-white/40"></i><span class="font-bold text-white">300K+</span><span class="text-sm">Questions</span></div>
                        <div class="flex items-center gap-2 text-white/60"><i data-lucide="flame" class="h-4 w-4 text-white/40"></i><span class="font-bold text-white">4.9★</span><span class="text-sm">App rating</span></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. Interactive Exam Library Section -->
        <section id="browse" class="py-16 md:py-20 px-4 bg-white relative overflow-hidden">
            <div class="max-w-7xl mx-auto relative z-10">
                <div class="text-center mb-10" style="opacity: 1; transform: none;">
                    <h2 class="font-heading font-black text-3xl md:text-4xl text-gray-900 mb-2">Explore Exam Library</h2>
                    <p class="text-gray-500 text-lg">Pick your exam → select a subject → start practicing immediately</p>
                </div>

                <div class="flex flex-col lg:flex-row gap-6">
                    <!-- Sidebar Navigation -->
                    <aside class="w-full lg:w-64 flex-shrink-0">
                        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm lg:sticky lg:top-20">
                            <div class="p-4 bg-gradient-to-r from-[#6B4EE6]/8 to-transparent border-b border-gray-100">
                                <p class="font-heading font-bold text-sm text-gray-900">All Exams</p>
                                <p class="text-xs text-gray-500 mt-0.5">8 exam types available</p>
                            </div>
                            
                            <!-- Desktop Vertical Tabs -->
                            <div class="hidden lg:block p-2">
                                <!-- Entry Exams Category -->
                                <div class="mb-1">
                                    <button class="w-full flex items-center gap-2.5 px-3 py-2.5 rounded-xl hover:bg-gray-50 transition-colors">
                                        <div class="w-7 h-7 bg-sky-500/10 rounded-lg flex items-center justify-center"><i data-lucide="graduation-cap" class="h-3.5 w-3.5 text-sky-500"></i></div>
                                        <span class="font-semibold text-sm text-gray-900 flex-1 text-left">Entry Exams</span>
                                        <i data-lucide="chevron-down" class="h-3.5 w-3.5 text-gray-400 rotate-180"></i>
                                    </button>
                                    <div class="pl-12 pr-2 pb-1 space-y-0.5">
                                        <button class="exam-tab w-full text-left px-3 py-2 rounded-lg text-sm transition-all font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50" data-target="content-teas">TEAS 7</button>
                                        <button class="exam-tab w-full text-left px-3 py-2 rounded-lg text-sm transition-all font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50" data-target="content-hesi-a2">HESI A2</button>
                                    </div>
                                </div>
                                
                                <!-- Nursing Exams Category -->
                                <div class="mb-1">
                                    <button class="w-full flex items-center gap-2.5 px-3 py-2.5 rounded-xl hover:bg-gray-50 transition-colors">
                                        <div class="w-7 h-7 bg-[#6B4EE6]/10 rounded-lg flex items-center justify-center"><i data-lucide="stethoscope" class="h-3.5 w-3.5 text-[#6B4EE6]"></i></div>
                                        <span class="font-semibold text-sm text-gray-900 flex-1 text-left">Nursing Exams</span>
                                        <i data-lucide="chevron-down" class="h-3.5 w-3.5 text-gray-400 rotate-180"></i>
                                    </button>
                                    <div class="pl-12 pr-2 pb-1 space-y-0.5">
                                        <button class="exam-tab w-full text-left px-3 py-2 rounded-lg text-sm transition-all font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50" data-target="content-ati-rn">ATI RN</button>
                                        <button class="exam-tab w-full text-left px-3 py-2 rounded-lg text-sm transition-all font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50" data-target="content-ati-lpn">ATI LPN</button>
                                        <button class="exam-tab w-full text-left px-3 py-2 rounded-lg text-sm transition-all font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50" data-target="content-hesi-rn">HESI RN</button>
                                        <button class="exam-tab w-full text-left px-3 py-2 rounded-lg text-sm transition-all font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50" data-target="content-hesi-lpn">HESI LPN</button>
                                    </div>
                                </div>

                                <!-- Licensure Exams Category -->
                                <div class="mb-1">
                                    <button class="w-full flex items-center gap-2.5 px-3 py-2.5 rounded-xl hover:bg-gray-50 transition-colors">
                                        <div class="w-7 h-7 bg-emerald-500/10 rounded-lg flex items-center justify-center"><i data-lucide="shield-check" class="h-3.5 w-3.5 text-emerald-500"></i></div>
                                        <span class="font-semibold text-sm text-gray-900 flex-1 text-left">Licensure Exams</span>
                                        <i data-lucide="chevron-down" class="h-3.5 w-3.5 text-gray-400 rotate-180"></i>
                                    </button>
                                    <div class="pl-12 pr-2 pb-1 space-y-0.5">
                                        <button class="exam-tab w-full text-left px-3 py-2 rounded-lg text-sm transition-all font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50" data-target="content-nclex-rn">NCLEX-RN</button>
                                        <button class="exam-tab w-full text-left px-3 py-2 rounded-lg text-sm transition-all font-medium text-gray-500 hover:text-gray-900 hover:bg-gray-50" data-target="content-nclex-pn">NCLEX-PN</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Mobile Horizontal Tabs -->
                            <div class="flex lg:hidden gap-2 p-3 overflow-x-auto hide-scrollbar border-t border-gray-100">
                                <button class="exam-tab flex-shrink-0 px-4 py-2 rounded-full text-sm font-semibold transition-all bg-gray-100 text-gray-600" data-target="content-teas">TEAS 7</button>
                                <button class="exam-tab flex-shrink-0 px-4 py-2 rounded-full text-sm font-semibold transition-all bg-gray-100 text-gray-600" data-target="content-hesi-a2">HESI A2</button>
                                <button class="exam-tab flex-shrink-0 px-4 py-2 rounded-full text-sm font-semibold transition-all bg-gray-100 text-gray-600" data-target="content-ati-rn">ATI RN</button>
                                <button class="exam-tab flex-shrink-0 px-4 py-2 rounded-full text-sm font-semibold transition-all bg-gray-100 text-gray-600" data-target="content-nclex-rn">NCLEX-RN</button>
                            </div>
                        </div>
                    </aside>

                    <!-- Dynamic Content Area -->
                    <div class="flex-1 min-w-0">
                        
                        <!-- CONTENT: TEAS 7 -->
                        <div id="content-teas" class="exam-content-area hidden bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-5 border-b border-gray-100 flex items-center justify-between bg-gradient-to-r from-[#6B4EE6]/5 to-transparent">
                                <div>
                                    <h3 class="font-heading font-bold text-xl text-gray-900">TEAS 7</h3>
                                    <p class="text-sm text-gray-500">4 subjects · click any to begin</p>
                                </div>
                                <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 shadow hover:bg-primary/80 bg-[#6B4EE6]/10 text-[#6B4EE6] border-[#6B4EE6]/25 font-semibold">Entry Exams</div>
                            </div>
                            <div class="p-5">
                                <div class="mb-6 last:mb-0">
                                    <div class="flex items-center gap-3 mb-3"><div class="h-px flex-1 bg-gray-200"></div><span class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Core Subjects</span><div class="h-px flex-1 bg-gray-200"></div></div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3">
                                        <a href="{{ route('library.subject', ['exam' => 'teas-7', 'subject' => 'english']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">English</p><p class="text-xs text-gray-500 mt-0.5">98 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                        <a href="{{ route('library.subject', ['exam' => 'teas-7', 'subject' => 'science']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Science</p><p class="text-xs text-gray-500 mt-0.5">115 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                        <a href="{{ route('library.subject', ['exam' => 'teas-7', 'subject' => 'reading']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Reading</p><p class="text-xs text-gray-500 mt-0.5">85 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                        <a href="{{ route('library.subject', ['exam' => 'teas-7', 'subject' => 'math']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Math</p><p class="text-xs text-gray-500 mt-0.5">95 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CONTENT: HESI A2 -->
                        <div id="content-hesi-a2" class="exam-content-area hidden bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-5 border-b border-gray-100 flex items-center justify-between bg-gradient-to-r from-[#6B4EE6]/5 to-transparent">
                                <div>
                                    <h3 class="font-heading font-bold text-xl text-gray-900">HESI A2</h3>
                                    <p class="text-sm text-gray-500">8 subjects · click any to begin</p>
                                </div>
                                <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 shadow hover:bg-primary/80 bg-[#6B4EE6]/10 text-[#6B4EE6] border-[#6B4EE6]/25 font-semibold">Entry Exams</div>
                            </div>
                            <div class="p-5">
                                <div class="mb-6 last:mb-0">
                                    <div class="flex items-center gap-3 mb-3"><div class="h-px flex-1 bg-gray-200"></div><span class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Core Subjects</span><div class="h-px flex-1 bg-gray-200"></div></div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3">
                                        <a href="{{ route('library.subject', ['exam' => 'hesi-a2', 'subject' => 'anatomy-and-physiology']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Anatomy & Physiology</p><p class="text-xs text-gray-500 mt-0.5">250 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                        <a href="{{ route('library.subject', ['exam' => 'hesi-a2', 'subject' => 'biology']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Biology</p><p class="text-xs text-gray-500 mt-0.5">180 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                        <a href="{{ route('library.subject', ['exam' => 'hesi-a2', 'subject' => 'chemistry']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Chemistry</p><p class="text-xs text-gray-500 mt-0.5">120 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CONTENT: ATI RN -->
                        <div id="content-ati-rn" class="exam-content-area hidden bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-5 border-b border-gray-100 flex items-center justify-between bg-gradient-to-r from-[#6B4EE6]/5 to-transparent">
                                <div>
                                    <h3 class="font-heading font-bold text-xl text-gray-900">ATI RN Comprehensive Predictor</h3>
                                    <p class="text-sm text-gray-500">9 subjects · 1,200+ questions total</p>
                                </div>
                                <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 shadow hover:bg-primary/80 bg-[#6B4EE6]/10 text-[#6B4EE6] border-[#6B4EE6]/25 font-semibold">Nursing Exams</div>
                            </div>
                            <div class="p-5">
                                <div class="mb-6 last:mb-0">
                                    <div class="flex items-center gap-3 mb-3"><div class="h-px flex-1 bg-gray-200"></div><span class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Content Mastery</span><div class="h-px flex-1 bg-gray-200"></div></div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3">
                                        <a href="{{ route('library.subject', ['exam' => 'ati-rn', 'subject' => 'pharmacology']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Pharmacology</p><p class="text-xs text-gray-500 mt-0.5">147 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                        <a href="{{ route('library.subject', ['exam' => 'ati-rn', 'subject' => 'medical-surgical']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Medical Surgical</p><p class="text-xs text-gray-500 mt-0.5">169 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CONTENT: ATI LPN -->
                        <div id="content-ati-lpn" class="exam-content-area hidden bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-5 border-b border-gray-100 flex items-center justify-between bg-gradient-to-r from-[#6B4EE6]/5 to-transparent">
                                <div>
                                    <h3 class="font-heading font-bold text-xl text-gray-900">ATI LPN/LVN Proctored</h3>
                                    <p class="text-sm text-gray-500">8 subjects · 950+ questions total</p>
                                </div>
                                <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 shadow hover:bg-primary/80 bg-[#6B4EE6]/10 text-[#6B4EE6] border-[#6B4EE6]/25 font-semibold">Nursing Exams</div>
                            </div>
                            <div class="p-5">
                                <div class="mb-6 last:mb-0">
                                    <div class="flex items-center gap-3 mb-3"><div class="h-px flex-1 bg-gray-200"></div><span class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Content Mastery</span><div class="h-px flex-1 bg-gray-200"></div></div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3">
                                        <a href="{{ route('library.subject', ['exam' => 'ati-lpn', 'subject' => 'fundamentals']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Fundamentals</p><p class="text-xs text-gray-500 mt-0.5">120 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                        <a href="{{ route('library.subject', ['exam' => 'ati-lpn', 'subject' => 'mental-health']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Mental Health</p><p class="text-xs text-gray-500 mt-0.5">95 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CONTENT: HESI RN -->
                        <div id="content-hesi-rn" class="exam-content-area hidden bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-5 border-b border-gray-100 flex items-center justify-between bg-gradient-to-r from-[#6B4EE6]/5 to-transparent">
                                <div>
                                    <h3 class="font-heading font-bold text-xl text-gray-900">HESI RN Exit Exam</h3>
                                    <p class="text-sm text-gray-500">10 subjects · 1,500+ questions total</p>
                                </div>
                                <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 shadow hover:bg-primary/80 bg-[#6B4EE6]/10 text-[#6B4EE6] border-[#6B4EE6]/25 font-semibold">Nursing Exams</div>
                            </div>
                            <div class="p-5">
                                <div class="mb-6 last:mb-0">
                                    <div class="flex items-center gap-3 mb-3"><div class="h-px flex-1 bg-gray-200"></div><span class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Comprehensive Review</span><div class="h-px flex-1 bg-gray-200"></div></div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3">
                                        <a href="{{ route('library.subject', ['exam' => 'hesi-rn', 'subject' => 'community-health']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Community Health</p><p class="text-xs text-gray-500 mt-0.5">110 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                        <a href="{{ route('library.subject', ['exam' => 'hesi-rn', 'subject' => 'leadership']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Leadership</p><p class="text-xs text-gray-500 mt-0.5">85 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CONTENT: HESI LPN -->
                        <div id="content-hesi-lpn" class="exam-content-area hidden bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-5 border-b border-gray-100 flex items-center justify-between bg-gradient-to-r from-[#6B4EE6]/5 to-transparent">
                                <div>
                                    <h3 class="font-heading font-bold text-xl text-gray-900">HESI LPN Exit Exam</h3>
                                    <p class="text-sm text-gray-500">9 subjects · 1,100+ questions total</p>
                                </div>
                                <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 shadow hover:bg-primary/80 bg-[#6B4EE6]/10 text-[#6B4EE6] border-[#6B4EE6]/25 font-semibold">Nursing Exams</div>
                            </div>
                            <div class="p-5">
                                <div class="mb-6 last:mb-0">
                                    <div class="flex items-center gap-3 mb-3"><div class="h-px flex-1 bg-gray-200"></div><span class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Comprehensive Review</span><div class="h-px flex-1 bg-gray-200"></div></div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3">
                                        <a href="{{ route('library.subject', ['exam' => 'hesi-lpn', 'subject' => 'pediatrics']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Pediatrics</p><p class="text-xs text-gray-500 mt-0.5">130 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                        <a href="{{ route('library.subject', ['exam' => 'hesi-lpn', 'subject' => 'maternity']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Maternity</p><p class="text-xs text-gray-500 mt-0.5">105 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CONTENT: NCLEX-RN -->
                        <div id="content-nclex-rn" class="exam-content-area hidden bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-5 border-b border-gray-100 flex items-center justify-between bg-gradient-to-r from-[#6B4EE6]/5 to-transparent">
                                <div>
                                    <h3 class="font-heading font-bold text-xl text-gray-900">NCLEX-RN</h3>
                                    <p class="text-sm text-gray-500">4 subjects · click any to begin</p>
                                </div>
                                <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 shadow hover:bg-primary/80 bg-[#6B4EE6]/10 text-[#6B4EE6] border-[#6B4EE6]/25 font-semibold">Licensure Exams</div>
                            </div>
                            <div class="p-5">
                                <div class="mb-6 last:mb-0">
                                    <div class="flex items-center gap-3 mb-3">
                                        <div class="h-px flex-1 bg-gray-200"></div>
                                        <span class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Core Subjects</span>
                                        <div class="h-px flex-1 bg-gray-200"></div>
                                    </div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3">
                                        <a href="{{ route('library.subject', ['exam' => 'nclex-rn', 'subject' => 'pharmacology']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Pharmacology</p><p class="text-xs text-gray-500 mt-0.5">167 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                        <a href="{{ route('library.subject', ['exam' => 'nclex-rn', 'subject' => 'medical-surgical']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Medical Surgical</p><p class="text-xs text-gray-500 mt-0.5">218 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                    </div>
                                    
                                    <div class="flex items-center gap-3 my-6">
                                        <div class="h-px flex-1 bg-gray-200"></div>
                                        <span class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Topical Questions</span>
                                        <div class="h-px flex-1 bg-gray-200"></div>
                                    </div>
                                    
                                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3">
                                        <a href="{{ route('library.subject', ['exam' => 'nclex-rn', 'subject' => 'medical-surgical-topical']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Medical Surgical</p><p class="text-xs text-gray-500 mt-0.5">202 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                        <a href="{{ route('library.subject', ['exam' => 'nclex-rn', 'subject' => 'maternity']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Maternity</p><p class="text-xs text-gray-500 mt-0.5">77 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CONTENT: NCLEX-PN -->
                        <div id="content-nclex-pn" class="exam-content-area hidden bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
                            <div class="p-5 border-b border-gray-100 flex items-center justify-between bg-gradient-to-r from-[#6B4EE6]/5 to-transparent">
                                <div>
                                    <h3 class="font-heading font-bold text-xl text-gray-900">NCLEX-PN</h3>
                                    <p class="text-sm text-gray-500">4 subjects · click any to begin</p>
                                </div>
                                <div class="inline-flex items-center rounded-md border px-2.5 py-0.5 text-xs transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 shadow hover:bg-primary/80 bg-[#6B4EE6]/10 text-[#6B4EE6] border-[#6B4EE6]/25 font-semibold">Licensure Exams</div>
                            </div>
                            <div class="p-5">
                                <div class="mb-6 last:mb-0">
                                    <div class="flex items-center gap-3 mb-3">
                                        <div class="h-px flex-1 bg-gray-200"></div>
                                        <span class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Core Subjects</span>
                                        <div class="h-px flex-1 bg-gray-200"></div>
                                    </div>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3">
                                        <a href="{{ route('library.subject', ['exam' => 'nclex-pn', 'subject' => 'pharmacology']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Pharmacology</p><p class="text-xs text-gray-500 mt-0.5">145 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                        <a href="{{ route('library.subject', ['exam' => 'nclex-pn', 'subject' => 'medical-surgical']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Medical Surgical</p><p class="text-xs text-gray-500 mt-0.5">190 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                    </div>
                                    
                                    <div class="flex items-center gap-3 my-6">
                                        <div class="h-px flex-1 bg-gray-200"></div>
                                        <span class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Topical Questions</span>
                                        <div class="h-px flex-1 bg-gray-200"></div>
                                    </div>
                                    
                                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3">
                                        <a href="{{ route('library.subject', ['exam' => 'nclex-pn', 'subject' => 'fundamentals']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Fundamentals</p><p class="text-xs text-gray-500 mt-0.5">180 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                        <a href="{{ route('library.subject', ['exam' => 'nclex-pn', 'subject' => 'maternity']) }}" class="group subject-card flex items-center gap-3.5 p-4 rounded-xl border-2 border-gray-100 bg-white text-left">
                                            <div class="w-10 h-10 bg-[#6B4EE6]/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gradient-to-br group-hover:from-[#6B4EE6] group-hover:to-[#A78BFA] transition-all duration-200"><i data-lucide="book-open" class="h-4 w-4 text-[#6B4EE6] group-hover:text-white transition-colors"></i></div>
                                            <div class="flex-1 min-w-0"><p class="font-semibold text-sm text-gray-900 truncate group-hover:text-[#6B4EE6] transition-colors">Maternity</p><p class="text-xs text-gray-500 mt-0.5">65 questions total</p></div>
                                            <i data-lucide="chevron-right" class="h-4 w-4 text-gray-300 group-hover:text-[#6B4EE6] group-hover:translate-x-0.5 transition-all flex-shrink-0"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Path to Passing Section -->
        <section class="py-16 md:py-20 px-4 bg-gradient-to-b from-white via-purple-50 to-white">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12" style="opacity: 1; transform: none;">
                    <h2 class="font-heading font-black text-3xl md:text-4xl text-gray-900 mb-3">Your Path to Passing</h2>
                    <p class="text-gray-500 text-lg">A clear, guided system that gets you exam-ready fast</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <!-- Step 1 -->
                    <div class="relative flex flex-col items-center text-center" style="opacity: 1; transform: none;">
                        <div class="hidden md:block absolute top-6 left-[60%] w-[80%] h-px border-t-2 border-dashed border-gray-200 z-0"></div>
                        <div class="relative z-10 w-14 h-14 rounded-2xl bg-blue-100 text-blue-600 flex items-center justify-center mb-4 shadow-sm">
                            <i data-lucide="graduation-cap" class="h-7 w-7"></i>
                            <span class="absolute -top-2 -right-2 w-5 h-5 bg-[#6B4EE6] text-white text-[10px] font-bold rounded-full flex items-center justify-center shadow">1</span>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-1.5">Choose Your Exam</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Select from NCLEX, ATI, HESI or TEAS</p>
                    </div>
                    <!-- Step 2 -->
                    <div class="relative flex flex-col items-center text-center" style="opacity: 1; transform: none;">
                        <div class="hidden md:block absolute top-6 left-[60%] w-[80%] h-px border-t-2 border-dashed border-gray-200 z-0"></div>
                        <div class="relative z-10 w-14 h-14 rounded-2xl bg-purple-100 text-[#6B4EE6] flex items-center justify-center mb-4 shadow-sm">
                            <i data-lucide="layers" class="h-7 w-7"></i>
                            <span class="absolute -top-2 -right-2 w-5 h-5 bg-[#6B4EE6] text-white text-[10px] font-bold rounded-full flex items-center justify-center shadow">2</span>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-1.5">Pick a Subject</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Pharmacology, Med-Surg, Fundamentals &amp; more</p>
                    </div>
                    <!-- Step 3 -->
                    <div class="relative flex flex-col items-center text-center" style="opacity: 1; transform: none;">
                        <div class="hidden md:block absolute top-6 left-[60%] w-[80%] h-px border-t-2 border-dashed border-gray-200 z-0"></div>
                        <div class="relative z-10 w-14 h-14 rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center mb-4 shadow-sm">
                            <i data-lucide="book-open" class="h-7 w-7"></i>
                            <span class="absolute -top-2 -right-2 w-5 h-5 bg-[#6B4EE6] text-white text-[10px] font-bold rounded-full flex items-center justify-center shadow">3</span>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-1.5">Select Study Type</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Practice questions, test banks, or final exams</p>
                    </div>
                    <!-- Step 4 -->
                    <div class="relative flex flex-col items-center text-center" style="opacity: 1; transform: none;">
                        <div class="relative z-10 w-14 h-14 rounded-2xl bg-amber-100 text-amber-600 flex items-center justify-center mb-4 shadow-sm">
                            <i data-lucide="brain" class="h-7 w-7"></i>
                            <span class="absolute -top-2 -right-2 w-5 h-5 bg-[#6B4EE6] text-white text-[10px] font-bold rounded-full flex items-center justify-center shadow">4</span>
                        </div>
                        <h3 class="font-bold text-gray-900 mb-1.5">Review &amp; Master</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">AI rationales explain every answer in detail</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Features Section -->
        <section class="py-16 md:py-20 px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12" style="opacity: 1; transform: none;">
                    <h2 class="font-heading font-black text-3xl md:text-4xl text-gray-900 mb-3">Built for Nursing Success</h2>
                    <p class="text-gray-500 text-lg max-w-xl mx-auto">Every feature exists to get you one step closer to passing</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    <div class="bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-xl hover:shadow-purple-500/6 hover:-translate-y-1.5 transition-all duration-300 group" style="opacity: 1; transform: none;">
                        <div class="w-12 h-12 rounded-xl bg-purple-100 text-[#6B4EE6] flex items-center justify-center mb-4 group-hover:scale-110 transition-transform"><i data-lucide="brain" class="h-6 w-6"></i></div>
                        <h3 class="font-heading font-bold text-gray-900 mb-2">AI-Powered Rationales</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Every answer reveals why it's correct and how to remember it forever.</p>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-xl hover:shadow-purple-500/6 hover:-translate-y-1.5 transition-all duration-300 group" style="opacity: 1; transform: none;">
                        <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform"><i data-lucide="chart-column" class="h-6 w-6"></i></div>
                        <h3 class="font-heading font-bold text-gray-900 mb-2">Live Progress Analytics</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Track mastery per subject with beautiful, real-time charts and predictions.</p>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-xl hover:shadow-purple-500/6 hover:-translate-y-1.5 transition-all duration-300 group" style="opacity: 1; transform: none;">
                        <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform"><i data-lucide="layers" class="h-6 w-6"></i></div>
                        <h3 class="font-heading font-bold text-gray-900 mb-2">300K+ Question Bank</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Questions written by expert nursing educators across every exam type.</p>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-xl hover:shadow-purple-500/6 hover:-translate-y-1.5 transition-all duration-300 group" style="opacity: 1; transform: none;">
                        <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform"><i data-lucide="trending-up" class="h-6 w-6"></i></div>
                        <h3 class="font-heading font-bold text-gray-900 mb-2">Predicted Pass Score</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Know your readiness before exam day with AI-powered score prediction.</p>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-xl hover:shadow-purple-500/6 hover:-translate-y-1.5 transition-all duration-300 group" style="opacity: 1; transform: none;">
                        <div class="w-12 h-12 rounded-xl bg-pink-100 text-pink-600 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform"><i data-lucide="award" class="h-6 w-6"></i></div>
                        <h3 class="font-heading font-bold text-gray-900 mb-2">Detailed Rationales</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Understand the 'why' behind every answer — not just memorize facts.</p>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-xl hover:shadow-purple-500/6 hover:-translate-y-1.5 transition-all duration-300 group" style="opacity: 1; transform: none;">
                        <div class="w-12 h-12 rounded-xl bg-teal-100 text-teal-600 flex items-center justify-center mb-4 group-hover:scale-110 transition-transform"><i data-lucide="zap" class="h-6 w-6"></i></div>
                        <h3 class="font-heading font-bold text-gray-900 mb-2">Exam-Day Simulations</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Timed, full-length exams that perfectly mirror the real exam experience.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Auto-Scrolling Testimonials Section -->
        <section class="py-16 md:py-20 px-4 bg-gradient-to-b from-white via-purple-50 to-white overflow-hidden">
            <div class="max-w-7xl mx-auto mb-12 text-center">
                <div class="flex items-center justify-center gap-1.5 mb-3">
                    <i data-lucide="star" class="h-5 w-5 fill-amber-400 text-amber-400"></i>
                    <i data-lucide="star" class="h-5 w-5 fill-amber-400 text-amber-400"></i>
                    <i data-lucide="star" class="h-5 w-5 fill-amber-400 text-amber-400"></i>
                    <i data-lucide="star" class="h-5 w-5 fill-amber-400 text-amber-400"></i>
                    <i data-lucide="star" class="h-5 w-5 fill-amber-400 text-amber-400"></i>
                    <span class="ml-2 text-sm text-gray-500 font-medium">4.9 · 2,400+ reviews</span>
                </div>
                <h2 class="font-heading font-black text-3xl md:text-4xl text-gray-900 mb-3">Real Students, Real Results</h2>
                <p class="text-gray-500 text-lg max-w-xl mx-auto">Join thousands who passed their nursing exams with NursesPrint</p>
            </div>

            <!-- Scrolling Track Container -->
            <div class="relative w-full">
                <!-- Fade Edges for Smooth Look -->
                <div class="absolute left-0 top-0 bottom-0 w-20 bg-gradient-to-r from-purple-50 to-transparent z-10 pointer-events-none"></div>
                <div class="absolute right-0 top-0 bottom-0 w-20 bg-gradient-to-l from-purple-50 to-transparent z-10 pointer-events-none"></div>

                <div class="testimonial-track">
                    <!-- ORIGINAL SET OF 6 TESTIMONIALS -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm flex flex-col gap-4 min-w-[350px] max-w-[400px]">
                        <i data-lucide="quote" class="h-5 w-5 text-[#6B4EE6]/40"></i>
                        <p class="text-sm text-gray-700 leading-relaxed flex-1">"I failed NCLEX twice before NursesPrint. The AI rationales completely changed how I understood pharmacology. Passed in 75 questions on my third attempt — I couldn't be more grateful."</p>
                        <div class="flex items-center gap-0.5 mb-3"><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i></div>
                        <div class="flex items-center gap-3"><div class="w-9 h-9 bg-gradient-to-br from-[#6B4EE6] to-[#A78BFA] rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white font-bold text-xs">SM</span></div><div><p class="font-bold text-sm text-gray-900">Sarah M.</p><p class="text-xs text-emerald-600 font-medium flex items-center gap-1"><i data-lucide="circle-check" class="h-3 w-3"></i> Passed NCLEX-RN · May 2025</p></div></div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm flex flex-col gap-4 min-w-[350px] max-w-[400px]">
                        <i data-lucide="quote" class="h-5 w-5 text-[#6B4EE6]/40"></i>
                        <p class="text-sm text-gray-700 leading-relaxed flex-1">"The practice modules are exactly like the real ATI exam. I went from scoring 62% to 89% in just 3 weeks. The subject-by-subject breakdown showed me exactly where I was weak."</p>
                        <div class="flex items-center gap-0.5 mb-3"><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i></div>
                        <div class="flex items-center gap-3"><div class="w-9 h-9 bg-gradient-to-br from-[#6B4EE6] to-[#A78BFA] rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white font-bold text-xs">JK</span></div><div><p class="font-bold text-sm text-gray-900">James K.</p><p class="text-xs text-emerald-600 font-medium flex items-center gap-1"><i data-lucide="circle-check" class="h-3 w-3"></i> ATI RN Graduate · Dec 2025</p></div></div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm flex flex-col gap-4 min-w-[350px] max-w-[400px]">
                        <i data-lucide="quote" class="h-5 w-5 text-[#6B4EE6]/40"></i>
                        <p class="text-sm text-gray-700 leading-relaxed flex-1">"NursesPrint is worth every penny. The HESI A2 Anatomy &amp; Physiology section alone has hundreds of questions with clear explanations. My score jumped 18 points in two weeks."</p>
                        <div class="flex items-center gap-0.5 mb-3"><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i></div>
                        <div class="flex items-center gap-3"><div class="w-9 h-9 bg-gradient-to-br from-[#6B4EE6] to-[#A78BFA] rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white font-bold text-xs">PL</span></div><div><p class="font-bold text-sm text-gray-900">Priya L.</p><p class="text-xs text-emerald-600 font-medium flex items-center gap-1"><i data-lucide="circle-check" class="h-3 w-3"></i> HESI A2 · 93% Score</p></div></div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm flex flex-col gap-4 min-w-[350px] max-w-[400px]">
                        <i data-lucide="quote" class="h-5 w-5 text-[#6B4EE6]/40"></i>
                        <p class="text-sm text-gray-700 leading-relaxed flex-1">"The daily streak feature kept me accountable. I studied 30 minutes every morning for 6 weeks and passed NCLEX-PN first try. The simulated exams felt harder than the real thing — in a good way!"</p>
                        <div class="flex items-center gap-0.5 mb-3"><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i></div>
                        <div class="flex items-center gap-3"><div class="w-9 h-9 bg-gradient-to-br from-[#6B4EE6] to-[#A78BFA] rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white font-bold text-xs">MT</span></div><div><p class="font-bold text-sm text-gray-900">Marcus T.</p><p class="text-xs text-emerald-600 font-medium flex items-center gap-1"><i data-lucide="circle-check" class="h-3 w-3"></i> NCLEX-PN Grad · 2026</p></div></div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm flex flex-col gap-4 min-w-[350px] max-w-[400px]">
                        <i data-lucide="quote" class="h-5 w-5 text-[#6B4EE6]/40"></i>
                        <p class="text-sm text-gray-700 leading-relaxed flex-1">"What sets NursesPrint apart is the 'why others get this wrong' section. It's like having a nursing professor in your pocket 24/7. My confidence going into the exam was completely different."</p>
                        <div class="flex items-center gap-0.5 mb-3"><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i></div>
                        <div class="flex items-center gap-3"><div class="w-9 h-9 bg-gradient-to-br from-[#6B4EE6] to-[#A78BFA] rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white font-bold text-xs">AW</span></div><div><p class="font-bold text-sm text-gray-900">Amara W.</p><p class="text-xs text-emerald-600 font-medium flex items-center gap-1"><i data-lucide="circle-check" class="h-3 w-3"></i> ATI LPN · January 2026</p></div></div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm flex flex-col gap-4 min-w-[350px] max-w-[400px]">
                        <i data-lucide="quote" class="h-5 w-5 text-[#6B4EE6]/40"></i>
                        <p class="text-sm text-gray-700 leading-relaxed flex-1">"I only had 4 weeks to prepare for TEAS and NursesPrint made it manageable. The math section especially was broken down so clearly. Scored an 88 and got into my dream program!"</p>
                        <div class="flex items-center gap-0.5 mb-3"><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i></div>
                        <div class="flex items-center gap-3"><div class="w-9 h-9 bg-gradient-to-br from-[#6B4EE6] to-[#A78BFA] rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white font-bold text-xs">TH</span></div><div><p class="font-bold text-sm text-gray-900">Tyler H.</p><p class="text-xs text-emerald-600 font-medium flex items-center gap-1"><i data-lucide="circle-check" class="h-3 w-3"></i> TEAS 7 · 88% Score</p></div></div>
                    </div>

                    <!-- DUPLICATED SET FOR SEAMLESS LOOP -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm flex flex-col gap-4 min-w-[350px] max-w-[400px]">
                        <i data-lucide="quote" class="h-5 w-5 text-[#6B4EE6]/40"></i>
                        <p class="text-sm text-gray-700 leading-relaxed flex-1">"I failed NCLEX twice before NursesPrint. The AI rationales completely changed how I understood pharmacology. Passed in 75 questions on my third attempt — I couldn't be more grateful."</p>
                        <div class="flex items-center gap-0.5 mb-3"><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i></div>
                        <div class="flex items-center gap-3"><div class="w-9 h-9 bg-gradient-to-br from-[#6B4EE6] to-[#A78BFA] rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white font-bold text-xs">SM</span></div><div><p class="font-bold text-sm text-gray-900">Sarah M.</p><p class="text-xs text-emerald-600 font-medium flex items-center gap-1"><i data-lucide="circle-check" class="h-3 w-3"></i> Passed NCLEX-RN · May 2025</p></div></div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm flex flex-col gap-4 min-w-[350px] max-w-[400px]">
                        <i data-lucide="quote" class="h-5 w-5 text-[#6B4EE6]/40"></i>
                        <p class="text-sm text-gray-700 leading-relaxed flex-1">"The practice modules are exactly like the real ATI exam. I went from scoring 62% to 89% in just 3 weeks. The subject-by-subject breakdown showed me exactly where I was weak."</p>
                        <div class="flex items-center gap-0.5 mb-3"><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i></div>
                        <div class="flex items-center gap-3"><div class="w-9 h-9 bg-gradient-to-br from-[#6B4EE6] to-[#A78BFA] rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white font-bold text-xs">JK</span></div><div><p class="font-bold text-sm text-gray-900">James K.</p><p class="text-xs text-emerald-600 font-medium flex items-center gap-1"><i data-lucide="circle-check" class="h-3 w-3"></i> ATI RN Graduate · Dec 2025</p></div></div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm flex flex-col gap-4 min-w-[350px] max-w-[400px]">
                        <i data-lucide="quote" class="h-5 w-5 text-[#6B4EE6]/40"></i>
                        <p class="text-sm text-gray-700 leading-relaxed flex-1">"NursesPrint is worth every penny. The HESI A2 Anatomy &amp; Physiology section alone has hundreds of questions with clear explanations. My score jumped 18 points in two weeks."</p>
                        <div class="flex items-center gap-0.5 mb-3"><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i></div>
                        <div class="flex items-center gap-3"><div class="w-9 h-9 bg-gradient-to-br from-[#6B4EE6] to-[#A78BFA] rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white font-bold text-xs">PL</span></div><div><p class="font-bold text-sm text-gray-900">Priya L.</p><p class="text-xs text-emerald-600 font-medium flex items-center gap-1"><i data-lucide="circle-check" class="h-3 w-3"></i> HESI A2 · 93% Score</p></div></div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm flex flex-col gap-4 min-w-[350px] max-w-[400px]">
                        <i data-lucide="quote" class="h-5 w-5 text-[#6B4EE6]/40"></i>
                        <p class="text-sm text-gray-700 leading-relaxed flex-1">"The daily streak feature kept me accountable. I studied 30 minutes every morning for 6 weeks and passed NCLEX-PN first try. The simulated exams felt harder than the real thing — in a good way!"</p>
                        <div class="flex items-center gap-0.5 mb-3"><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i></div>
                        <div class="flex items-center gap-3"><div class="w-9 h-9 bg-gradient-to-br from-[#6B4EE6] to-[#A78BFA] rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white font-bold text-xs">MT</span></div><div><p class="font-bold text-sm text-gray-900">Marcus T.</p><p class="text-xs text-emerald-600 font-medium flex items-center gap-1"><i data-lucide="circle-check" class="h-3 w-3"></i> NCLEX-PN Grad · 2026</p></div></div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm flex flex-col gap-4 min-w-[350px] max-w-[400px]">
                        <i data-lucide="quote" class="h-5 w-5 text-[#6B4EE6]/40"></i>
                        <p class="text-sm text-gray-700 leading-relaxed flex-1">"What sets NursesPrint apart is the 'why others get this wrong' section. It's like having a nursing professor in your pocket 24/7. My confidence going into the exam was completely different."</p>
                        <div class="flex items-center gap-0.5 mb-3"><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i></div>
                        <div class="flex items-center gap-3"><div class="w-9 h-9 bg-gradient-to-br from-[#6B4EE6] to-[#A78BFA] rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white font-bold text-xs">AW</span></div><div><p class="font-bold text-sm text-gray-900">Amara W.</p><p class="text-xs text-emerald-600 font-medium flex items-center gap-1"><i data-lucide="circle-check" class="h-3 w-3"></i> ATI LPN · January 2026</p></div></div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm flex flex-col gap-4 min-w-[350px] max-w-[400px]">
                        <i data-lucide="quote" class="h-5 w-5 text-[#6B4EE6]/40"></i>
                        <p class="text-sm text-gray-700 leading-relaxed flex-1">"I only had 4 weeks to prepare for TEAS and NursesPrint made it manageable. The math section especially was broken down so clearly. Scored an 88 and got into my dream program!"</p>
                        <div class="flex items-center gap-0.5 mb-3"><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i><i data-lucide="star" class="h-3.5 w-3.5 fill-amber-400 text-amber-400"></i></div>
                        <div class="flex items-center gap-3"><div class="w-9 h-9 bg-gradient-to-br from-[#6B4EE6] to-[#A78BFA] rounded-full flex items-center justify-center flex-shrink-0"><span class="text-white font-bold text-xs">TH</span></div><div><p class="font-bold text-sm text-gray-900">Tyler H.</p><p class="text-xs text-emerald-600 font-medium flex items-center gap-1"><i data-lucide="circle-check" class="h-3 w-3"></i> TEAS 7 · 88% Score</p></div></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6. Final CTA Section -->
        <section class="py-16 md:py-20 px-4">
            <div class="max-w-4xl mx-auto">
                <div style="opacity: 1; transform: none;">
                    <div class="relative bg-gradient-to-br from-[#4C1D95] via-[#6B4EE6] to-[#8B5CF6] rounded-3xl p-10 md:p-16 text-center overflow-hidden shadow-2xl shadow-purple-900/20">
                        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_30%_50%,rgba(255,255,255,0.12),transparent_55%)]"></div>
                        <div class="absolute -bottom-8 -right-8 w-64 h-64 bg-pink-500/15 rounded-full blur-3xl"></div>
                        <div class="relative z-10">
                            <div class="flex items-center justify-center gap-1 mb-5">
                                <i data-lucide="star" class="h-4 w-4 fill-amber-400 text-amber-400"></i>
                                <i data-lucide="star" class="h-4 w-4 fill-amber-400 text-amber-400"></i>
                                <i data-lucide="star" class="h-4 w-4 fill-amber-400 text-amber-400"></i>
                                <i data-lucide="star" class="h-4 w-4 fill-amber-400 text-amber-400"></i>
                                <i data-lucide="star" class="h-4 w-4 fill-amber-400 text-amber-400"></i>
                                <span class="text-white/60 text-sm ml-2">Rated #1 Nursing Exam Prep</span>
                            </div>
                            <h2 class="font-heading font-black text-3xl md:text-4xl text-white mb-4">Your Nursing License Awaits</h2>
                            <p class="text-white/70 text-lg mb-8 max-w-lg mx-auto leading-relaxed">Join 50,000+ students who passed with NursesPrint. Start free — no credit card needed.</p>
                            <a href="/register">
                                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 bg-white text-[#6B4EE6] hover:bg-white/90 font-bold px-12 h-14 text-base rounded-full shadow-2xl shadow-black/20 hover:scale-105 transition-all">
                                    Get Started Free 
                                    <i data-lucide="arrow-right" class="ml-2 h-5 w-5"></i>
                                </button>
                            </a>
                            <p class="text-white/45 text-xs mt-5">Free 7-day trial · No credit card · Cancel anytime</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

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