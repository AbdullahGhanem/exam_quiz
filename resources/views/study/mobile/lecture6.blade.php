@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'mobile') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-rose-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-rose-600 to-pink-600 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة السادسة: Activity Lifecycle</h1>
                <p class="text-rose-200 text-sm">دورة حياة الـ Activity في Android</p>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 1: ما هي الـ Activity --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-rose-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-rose-100 flex items-center justify-center text-rose-600">
                        <span class="text-xl">🪟</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">ما هي الـ Activity؟</h2>
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
                    <div class="bg-rose-50/70 rounded-xl p-5 border border-rose-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            <span class="term">Activity</span> هي <strong>الشاشة الواحدة</strong> (single screen) في Android.
                            تحتوي على كل عناصر الـ <span class="term-en">UI</span> في شاشة واحدة.
                        </p>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <p class="text-sm text-slate-700 leading-relaxed">
                            دورة حياة الـ Activity (<span class="term-en">Activity Lifecycle</span>) يتحكم فيها
                            <strong class="text-rose-600">7 methods</strong> يستدعيها نظام Android بناءً على <strong>تفاعل المستخدم</strong> مع الـ Activity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 2: الـ 7 Methods --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-pink-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-pink-100 flex items-center justify-center text-pink-600">
                        <span class="text-xl">🔄</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">الـ 7 Methods الأساسية</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 6000px;">
                <div class="space-y-4">

                    {{-- onCreate --}}
                    <div class="bg-emerald-50 rounded-xl p-5 border-r-4 border-emerald-400">
                        <div class="flex items-center justify-between mb-2 flex-wrap gap-2">
                            <h3 class="font-bold text-emerald-700 font-mono" dir="ltr">onCreate()</h3>
                            <div class="flex gap-2 text-xs">
                                <span class="bg-red-100 text-red-700 px-2 py-0.5 rounded font-semibold">Kill After: No</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-0.5 rounded font-semibold">Next: onStart()</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-700">يُستدعى عند <strong>الإنشاء الابتدائي</strong> للـ Activity. مسؤول عن: بناء الـ Views، ربط البيانات بالـ controls، وإدارة/استرجاع state من الـ bundle.</p>
                    </div>

                    {{-- onStart --}}
                    <div class="bg-teal-50 rounded-xl p-5 border-r-4 border-teal-400">
                        <div class="flex items-center justify-between mb-2 flex-wrap gap-2">
                            <h3 class="font-bold text-teal-700 font-mono" dir="ltr">onStart()</h3>
                            <div class="flex gap-2 text-xs">
                                <span class="bg-red-100 text-red-700 px-2 py-0.5 rounded font-semibold">Kill After: No</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-0.5 rounded font-semibold">Next: onResume()</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-700">يُستدعى <strong>مباشرة قبل ظهور</strong> الـ Activity على الشاشة.</p>
                    </div>

                    {{-- onResume --}}
                    <div class="bg-cyan-50 rounded-xl p-5 border-r-4 border-cyan-400">
                        <div class="flex items-center justify-between mb-2 flex-wrap gap-2">
                            <h3 class="font-bold text-cyan-700 font-mono" dir="ltr">onResume()</h3>
                            <div class="flex gap-2 text-xs">
                                <span class="bg-red-100 text-red-700 px-2 py-0.5 rounded font-semibold">Kill After: No</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-0.5 rounded font-semibold">Next: onPause()</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-700">يُستدعى لمّا تكون الـ Activity جاهزة لاستقبال <strong>إدخال المستخدم</strong>. بعد هذا الـ method تبدأ الـ Activity بالتفاعل مع المستخدم.</p>
                    </div>

                    {{-- onPause --}}
                    <div class="bg-amber-50 rounded-xl p-5 border-r-4 border-amber-400">
                        <div class="flex items-center justify-between mb-2 flex-wrap gap-2">
                            <h3 class="font-bold text-amber-700 font-mono" dir="ltr">onPause()</h3>
                            <div class="flex gap-2 text-xs">
                                <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded font-semibold">Kill After: Yes</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-0.5 rounded font-semibold">Next: onStop() أو onResume()</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-700">يُستدعى لمّا تكون الـ Activity <strong>ظاهرة لكن غير تفاعلية</strong> (visible but not interactive). مثل: ظهور popup، أو عند الانتقال لـ Activity أخرى.</p>
                    </div>

                    {{-- onStop --}}
                    <div class="bg-orange-50 rounded-xl p-5 border-r-4 border-orange-400">
                        <div class="flex items-center justify-between mb-2 flex-wrap gap-2">
                            <h3 class="font-bold text-orange-700 font-mono" dir="ltr">onStop()</h3>
                            <div class="flex gap-2 text-xs">
                                <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded font-semibold">Kill After: Yes</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-0.5 rounded font-semibold">Next: onRestart() أو onDestroy()</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-700">يُستدعى لمّا تكون الـ Activity <strong>غير ظاهرة</strong> على الشاشة.</p>
                    </div>

                    {{-- onRestart --}}
                    <div class="bg-violet-50 rounded-xl p-5 border-r-4 border-violet-400">
                        <div class="flex items-center justify-between mb-2 flex-wrap gap-2">
                            <h3 class="font-bold text-violet-700 font-mono" dir="ltr">onRestart()</h3>
                            <div class="flex gap-2 text-xs">
                                <span class="bg-red-100 text-red-700 px-2 py-0.5 rounded font-semibold">Kill After: No</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-0.5 rounded font-semibold">Next: onStart()</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-700">يُستدعى بعد ما الـ Activity تكون <strong>متوقفة (stopped)</strong> ويتم إعادة تشغيلها (مثل: العودة بعد مكالمة هاتفية، أو إعادة التطبيق للواجهة).</p>
                    </div>

                    {{-- onDestroy --}}
                    <div class="bg-red-50 rounded-xl p-5 border-r-4 border-red-400">
                        <div class="flex items-center justify-between mb-2 flex-wrap gap-2">
                            <h3 class="font-bold text-red-700 font-mono" dir="ltr">onDestroy()</h3>
                            <div class="flex gap-2 text-xs">
                                <span class="bg-green-100 text-green-700 px-2 py-0.5 rounded font-semibold">Kill After: Yes</span>
                                <span class="bg-slate-200 text-slate-700 px-2 py-0.5 rounded font-semibold">Next: N/A</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-700">يُستدعى <strong>قبل تدمير الـ Activity</strong>. عادةً نتيجة استدعاء <code class="bg-red-100 px-1.5 rounded font-mono text-xs" dir="ltr">finish()</code> أو ضغط زر الـ <strong>Back</strong>. يُستدعى <strong>مرة واحدة على الأكثر</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 3: Lifecycle Diagram --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-fuchsia-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-fuchsia-100 flex items-center justify-center text-fuchsia-600">
                        <span class="text-xl">📊</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">مخطط دورة الحياة</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec3', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec3" style="max-height: 3000px;">
                <div class="space-y-4">
                    <div class="bg-fuchsia-50/70 rounded-xl p-5 border border-fuchsia-100">
                        <p class="text-slate-700 leading-relaxed text-sm">
                            تدفق الـ methods من إطلاق التطبيق حتى إغلاقه:
                        </p>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 p-5" dir="ltr">
                        <div class="flex flex-col items-center gap-2 text-sm font-mono">
                            <div class="bg-blue-100 text-blue-700 px-4 py-2 rounded-lg font-bold">Activity launched</div>
                            <div class="text-slate-400">↓</div>
                            <div class="bg-emerald-100 text-emerald-700 px-4 py-2 rounded-lg">onCreate()</div>
                            <div class="text-slate-400">↓</div>
                            <div class="bg-teal-100 text-teal-700 px-4 py-2 rounded-lg">onStart()</div>
                            <div class="text-slate-400">↓</div>
                            <div class="bg-cyan-100 text-cyan-700 px-4 py-2 rounded-lg">onResume()</div>
                            <div class="text-slate-400">↓</div>
                            <div class="bg-green-200 text-green-800 px-4 py-2 rounded-lg font-bold">Activity Running</div>
                            <div class="text-slate-400">↓</div>
                            <div class="bg-amber-100 text-amber-700 px-4 py-2 rounded-lg">onPause()</div>
                            <div class="text-slate-400">↓</div>
                            <div class="bg-orange-100 text-orange-700 px-4 py-2 rounded-lg">onStop()</div>
                            <div class="text-slate-400 text-xs">↓ (إذا رجع المستخدم) → onRestart() → onStart()</div>
                            <div class="text-slate-400">↓</div>
                            <div class="bg-red-100 text-red-700 px-4 py-2 rounded-lg">onDestroy()</div>
                            <div class="text-slate-400">↓</div>
                            <div class="bg-slate-200 text-slate-700 px-4 py-2 rounded-lg font-bold">Activity Shut Down</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 4: Cases / Scenarios --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-purple-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-purple-100 flex items-center justify-center text-purple-600">
                        <span class="text-xl">🎬</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">سيناريوهات عملية (Cases)</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec4', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec4" style="max-height: 5000px;">
                <div class="space-y-4">

                    {{-- Case 1 --}}
                    <div class="bg-white rounded-xl border-2 border-emerald-200 p-5">
                        <h3 class="font-bold text-emerald-700 mb-3 flex items-center gap-2"><span class="w-7 h-7 rounded-full bg-emerald-500 text-white flex items-center justify-center text-sm">1</span> أول إنشاء للتطبيق</h3>
                        <div class="bg-slate-50 rounded-lg p-3 text-sm font-mono text-slate-700" dir="ltr">
                            onCreate → onStart → onResume
                        </div>
                    </div>

                    {{-- Case 2 --}}
                    <div class="bg-white rounded-xl border-2 border-amber-200 p-5">
                        <h3 class="font-bold text-amber-700 mb-3 flex items-center gap-2"><span class="w-7 h-7 rounded-full bg-amber-500 text-white flex items-center justify-center text-sm">2</span> الشاشة تنام / إرسال التطبيق للخلفية</h3>
                        <div class="bg-slate-50 rounded-lg p-3 text-sm font-mono text-slate-700 mb-2" dir="ltr">
                            onPause → onStop
                        </div>
                        <p class="text-xs text-slate-600 mb-2">ولمّا الشاشة ترجع تشتغل:</p>
                        <div class="bg-slate-50 rounded-lg p-3 text-sm font-mono text-slate-700" dir="ltr">
                            onRestart → onStart → onResume
                        </div>
                    </div>

                    {{-- Case 3 --}}
                    <div class="bg-white rounded-xl border-2 border-cyan-200 p-5">
                        <h3 class="font-bold text-cyan-700 mb-3 flex items-center gap-2"><span class="w-7 h-7 rounded-full bg-cyan-500 text-white flex items-center justify-center text-sm">3</span> الشاشة محجوبة جزئياً (popup)</h3>
                        <div class="bg-slate-50 rounded-lg p-3 text-sm font-mono text-slate-700 mb-2" dir="ltr">
                            onPause
                        </div>
                        <p class="text-xs text-slate-600 mb-2">ولمّا يتم إغلاق الـ popup:</p>
                        <div class="bg-slate-50 rounded-lg p-3 text-sm font-mono text-slate-700" dir="ltr">
                            onResume
                        </div>
                        <div class="bg-amber-50 border border-amber-200 rounded-lg p-3 mt-3 text-xs text-amber-800">
                            ⚠️ لاحظ: <strong>onStop ما يُستدعى</strong> لأن الـ Activity ما زالت ظاهرة جزئياً.
                        </div>
                    </div>

                    {{-- Case 4 --}}
                    <div class="bg-white rounded-xl border-2 border-red-200 p-5">
                        <h3 class="font-bold text-red-700 mb-3 flex items-center gap-2"><span class="w-7 h-7 rounded-full bg-red-500 text-white flex items-center justify-center text-sm">4</span> إغلاق التطبيق / ضغط زر Back</h3>
                        <div class="bg-slate-50 rounded-lg p-3 text-sm font-mono text-slate-700" dir="ltr">
                            onPause → onStop → onDestroy
                        </div>
                    </div>

                    {{-- Case 5 --}}
                    <div class="bg-white rounded-xl border-2 border-violet-200 p-5">
                        <h3 class="font-bold text-violet-700 mb-3 flex items-center gap-2"><span class="w-7 h-7 rounded-full bg-violet-500 text-white flex items-center justify-center text-sm">5</span> فتح Next Activity من Main Activity</h3>
                        <div class="bg-slate-50 rounded-lg p-3 text-sm font-mono text-slate-700 space-y-1" dir="ltr">
                            <div class="text-slate-500">// Main calls Next</div>
                            <div>MainActivity: onPause</div>
                            <div class="text-emerald-600">NextActivity: onCreate</div>
                            <div class="text-emerald-600">NextActivity: onStart</div>
                            <div class="text-emerald-600">NextActivity: onResume</div>
                            <div>MainActivity: onStop</div>
                        </div>
                    </div>

                    {{-- Case 6 --}}
                    <div class="bg-white rounded-xl border-2 border-fuchsia-200 p-5">
                        <h3 class="font-bold text-fuchsia-700 mb-3 flex items-center gap-2"><span class="w-7 h-7 rounded-full bg-fuchsia-500 text-white flex items-center justify-center text-sm">6</span> الرجوع لـ Main Activity (Back)</h3>
                        <div class="bg-slate-50 rounded-lg p-3 text-sm font-mono text-slate-700 space-y-1" dir="ltr">
                            <div>NextActivity: onPause</div>
                            <div class="text-emerald-600">MainActivity: onRestart</div>
                            <div class="text-emerald-600">MainActivity: onStart</div>
                            <div class="text-emerald-600">MainActivity: onResume</div>
                            <div>NextActivity: onStop</div>
                            <div>NextActivity: onDestroy</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 5: Important Notes --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-amber-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600">
                        <span class="text-xl">💡</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">ملاحظات مهمة</h2>
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
                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-5">
                        <h3 class="font-bold text-amber-700 mb-2 text-sm">⚠️ عند قتل التطبيق في الخلفية</h3>
                        <p class="text-sm text-slate-700 leading-relaxed">
                            لمّا التطبيق يُقتل في الخلفية (لتحرير موارد لتطبيق آخر في المقدمة)،
                            <strong>onStop يكون آخر method</strong> يُستدعى قبل إنهاء التطبيق،
                            لكن يبقى التطبيق في الـ history. لمّا المستخدم يختاره من الـ history، الشاشة تبدأ من جديد من
                            <code class="bg-amber-100 px-1.5 rounded font-mono text-xs" dir="ltr">onCreate()</code>.
                        </p>
                    </div>

                    <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-5">
                        <h3 class="font-bold text-emerald-700 mb-2 text-sm">✅ تكرار الاستدعاءات</h3>
                        <ul class="text-sm text-slate-700 space-y-2">
                            <li><strong class="text-emerald-700">onCreate و onDestroy:</strong> يُستدعى كل واحد منهم <strong>مرة واحدة فقط على الأكثر</strong> في كل تشغيل للتطبيق.</li>
                            <li><strong class="text-emerald-700">onPause, onStop, onRestart, onStart, onResume:</strong> ممكن يُستدعوا <strong>عدة مرات</strong> خلال دورة الحياة.</li>
                        </ul>
                    </div>

                    <div class="bg-rose-50 border border-rose-200 rounded-xl p-5">
                        <h3 class="font-bold text-rose-700 mb-2 text-sm">🔑 الفرق المهم: Pause vs Stop</h3>
                        <ul class="text-sm text-slate-700 space-y-2">
                            <li><strong>onPause:</strong> الـ Activity <strong>ظاهرة لكن غير تفاعلية</strong> (popup مثلاً)</li>
                            <li><strong>onStop:</strong> الـ Activity <strong>غير ظاهرة بالكامل</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Recap --}}
    <div class="card rounded-2xl border-2 border-rose-200 bg-gradient-to-br from-rose-50 to-pink-50 p-6 mb-8">
        <h3 class="font-bold text-rose-800 mb-4 flex items-center gap-2"><span class="text-xl">⚡</span> خلاصة سريعة للمراجعة</h3>
        <ul class="space-y-2 text-sm text-slate-700">
            <li>✓ Activity = شاشة واحدة في Android</li>
            <li>✓ <strong>7 methods:</strong> onCreate → onStart → onResume → onPause → onStop → onRestart → onDestroy</li>
            <li>✓ <strong>Kill After = Yes:</strong> onPause, onStop, onDestroy</li>
            <li>✓ <strong>Kill After = No:</strong> onCreate, onStart, onResume, onRestart</li>
            <li>✓ onCreate و onDestroy <strong>مرة واحدة فقط</strong>؛ الباقي ممكن يتكرر</li>
            <li>✓ <strong>Popup</strong> → onPause فقط (مش onStop)</li>
            <li>✓ <strong>Back button</strong> → onPause → onStop → onDestroy</li>
        </ul>
    </div>
</div>
@endsection
