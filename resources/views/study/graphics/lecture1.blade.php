@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'graphics') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-orange-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-orange-500 to-amber-600 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة الأولى: مقدمة في الرسم بالحاسب</h1>
                <p class="text-orange-200 text-sm">Computer Graphics — Lecture 1</p>
            </div>
            {{-- Progress Bar --}}
            <div class="px-6 py-3 bg-white/60 border-t border-orange-100">
                <div class="flex items-center justify-between mb-1.5">
                    <span class="text-xs font-semibold text-slate-500">تقدم المراجعة</span>
                    <span class="text-xs font-bold text-orange-600" id="progress-text">0 / 7</span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2">
                    <div class="bg-gradient-to-r from-orange-500 to-amber-500 h-2 rounded-full transition-all duration-500" id="progress-bar" style="width: 0%"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 1: ما هو الرسم بالحاسب؟ --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-orange-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-orange-100 flex items-center justify-center text-orange-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">ما هو الرسم بالحاسب؟</h2>
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
                    <div class="bg-orange-50/70 rounded-xl p-5 border border-orange-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            <span class="term">الرسم بالحاسب</span> <span class="term-en">(Computer Graphics)</span>
                            هو مجال ديناميكي يشمل <strong>إنشاء</strong> و<strong>معالجة</strong> و<strong>عرض</strong> المحتوى البصري باستخدام الحاسب.
                            يغطي مجموعة واسعة من التقنيات والتطبيقات المرئية.
                        </p>
                    </div>

                    {{-- What it includes --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-orange-700 mb-3">يشمل هذا المجال:</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div class="flex items-center gap-3 bg-orange-50 rounded-lg p-3">
                                <span class="text-xl">🖼️</span>
                                <span class="text-sm text-slate-700 font-medium">الصور الرقمية</span>
                            </div>
                            <div class="flex items-center gap-3 bg-orange-50 rounded-lg p-3">
                                <span class="text-xl">🎬</span>
                                <span class="text-sm text-slate-700 font-medium">الأنيميشن</span>
                            </div>
                            <div class="flex items-center gap-3 bg-orange-50 rounded-lg p-3">
                                <span class="text-xl">🎮</span>
                                <span class="text-sm text-slate-700 font-medium">الرسوميات التفاعلية</span>
                            </div>
                            <div class="flex items-center gap-3 bg-orange-50 rounded-lg p-3">
                                <span class="text-xl">🌐</span>
                                <span class="text-sm text-slate-700 font-medium">التصور العلمي</span>
                            </div>
                        </div>
                    </div>

                    {{-- Usage areas --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-orange-700 mb-3">مجالات الاستخدام:</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-amber-100 text-amber-700 text-sm font-medium px-3 py-1.5 rounded-lg">الترفيه والألعاب</span>
                            <span class="bg-amber-100 text-amber-700 text-sm font-medium px-3 py-1.5 rounded-lg">التعليم</span>
                            <span class="bg-amber-100 text-amber-700 text-sm font-medium px-3 py-1.5 rounded-lg">التصور العلمي</span>
                            <span class="bg-amber-100 text-amber-700 text-sm font-medium px-3 py-1.5 rounded-lg">الواقع الافتراضي VR</span>
                        </div>
                    </div>

                    {{-- CG can be used for --}}
                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 flex items-start gap-3">
                        <span class="text-amber-500 text-lg mt-0.5">💡</span>
                        <div class="text-sm text-amber-800">
                            <strong>يمكن استخدام CG في:</strong> تصميم واجهات المستخدم <span class="term-en">(UI Design)</span>، والرندرة <span class="term-en">(Rendering)</span>، والأشكال الهندسية <span class="term-en">(Geometric Shapes)</span>، والأنيميشن <span class="term-en">(Animation)</span>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 2: أنواع الرسم بالحاسب --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-blue-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">أنواع الرسم بالحاسب</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 3000px;">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    {{-- Raster --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-2xl">🖼️</span>
                            <div>
                                <h3 class="font-bold text-slate-800 text-sm">رسوميات نقطية</h3>
                                <span class="term-en">(Raster / Bitmap Graphics)</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            صور مكونة من نقاط صغيرة تسمى <span class="term">بكسل</span> <span class="term-en">(Picture Elements)</span>. كل بكسل يحمل معلومات لون محددة.
                        </p>
                    </div>

                    {{-- Vector --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-2xl">📐</span>
                            <div>
                                <h3 class="font-bold text-slate-800 text-sm">رسوميات متجهية</h3>
                                <span class="term-en">(Vector Graphics)</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            صور تُنشأ باستخدام <span class="term">معادلات رياضية</span> — خطوط، دوائر، مضلعات. قابلة للتكبير بلا فقدان جودة.
                        </p>
                    </div>

                    {{-- 3D --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-2xl">🧊</span>
                            <div>
                                <h3 class="font-bold text-slate-800 text-sm">رسوميات ثلاثية الأبعاد</h3>
                                <span class="term-en">(3D Graphics)</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            تمثل كائنات ومشاهد <span class="term">ثلاثية الأبعاد</span>. تُستخدم بشكل واسع في الألعاب والأفلام والمحاكاة.
                        </p>
                    </div>

                    {{-- Interactive --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-2xl">🖱️</span>
                            <div>
                                <h3 class="font-bold text-slate-800 text-sm">رسوميات تفاعلية</h3>
                                <span class="term-en">(Interactive Graphics)</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            تسمح للمستخدم بـ<span class="term">التفاعل</span> مع المحتوى البصري من خلال واجهة مستخدم <span class="term-en">(UI)</span>.
                        </p>
                    </div>

                    {{-- Real-Time --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5 hover:shadow-md transition-shadow">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-2xl">⚡</span>
                            <div>
                                <h3 class="font-bold text-slate-800 text-sm">رسوميات الوقت الحقيقي</h3>
                                <span class="term-en">(Real-Time Graphics)</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 leading-relaxed">
                            تُنشأ وتُعرض <span class="term">فوراً</span> أثناء تفاعل المستخدم. تستخدم في الألعاب والمحاكاة الحية.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 3: Raster مقابل Vector --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-emerald-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">Raster مقابل Vector</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec3', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec3" style="max-height: 3000px;">
                <div class="space-y-5">
                    {{-- Side by side comparison --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        {{-- Raster --}}
                        <div class="bg-rose-50 rounded-xl p-5 border border-rose-200">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-xl">🖼️</span>
                                <h3 class="font-bold text-rose-700">Raster (نقطية)</h3>
                            </div>
                            <ul class="text-sm text-slate-600 space-y-2">
                                <li class="flex items-start gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-rose-400 flex-shrink-0 mt-2"></span>
                                    مكونة من <span class="term">نقاط بكسل</span> صغيرة
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-rose-400 flex-shrink-0 mt-2"></span>
                                    مثالية للصور التفصيلية والملونة كـ<strong>الصور الفوتوغرافية</strong>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-rose-400 flex-shrink-0 mt-2"></span>
                                    تستخدم <span class="term">Bit Maps</span> لتخزين المعلومات
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-rose-400 flex-shrink-0 mt-2"></span>
                                    ملفات أكبر = بتمابس أكبر حجماً
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-rose-400 flex-shrink-0 mt-2"></span>
                                    تفقد الجودة عند <strong>التكبير</strong>
                                </li>
                            </ul>
                        </div>

                        {{-- Vector --}}
                        <div class="bg-emerald-50 rounded-xl p-5 border border-emerald-200">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-xl">📐</span>
                                <h3 class="font-bold text-emerald-700">Vector (متجهية)</h3>
                            </div>
                            <ul class="text-sm text-slate-600 space-y-2">
                                <li class="flex items-start gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 flex-shrink-0 mt-2"></span>
                                    مكونة من <span class="term">مسارات رياضية</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 flex-shrink-0 mt-2"></span>
                                    مثالية للتصاميم القابلة للتكبير كـ<strong>الشعارات</strong>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 flex-shrink-0 mt-2"></span>
                                    تستخدم <span class="term">أوامر رياضية تسلسلية</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 flex-shrink-0 mt-2"></span>
                                    ملفات أكبر = أوامر رياضية أكثر
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 flex-shrink-0 mt-2"></span>
                                    <strong>لا تفقد</strong> الجودة عند التكبير
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Visual Comparison --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-6">
                        <h3 class="font-bold text-slate-700 mb-4 text-center">مقارنة بصرية</h3>
                        <div class="grid grid-cols-2 gap-6">
                            {{-- Raster Visual: Grid of squares --}}
                            <div class="text-center">
                                <div class="inline-grid grid-cols-6 gap-0.5 mb-3 p-2 bg-slate-50 rounded-lg">
                                    <div class="w-4 h-4 bg-red-400 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-red-300 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-orange-300 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-orange-400 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-yellow-300 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-yellow-200 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-red-300 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-red-200 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-orange-200 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-orange-300 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-yellow-200 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-yellow-100 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-pink-300 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-pink-200 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-red-200 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-red-300 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-orange-200 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-orange-100 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-pink-200 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-pink-100 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-rose-100 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-rose-200 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-orange-100 rounded-sm"></div>
                                    <div class="w-4 h-4 bg-yellow-100 rounded-sm"></div>
                                </div>
                                <p class="text-xs font-bold text-rose-600">Raster — شبكة بكسلات</p>
                                <p class="text-xs text-slate-400 mt-1">تظهر المربعات عند التكبير</p>
                            </div>
                            {{-- Vector Visual: Smooth lines --}}
                            <div class="text-center">
                                <div class="flex items-center justify-center mb-3 p-2 bg-slate-50 rounded-lg" style="min-height: 104px;">
                                    <svg width="80" height="80" viewBox="0 0 80 80" class="text-emerald-500">
                                        <circle cx="40" cy="40" r="30" fill="none" stroke="currentColor" stroke-width="2"/>
                                        <line x1="15" y1="65" x2="65" y2="15" stroke="currentColor" stroke-width="2"/>
                                        <polygon points="40,10 55,50 25,50" fill="none" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <p class="text-xs font-bold text-emerald-600">Vector — خطوط ناعمة</p>
                                <p class="text-xs text-slate-400 mt-1">تبقى واضحة مهما كبّرت</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 4: البكسل والدقة --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-violet-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 013.75 9.375v-4.5zM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 01-1.125-1.125v-4.5zM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0113.5 9.375v-4.5z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">البكسل والدقة (Pixel & Resolution)</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec4', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec4" style="max-height: 3000px;">
                <div class="space-y-5">
                    {{-- Pixel Definition --}}
                    <div class="bg-violet-50/70 rounded-xl p-5 border border-violet-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            <span class="term">البكسل</span> <span class="term-en">(Pixel = Picture Element)</span>
                            هو <strong>الوحدة الأساسية</strong> للصور الرقمية. كل صورة تراها على الشاشة مكونة من آلاف أو ملايين البكسلات.
                        </p>
                    </div>

                    {{-- RGB Subpixels --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-violet-700 mb-3">مكونات البكسل — RGB Subpixels</h3>
                        <p class="text-sm text-slate-600 mb-4">كل بكسل يتكون من 3 عناصر فرعية تختلط لإنتاج ألوان متنوعة:</p>
                        <div class="grid grid-cols-3 gap-3">
                            <div class="bg-red-50 border border-red-200 rounded-xl p-4 text-center">
                                <div class="w-10 h-10 rounded-full bg-red-500 mx-auto mb-2"></div>
                                <p class="font-bold text-red-600 text-sm">أحمر</p>
                                <p class="term-en">Red</p>
                            </div>
                            <div class="bg-green-50 border border-green-200 rounded-xl p-4 text-center">
                                <div class="w-10 h-10 rounded-full bg-green-500 mx-auto mb-2"></div>
                                <p class="font-bold text-green-600 text-sm">أخضر</p>
                                <p class="term-en">Green</p>
                            </div>
                            <div class="bg-blue-50 border border-blue-200 rounded-xl p-4 text-center">
                                <div class="w-10 h-10 rounded-full bg-blue-500 mx-auto mb-2"></div>
                                <p class="font-bold text-blue-600 text-sm">أزرق</p>
                                <p class="term-en">Blue</p>
                            </div>
                        </div>
                    </div>

                    {{-- Resolution --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-violet-700 mb-3">الدقة <span class="term-en">(Resolution)</span></h3>
                        <p class="text-sm text-slate-600 mb-4">
                            الدقة = عدد البكسلات <strong>أفقياً × عمودياً</strong>. كلما زاد عدد البكسلات، كانت الصورة أكثر دقة وتفصيلاً.
                        </p>
                        <div class="grid grid-cols-2 gap-3">
                            <div class="bg-slate-50 rounded-lg p-3 text-center">
                                <div class="inline-grid grid-cols-4 gap-1 mb-2">
                                    @for ($i = 0; $i < 16; $i++)
                                    <div class="w-3 h-3 bg-violet-300 rounded-sm"></div>
                                    @endfor
                                </div>
                                <p class="text-xs font-bold text-slate-500">دقة منخفضة</p>
                                <p class="text-xs text-slate-400">بكسلات أقل</p>
                            </div>
                            <div class="bg-slate-50 rounded-lg p-3 text-center">
                                <div class="inline-grid grid-cols-8 gap-0.5 mb-2">
                                    @for ($i = 0; $i < 64; $i++)
                                    <div class="w-1.5 h-1.5 bg-violet-500 rounded-sm"></div>
                                    @endfor
                                </div>
                                <p class="text-xs font-bold text-slate-500">دقة عالية</p>
                                <p class="text-xs text-slate-400">بكسلات أكثر</p>
                            </div>
                        </div>
                    </div>

                    {{-- Interactive Mini Pixel Grid --}}
                    <div class="bg-violet-50 border border-violet-200 rounded-xl p-5">
                        <h3 class="font-bold text-violet-700 mb-3 text-center">جرّب بنفسك: شبكة بكسل تفاعلية</h3>
                        <p class="text-xs text-slate-500 text-center mb-3">اضغط على أي بكسل لتغيير لونه بين RGB</p>
                        <div class="flex justify-center">
                            <div id="pixel-grid" class="inline-grid grid-cols-8 gap-0.5 bg-slate-300 p-1 rounded-lg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 5: الرندرة (Rendering) --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-amber-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3.75 21h16.5A2.25 2.25 0 0022.5 18.75V5.25A2.25 2.25 0 0020.25 3H3.75A2.25 2.25 0 001.5 5.25v13.5A2.25 2.25 0 003.75 21z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">الرندرة (Rendering)</h2>
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
                    {{-- Definition --}}
                    <div class="bg-amber-50/70 rounded-xl p-5 border border-amber-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            <span class="term">الرندرة</span> <span class="term-en">(Rendering)</span>
                            تعني <strong>عرض وتصور البيانات</strong>. الرندرة ثلاثية الأبعاد تعني توليد صورة <span class="term">2D</span> من مشهد <span class="term">3D</span> رقمي.
                        </p>
                    </div>

                    {{-- Importance --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-amber-700 mb-3">أهمية الرندرة:</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-amber-100 text-amber-700 text-sm font-medium px-3 py-1.5 rounded-lg">🏛️ العمارة</span>
                            <span class="bg-amber-100 text-amber-700 text-sm font-medium px-3 py-1.5 rounded-lg">🎨 التصميم</span>
                            <span class="bg-amber-100 text-amber-700 text-sm font-medium px-3 py-1.5 rounded-lg">🎮 الألعاب</span>
                            <span class="bg-amber-100 text-amber-700 text-sm font-medium px-3 py-1.5 rounded-lg">🎬 المؤثرات البصرية</span>
                        </div>
                    </div>

                    {{-- Rendering Techniques Grid --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-amber-700 mb-4">تقنيات الرندرة:</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            {{-- Scanline --}}
                            <div class="bg-amber-50 rounded-lg p-4 border border-amber-100">
                                <h4 class="font-bold text-slate-800 text-sm mb-1">Scanline</h4>
                                <p class="text-xs text-slate-600 leading-relaxed">
                                    تقنية تقليدية لحساب سطح الرسوميات. تعمل سطراً بسطر عبر الشاشة.
                                </p>
                            </div>

                            {{-- Z-Buffer --}}
                            <div class="bg-amber-50 rounded-lg p-4 border border-amber-100">
                                <h4 class="font-bold text-slate-800 text-sm mb-1">Z-Buffer</h4>
                                <p class="text-xs text-slate-600 leading-relaxed">
                                    نظام بيانات <span class="term">ثنائي الأبعاد</span> لحساب وتخزين قيم العمق <span class="term-en">(Depth)</span> لكل بكسل.
                                </p>
                            </div>

                            {{-- Shading & Lighting --}}
                            <div class="bg-amber-50 rounded-lg p-4 border border-amber-100">
                                <h4 class="font-bold text-slate-800 text-sm mb-1">Shading & Lighting</h4>
                                <p class="text-xs text-slate-600 leading-relaxed">
                                    التحكم في مستويات <span class="term">الضوء</span> والظل لإعطاء واقعية للمشاهد.
                                </p>
                            </div>

                            {{-- Texture/Bump Mapping --}}
                            <div class="bg-amber-50 rounded-lg p-4 border border-amber-100">
                                <h4 class="font-bold text-slate-800 text-sm mb-1">Texture / Bump Mapping</h4>
                                <p class="text-xs text-slate-600 leading-relaxed">
                                    عرض الألوان والمواد وتفاصيل <span class="term">سطح الأجسام</span> لإضافة واقعية بصرية.
                                </p>
                            </div>

                            {{-- Ray Tracing & Ray Casting --}}
                            <div class="bg-amber-50 rounded-lg p-4 border border-amber-100 sm:col-span-2">
                                <h4 class="font-bold text-slate-800 text-sm mb-1">Ray Tracing & Ray Casting</h4>
                                <p class="text-xs text-slate-600 leading-relaxed">
                                    تقنيات لإنشاء تأثيرات <span class="term">إضاءة طبيعية</span> واقعية. <strong>Ray Casting</strong> يتبع أشعة الضوء من الكاميرا، بينما <strong>Ray Tracing</strong> يتبع الأشعة المنعكسة والمنكسرة أيضاً للحصول على نتائج أكثر دقة.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- 3D to 2D Diagram --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-6">
                        <h3 class="font-bold text-slate-700 mb-4 text-center">عملية الرندرة: من 3D إلى 2D</h3>
                        <div class="flex items-center justify-center gap-3 md:gap-6 flex-wrap">
                            <div class="bg-amber-100 text-amber-700 font-bold px-5 py-3 rounded-xl text-center min-w-[100px]">
                                🧊 مشهد 3D
                            </div>
                            <svg class="w-8 h-8 text-amber-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                            <div class="bg-slate-800 text-white font-bold px-5 py-3 rounded-xl text-center min-w-[100px]">
                                ⚙️ محرك الرندرة
                            </div>
                            <svg class="w-8 h-8 text-amber-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                            </svg>
                            <div class="bg-emerald-100 text-emerald-700 font-bold px-5 py-3 rounded-xl text-center min-w-[100px]">
                                🖼️ صورة 2D
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 6: مبادئ الأنيميشن --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-fuchsia-500">
            <button onclick="toggleSection('sec6')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-fuchsia-100 flex items-center justify-center text-fuchsia-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125-.504-1.125-1.125v-1.5c0-.621.504-1.125 1.125-1.125m1.5 2.625c0-.621-.504-1.125-1.125-1.125M19.5 12h1.5m0 0c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 2.625h-1.5"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">مبادئ الأنيميشن</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec6', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec6" style="max-height: 3000px;">
                <div class="space-y-5">
                    {{-- Definition --}}
                    <div class="bg-fuchsia-50/70 rounded-xl p-5 border border-fuchsia-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            <span class="term">الأنيميشن</span> <span class="term-en">(Animation)</span>
                            هي سلسلة من <span class="term">الإطارات</span> <span class="term-en">(Frames)</span> — كل إطار يولّد مخرجات رسومية.
                            عند عرضها بسرعة كافية، تعطي إحساساً بالحركة.
                        </p>
                    </div>

                    {{-- Frames Visual --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-fuchsia-700 mb-3">مفهوم الإطارات Frames</h3>
                        <div class="flex items-center justify-center gap-2 flex-wrap">
                            <div class="w-14 h-14 bg-fuchsia-100 border-2 border-fuchsia-300 rounded-lg flex items-center justify-center text-xs font-bold text-fuchsia-600">F1</div>
                            <svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                            <div class="w-14 h-14 bg-fuchsia-100 border-2 border-fuchsia-300 rounded-lg flex items-center justify-center text-xs font-bold text-fuchsia-600">F2</div>
                            <svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                            <div class="w-14 h-14 bg-fuchsia-100 border-2 border-fuchsia-300 rounded-lg flex items-center justify-center text-xs font-bold text-fuchsia-600">F3</div>
                            <svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                            <div class="w-14 h-14 bg-fuchsia-200 border-2 border-fuchsia-400 rounded-lg flex items-center justify-center text-xs font-bold text-fuchsia-700">...</div>
                            <svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                            <div class="w-14 h-14 bg-fuchsia-100 border-2 border-fuchsia-300 rounded-lg flex items-center justify-center text-xs font-bold text-fuchsia-600">Fn</div>
                        </div>
                        <p class="text-xs text-slate-500 text-center mt-3">= حركة سلسة</p>
                    </div>

                    {{-- Interpolation --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-fuchsia-700 mb-3">الاستيفاء <span class="term-en">(Interpolation)</span></h3>
                        <p class="text-sm text-slate-600 mb-4">
                            يستخدم مفهوم <span class="term">الاستيفاء</span> لحساب القيم بين نقطتين معروفتين. يوجد نوعان رئيسيان:
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div class="bg-fuchsia-50 rounded-lg p-4 border border-fuchsia-100">
                                <h4 class="font-bold text-fuchsia-700 text-sm mb-1">خطي <span class="term-en">(Linear)</span></h4>
                                <p class="text-xs text-slate-600">حركة بسرعة ثابتة بين نقطتين — خط مستقيم.</p>
                            </div>
                            <div class="bg-fuchsia-50 rounded-lg p-4 border border-fuchsia-100">
                                <h4 class="font-bold text-fuchsia-700 text-sm mb-1">تربيعي <span class="term-en">(Quadratic)</span></h4>
                                <p class="text-xs text-slate-600">حركة بتسارع أو تباطؤ — منحنى ناعم.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Animation Types --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-fuchsia-700 mb-3">أنواع الأنيميشن</h3>
                        <div class="space-y-3">
                            <div class="flex items-start gap-3 bg-fuchsia-50 rounded-lg p-4 border border-fuchsia-100">
                                <span class="text-lg">🔑</span>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm">Key-framing</h4>
                                    <p class="text-xs text-slate-600 mt-1">تحديد إطارات مفتاحية <span class="term-en">(Keyframes)</span> والبرنامج يحسب الإطارات بينها تلقائياً.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 bg-fuchsia-50 rounded-lg p-4 border border-fuchsia-100">
                                <span class="text-lg">🔄</span>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm">Morphing</h4>
                                    <p class="text-xs text-slate-600 mt-1">تحويل تدريجي من شكل إلى آخر — مثل تحويل وجه شخص لآخر.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 bg-fuchsia-50 rounded-lg p-4 border border-fuchsia-100">
                                <span class="text-lg">↔️</span>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm">Tween Animations</h4>
                                    <p class="text-xs text-slate-600 mt-1">حساب الحركة بين نقطتين باستخدام <span class="term">الاستيفاء</span> <span class="term-en">(Interpolation)</span>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 7: اختبر نفسك (Flashcards) --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-orange-500">
            <button onclick="toggleSection('sec7')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-orange-100 flex items-center justify-center text-orange-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">اختبر نفسك</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec7', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec7" style="max-height: 2000px;">
                <p class="text-sm text-slate-500 mb-5">اضغط على البطاقة لرؤية الإجابة</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    {{-- Flashcard 1 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-orange-500 to-amber-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">🤔</span>
                                <p class="font-bold text-base">ما الفرق بين Raster و Vector؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-orange-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    <strong class="text-rose-600">Raster</strong> = نقاط بكسل، تستخدم Bit Maps، تفقد الجودة عند التكبير<br><br>
                                    <strong class="text-emerald-600">Vector</strong> = مسارات رياضية، تستخدم أوامر تسلسلية، لا تفقد الجودة عند التكبير
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 2 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-violet-500 to-purple-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">🔬</span>
                                <p class="font-bold text-base">ما معنى Pixel وممّ يتكون؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-violet-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    <strong class="text-violet-600">Pixel = Picture Element</strong><br>
                                    الوحدة الأساسية للصور الرقمية<br><br>
                                    يتكون من 3 عناصر فرعية:<br>
                                    <span class="text-red-500 font-bold">R</span> أحمر +
                                    <span class="text-green-500 font-bold">G</span> أخضر +
                                    <span class="text-blue-500 font-bold">B</span> أزرق
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 3 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-amber-500 to-yellow-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">🎨</span>
                                <p class="font-bold text-base">اذكر 3 تقنيات رندرة</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-amber-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    1. <strong class="text-amber-600">Scanline</strong> — حساب السطح سطراً بسطر<br>
                                    2. <strong class="text-amber-600">Z-Buffer</strong> — تخزين قيم العمق<br>
                                    3. <strong class="text-amber-600">Ray Tracing</strong> — إضاءة طبيعية واقعية<br><br>
                                    <span class="text-xs text-slate-400">+ Shading & Lighting, Texture/Bump Mapping</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 4 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-fuchsia-500 to-pink-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">🎬</span>
                                <p class="font-bold text-base">ما هو الاستيفاء Interpolation في الأنيميشن؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-fuchsia-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    حساب القيم <strong>بين نقطتين معروفتين</strong> لإنتاج حركة سلسة<br><br>
                                    <strong class="text-fuchsia-600">خطي (Linear)</strong> = سرعة ثابتة<br>
                                    <strong class="text-fuchsia-600">تربيعي (Quadratic)</strong> = تسارع/تباطؤ
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
    const STORAGE_KEY = 'graphics_lec1';
    const TOTAL_SECTIONS = 7;

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
            return JSON.parse(localStorage.getItem(STORAGE_KEY) || '{}');
        } catch {
            return {};
        }
    }

    function saveProgress(progress) {
        localStorage.setItem(STORAGE_KEY, JSON.stringify(progress));
    }

    function updateProgressBar() {
        const progress = getProgress();
        const done = progress.done ? progress.done.length : 0;
        const pct = Math.round((done / TOTAL_SECTIONS) * 100);

        const bar = document.getElementById('progress-bar');
        const text = document.getElementById('progress-text');
        if (bar) bar.style.width = pct + '%';
        if (text) text.textContent = done + ' / ' + TOTAL_SECTIONS;
    }

    function markDone(sectionId, btn) {
        const progress = getProgress();
        if (!progress.done) progress.done = [];

        const idx = progress.done.indexOf(sectionId);
        if (idx === -1) {
            progress.done.push(sectionId);
            btn.classList.remove('text-slate-400', 'border-slate-200');
            btn.classList.add('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
            btn.textContent = 'تم ✓';
        } else {
            progress.done.splice(idx, 1);
            btn.classList.add('text-slate-400', 'border-slate-200');
            btn.classList.remove('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
            btn.textContent = 'تم';
        }

        saveProgress(progress);
        updateProgressBar();
    }

    // Interactive pixel grid
    function buildPixelGrid() {
        const grid = document.getElementById('pixel-grid');
        if (!grid) return;

        const colors = ['bg-slate-200', 'bg-red-500', 'bg-green-500', 'bg-blue-500'];
        for (let i = 0; i < 64; i++) {
            const pixel = document.createElement('div');
            pixel.className = 'w-5 h-5 bg-slate-200 rounded-sm cursor-pointer transition-colors hover:scale-110';
            pixel.dataset.colorIdx = '0';
            pixel.addEventListener('click', function() {
                let idx = parseInt(this.dataset.colorIdx);
                idx = (idx + 1) % colors.length;
                this.dataset.colorIdx = idx;
                this.className = 'w-5 h-5 rounded-sm cursor-pointer transition-colors hover:scale-110 ' + colors[idx];
            });
            grid.appendChild(pixel);
        }
    }

    // Restore progress on load
    document.addEventListener('DOMContentLoaded', function() {
        const progress = getProgress();
        if (progress.done && progress.done.length > 0) {
            progress.done.forEach(function(sectionId) {
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
        updateProgressBar();
        buildPixelGrid();
    });
</script>
@endsection
