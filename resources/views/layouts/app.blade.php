<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Quiz</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'system-ui', 'sans-serif'] },
                }
            }
        }
    </script>
    <style>
        .option-btn { transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1); }
        .option-btn:hover { transform: translateY(-1px); }
        .card { backdrop-filter: blur(20px); background: rgba(255,255,255,0.85); }
        .glass-nav { backdrop-filter: blur(12px); background: rgba(255,255,255,0.8); }
        .fade-in { animation: fadeIn 0.3s ease-out; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="font-sans bg-gradient-to-br from-slate-50 via-white to-indigo-50/50 min-h-screen text-slate-800">
    <nav class="glass-nav sticky top-0 z-50 border-b border-slate-200/60">
        <div class="max-w-4xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="{{ route('quiz.home') }}" class="flex items-center gap-2.5 group">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-indigo-600 to-violet-600 flex items-center justify-center shadow-md shadow-indigo-200 group-hover:shadow-lg group-hover:shadow-indigo-300 transition-shadow">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/>
                    </svg>
                </div>
                <span class="text-lg font-bold text-slate-800">ExamQuiz</span>
            </a>
            <div class="flex items-center gap-1">
                <a href="{{ route('quiz.home') }}"
                   class="px-3.5 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('quiz.home') ? 'text-indigo-700 bg-indigo-50' : 'text-slate-500 hover:text-slate-800 hover:bg-slate-100' }}">
                    Quiz
                </a>
                <a href="{{ route('subjects.index') }}"
                   class="px-3.5 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('subjects.*') ? 'text-indigo-700 bg-indigo-50' : 'text-slate-500 hover:text-slate-800 hover:bg-slate-100' }}">
                    Subjects
                </a>
            </div>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-6 py-8 fade-in">
        @if(session('error'))
            <div class="flex items-center gap-3 bg-red-50 border border-red-200/60 text-red-700 px-5 py-4 rounded-xl mb-6">
                <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z" clip-rule="evenodd"/>
                </svg>
                {{ session('error') }}
            </div>
        @endif

        @if(session('success'))
            <div class="flex items-center gap-3 bg-emerald-50 border border-emerald-200/60 text-emerald-700 px-5 py-4 rounded-xl mb-6">
                <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd"/>
                </svg>
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
