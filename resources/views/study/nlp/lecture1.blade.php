@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'nlp') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-indigo-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-indigo-600 to-violet-600 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة الأولى: مقدمة في معالجة اللغات الطبيعية</h1>
                <p class="text-indigo-200 text-sm">NLP Introduction</p>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 1: ما هي معالجة اللغة الطبيعية؟ --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-indigo-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">ما هي معالجة اللغة الطبيعية؟</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec1', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec1" style="max-height: 2000px;">
                <div class="space-y-5">
                    {{-- Definition --}}
                    <div class="bg-indigo-50/70 rounded-xl p-5 border border-indigo-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            <span class="term">معالجة اللغة الطبيعية</span> <span class="term-en">(NLP — Natural Language Processing)</span>
                            هو فرع من <span class="term">الذكاء الاصطناعي</span> يهدف لجعل الكمبيوتر <strong>يفهم</strong> و<strong>ينتج</strong> اللغة البشرية.
                        </p>
                    </div>

                    {{-- NLU vs NLG Diagram --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-6">
                        <div class="flex flex-col items-center gap-4">
                            <div class="flex items-center gap-3 md:gap-6 flex-wrap justify-center w-full">
                                {{-- Language (Input) --}}
                                <div class="bg-violet-100 text-violet-700 font-bold px-5 py-3 rounded-xl text-center min-w-[100px]">
                                    🗣️ اللغة البشرية
                                </div>

                                {{-- NLU Arrow --}}
                                <div class="flex flex-col items-center">
                                    <span class="text-xs text-slate-500 mb-1">NLU (فهم)</span>
                                    <svg class="w-8 h-8 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                                    </svg>
                                </div>

                                {{-- Computer --}}
                                <div class="bg-slate-800 text-white font-bold px-5 py-3 rounded-xl text-center min-w-[100px]">
                                    🖥️ الكمبيوتر
                                </div>

                                {{-- NLG Arrow --}}
                                <div class="flex flex-col items-center">
                                    <span class="text-xs text-slate-500 mb-1">NLG (توليد)</span>
                                    <svg class="w-8 h-8 text-emerald-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                                    </svg>
                                </div>

                                {{-- Language (Output) --}}
                                <div class="bg-emerald-100 text-emerald-700 font-bold px-5 py-3 rounded-xl text-center min-w-[100px]">
                                    📝 اللغة البشرية
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- NLU Detail --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-indigo-50 rounded-xl p-5 border border-indigo-100">
                            <h3 class="font-bold text-indigo-700 mb-2">🔍 NLU — فهم اللغة</h3>
                            <p class="text-sm text-slate-600 mb-3">تحويل اللغة البشرية إلى تمثيل مفيد للكمبيوتر.</p>
                            <p class="text-sm text-slate-600 font-semibold mb-1">يحتاج:</p>
                            <ul class="text-sm text-slate-600 space-y-1 list-disc list-inside">
                                <li>تحليل <span class="term">صرفي</span> <span class="term-en">(Morphological)</span></li>
                                <li>تحليل <span class="term">نحوي</span> <span class="term-en">(Syntactic)</span></li>
                                <li>تحليل <span class="term">دلالي</span> <span class="term-en">(Semantic)</span></li>
                                <li>تحليل <span class="term">سياقي</span> <span class="term-en">(Pragmatic)</span></li>
                            </ul>
                        </div>

                        <div class="bg-emerald-50 rounded-xl p-5 border border-emerald-100">
                            <h3 class="font-bold text-emerald-700 mb-2">✍️ NLG — توليد اللغة</h3>
                            <p class="text-sm text-slate-600 mb-3">إنتاج لغة بشرية من بيانات الكمبيوتر.</p>
                            <p class="text-sm text-slate-600 font-semibold mb-1">يحتاج:</p>
                            <ul class="text-sm text-slate-600 space-y-1 list-disc list-inside">
                                <li><span class="term">تخطيط عميق</span> <span class="term-en">(Deep Planning)</span></li>
                                <li><span class="term">توليد نحوي</span> <span class="term-en">(Syntactic Generation)</span></li>
                            </ul>
                        </div>
                    </div>

                    {{-- Important Note --}}
                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 flex items-start gap-3">
                        <span class="text-amber-500 text-xl mt-0.5">⚠️</span>
                        <p class="text-sm text-amber-800 font-semibold">
                            الفهم <span class="term-en">(NLU)</span> <strong>أصعب بكثير</strong> من التوليد <span class="term-en">(NLG)</span> — لأنه يتطلب فهم السياق والغموض والمعاني المتعددة.
                        </p>
                    </div>

                    {{-- Intersection --}}
                    <div class="bg-slate-50 rounded-xl p-4 border border-slate-200">
                        <p class="text-sm text-slate-600">
                            <span class="term">NLP</span> يقع عند تقاطع عدة مجالات:
                            <span class="term">الذكاء الاصطناعي</span> <span class="term-en">(AI)</span>،
                            <span class="term">تعلم الآلة</span> <span class="term-en">(ML)</span>،
                            <span class="term">التعلم العميق</span> <span class="term-en">(DL)</span>، و
                            <span class="term">اللسانيات</span> <span class="term-en">(Linguistics)</span>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 2: المستويات اللغوية --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-emerald-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">المستويات اللغوية</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 3000px;">
                <p class="text-sm text-slate-500 mb-5">المستويات من الأسطح (الأسهل) إلى الأعمق:</p>

                <div class="relative">
                    {{-- Vertical line --}}
                    <div class="absolute top-0 bottom-0 start-5 w-0.5 bg-gradient-to-b from-emerald-300 via-teal-400 to-indigo-500"></div>

                    <div class="space-y-4">
                        @php
                        $levels = [
                            ['name' => 'الصوتيات', 'en' => 'Phonetics', 'desc' => 'أصوات الكلام', 'note' => 'speech', 'color' => 'emerald', 'num' => 1],
                            ['name' => 'الإملاء', 'en' => 'Orthography', 'desc' => 'الكتابة والرموز المكتوبة', 'note' => 'text', 'color' => 'emerald', 'num' => 2],
                            ['name' => 'علم الأصوات', 'en' => 'Phonology', 'desc' => 'أنماط الأصوات وقواعدها', 'note' => '', 'color' => 'teal', 'num' => 3],
                            ['name' => 'الصرف', 'en' => 'Morphology', 'desc' => 'بنية الكلمات وتصريفاتها', 'note' => '', 'color' => 'teal', 'num' => 4],
                            ['name' => 'المفردات', 'en' => 'Lexemes', 'desc' => 'الكلمات ومعانيها المعجمية', 'note' => '', 'color' => 'cyan', 'num' => 5],
                            ['name' => 'النحو', 'en' => 'Syntax', 'desc' => 'تركيب الجمل وقواعدها', 'note' => '', 'color' => 'blue', 'num' => 6],
                            ['name' => 'الدلالة', 'en' => 'Semantics', 'desc' => 'معنى الجمل والتراكيب', 'note' => '', 'color' => 'violet', 'num' => 7],
                            ['name' => 'التداولية', 'en' => 'Pragmatics', 'desc' => 'المعنى في السياق الاجتماعي', 'note' => '', 'color' => 'purple', 'num' => 8],
                            ['name' => 'الخطاب', 'en' => 'Discourse', 'desc' => 'فهم النص ككل — الأعمق', 'note' => '', 'color' => 'indigo', 'num' => 9],
                        ];
                        @endphp

                        @foreach($levels as $level)
                        <div class="relative flex items-start gap-4 ps-0">
                            {{-- Number circle --}}
                            <div class="relative z-10 w-10 h-10 rounded-full bg-{{ $level['color'] }}-100 border-2 border-{{ $level['color'] }}-400 flex items-center justify-center text-{{ $level['color'] }}-700 font-bold text-sm flex-shrink-0">
                                {{ $level['num'] }}
                            </div>
                            {{-- Card --}}
                            <div class="flex-1 bg-white rounded-xl border border-slate-200 p-4 border-s-4 border-s-{{ $level['color'] }}-400 hover:shadow-md transition-shadow">
                                <div class="flex items-baseline gap-2 mb-1">
                                    <span class="font-bold text-slate-800">{{ $level['name'] }}</span>
                                    <span class="term-en">({{ $level['en'] }})</span>
                                </div>
                                <p class="text-sm text-slate-600">{{ $level['desc'] }}</p>
                                @if($level['note'])
                                <span class="inline-block mt-1 text-xs bg-slate-100 text-slate-500 px-2 py-0.5 rounded">{{ $level['note'] }}</span>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 3: اختبار تورينغ و ELIZA --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-amber-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">اختبار تورينغ و ELIZA</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec3', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec3" style="max-height: 3000px;">
                <div class="space-y-6">
                    {{-- Turing Test --}}
                    <div>
                        <h3 class="font-bold text-amber-700 text-base mb-3">🧪 اختبار تورينغ <span class="term-en">(Turing Test — 1950)</span></h3>
                        <p class="text-sm text-slate-600 mb-4">
                            اقترحه <span class="term">آلان تورينغ</span> عام 1950. الفكرة: قاضٍ بشري يتحدث مع <strong>إنسان</strong> و<strong>آلة</strong> عبر نص مكتوب.
                            إذا ما قدر القاضي يفرّق بينهم → <strong>الآلة نجحت</strong> في الاختبار.
                        </p>

                        {{-- Chat-bubble visual --}}
                        <div class="bg-amber-50/60 rounded-xl p-5 border border-amber-100">
                            <div class="flex flex-col gap-3 max-w-md mx-auto">
                                <div class="text-center text-xs text-slate-400 mb-2">محادثة عبر نص مكتوب</div>

                                <div class="flex items-start gap-2">
                                    <div class="w-8 h-8 rounded-full bg-amber-200 flex items-center justify-center text-xs font-bold text-amber-700 flex-shrink-0">👨‍⚖️</div>
                                    <div class="bg-white rounded-xl rounded-tr-sm px-4 py-2 text-sm text-slate-700 border border-amber-100 shadow-sm">
                                        هل أنت إنسان؟
                                    </div>
                                </div>

                                <div class="flex items-start gap-2 justify-end">
                                    <div class="bg-blue-50 rounded-xl rounded-tl-sm px-4 py-2 text-sm text-slate-700 border border-blue-100 shadow-sm">
                                        نعم، أنا إنسان حقيقي 😊
                                    </div>
                                    <div class="w-8 h-8 rounded-full bg-blue-200 flex items-center justify-center text-xs font-bold text-blue-700 flex-shrink-0">👤</div>
                                </div>

                                <div class="flex items-start gap-2 justify-end">
                                    <div class="bg-slate-100 rounded-xl rounded-tl-sm px-4 py-2 text-sm text-slate-700 border border-slate-200 shadow-sm">
                                        بالطبع، أنا إنسان أيضاً!
                                    </div>
                                    <div class="w-8 h-8 rounded-full bg-slate-300 flex items-center justify-center text-xs font-bold text-slate-700 flex-shrink-0">🤖</div>
                                </div>

                                <div class="text-center text-xs text-amber-600 font-semibold mt-1">إذا ما فرّق القاضي ← الآلة نجحت ✅</div>
                            </div>
                        </div>
                    </div>

                    <hr class="border-slate-200">

                    {{-- ELIZA --}}
                    <div>
                        <h3 class="font-bold text-amber-700 text-base mb-3">💬 ELIZA <span class="term-en">(1966 — Joseph Weizenbaum)</span></h3>
                        <p class="text-sm text-slate-600 mb-2">
                            أول برنامج محادثة في التاريخ. يمثّل دور <span class="term">معالج نفسي</span> <span class="term-en">(Psychotherapist)</span>.
                        </p>
                        <p class="text-sm text-slate-600 mb-4">
                            لا يفهم فعلياً — يستخدم <span class="term">مطابقة أنماط بسيطة</span> <span class="term-en">(Pattern Matching)</span>
                            لإنتاج <span class="term">ردود جاهزة</span> <span class="term-en">(Canned Responses)</span>.
                        </p>

                        {{-- ELIZA chat example --}}
                        <div class="bg-slate-900 rounded-xl p-5 border border-slate-700">
                            <div class="text-center text-xs text-slate-500 mb-3 font-mono">ELIZA — Psychotherapist Mode</div>
                            <div class="flex flex-col gap-3 max-w-sm mx-auto">
                                <div class="flex items-start gap-2 justify-end">
                                    <div class="bg-blue-600 rounded-xl rounded-tl-sm px-4 py-2 text-sm text-white">
                                        I'm feeling sad today
                                    </div>
                                    <div class="w-7 h-7 rounded-full bg-blue-400 flex items-center justify-center text-xs text-white flex-shrink-0">U</div>
                                </div>

                                <div class="flex items-start gap-2">
                                    <div class="w-7 h-7 rounded-full bg-green-500 flex items-center justify-center text-xs text-white flex-shrink-0">E</div>
                                    <div class="bg-slate-700 rounded-xl rounded-tr-sm px-4 py-2 text-sm text-slate-200">
                                        Why do you say you are feeling sad?
                                    </div>
                                </div>

                                <div class="flex items-start gap-2 justify-end">
                                    <div class="bg-blue-600 rounded-xl rounded-tl-sm px-4 py-2 text-sm text-white">
                                        My mother doesn't understand me
                                    </div>
                                    <div class="w-7 h-7 rounded-full bg-blue-400 flex items-center justify-center text-xs text-white flex-shrink-0">U</div>
                                </div>

                                <div class="flex items-start gap-2">
                                    <div class="w-7 h-7 rounded-full bg-green-500 flex items-center justify-center text-xs text-white flex-shrink-0">E</div>
                                    <div class="bg-slate-700 rounded-xl rounded-tr-sm px-4 py-2 text-sm text-slate-200">
                                        Tell me more about your mother.
                                    </div>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500 text-center mt-3">مجرد مطابقة أنماط — لا فهم حقيقي!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 4: تطبيقات NLP --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-violet-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">تطبيقات NLP</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec4', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec4" style="max-height: 2000px;">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    {{-- Text Analytics --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-2xl">📊</span>
                            <div>
                                <h3 class="font-bold text-slate-800">تحليل النصوص</h3>
                                <span class="term-en">(Text Analytics)</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            تنقيب في <span class="term">بيانات غير منظمة</span>: مدونات، تعليقات، مراجعات.
                            يستخرج <strong>كيانات</strong> و<strong>مفاهيم</strong> و<strong>مشاعر</strong>.
                        </p>
                    </div>

                    {{-- Conversational Agents --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-2xl">🗣️</span>
                            <div>
                                <h3 class="font-bold text-slate-800">الوكلاء المحادثة</h3>
                                <span class="term-en">(Conversational Agents)</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            مثل <strong>Siri</strong>، <strong>Cortana</strong>، <strong>Alexa</strong>.
                            تجمع <span class="term">التعرف على الكلام</span> <span class="term-en">(Speech Recognition)</span>
                            مع <span class="term">الإجابة على الأسئلة</span> <span class="term-en">(QA)</span>.
                        </p>
                    </div>

                    {{-- Machine Translation --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-2xl">🌍</span>
                            <div>
                                <h3 class="font-bold text-slate-800">الترجمة الآلية</h3>
                                <span class="term-en">(Machine Translation)</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            ترجمة تلقائية بين اللغات. من <strong>أقدم تطبيقات</strong> علوم الحاسب — بدأت في الخمسينيات.
                        </p>
                    </div>

                    {{-- Question Answering --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-2xl">❓</span>
                            <div>
                                <h3 class="font-bold text-slate-800">الإجابة على الأسئلة</h3>
                                <span class="term-en">(Question Answering)</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            تقدم <span class="term">إجابة مباشرة</span> بدل إرجاع مستندات كاملة.
                            مثال شهير: <strong>IBM Watson</strong> في برنامج <strong>Jeopardy!</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 5: التعلم الخاضع للإشراف vs غير الخاضع --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-fuchsia-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-fuchsia-100 flex items-center justify-center text-fuchsia-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">التعلم الخاضع للإشراف vs غير الخاضع</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec5', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec5" style="max-height: 2000px;">
                <div class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        {{-- Supervised --}}
                        <div class="bg-fuchsia-50 rounded-xl p-5 border border-fuchsia-200">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-xl">🏷️</span>
                                <h3 class="font-bold text-fuchsia-700">تعلم خاضع للإشراف</h3>
                            </div>
                            <p class="term-en mb-3">(Supervised Learning)</p>
                            <p class="text-sm text-slate-600 mb-3">يحتاج <span class="term">بيانات مصنفة</span> <span class="term-en">(Labeled Data)</span> للتدريب.</p>
                            <p class="text-xs font-semibold text-slate-500 mb-2">أمثلة في NLP:</p>
                            <ul class="text-sm text-slate-600 space-y-1.5">
                                <li class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-fuchsia-400 flex-shrink-0"></span>
                                    كشف <span class="term">البريد المزعج</span> <span class="term-en">(Spam Detection)</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-fuchsia-400 flex-shrink-0"></span>
                                    <span class="term">تحليل المشاعر</span> <span class="term-en">(Sentiment Analysis)</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-fuchsia-400 flex-shrink-0"></span>
                                    <span class="term">تصنيف النوايا</span> <span class="term-en">(Intent Classification)</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-fuchsia-400 flex-shrink-0"></span>
                                    <span class="term">نمذجة الاحتيال</span> <span class="term-en">(Fraud Modeling)</span>
                                </li>
                            </ul>
                        </div>

                        {{-- Unsupervised --}}
                        <div class="bg-cyan-50 rounded-xl p-5 border border-cyan-200">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-xl">🔍</span>
                                <h3 class="font-bold text-cyan-700">تعلم غير خاضع للإشراف</h3>
                            </div>
                            <p class="term-en mb-3">(Unsupervised Learning)</p>
                            <p class="text-sm text-slate-600 mb-3"><strong>بدون</strong> تصنيف مسبق — يكتشف الأنماط تلقائياً.</p>
                            <p class="text-xs font-semibold text-slate-500 mb-2">أمثلة في NLP:</p>
                            <ul class="text-sm text-slate-600 space-y-1.5">
                                <li class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 flex-shrink-0"></span>
                                    <span class="term">نمذجة المواضيع</span> <span class="term-en">(Topic Modeling)</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 flex-shrink-0"></span>
                                    استخراج <span class="term">الكلمات المفتاحية</span> <span class="term-en">(Keyword Extraction)</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 flex-shrink-0"></span>
                                    كشف <span class="term">الاتجاهات</span> <span class="term-en">(Trend Detection)</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 flex-shrink-0"></span>
                                    <span class="term">تجميع النصوص</span> <span class="term-en">(Text Clustering)</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Sentiment note --}}
                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 flex items-start gap-3">
                        <span class="text-amber-500 text-lg mt-0.5">💡</span>
                        <p class="text-sm text-amber-800">
                            <strong>ملاحظة:</strong> <span class="term">تحليل المشاعر</span> <span class="term-en">(Sentiment Analysis)</span>
                            يمكن أن يكون <strong>supervised</strong> (مع بيانات مصنفة) أو <strong>unsupervised</strong> (بدون تصنيف).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 6: اختبر نفسك (Flashcards) --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-violet-500">
            <button onclick="toggleSection('sec6')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">اختبر نفسك</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec6', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec6" style="max-height: 2000px;">
                <p class="text-sm text-slate-500 mb-5">اضغط على البطاقة لرؤية الإجابة 👇</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    {{-- Flashcard 1 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-indigo-500 to-violet-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">🤔</span>
                                <p class="font-bold text-base">ما الفرق بين NLU و NLG؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-indigo-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    <strong class="text-indigo-600">NLU</strong> = فهم اللغة (تحويل اللغة لتمثيل مفيد)<br>
                                    <strong class="text-emerald-600">NLG</strong> = توليد اللغة (إنتاج لغة من بيانات)<br><br>
                                    <span class="text-amber-600 font-semibold">الفهم أصعب بكثير!</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 2 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">📅</span>
                                <p class="font-bold text-base">متى اُقترح اختبار تورينغ؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-amber-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    سنة <strong class="text-amber-600">1950</strong> بواسطة <strong>آلان تورينغ</strong>.<br><br>
                                    القاضي يتحدث مع إنسان وآلة عبر نص مكتوب.<br>
                                    إذا ما فرّق بينهم → <span class="text-emerald-600 font-semibold">الآلة نجحت ✅</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 3 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">📚</span>
                                <p class="font-bold text-base">ما هي المستويات اللغوية من الأسهل للأعمق؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-emerald-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    الصوتيات ← الإملاء ← علم الأصوات ← <strong>الصرف</strong> ← المفردات ← <strong>النحو</strong> ← <strong>الدلالة</strong> ← التداولية ← <strong class="text-indigo-600">الخطاب</strong> (الأعمق)
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 4 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-fuchsia-500 to-pink-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">🏷️</span>
                                <p class="font-bold text-base">اذكر 3 تطبيقات supervised في NLP</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-fuchsia-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    1. كشف <strong class="text-fuchsia-600">البريد المزعج</strong> (Spam)<br>
                                    2. <strong class="text-fuchsia-600">تحليل المشاعر</strong> (Sentiment)<br>
                                    3. <strong class="text-fuchsia-600">تصنيف النوايا</strong> (Intent)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    // Toggle section collapse/expand
    function toggleSection(id) {
        const section = document.getElementById(id);
        const chevron = document.getElementById('chevron-' + id);

        if (section.classList.contains('collapsed')) {
            section.classList.remove('collapsed');
            section.style.maxHeight = section.scrollHeight + 'px';
            chevron.classList.remove('rotated');
        } else {
            section.classList.add('collapsed');
            section.style.maxHeight = '0px';
            chevron.classList.add('rotated');
        }
    }

    // Progress tracking
    function getProgress() {
        try {
            const data = JSON.parse(localStorage.getItem('study_progress') || '{}');
            return data;
        } catch {
            return {};
        }
    }

    function saveProgress(progress) {
        localStorage.setItem('study_progress', JSON.stringify(progress));
    }

    function markDone(sectionId, btn) {
        const progress = getProgress();
        if (!progress.lec1) progress.lec1 = [];

        const idx = progress.lec1.indexOf(sectionId);
        if (idx === -1) {
            progress.lec1.push(sectionId);
            btn.classList.remove('text-slate-400', 'border-slate-200');
            btn.classList.add('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
            btn.textContent = 'تم ✓';
        } else {
            progress.lec1.splice(idx, 1);
            btn.classList.add('text-slate-400', 'border-slate-200');
            btn.classList.remove('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
            btn.textContent = 'تم';
        }

        saveProgress(progress);
    }

    // Restore progress on load
    document.addEventListener('DOMContentLoaded', function() {
        const progress = getProgress();
        if (progress.lec1 && progress.lec1.length > 0) {
            progress.lec1.forEach(function(sectionId) {
                const section = document.getElementById(sectionId);
                if (section) {
                    const btn = section.closest('.card').querySelector('.done-btn');
                    if (btn) {
                        btn.classList.remove('text-slate-400', 'border-slate-200');
                        btn.classList.add('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
                        btn.textContent = 'تم ✓';
                    }
                }
            });
        }
    });
</script>
@endsection
