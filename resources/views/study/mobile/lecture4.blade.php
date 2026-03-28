@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'mobile') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-violet-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-violet-600 to-purple-600 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة الرابعة: الجمل الشرطية</h1>
                <p class="text-violet-200 text-sm">If-Else Statement — Conditional Logic</p>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 1: ما هي الجمل الشرطية؟ --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-violet-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">ما هي الجمل الشرطية؟</h2>
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
                    <div class="bg-violet-50/70 rounded-xl p-5 border border-violet-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            التنفيذ العادي في البرنامج يكون <span class="term">خطي</span> <span class="term-en">(Sequential)</span> — سطر ورا سطر.
                            لكن <span class="term">الجمل الشرطية</span> <span class="term-en">(Conditional Statements)</span> تسمح لنا بتغيير مسار التنفيذ.
                        </p>
                    </div>

                    {{-- Two Types --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-violet-50 rounded-xl p-5 border border-violet-200">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-xl">🔀</span>
                                <h3 class="font-bold text-violet-700">الاختيار</h3>
                            </div>
                            <p class="term-en mb-2">(Selection)</p>
                            <p class="text-sm text-slate-600">هل ننفذ أمر معين أو لا — بناءً على شرط.</p>
                        </div>
                        <div class="bg-purple-50 rounded-xl p-5 border border-purple-200">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-xl">🔁</span>
                                <h3 class="font-bold text-purple-700">التكرار</h3>
                            </div>
                            <p class="term-en mb-2">(Repetition)</p>
                            <p class="text-sm text-slate-600">تكرار تنفيذ أوامر معينة طالما الشرط محقق.</p>
                        </div>
                    </div>

                    {{-- Java Types --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-slate-800 mb-3">أنواع الجمل الشرطية في Java:</h3>
                        <div class="flex flex-wrap gap-3">
                            <span class="bg-violet-100 text-violet-700 font-bold px-4 py-2 rounded-lg text-sm">if</span>
                            <span class="bg-blue-100 text-blue-700 font-bold px-4 py-2 rounded-lg text-sm">if-else</span>
                            <span class="bg-indigo-100 text-indigo-700 font-bold px-4 py-2 rounded-lg text-sm">switch</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 2: جملة if --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-blue-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">جملة if</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 3000px;">
                <div class="space-y-5">
                    {{-- Syntax --}}
                    <div class="bg-blue-50/70 rounded-xl p-5 border border-blue-100">
                        <h3 class="font-bold text-blue-700 mb-3">الصيغة <span class="term-en">(Syntax)</span></h3>
                        <div class="bg-slate-900 rounded-lg p-4 text-sm font-mono text-emerald-400 overflow-x-auto" dir="ltr">
<pre>if (condition)
    statement;</pre>
                        </div>
                        <p class="text-sm text-slate-600 mt-3">
                            الشرط لازم يكون <span class="term">boolean</span> (يرجع <code class="bg-blue-100 px-1 rounded font-mono text-xs">true</code> أو <code class="bg-blue-100 px-1 rounded font-mono text-xs">false</code>).
                            لو <strong>صحيح</strong> → ينفذ الأمر. لو <strong>خطأ</strong> → يتجاوزه.
                        </p>
                    </div>

                    {{-- Visual Flowchart --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-slate-800 mb-4">مسار التنفيذ</h3>
                        <div class="flex flex-col items-center gap-2">
                            {{-- Condition Diamond --}}
                            <div class="w-48 h-16 bg-blue-100 border-2 border-blue-400 flex items-center justify-center font-bold text-blue-700 text-sm" style="clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);">
                                Condition
                            </div>
                            <div class="flex items-start gap-8">
                                {{-- True path --}}
                                <div class="flex flex-col items-center gap-2">
                                    <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded">true</span>
                                    <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3"/></svg>
                                    <div class="bg-emerald-100 border-2 border-emerald-400 rounded-lg px-4 py-2 text-sm font-bold text-emerald-700">Statement</div>
                                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3"/></svg>
                                </div>
                                {{-- False path --}}
                                <div class="flex flex-col items-center gap-2">
                                    <span class="text-xs font-bold text-red-600 bg-red-50 px-2 py-0.5 rounded">false</span>
                                    <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3"/></svg>
                                    <div class="h-10"></div>
                                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3"/></svg>
                                </div>
                            </div>
                            <div class="bg-slate-200 rounded-lg px-4 py-2 text-sm font-bold text-slate-600">Continue...</div>
                        </div>
                    </div>

                    {{-- Code Example --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-slate-800 mb-3">مثال</h3>
                        <div class="bg-slate-900 rounded-lg p-4 text-sm font-mono text-emerald-400 overflow-x-auto leading-relaxed" dir="ltr">
<pre>if (sum > MAX)
    delta = sum - MAX;
System.out.println("The sum is " + sum);
<span class="text-slate-500">// ^ هذا السطر يتنفذ دائماً — خارج الـ if</span></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 3: العوامل العلائقية (Relational Operators) --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-emerald-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">العوامل العلائقية</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec3', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec3" style="max-height: 2000px;">
                <div class="space-y-5">
                    <div class="bg-emerald-50/70 rounded-xl p-5 border border-emerald-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            <span class="term">العوامل العلائقية</span> <span class="term-en">(Relational Operators)</span> تُستخدم للمقارنة بين قيمتين وترجع <span class="term">boolean</span> (true أو false).
                        </p>
                    </div>

                    {{-- Operators Table --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5 overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="border-b-2 border-emerald-200">
                                    <th class="text-start py-3 px-3 text-emerald-700 font-bold">العامل</th>
                                    <th class="text-start py-3 px-3 text-emerald-700 font-bold">المعنى</th>
                                    <th class="text-start py-3 px-3 text-emerald-700 font-bold">مثال</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2.5 px-3 font-mono font-bold text-emerald-600" dir="ltr">==</td>
                                    <td class="py-2.5 px-3 text-slate-600">يساوي</td>
                                    <td class="py-2.5 px-3 font-mono text-xs text-slate-500" dir="ltr">a == b</td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2.5 px-3 font-mono font-bold text-emerald-600" dir="ltr">!=</td>
                                    <td class="py-2.5 px-3 text-slate-600">لا يساوي</td>
                                    <td class="py-2.5 px-3 font-mono text-xs text-slate-500" dir="ltr">a != b</td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2.5 px-3 font-mono font-bold text-emerald-600" dir="ltr">&lt;</td>
                                    <td class="py-2.5 px-3 text-slate-600">أصغر من</td>
                                    <td class="py-2.5 px-3 font-mono text-xs text-slate-500" dir="ltr">a &lt; b</td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2.5 px-3 font-mono font-bold text-emerald-600" dir="ltr">&gt;</td>
                                    <td class="py-2.5 px-3 text-slate-600">أكبر من</td>
                                    <td class="py-2.5 px-3 font-mono text-xs text-slate-500" dir="ltr">a &gt; b</td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2.5 px-3 font-mono font-bold text-emerald-600" dir="ltr">&lt;=</td>
                                    <td class="py-2.5 px-3 text-slate-600">أصغر أو يساوي</td>
                                    <td class="py-2.5 px-3 font-mono text-xs text-slate-500" dir="ltr">a &lt;= b</td>
                                </tr>
                                <tr>
                                    <td class="py-2.5 px-3 font-mono font-bold text-emerald-600" dir="ltr">&gt;=</td>
                                    <td class="py-2.5 px-3 text-slate-600">أكبر أو يساوي</td>
                                    <td class="py-2.5 px-3 font-mono text-xs text-slate-500" dir="ltr">a &gt;= b</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- Important Notes --}}
                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 flex items-start gap-3">
                        <span class="text-amber-500 text-lg mt-0.5">💡</span>
                        <div class="text-sm text-amber-800">
                            <p class="mb-2"><strong>تنبيه مهم:</strong> <code class="bg-amber-100 px-1.5 rounded font-mono text-xs">==</code> (مقارنة) مختلف عن <code class="bg-amber-100 px-1.5 rounded font-mono text-xs">=</code> (تعيين)!</p>
                            <p>العمليات الحسابية <span class="term-en">(Arithmetic)</span> لها <strong>أولوية أعلى</strong> من العمليات العلائقية <span class="term-en">(Relational)</span>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 4: العوامل المنطقية (Logical Operators) --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-amber-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">العوامل المنطقية</h2>
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
                    <div class="bg-amber-50/70 rounded-xl p-5 border border-amber-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            <span class="term">العوامل المنطقية</span> <span class="term-en">(Logical Operators)</span> تأخذ قيم <span class="term">boolean</span> وتنتج نتيجة <span class="term">boolean</span>.
                        </p>
                    </div>

                    {{-- Three Operators --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-red-50 rounded-xl p-5 border border-red-200 text-center">
                            <div class="text-3xl font-mono font-bold text-red-600 mb-2" dir="ltr">!</div>
                            <h3 class="font-bold text-red-700 mb-1">النفي</h3>
                            <p class="term-en">(NOT)</p>
                            <p class="text-xs text-slate-500 mt-2">يعكس القيمة</p>
                        </div>
                        <div class="bg-amber-50 rounded-xl p-5 border border-amber-200 text-center">
                            <div class="text-3xl font-mono font-bold text-amber-600 mb-2" dir="ltr">&&</div>
                            <h3 class="font-bold text-amber-700 mb-1">و</h3>
                            <p class="term-en">(AND)</p>
                            <p class="text-xs text-slate-500 mt-2">كلاهما صحيح</p>
                        </div>
                        <div class="bg-orange-50 rounded-xl p-5 border border-orange-200 text-center">
                            <div class="text-3xl font-mono font-bold text-orange-600 mb-2" dir="ltr">||</div>
                            <h3 class="font-bold text-orange-700 mb-1">أو</h3>
                            <p class="term-en">(OR)</p>
                            <p class="text-xs text-slate-500 mt-2">واحد على الأقل صحيح</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 5: جداول الحقيقة (Truth Tables) — INTERACTIVE --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-indigo-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0112 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 0v1.5c0 .621-.504 1.125-1.125 1.125"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">جداول الحقيقة (تفاعلي)</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec5', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec5" style="max-height: 4000px;">
                <div class="space-y-5">
                    <p class="text-sm text-slate-500">اضغط على الخلايا في عمود "إجابتك" لتبديل القيمة بين true و false، ثم تحقق من إجابتك! 👇</p>

                    {{-- NOT Truth Table --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-red-700 mb-3">جدول NOT <span class="font-mono">(!)</span></h3>
                        <table class="w-full text-sm" id="not-table">
                            <thead>
                                <tr class="border-b-2 border-red-200">
                                    <th class="py-2 px-3 text-start text-slate-600 font-bold" dir="ltr">a</th>
                                    <th class="py-2 px-3 text-start text-indigo-600 font-bold">إجابتك <span class="font-mono" dir="ltr">!a</span></th>
                                    <th class="py-2 px-3 text-start text-slate-400 font-bold">الإجابة الصحيحة</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2 px-3 font-mono font-bold text-emerald-600">true</td>
                                    <td class="py-2 px-3"><button onclick="toggleTruthCell(this)" class="truth-cell font-mono text-sm px-3 py-1 rounded-lg border-2 border-slate-300 bg-slate-50 text-slate-400 font-bold cursor-pointer hover:border-indigo-400 transition-colors" data-value="">???</button></td>
                                    <td class="py-2 px-3 truth-answer font-mono font-bold text-transparent select-none" data-answer="false">false</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-3 font-mono font-bold text-red-600">false</td>
                                    <td class="py-2 px-3"><button onclick="toggleTruthCell(this)" class="truth-cell font-mono text-sm px-3 py-1 rounded-lg border-2 border-slate-300 bg-slate-50 text-slate-400 font-bold cursor-pointer hover:border-indigo-400 transition-colors" data-value="">???</button></td>
                                    <td class="py-2 px-3 truth-answer font-mono font-bold text-transparent select-none" data-answer="true">true</td>
                                </tr>
                            </tbody>
                        </table>
                        <button onclick="checkTruthTable('not-table')" class="mt-3 text-sm px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors font-bold">تحقق من إجابتك</button>
                    </div>

                    {{-- AND Truth Table --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-amber-700 mb-3">جدول AND <span class="font-mono">(&&)</span></h3>
                        <table class="w-full text-sm" id="and-table">
                            <thead>
                                <tr class="border-b-2 border-amber-200">
                                    <th class="py-2 px-3 text-start text-slate-600 font-bold" dir="ltr">a</th>
                                    <th class="py-2 px-3 text-start text-slate-600 font-bold" dir="ltr">b</th>
                                    <th class="py-2 px-3 text-start text-indigo-600 font-bold">إجابتك <span class="font-mono" dir="ltr">a && b</span></th>
                                    <th class="py-2 px-3 text-start text-slate-400 font-bold">الإجابة الصحيحة</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2 px-3 font-mono font-bold text-emerald-600">true</td>
                                    <td class="py-2 px-3 font-mono font-bold text-emerald-600">true</td>
                                    <td class="py-2 px-3"><button onclick="toggleTruthCell(this)" class="truth-cell font-mono text-sm px-3 py-1 rounded-lg border-2 border-slate-300 bg-slate-50 text-slate-400 font-bold cursor-pointer hover:border-indigo-400 transition-colors" data-value="">???</button></td>
                                    <td class="py-2 px-3 truth-answer font-mono font-bold text-transparent select-none" data-answer="true">true</td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2 px-3 font-mono font-bold text-emerald-600">true</td>
                                    <td class="py-2 px-3 font-mono font-bold text-red-600">false</td>
                                    <td class="py-2 px-3"><button onclick="toggleTruthCell(this)" class="truth-cell font-mono text-sm px-3 py-1 rounded-lg border-2 border-slate-300 bg-slate-50 text-slate-400 font-bold cursor-pointer hover:border-indigo-400 transition-colors" data-value="">???</button></td>
                                    <td class="py-2 px-3 truth-answer font-mono font-bold text-transparent select-none" data-answer="false">false</td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2 px-3 font-mono font-bold text-red-600">false</td>
                                    <td class="py-2 px-3 font-mono font-bold text-emerald-600">true</td>
                                    <td class="py-2 px-3"><button onclick="toggleTruthCell(this)" class="truth-cell font-mono text-sm px-3 py-1 rounded-lg border-2 border-slate-300 bg-slate-50 text-slate-400 font-bold cursor-pointer hover:border-indigo-400 transition-colors" data-value="">???</button></td>
                                    <td class="py-2 px-3 truth-answer font-mono font-bold text-transparent select-none" data-answer="false">false</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-3 font-mono font-bold text-red-600">false</td>
                                    <td class="py-2 px-3 font-mono font-bold text-red-600">false</td>
                                    <td class="py-2 px-3"><button onclick="toggleTruthCell(this)" class="truth-cell font-mono text-sm px-3 py-1 rounded-lg border-2 border-slate-300 bg-slate-50 text-slate-400 font-bold cursor-pointer hover:border-indigo-400 transition-colors" data-value="">???</button></td>
                                    <td class="py-2 px-3 truth-answer font-mono font-bold text-transparent select-none" data-answer="false">false</td>
                                </tr>
                            </tbody>
                        </table>
                        <button onclick="checkTruthTable('and-table')" class="mt-3 text-sm px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition-colors font-bold">تحقق من إجابتك</button>
                    </div>

                    {{-- OR Truth Table --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-orange-700 mb-3">جدول OR <span class="font-mono">(||)</span></h3>
                        <table class="w-full text-sm" id="or-table">
                            <thead>
                                <tr class="border-b-2 border-orange-200">
                                    <th class="py-2 px-3 text-start text-slate-600 font-bold" dir="ltr">a</th>
                                    <th class="py-2 px-3 text-start text-slate-600 font-bold" dir="ltr">b</th>
                                    <th class="py-2 px-3 text-start text-indigo-600 font-bold">إجابتك <span class="font-mono" dir="ltr">a || b</span></th>
                                    <th class="py-2 px-3 text-start text-slate-400 font-bold">الإجابة الصحيحة</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2 px-3 font-mono font-bold text-emerald-600">true</td>
                                    <td class="py-2 px-3 font-mono font-bold text-emerald-600">true</td>
                                    <td class="py-2 px-3"><button onclick="toggleTruthCell(this)" class="truth-cell font-mono text-sm px-3 py-1 rounded-lg border-2 border-slate-300 bg-slate-50 text-slate-400 font-bold cursor-pointer hover:border-indigo-400 transition-colors" data-value="">???</button></td>
                                    <td class="py-2 px-3 truth-answer font-mono font-bold text-transparent select-none" data-answer="true">true</td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2 px-3 font-mono font-bold text-emerald-600">true</td>
                                    <td class="py-2 px-3 font-mono font-bold text-red-600">false</td>
                                    <td class="py-2 px-3"><button onclick="toggleTruthCell(this)" class="truth-cell font-mono text-sm px-3 py-1 rounded-lg border-2 border-slate-300 bg-slate-50 text-slate-400 font-bold cursor-pointer hover:border-indigo-400 transition-colors" data-value="">???</button></td>
                                    <td class="py-2 px-3 truth-answer font-mono font-bold text-transparent select-none" data-answer="true">true</td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2 px-3 font-mono font-bold text-red-600">false</td>
                                    <td class="py-2 px-3 font-mono font-bold text-emerald-600">true</td>
                                    <td class="py-2 px-3"><button onclick="toggleTruthCell(this)" class="truth-cell font-mono text-sm px-3 py-1 rounded-lg border-2 border-slate-300 bg-slate-50 text-slate-400 font-bold cursor-pointer hover:border-indigo-400 transition-colors" data-value="">???</button></td>
                                    <td class="py-2 px-3 truth-answer font-mono font-bold text-transparent select-none" data-answer="true">true</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-3 font-mono font-bold text-red-600">false</td>
                                    <td class="py-2 px-3 font-mono font-bold text-red-600">false</td>
                                    <td class="py-2 px-3"><button onclick="toggleTruthCell(this)" class="truth-cell font-mono text-sm px-3 py-1 rounded-lg border-2 border-slate-300 bg-slate-50 text-slate-400 font-bold cursor-pointer hover:border-indigo-400 transition-colors" data-value="">???</button></td>
                                    <td class="py-2 px-3 truth-answer font-mono font-bold text-transparent select-none" data-answer="false">false</td>
                                </tr>
                            </tbody>
                        </table>
                        <button onclick="checkTruthTable('or-table')" class="mt-3 text-sm px-4 py-2 bg-orange-600 text-white rounded-lg hover:bg-orange-700 transition-colors font-bold">تحقق من إجابتك</button>
                    </div>

                    {{-- Precedence --}}
                    <div class="bg-indigo-50 border border-indigo-200 rounded-xl p-4 flex items-start gap-3">
                        <span class="text-indigo-500 text-lg mt-0.5">📌</span>
                        <div class="text-sm text-indigo-800">
                            <strong>ترتيب الأولوية:</strong>
                            <span class="font-mono font-bold text-red-600">!</span> (الأعلى)
                            ← <span class="font-mono font-bold text-amber-600">&&</span>
                            ← <span class="font-mono font-bold text-orange-600">||</span> (الأدنى)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 6: Short-Circuited Operators --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-red-500">
            <button onclick="toggleSection('sec6')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-red-100 flex items-center justify-center text-red-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">Short-Circuited Operators</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec6', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec6" style="max-height: 2000px;">
                <div class="space-y-5">
                    <div class="bg-red-50/70 rounded-xl p-5 border border-red-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            <span class="term">&&</span> و <span class="term">||</span> يستخدمون <span class="term">الاختصار</span> <span class="term-en">(Short-Circuit Evaluation)</span>:
                            لو الطرف <strong>الأيسر</strong> كافي لتحديد النتيجة، الطرف <strong>الأيمن ما يتحقق</strong> أصلاً.
                        </p>
                    </div>

                    {{-- How it works --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-amber-50 rounded-xl p-5 border border-amber-200">
                            <h3 class="font-bold text-amber-700 mb-2 font-mono" dir="ltr">&&  (AND)</h3>
                            <p class="text-sm text-slate-600">لو الطرف الأيسر <strong class="text-red-600">false</strong>، النتيجة حتماً false — ما يحتاج يتحقق من الأيمن.</p>
                        </div>
                        <div class="bg-orange-50 rounded-xl p-5 border border-orange-200">
                            <h3 class="font-bold text-orange-700 mb-2 font-mono" dir="ltr">||  (OR)</h3>
                            <p class="text-sm text-slate-600">لو الطرف الأيسر <strong class="text-emerald-600">true</strong>، النتيجة حتماً true — ما يحتاج يتحقق من الأيمن.</p>
                        </div>
                    </div>

                    {{-- Practical Example --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-slate-800 mb-3">مثال عملي — تجنب القسمة على صفر</h3>
                        <div class="bg-slate-900 rounded-lg p-4 text-sm font-mono text-emerald-400 overflow-x-auto leading-relaxed" dir="ltr">
<pre>if (count != 0 && total/count > MAX)
<span class="text-slate-500">// لو count==0 → الشرط الأول false</span>
<span class="text-slate-500">// فما يتحقق من total/count (يتجنب القسمة على صفر!)</span></pre>
                        </div>
                    </div>

                    {{-- Warning --}}
                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 flex items-start gap-3">
                        <span class="text-amber-500 text-lg mt-0.5">⚠️</span>
                        <p class="text-sm text-amber-800">
                            <strong>تنبيه:</strong> يجب استخدام Short-Circuit بحذر — تأكد أن الطرف الأيمن ما يحتوي على عمليات ضرورية (مثل تعديل متغير) لأنه ممكن ما يتنفذ!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 7: جملة if-else --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-teal-500">
            <button onclick="toggleSection('sec7')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-teal-100 flex items-center justify-center text-teal-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">جملة if-else</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec7', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec7" style="max-height: 3000px;">
                <div class="space-y-5">
                    {{-- Syntax --}}
                    <div class="bg-teal-50/70 rounded-xl p-5 border border-teal-100">
                        <h3 class="font-bold text-teal-700 mb-3">الصيغة <span class="term-en">(Syntax)</span></h3>
                        <div class="bg-slate-900 rounded-lg p-4 text-sm font-mono text-emerald-400 overflow-x-auto" dir="ltr">
<pre>if (condition)
    statement1;
else
    statement2;</pre>
                        </div>
                        <p class="text-sm text-slate-600 mt-3">
                            <strong>واحد فقط</strong> يتنفذ — مش الاثنين! لو الشرط <strong>صحيح</strong> → ينفذ statement1. لو <strong>خطأ</strong> → ينفذ statement2.
                        </p>
                    </div>

                    {{-- Visual Flowchart --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-slate-800 mb-4">مسار التنفيذ</h3>
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-48 h-16 bg-teal-100 border-2 border-teal-400 flex items-center justify-center font-bold text-teal-700 text-sm" style="clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);">
                                Condition
                            </div>
                            <div class="flex items-start gap-8">
                                <div class="flex flex-col items-center gap-2">
                                    <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded">true</span>
                                    <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3"/></svg>
                                    <div class="bg-emerald-100 border-2 border-emerald-400 rounded-lg px-4 py-2 text-sm font-bold text-emerald-700">Statement 1</div>
                                </div>
                                <div class="flex flex-col items-center gap-2">
                                    <span class="text-xs font-bold text-red-600 bg-red-50 px-2 py-0.5 rounded">false</span>
                                    <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3"/></svg>
                                    <div class="bg-red-100 border-2 border-red-400 rounded-lg px-4 py-2 text-sm font-bold text-red-700">Statement 2</div>
                                </div>
                            </div>
                            <div class="bg-slate-200 rounded-lg px-4 py-2 text-sm font-bold text-slate-600 mt-2">Continue...</div>
                        </div>
                    </div>

                    {{-- Code Example --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-slate-800 mb-3">مثال</h3>
                        <div class="bg-slate-900 rounded-lg p-4 text-sm font-mono text-emerald-400 overflow-x-auto leading-relaxed" dir="ltr">
<pre>if (radius >= 0) {
    area = radius * radius * 3.14159;
    System.out.println("Area: " + area);
} else {
    System.out.println("Negative input");
}</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 8: if المتداخلة و else-if --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-fuchsia-500">
            <button onclick="toggleSection('sec8')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-fuchsia-100 flex items-center justify-center text-fuchsia-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">if المتداخلة و else-if</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec8', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec8" style="max-height: 3000px;">
                <div class="space-y-5">
                    {{-- Nested if --}}
                    <div class="bg-fuchsia-50/70 rounded-xl p-5 border border-fuchsia-100">
                        <h3 class="font-bold text-fuchsia-700 mb-3">if المتداخلة <span class="term-en">(Nested if)</span></h3>
                        <p class="text-sm text-slate-600 mb-3">يمكن وضع <span class="term">if</span> داخل <span class="term">if</span> أخرى للتحقق من شروط متعددة متتالية.</p>
                        <div class="bg-slate-900 rounded-lg p-4 text-sm font-mono text-emerald-400 overflow-x-auto leading-relaxed" dir="ltr">
<pre>if (age >= 18) {
    if (hasLicense) {
        System.out.println("Can drive");
    }
}</pre>
                        </div>
                    </div>

                    {{-- else-if chain --}}
                    <div class="bg-purple-50/70 rounded-xl p-5 border border-purple-100">
                        <h3 class="font-bold text-purple-700 mb-3">سلسلة else-if</h3>
                        <p class="text-sm text-slate-600 mb-3">عندك <strong>عدة شروط</strong> وتبي تفحصهم واحد ورا الثاني — أول شرط يتحقق ينفذ الأمر تبعه والباقي يتجاوزه.</p>
                        <div class="bg-slate-900 rounded-lg p-4 text-sm font-mono text-emerald-400 overflow-x-auto leading-relaxed" dir="ltr">
<pre>if (grade >= 90)
    System.out.println("A");
else if (grade >= 80)
    System.out.println("B");
else if (grade >= 70)
    System.out.println("C");
else
    System.out.println("F");</pre>
                        </div>
                    </div>

                    {{-- Tip --}}
                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 flex items-start gap-3">
                        <span class="text-amber-500 text-lg mt-0.5">💡</span>
                        <p class="text-sm text-amber-800">
                            <strong>نصيحة:</strong> استخدم <strong>أقواس { }</strong> دائماً حتى لو عندك سطر واحد — يقلل الأخطاء ويخلي الكود أوضح.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 9: اختبر نفسك (Flashcards) --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-violet-500">
            <button onclick="toggleSection('sec9')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">اختبر نفسك</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec9', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec9" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec9" style="max-height: 2000px;">
                <p class="text-sm text-slate-500 mb-5">اضغط على البطاقة لرؤية الإجابة 👇</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    {{-- Flashcard 1 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-violet-500 to-purple-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">🤔</span>
                                <p class="font-bold text-base">ما هي أنواع الجمل الشرطية في Java؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-violet-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    <strong class="text-violet-600">if</strong> — شرط واحد<br>
                                    <strong class="text-blue-600">if-else</strong> — شرط مع بديل<br>
                                    <strong class="text-indigo-600">switch</strong> — اختيار من عدة قيم
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 2 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">🧮</span>
                                <p class="font-bold text-base" dir="ltr">ما نتيجة true && false ؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-amber-200 flex flex-col items-center justify-center text-center">
                                <p class="text-3xl font-bold text-red-600 mb-2">false</p>
                                <p class="text-sm text-slate-600">في AND لازم <strong>كلاهما</strong> true عشان النتيجة true</p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 3 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">⚖️</span>
                                <p class="font-bold text-base" dir="ltr">ما الفرق بين == و = ؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-emerald-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    <code class="bg-emerald-100 px-2 py-0.5 rounded font-mono font-bold text-emerald-700">=</code> = <strong>تعيين</strong> قيمة (Assignment)<br><br>
                                    <code class="bg-blue-100 px-2 py-0.5 rounded font-mono font-bold text-blue-700">==</code> = <strong>مقارنة</strong> (Comparison)<br><br>
                                    <span class="text-xs text-slate-500">خطأ شائع: استخدام = بدل == في الشرط!</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 4 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-red-500 to-rose-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">⚡</span>
                                <p class="font-bold text-base">ما معنى Short-Circuit في && ؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-red-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    لو الطرف <strong class="text-red-600">الأيسر false</strong>، الطرف الأيمن <strong>ما يتحقق</strong> أصلاً.<br><br>
                                    لأن النتيجة حتماً <strong class="text-red-600">false</strong> بغض النظر عن الطرف الأيمن.<br><br>
                                    <span class="text-xs text-slate-500">مفيد لتجنب أخطاء مثل القسمة على صفر</span>
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
            return JSON.parse(localStorage.getItem('study_progress') || '{}');
        } catch { return {}; }
    }

    function saveProgress(progress) {
        localStorage.setItem('study_progress', JSON.stringify(progress));
    }

    function markDone(sectionId, btn) {
        const progress = getProgress();
        if (!progress.mobile_lec4) progress.mobile_lec4 = [];

        const idx = progress.mobile_lec4.indexOf(sectionId);
        if (idx === -1) {
            progress.mobile_lec4.push(sectionId);
            btn.classList.remove('text-slate-400', 'border-slate-200');
            btn.classList.add('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
            btn.textContent = 'تم ✓';
        } else {
            progress.mobile_lec4.splice(idx, 1);
            btn.classList.add('text-slate-400', 'border-slate-200');
            btn.classList.remove('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
            btn.textContent = 'تم';
        }

        saveProgress(progress);
    }

    // Restore progress on load
    document.addEventListener('DOMContentLoaded', function() {
        const progress = getProgress();
        if (progress.mobile_lec4 && progress.mobile_lec4.length > 0) {
            progress.mobile_lec4.forEach(function(sectionId) {
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

    // Interactive Truth Table
    function toggleTruthCell(btn) {
        const current = btn.dataset.value;
        if (current === '' || current === 'false') {
            btn.dataset.value = 'true';
            btn.textContent = 'true';
            btn.classList.remove('border-slate-300', 'bg-slate-50', 'text-slate-400', 'border-red-400', 'bg-red-50', 'text-red-600');
            btn.classList.add('border-emerald-400', 'bg-emerald-50', 'text-emerald-600');
        } else {
            btn.dataset.value = 'false';
            btn.textContent = 'false';
            btn.classList.remove('border-slate-300', 'bg-slate-50', 'text-slate-400', 'border-emerald-400', 'bg-emerald-50', 'text-emerald-600');
            btn.classList.add('border-red-400', 'bg-red-50', 'text-red-600');
        }
    }

    function checkTruthTable(tableId) {
        const table = document.getElementById(tableId);
        const rows = table.querySelectorAll('tbody tr');
        let allCorrect = true;

        rows.forEach(function(row) {
            const userBtn = row.querySelector('.truth-cell');
            const answerCell = row.querySelector('.truth-answer');
            const correctAnswer = answerCell.dataset.answer;
            const userAnswer = userBtn.dataset.value;

            // Reveal the answer
            answerCell.classList.remove('text-transparent');

            if (userAnswer === correctAnswer) {
                answerCell.classList.add('text-emerald-600');
                answerCell.classList.remove('text-red-600');
                userBtn.classList.add('ring-2', 'ring-emerald-400');
                userBtn.classList.remove('ring-2', 'ring-red-400');
            } else {
                allCorrect = false;
                answerCell.classList.add('text-red-600');
                answerCell.classList.remove('text-emerald-600');
                userBtn.classList.add('ring-2', 'ring-red-400');
                userBtn.classList.remove('ring-2', 'ring-emerald-400');
            }
        });

        // Show result message
        const existingMsg = table.parentElement.querySelector('.result-msg');
        if (existingMsg) existingMsg.remove();

        const msg = document.createElement('div');
        msg.className = 'result-msg mt-3 text-sm font-bold px-4 py-2 rounded-lg text-center';
        if (allCorrect) {
            msg.className += ' bg-emerald-50 text-emerald-700 border border-emerald-200';
            msg.textContent = 'ممتاز! كل الإجابات صحيحة ✓';
        } else {
            msg.className += ' bg-red-50 text-red-700 border border-red-200';
            msg.textContent = 'بعض الإجابات خاطئة — حاول مرة ثانية!';
        }
        table.parentElement.appendChild(msg);
    }
</script>
@endsection