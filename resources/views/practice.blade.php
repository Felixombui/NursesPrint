<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subjectName }} Practice - {{ $examName }} | NursesPrint</title>
    <meta name="description" content="Practice {{ $subjectName }} questions for {{ $examName }} with instant feedback and detailed rationales.">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- External Custom CSS -->
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body class="bg-gray-50 font-sans antialiased flex flex-col min-h-screen">

    <!-- Include Existing Header Partial -->
    @include('partials.header')

    <!-- Quiz Stats Bar -->
    <div class="bg-white border-b border-gray-200 px-4 py-2">
        <div class="max-w-7xl mx-auto flex items-center justify-between text-sm">
            <div class="flex items-center gap-4">
                <span class="text-gray-500">Question <span class="text-[#6B4EE6] font-bold">1</span> of 25</span>
                <span class="text-gray-500 hidden sm:inline">Time Elapsed: <span class="text-gray-900 font-mono">04:12</span></span>
            </div>
            <div class="flex items-center gap-2">
                <button class="px-3 py-1.5 text-xs font-medium text-gray-600 hover:text-gray-900 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors">
                    Pause Timer
                </button>
                <button class="px-3 py-1.5 text-xs font-medium text-white bg-red-500 hover:bg-red-600 rounded-lg shadow-sm transition-colors">
                    End Session
                </button>
            </div>
        </div>
    </div>

    <!-- Main Quiz Layout -->
    <div class="flex max-w-7xl mx-auto min-h-[calc(100vh-112px)]">
        
        <!-- Left Sidebar: Question Navigator -->
        <aside class="quiz-sidebar w-60 flex-shrink-0 hidden lg:block">
            <div class="sticky top-0 overflow-y-auto max-h-screen pb-8 pt-4">
                <div class="px-4 mb-4">
                    <a href="{{ route('library.subject', ['exam' => $examSlug, 'subject' => $subjectSlug]) }}" class="flex items-center gap-1.5 text-xs text-gray-500 hover:text-gray-900 mb-3 transition-colors">
                        <i data-lucide="arrow-left" class="h-3 w-3"></i> Back to {{ $subjectName }}
                    </a>
                    <p class="font-bold text-sm text-gray-900">{{ $subjectName }} Practice Set 1</p>
                    <p class="text-xs text-gray-500 mt-0.5">{{ $examName }} Content Mastery</p>
                </div>
                
                <div class="px-4 mb-2">
                    <p class="text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-2">Questions</p>
                    <div class="grid grid-cols-5 gap-1.5">
                        <button class="question-nav-btn active w-8 h-8 rounded-md text-xs font-semibold flex items-center justify-center">1</button>
                        <button class="question-nav-btn w-8 h-8 rounded-md text-xs font-semibold text-gray-500 flex items-center justify-center">2</button>
                        <button class="question-nav-btn w-8 h-8 rounded-md text-xs font-semibold text-gray-500 flex items-center justify-center">3</button>
                        <button class="question-nav-btn w-8 h-8 rounded-md text-xs font-semibold text-gray-500 flex items-center justify-center">4</button>
                        <button class="question-nav-btn w-8 h-8 rounded-md text-xs font-semibold text-gray-500 flex items-center justify-center">5</button>
                        <button class="question-nav-btn w-8 h-8 rounded-md text-xs font-semibold text-gray-500 flex items-center justify-center">6</button>
                        <button class="question-nav-btn w-8 h-8 rounded-md text-xs font-semibold text-gray-500 flex items-center justify-center">7</button>
                        <button class="question-nav-btn w-8 h-8 rounded-md text-xs font-semibold text-gray-500 flex items-center justify-center">8</button>
                        <button class="question-nav-btn w-8 h-8 rounded-md text-xs font-semibold text-gray-500 flex items-center justify-center">9</button>
                        <button class="question-nav-btn w-8 h-8 rounded-md text-xs font-semibold text-gray-500 flex items-center justify-center">10</button>
                    </div>
                </div>

                <div class="px-4 mt-6">
                    <p class="text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-2">Legend</p>
                    <div class="space-y-2 text-xs text-gray-500">
                        <div class="flex items-center gap-2"><span class="w-3 h-3 rounded bg-[#6B4EE6]"></span> Current</div>
                        <div class="flex items-center gap-2"><span class="w-3 h-3 rounded bg-emerald-50 border border-emerald-200"></span> Answered</div>
                        <div class="flex items-center gap-2"><span class="w-3 h-3 rounded bg-white border border-gray-200"></span> Unanswered</div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Center Content: Question Area -->
        <main class="flex-1 min-w-0 p-6 md:p-8 lg:p-10">
            
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-1.5 text-xs text-gray-500 mb-6 flex-wrap">
                <a class="hover:text-gray-900 transition-colors" href="/">Home</a>
                <i data-lucide="chevron-right" class="h-3 w-3 opacity-50"></i>
                <a class="hover:text-gray-900 transition-colors" href="{{ route('library.subject', ['exam' => $examSlug, 'subject' => $subjectSlug]) }}">{{ $examName }}</a>
                <i data-lucide="chevron-right" class="h-3 w-3 opacity-50"></i>
                <a class="hover:text-gray-900 transition-colors" href="{{ route('library.subject', ['exam' => $examSlug, 'subject' => $subjectSlug]) }}">{{ $subjectName }}</a>
                <i data-lucide="chevron-right" class="h-3 w-3 opacity-50"></i>
                <span class="text-gray-900 font-medium">Practice Set 1</span>
            </nav>

            <!-- Question Card -->
            <div class="question-card bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
                
                <!-- Question Header -->
                <div class="p-6 md:p-8 border-b border-gray-100 bg-gradient-to-r from-purple-50/50 to-white">
                    <div class="flex items-start justify-between gap-4 mb-4">
                        <span class="px-3 py-1 bg-orange-100 text-orange-700 text-xs font-bold rounded-full">{{ $examName }}</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-500 text-xs font-semibold rounded-full">Multiple Choice</span>
                    </div>
                    <h1 class="font-heading font-bold text-xl md:text-2xl text-gray-900 leading-relaxed">
                        A nurse is administering digoxin to a patient with heart failure. Which assessment finding would require the nurse to hold the medication and notify the provider immediately?
                    </h1>
                </div>

                <!-- Options -->
                <div class="p-6 md:p-8 space-y-3">
                    
                    <label class="relative flex items-start gap-4 p-4 rounded-xl border-2 border-gray-200 cursor-pointer hover:border-purple-300 transition-all group">
                        <input type="radio" name="q1_answer" value="A" class="option-radio sr-only">
                        <div class="option-label absolute inset-0 rounded-xl pointer-events-none"></div>
                        
                        <div class="relative z-10 flex-shrink-0 mt-0.5">
                            <div class="radio-indicator w-5 h-5 rounded-full border-2 border-gray-300 flex items-center justify-center transition-all group-hover:border-purple-400">
                                <div class="w-2 h-2 rounded-full bg-white transform scale-0 transition-transform"></div>
                            </div>
                        </div>
                        
                        <div class="relative z-10 flex-1">
                            <span class="font-bold text-gray-500 mr-2">A.</span>
                            <span class="text-gray-700">Apical pulse rate of 72 beats per minute</span>
                        </div>
                    </label>

                    <label class="relative flex items-start gap-4 p-4 rounded-xl border-2 border-gray-200 cursor-pointer hover:border-purple-300 transition-all group">
                        <input type="radio" name="q1_answer" value="B" class="option-radio sr-only">
                        <div class="option-label absolute inset-0 rounded-xl pointer-events-none"></div>
                        
                        <div class="relative z-10 flex-shrink-0 mt-0.5">
                            <div class="radio-indicator w-5 h-5 rounded-full border-2 border-gray-300 flex items-center justify-center transition-all group-hover:border-purple-400">
                                <div class="w-2 h-2 rounded-full bg-white transform scale-0 transition-transform"></div>
                            </div>
                        </div>
                        
                        <div class="relative z-10 flex-1">
                            <span class="font-bold text-gray-500 mr-2">B.</span>
                            <span class="text-gray-700">Blood pressure of 130/80 mmHg</span>
                        </div>
                    </label>

                    <label class="relative flex items-start gap-4 p-4 rounded-xl border-2 border-gray-200 cursor-pointer hover:border-purple-300 transition-all group">
                        <input type="radio" name="q1_answer" value="C" class="option-radio sr-only">
                        <div class="option-label absolute inset-0 rounded-xl pointer-events-none"></div>
                        
                        <div class="relative z-10 flex-shrink-0 mt-0.5">
                            <div class="radio-indicator w-5 h-5 rounded-full border-2 border-gray-300 flex items-center justify-center transition-all group-hover:border-purple-400">
                                <div class="w-2 h-2 rounded-full bg-white transform scale-0 transition-transform"></div>
                            </div>
                        </div>
                        
                        <div class="relative z-10 flex-1">
                            <span class="font-bold text-gray-500 mr-2">C.</span>
                            <span class="text-gray-700">Apical pulse rate of 54 beats per minute</span>
                        </div>
                    </label>

                    <label class="relative flex items-start gap-4 p-4 rounded-xl border-2 border-gray-200 cursor-pointer hover:border-purple-300 transition-all group">
                        <input type="radio" name="q1_answer" value="D" class="option-radio sr-only">
                        <div class="option-label absolute inset-0 rounded-xl pointer-events-none"></div>
                        
                        <div class="relative z-10 flex-shrink-0 mt-0.5">
                            <div class="radio-indicator w-5 h-5 rounded-full border-2 border-gray-300 flex items-center justify-center transition-all group-hover:border-purple-400">
                                <div class="w-2 h-2 rounded-full bg-white transform scale-0 transition-transform"></div>
                            </div>
                        </div>
                        
                        <div class="relative z-10 flex-1">
                            <span class="font-bold text-gray-500 mr-2">D.</span>
                            <span class="text-gray-700">Respiratory rate of 18 breaths per minute</span>
                        </div>
                    </label>

                </div>

                <!-- Action Footer -->
                <div class="p-6 md:p-8 bg-gray-50 border-t border-gray-100 flex items-center justify-between">
                    <button class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border border-input bg-transparent shadow-sm hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-4 text-sm gap-1.5 text-gray-600">
                        <i data-lucide="flag" class="h-4 w-4"></i> Flag for Review
                    </button>
                    
                    <div class="flex items-center gap-3">
                        <button class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border border-input bg-white shadow-sm hover:bg-gray-50 h-9 rounded-md px-4 text-sm text-gray-700">
                            Previous
                        </button>
                        <button id="next-question-btn" disabled class="inline-flex items-center justify-center whitespace-nowrap font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 h-9 rounded-md px-6 text-sm bg-gradient-to-r from-[#6B4EE6] to-[#8B5CF6] text-white shadow-lg shadow-purple-500/25 hover:from-[#5B3ED6] hover:to-[#7B4CE6] disabled:from-gray-300 disabled:to-gray-300 disabled:shadow-none">
                            Next Question <i data-lucide="arrow-right" class="ml-2 h-4 w-4"></i>
                        </button>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <!-- Include Existing Footer Partial -->
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