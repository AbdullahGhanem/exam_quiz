@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
    {{-- Header --}}
    <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden mb-8">
        <div class="bg-gradient-to-r from-indigo-600 to-violet-600 px-8 py-8 text-center">
            <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                </svg>
            </div>
            <h1 class="text-3xl font-extrabold text-white mb-2">دليل مراجعة NLP</h1>
            <p class="text-indigo-200 text-sm">مراجعة تفاعلية بالعربي لفهم المحاضرات بسرعة</p>
        </div>
    </div>

    {{-- Lecture Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        {{-- Lecture 1 --}}
        <a href="{{ route('study.show', 1) }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-indigo-400 shadow-sm hover:shadow-lg hover:shadow-indigo-100 transition-all p-6 h-full">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-500 to-indigo-700 flex items-center justify-center text-white text-xl font-extrabold shadow-md shadow-indigo-200">
                        1
                    </div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">المحاضرة الأولى</h2>
                        <p class="text-xs text-slate-400">مقدمة في معالجة اللغات الطبيعية</p>
                    </div>
                </div>

                <div class="space-y-2 mb-5">
                    <p class="text-sm text-slate-600 leading-relaxed">تعريف NLP، مكونات الفهم والتوليد، المستويات اللغوية، اختبار تورينغ، ELIZA، والتطبيقات الحديثة.</p>
                </div>

                <div class="flex flex-wrap gap-1.5 mb-4">
                    <span class="text-xs bg-indigo-50 text-indigo-600 px-2 py-1 rounded-md font-medium">NLU & NLG</span>
                    <span class="text-xs bg-violet-50 text-violet-600 px-2 py-1 rounded-md font-medium">Turing Test</span>
                    <span class="text-xs bg-fuchsia-50 text-fuchsia-600 px-2 py-1 rounded-md font-medium">ELIZA</span>
                    <span class="text-xs bg-emerald-50 text-emerald-600 px-2 py-1 rounded-md font-medium">Sentiment</span>
                    <span class="text-xs bg-amber-50 text-amber-600 px-2 py-1 rounded-md font-medium">Text Mining</span>
                </div>

                <div class="flex items-center justify-between">
                    <span class="text-xs text-slate-400">6 أقسام تفاعلية</span>
                    <span class="text-indigo-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ المراجعة &larr;</span>
                </div>

                <div class="mt-3" id="progress-bar-1">
                    <div class="w-full bg-slate-100 rounded-full h-1.5">
                        <div class="bg-indigo-500 h-1.5 rounded-full transition-all" id="progress-1" style="width: 0%"></div>
                    </div>
                </div>
            </div>
        </a>

        {{-- Lecture 2 --}}
        <a href="{{ route('study.show', 2) }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-violet-400 shadow-sm hover:shadow-lg hover:shadow-violet-100 transition-all p-6 h-full">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-violet-500 to-violet-700 flex items-center justify-center text-white text-xl font-extrabold shadow-md shadow-violet-200">
                        2
                    </div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">المحاضرة الثانية</h2>
                        <p class="text-xs text-slate-400">مهام NLP والتحليل اللغوي</p>
                    </div>
                </div>

                <div class="space-y-2 mb-5">
                    <p class="text-sm text-slate-600 leading-relaxed">التقطيع، تصنيف أجزاء الكلام، التعرف على الكيانات، التحليل النحوي، أشجار التحليل، والتحديات.</p>
                </div>

                <div class="flex flex-wrap gap-1.5 mb-4">
                    <span class="text-xs bg-violet-50 text-violet-600 px-2 py-1 rounded-md font-medium">Tokenization</span>
                    <span class="text-xs bg-emerald-50 text-emerald-600 px-2 py-1 rounded-md font-medium">POS Tagging</span>
                    <span class="text-xs bg-amber-50 text-amber-600 px-2 py-1 rounded-md font-medium">NER</span>
                    <span class="text-xs bg-indigo-50 text-indigo-600 px-2 py-1 rounded-md font-medium">Parsing</span>
                    <span class="text-xs bg-red-50 text-red-600 px-2 py-1 rounded-md font-medium">Ambiguity</span>
                </div>

                <div class="flex items-center justify-between">
                    <span class="text-xs text-slate-400">7 أقسام تفاعلية</span>
                    <span class="text-violet-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ المراجعة &larr;</span>
                </div>

                <div class="mt-3" id="progress-bar-2">
                    <div class="w-full bg-slate-100 rounded-full h-1.5">
                        <div class="bg-violet-500 h-1.5 rounded-full transition-all" id="progress-2" style="width: 0%"></div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<script>
// Load progress from localStorage
document.addEventListener('DOMContentLoaded', function() {
    try {
        var progress = JSON.parse(localStorage.getItem('study_progress') || '{}');
        [1, 2].forEach(function(lec) {
            var sections = progress['lec' + lec] || [];
            var total = lec === 1 ? 6 : 7;
            var done = sections.filter(function(v) { return v === 1; }).length;
            var pct = total > 0 ? Math.round((done / total) * 100) : 0;
            var bar = document.getElementById('progress-' + lec);
            if (bar) bar.style.width = pct + '%';
        });
    } catch(e) {}
});
</script>
@endsection
