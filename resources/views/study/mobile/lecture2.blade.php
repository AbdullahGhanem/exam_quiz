@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'mobile') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-blue-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-blue-600 to-blue-800 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة الثانية: أساسيات Java</h1>
                <p class="text-blue-200 text-sm">Java Fundamentals</p>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 1: ما هي Java؟ --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-blue-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">ما هي Java؟</h2>
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
                    <div class="bg-blue-50/70 rounded-xl p-5 border border-blue-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            <span class="term">Java</span> هي <span class="term">لغة برمجة كائنية التوجه</span> <span class="term-en">(Object-Oriented)</span>
                            مصممة للمرونة وقابلية النقل. أصدرتها شركة <span class="term-en">Sun Microsystems</span> سنة <strong>1995</strong>.
                        </p>
                    </div>

                    {{-- WORA --}}
                    <div class="bg-indigo-50 rounded-xl p-5 border border-indigo-200">
                        <div class="text-center mb-3">
                            <span class="inline-block bg-indigo-600 text-white font-extrabold px-4 py-2 rounded-xl text-lg tracking-wider">WORA</span>
                        </div>
                        <p class="text-center text-sm text-slate-700">
                            <span class="term-en">Write Once, Run Anywhere</span> — <span class="term">اكتب مرة واحدة، شغّل في أي مكان</span>
                        </p>
                        <p class="text-center text-xs text-slate-500 mt-2">
                            الكود يتترجم لـ <span class="term-en">Bytecode</span> يشتغل على أي جهاز فيه <span class="term-en">JVM</span>
                        </p>
                    </div>

                    {{-- Built on C++ --}}
                    <div class="bg-slate-50 rounded-xl p-4 border border-slate-200">
                        <p class="text-sm text-slate-600">
                            Java مبنية على أساس <span class="term-en">C++</span> لكن مع تبسيطات كثيرة (بدون مؤشرات، إدارة ذاكرة تلقائية).
                        </p>
                    </div>

                    {{-- Uses --}}
                    <div class="bg-white rounded-xl p-5 border border-slate-200">
                        <h3 class="font-bold text-blue-700 mb-3">استخدامات Java</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs bg-blue-50 text-blue-600 px-3 py-1.5 rounded-lg font-medium">تطبيقات الويب</span>
                            <span class="text-xs bg-indigo-50 text-indigo-600 px-3 py-1.5 rounded-lg font-medium">تطبيقات الديسكتوب</span>
                            <span class="text-xs bg-emerald-50 text-emerald-600 px-3 py-1.5 rounded-lg font-medium">تطبيقات الموبايل (Android)</span>
                            <span class="text-xs bg-amber-50 text-amber-600 px-3 py-1.5 rounded-lg font-medium">الأنظمة المدمجة</span>
                            <span class="text-xs bg-violet-50 text-violet-600 px-3 py-1.5 rounded-lg font-medium">تطبيقات المؤسسات</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 2: خصائص Java (Java Buzzwords) --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-indigo-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">خصائص Java <span class="term-en">(Java Buzzwords)</span></h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 3000px;">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                    <div class="bg-blue-50 rounded-xl p-4 border border-blue-100 text-center">
                        <p class="font-bold text-blue-700 text-sm mb-1"><span class="term-en">Simple</span></p>
                        <p class="text-xs text-slate-600"><span class="term">بسيطة</span> — سهلة التعلم، بدون مؤشرات</p>
                    </div>
                    <div class="bg-indigo-50 rounded-xl p-4 border border-indigo-100 text-center">
                        <p class="font-bold text-indigo-700 text-sm mb-1"><span class="term-en">Robust</span></p>
                        <p class="text-xs text-slate-600"><span class="term">متينة</span> — إدارة ذاكرة قوية، معالجة أخطاء</p>
                    </div>
                    <div class="bg-violet-50 rounded-xl p-4 border border-violet-100 text-center">
                        <p class="font-bold text-violet-700 text-sm mb-1"><span class="term-en">Portable</span></p>
                        <p class="text-xs text-slate-600"><span class="term">قابلة للنقل</span> — تشتغل على أي نظام فيه JVM</p>
                    </div>
                    <div class="bg-emerald-50 rounded-xl p-4 border border-emerald-100 text-center">
                        <p class="font-bold text-emerald-700 text-sm mb-1"><span class="term-en">Object-Oriented</span></p>
                        <p class="text-xs text-slate-600"><span class="term">كائنية التوجه</span> — كل شي كائن (Object)</p>
                    </div>
                    <div class="bg-red-50 rounded-xl p-4 border border-red-100 text-center">
                        <p class="font-bold text-red-700 text-sm mb-1"><span class="term-en">Secure</span></p>
                        <p class="text-xs text-slate-600"><span class="term">آمنة</span> — بدون مؤشرات مباشرة، Bytecode Verifier</p>
                    </div>
                    <div class="bg-amber-50 rounded-xl p-4 border border-amber-100 text-center">
                        <p class="font-bold text-amber-700 text-sm mb-1"><span class="term-en">Architecture Neutral</span></p>
                        <p class="text-xs text-slate-600"><span class="term">محايدة المعمارية</span> — مستقلة عن المعالج</p>
                    </div>
                    <div class="bg-teal-50 rounded-xl p-4 border border-teal-100 text-center">
                        <p class="font-bold text-teal-700 text-sm mb-1"><span class="term-en">High Performance</span></p>
                        <p class="text-xs text-slate-600"><span class="term">أداء عالي</span> — بفضل JIT Compilation</p>
                    </div>
                    <div class="bg-cyan-50 rounded-xl p-4 border border-cyan-100 text-center">
                        <p class="font-bold text-cyan-700 text-sm mb-1"><span class="term-en">Dynamic</span></p>
                        <p class="text-xs text-slate-600"><span class="term">ديناميكية</span> — تحميل الكلاسات وقت التشغيل</p>
                    </div>
                    <div class="bg-fuchsia-50 rounded-xl p-4 border border-fuchsia-100 text-center">
                        <p class="font-bold text-fuchsia-700 text-sm mb-1"><span class="term-en">Multithreaded</span></p>
                        <p class="text-xs text-slate-600"><span class="term">متعددة المسارات</span> — تنفيذ مهام متوازية</p>
                    </div>
                    <div class="bg-purple-50 rounded-xl p-4 border border-purple-100 text-center">
                        <p class="font-bold text-purple-700 text-sm mb-1"><span class="term-en">Platform Independent</span></p>
                        <p class="text-xs text-slate-600"><span class="term">مستقلة عن المنصة</span> — WORA</p>
                    </div>
                    <div class="bg-slate-50 rounded-xl p-4 border border-slate-200 text-center">
                        <p class="font-bold text-slate-700 text-sm mb-1"><span class="term-en">Interpreted</span></p>
                        <p class="text-xs text-slate-600"><span class="term">مُفسَّرة</span> — Bytecode يُفسَّر بواسطة JVM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 3: مميزات تعلم Java --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-emerald-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">مميزات تعلم Java</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec3', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec3" style="max-height: 2000px;">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                    <div class="bg-emerald-50 rounded-xl p-4 border border-emerald-100 flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-emerald-500 flex items-center justify-center shrink-0 mt-0.5">
                            <span class="text-white text-sm font-bold">1</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-emerald-700 text-sm"><span class="term">استقلال المنصة</span></h4>
                            <p class="text-xs text-slate-600 mt-1">الكود يشتغل على أي نظام تشغيل بدون تعديل</p>
                        </div>
                    </div>
                    <div class="bg-blue-50 rounded-xl p-4 border border-blue-100 flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center shrink-0 mt-0.5">
                            <span class="text-white text-sm font-bold">2</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-blue-700 text-sm"><span class="term">كائنية التوجه</span></h4>
                            <p class="text-xs text-slate-600 mt-1">تنظيم الكود في كائنات قابلة لإعادة الاستخدام</p>
                        </div>
                    </div>
                    <div class="bg-violet-50 rounded-xl p-4 border border-violet-100 flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-violet-500 flex items-center justify-center shrink-0 mt-0.5">
                            <span class="text-white text-sm font-bold">3</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-violet-700 text-sm"><span class="term">مكتبة قياسية غنية</span></h4>
                            <p class="text-xs text-slate-600 mt-1">آلاف الكلاسات الجاهزة للاستخدام</p>
                        </div>
                    </div>
                    <div class="bg-red-50 rounded-xl p-4 border border-red-100 flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-red-500 flex items-center justify-center shrink-0 mt-0.5">
                            <span class="text-white text-sm font-bold">4</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-red-700 text-sm"><span class="term">الأمان</span></h4>
                            <p class="text-xs text-slate-600 mt-1">بدون مؤشرات مباشرة، Bytecode Verifier، Security Manager</p>
                        </div>
                    </div>
                    <div class="bg-amber-50 rounded-xl p-4 border border-amber-100 flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-amber-500 flex items-center justify-center shrink-0 mt-0.5">
                            <span class="text-white text-sm font-bold">5</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-amber-700 text-sm"><span class="term">طلب عالي في السوق</span></h4>
                            <p class="text-xs text-slate-600 mt-1">من أكثر اللغات المطلوبة في سوق العمل</p>
                        </div>
                    </div>
                    <div class="bg-teal-50 rounded-xl p-4 border border-teal-100 flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-teal-500 flex items-center justify-center shrink-0 mt-0.5">
                            <span class="text-white text-sm font-bold">6</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-teal-700 text-sm"><span class="term">أداء عالي</span> <span class="term-en">(JIT Compilation)</span></h4>
                            <p class="text-xs text-slate-600 mt-1">أسرع من <span class="term-en">Python</span> بفضل ترجمة <span class="term-en">Just-In-Time</span></p>
                        </div>
                    </div>
                    <div class="bg-cyan-50 rounded-xl p-4 border border-cyan-100 flex items-start gap-3 md:col-span-2">
                        <div class="w-8 h-8 rounded-lg bg-cyan-500 flex items-center justify-center shrink-0 mt-0.5">
                            <span class="text-white text-sm font-bold">7</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-cyan-700 text-sm"><span class="term">جمع القمامة التلقائي</span> <span class="term-en">(Automatic Garbage Collection)</span></h4>
                            <p class="text-xs text-slate-600 mt-1">Java تحذف الكائنات غير المستخدمة تلقائيا من الذاكرة — ما تحتاج تدير الذاكرة يدويا</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 4: كيف تشتغل Java؟ --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-violet-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">كيف تشتغل Java؟</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec4', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec4" style="max-height: 2000px;">
                <div class="space-y-5">
                    {{-- Pipeline Diagram --}}
                    <div class="bg-white rounded-xl p-5 border border-slate-200">
                        <h3 class="font-bold text-violet-700 mb-4 text-center">خطوات تشغيل برنامج Java</h3>
                        <div class="flex flex-col md:flex-row items-center justify-center gap-3">
                            <div class="bg-violet-100 text-violet-700 font-bold px-4 py-3 rounded-xl text-center text-sm min-w-[110px]">
                                <span class="term-en">Source Code</span><br>
                                <span class="text-xs text-violet-500">(.java)</span>
                            </div>
                            <svg class="w-6 h-6 text-violet-400 shrink-0 rotate-90 md:rotate-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                            <div class="bg-blue-100 text-blue-700 font-bold px-4 py-3 rounded-xl text-center text-sm min-w-[110px]">
                                <span class="term-en">Compiler</span><br>
                                <span class="text-xs text-blue-500">(javac)</span>
                            </div>
                            <svg class="w-6 h-6 text-blue-400 shrink-0 rotate-90 md:rotate-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                            <div class="bg-indigo-100 text-indigo-700 font-bold px-4 py-3 rounded-xl text-center text-sm min-w-[110px]">
                                <span class="term-en">Bytecode</span><br>
                                <span class="text-xs text-indigo-500">(.class)</span>
                            </div>
                            <svg class="w-6 h-6 text-indigo-400 shrink-0 rotate-90 md:rotate-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                            <div class="bg-emerald-100 text-emerald-700 font-bold px-4 py-3 rounded-xl text-center text-sm min-w-[110px]">
                                <span class="term-en">JVM</span><br>
                                <span class="text-xs text-emerald-500">Machine Code</span>
                            </div>
                        </div>
                    </div>

                    {{-- Code Example --}}
                    <div class="bg-slate-800 rounded-xl p-5 text-sm font-mono">
                        <p class="text-slate-400 mb-2">// مثال عملي: ملف Party.java</p>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <span class="bg-violet-500 text-white text-xs px-2 py-1 rounded font-bold shrink-0">Step 1</span>
                                <span class="text-slate-300">كتابة الكود في ملف <span class="text-violet-400">Party.java</span></span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="bg-blue-500 text-white text-xs px-2 py-1 rounded font-bold shrink-0">Step 2</span>
                                <span class="text-slate-300"><span class="text-blue-400">javac Party.java</span> — ترجمة الكود</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="bg-indigo-500 text-white text-xs px-2 py-1 rounded font-bold shrink-0">Step 3</span>
                                <span class="text-slate-300">ينتج ملف <span class="text-indigo-400">Party.class</span> (Bytecode)</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="bg-emerald-500 text-white text-xs px-2 py-1 rounded font-bold shrink-0">Step 4</span>
                                <span class="text-slate-300"><span class="text-emerald-400">java Party</span> — تشغيل البرنامج</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 flex items-start gap-3">
                        <span class="text-amber-500 text-xl mt-0.5">💡</span>
                        <p class="text-sm text-amber-800">
                            <span class="term-en">Bytecode</span> هو كود وسيط بين كود المصدر وكود الجهاز — وهو السر وراء مبدأ <strong>WORA</strong>. أي جهاز فيه <span class="term-en">JVM</span> يقدر يشغل نفس الـ Bytecode.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 5: أدوات Java الثلاثة --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-amber-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17l-5.384 3.18A1.125 1.125 0 014.8 17.355V6.645a1.125 1.125 0 011.236-.994l5.384 3.18M11.42 15.17l5.384-3.18a1.125 1.125 0 000-1.971l-5.384-3.18M11.42 15.17V20.9"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">أدوات Java الثلاثة: JDK و JRE و JVM</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec5', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec5" style="max-height: 2000px;">
                <div class="space-y-5">
                    {{-- Nested Diagram --}}
                    <div class="bg-amber-50 rounded-2xl p-5 border-2 border-amber-300">
                        <h3 class="font-extrabold text-amber-800 text-center mb-1"><span class="term-en">JDK</span> — <span class="term">حزمة التطوير الكاملة</span></h3>
                        <p class="text-xs text-amber-600 text-center mb-4"><span class="term-en">Java Development Kit</span></p>

                        <div class="bg-orange-50 rounded-xl p-4 border-2 border-orange-300 mb-3">
                            <h4 class="font-bold text-orange-800 text-center mb-1"><span class="term-en">JRE</span> — <span class="term">بيئة التشغيل فقط</span></h4>
                            <p class="text-xs text-orange-600 text-center mb-3"><span class="term-en">Java Runtime Environment</span> (بدون مترجم)</p>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                <div class="bg-red-50 rounded-lg p-3 border-2 border-red-300 text-center">
                                    <p class="font-bold text-red-800 text-sm"><span class="term-en">JVM</span></p>
                                    <p class="text-xs text-red-600"><span class="term">الآلة الافتراضية</span></p>
                                    <p class="text-xs text-slate-500 mt-1">تترجم البايتكود لكود الجهاز</p>
                                </div>
                                <div class="bg-yellow-50 rounded-lg p-3 border border-yellow-300 text-center">
                                    <p class="font-bold text-yellow-800 text-sm"><span class="term-en">Class Libraries</span></p>
                                    <p class="text-xs text-yellow-600"><span class="term">المكتبات القياسية</span></p>
                                    <p class="text-xs text-slate-500 mt-1">كلاسات جاهزة للاستخدام</p>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-2">
                            <div class="bg-amber-100 rounded-lg p-2 text-center border border-amber-200">
                                <p class="text-xs font-bold text-amber-700"><span class="term-en">Compilers</span></p>
                                <p class="text-xs text-slate-500">المترجمات</p>
                            </div>
                            <div class="bg-amber-100 rounded-lg p-2 text-center border border-amber-200">
                                <p class="text-xs font-bold text-amber-700"><span class="term-en">Debuggers</span></p>
                                <p class="text-xs text-slate-500">أدوات التنقيح</p>
                            </div>
                            <div class="bg-amber-100 rounded-lg p-2 text-center border border-amber-200">
                                <p class="text-xs font-bold text-amber-700"><span class="term-en">JavaDoc</span></p>
                                <p class="text-xs text-slate-500">توثيق الكود</p>
                            </div>
                        </div>
                    </div>

                    {{-- Summary --}}
                    <div class="bg-white rounded-xl p-4 border border-slate-200">
                        <h4 class="font-bold text-slate-700 mb-3 text-sm">الخلاصة:</h4>
                        <ul class="text-sm text-slate-600 space-y-2">
                            <li class="flex items-start gap-2">
                                <span class="text-amber-500 font-bold">JDK</span>
                                <span>= حزمة التطوير الكاملة (JRE + أدوات التطوير) — <strong>للمطورين</strong></span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-orange-500 font-bold">JRE</span>
                                <span>= بيئة التشغيل (JVM + المكتبات) — <strong>لتشغيل البرامج فقط</strong></span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-red-500 font-bold">JVM</span>
                                <span>= الآلة الافتراضية (تترجم Bytecode لكود الجهاز) — <strong>قلب Java</strong></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 6: أنواع الأخطاء الثلاثة --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-red-500">
            <button onclick="toggleSection('sec6')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-red-100 flex items-center justify-center text-red-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">أنواع الأخطاء الثلاثة</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec6', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec6" style="max-height: 2000px;">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    {{-- Syntax Errors --}}
                    <div class="bg-red-50 rounded-xl p-5 border-2 border-red-200">
                        <div class="w-10 h-10 rounded-full bg-red-500 flex items-center justify-center mx-auto mb-3">
                            <span class="text-white font-bold">1</span>
                        </div>
                        <h3 class="font-bold text-red-700 text-center text-sm mb-2">
                            <span class="term">أخطاء نحوية</span><br>
                            <span class="term-en">(Syntax Errors)</span>
                        </h3>
                        <p class="text-xs text-slate-600 text-center mb-2">
                            أخطاء في كتابة الكود (نقص فاصلة منقوطة، قوس مفتوح...)
                        </p>
                        <div class="bg-red-100 rounded-lg p-2 text-center">
                            <p class="text-xs text-red-700 font-semibold"><span class="term">المترجم يكتشفها</span> قبل التشغيل</p>
                        </div>
                    </div>

                    {{-- Runtime Errors --}}
                    <div class="bg-amber-50 rounded-xl p-5 border-2 border-amber-200">
                        <div class="w-10 h-10 rounded-full bg-amber-500 flex items-center justify-center mx-auto mb-3">
                            <span class="text-white font-bold">2</span>
                        </div>
                        <h3 class="font-bold text-amber-700 text-center text-sm mb-2">
                            <span class="term">أخطاء وقت التشغيل</span><br>
                            <span class="term-en">(Runtime Errors)</span>
                        </h3>
                        <p class="text-xs text-slate-600 text-center mb-2">
                            تقع أثناء تشغيل البرنامج (مثل القسمة على صفر، ملف غير موجود)
                        </p>
                        <div class="bg-amber-100 rounded-lg p-2 text-center">
                            <p class="text-xs text-amber-700 font-semibold">تظهر <span class="term">أثناء التشغيل</span></p>
                        </div>
                    </div>

                    {{-- Logical Errors --}}
                    <div class="bg-purple-50 rounded-xl p-5 border-2 border-purple-200">
                        <div class="w-10 h-10 rounded-full bg-purple-500 flex items-center justify-center mx-auto mb-3">
                            <span class="text-white font-bold">3</span>
                        </div>
                        <h3 class="font-bold text-purple-700 text-center text-sm mb-2">
                            <span class="term">أخطاء منطقية</span><br>
                            <span class="term-en">(Logical Errors)</span>
                        </h3>
                        <p class="text-xs text-slate-600 text-center mb-2">
                            البرنامج يشتغل بدون أخطاء لكن النتائج غلط
                        </p>
                        <div class="bg-purple-100 rounded-lg p-2 text-center">
                            <p class="text-xs text-purple-700 font-semibold"><span class="term">الأصعب في الاكتشاف</span></p>
                        </div>
                    </div>
                </div>

                <div class="bg-red-50 border border-red-200 rounded-xl p-4 flex items-start gap-3 mt-4">
                    <span class="text-red-500 text-xl mt-0.5">⚠️</span>
                    <p class="text-sm text-red-800">
                        <strong>الأخطاء المنطقية</strong> هي الأصعب لأن البرنامج ما يعطيك أي رسالة خطأ — لازم تراجع المنطق بنفسك!
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 7: بيئة التطوير Eclipse IDE --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-slate-500">
            <button onclick="toggleSection('sec7')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center text-slate-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">بيئة التطوير Eclipse IDE</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec7', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec7" style="max-height: 2000px;">
                <div class="space-y-5">
                    <div class="bg-slate-50 rounded-xl p-5 border border-slate-200">
                        <p class="text-slate-700 leading-relaxed text-sm">
                            <span class="term-en">Eclipse</span> هي <span class="term">بيئة تطوير متكاملة</span> <span class="term-en">(IDE — Integrated Development Environment)</span>
                            مفتوحة المصدر تُستخدم في هذا المقرر لكتابة وتشغيل برامج Java.
                        </p>
                    </div>

                    <div class="bg-white rounded-xl p-5 border border-slate-200">
                        <h3 class="font-bold text-slate-700 mb-3 text-sm">خطوات إنشاء مشروع Java في Eclipse:</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-3 bg-slate-50 rounded-lg p-3">
                                <span class="w-7 h-7 rounded-full bg-slate-700 text-white text-xs font-bold flex items-center justify-center shrink-0">1</span>
                                <span class="text-sm text-slate-600">افتح <span class="term-en">Eclipse</span> واختر <span class="term-en">File → New → Java Project</span></span>
                            </div>
                            <div class="flex items-center gap-3 bg-slate-50 rounded-lg p-3">
                                <span class="w-7 h-7 rounded-full bg-slate-700 text-white text-xs font-bold flex items-center justify-center shrink-0">2</span>
                                <span class="text-sm text-slate-600">أنشئ كلاس جديد: <span class="term-en">src → New → Class</span></span>
                            </div>
                            <div class="flex items-center gap-3 bg-slate-50 rounded-lg p-3">
                                <span class="w-7 h-7 rounded-full bg-slate-700 text-white text-xs font-bold flex items-center justify-center shrink-0">3</span>
                                <span class="text-sm text-slate-600">اكتب الكود داخل <span class="term-en">public static void main(String[] args)</span></span>
                            </div>
                            <div class="flex items-center gap-3 bg-slate-50 rounded-lg p-3">
                                <span class="w-7 h-7 rounded-full bg-slate-700 text-white text-xs font-bold flex items-center justify-center shrink-0">4</span>
                                <span class="text-sm text-slate-600">شغّل البرنامج: <span class="term-en">Run → Run As → Java Application</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 8: اختبر نفسك --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-cyan-500">
            <button onclick="toggleSection('sec8')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center text-cyan-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">اختبر نفسك</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec8', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec8" style="max-height: 2000px;">
                <p class="text-sm text-slate-500 mb-5">اضغط على البطاقة لرؤية الإجابة</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    {{-- Flashcard 1 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">1</span>
                                <p class="font-bold text-base">ما معنى WORA؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-blue-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    <strong class="text-blue-600">Write Once, Run Anywhere</strong><br><br>
                                    اكتب الكود مرة واحدة وشغّله على أي جهاز فيه <span class="term-en">JVM</span> بدون تعديل
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 2 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">2</span>
                                <p class="font-bold text-base">ما الفرق بين JDK و JRE و JVM؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-amber-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    <strong class="text-amber-600">JDK</strong> = حزمة التطوير الكاملة (JRE + أدوات)<br>
                                    <strong class="text-orange-600">JRE</strong> = بيئة التشغيل (JVM + مكتبات)<br>
                                    <strong class="text-red-600">JVM</strong> = الآلة الافتراضية (تترجم Bytecode)
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 3 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-violet-500 to-purple-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">3</span>
                                <p class="font-bold text-base">ما الخطوات من كتابة الكود لتشغيله؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-violet-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    1. كتابة الكود في ملف <strong class="text-violet-600">.java</strong><br>
                                    2. ترجمة بـ <strong class="text-blue-600">javac</strong> ← ملف <strong>.class</strong><br>
                                    3. تشغيل بـ <strong class="text-emerald-600">java</strong> ← JVM تترجم Bytecode
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 4 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-red-500 to-rose-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">4</span>
                                <p class="font-bold text-base">ما هو أصعب نوع أخطاء في الاكتشاف؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-red-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    <strong class="text-purple-600">الأخطاء المنطقية (Logical Errors)</strong><br><br>
                                    لأن البرنامج يشتغل بدون رسائل خطأ<br>لكن النتائج تكون غلط!
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

    function getProgress() {
        try {
            return JSON.parse(localStorage.getItem('study_progress') || '{}');
        } catch {
            return {};
        }
    }

    function saveProgress(progress) {
        localStorage.setItem('study_progress', JSON.stringify(progress));
    }

    function markDone(sectionId, btn) {
        const progress = getProgress();
        if (!progress.mobile_lec2) progress.mobile_lec2 = [];

        const idx = progress.mobile_lec2.indexOf(sectionId);
        if (idx === -1) {
            progress.mobile_lec2.push(sectionId);
            btn.classList.remove('text-slate-400', 'border-slate-200');
            btn.classList.add('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
            btn.textContent = 'تم ✓';
        } else {
            progress.mobile_lec2.splice(idx, 1);
            btn.classList.add('text-slate-400', 'border-slate-200');
            btn.classList.remove('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
            btn.textContent = 'تم';
        }

        saveProgress(progress);
    }

    document.addEventListener('DOMContentLoaded', function() {
        const progress = getProgress();
        if (progress.mobile_lec2 && progress.mobile_lec2.length > 0) {
            progress.mobile_lec2.forEach(function(sectionId) {
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
