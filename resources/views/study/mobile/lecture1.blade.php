@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'mobile') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-teal-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-teal-600 to-cyan-600 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة الأولى: مقدمة في تطوير تطبيقات الموبايل</h1>
                <p class="text-teal-200 text-sm">Introduction to Mobile Application Development</p>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 1: ما هو تطوير تطبيقات الموبايل؟ --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-teal-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-teal-100 flex items-center justify-center text-teal-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">ما هو تطوير تطبيقات الموبايل؟</h2>
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
                    <div class="bg-teal-50/70 rounded-xl p-5 border border-teal-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            <span class="term">تطوير تطبيقات الموبايل</span> <span class="term-en">(Mobile Application Development)</span>
                            هو عملية إنشاء تطبيقات برمجية تشتغل على <span class="term">الأجهزة المحمولة</span> مثل الهواتف الذكية، الأجهزة اللوحية <span class="term-en">(Tablets)</span>، والأجهزة القابلة للارتداء <span class="term-en">(Wearables)</span>.
                        </p>
                    </div>

                    {{-- Why Important --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-6">
                        <h3 class="font-bold text-teal-700 mb-3">ليش تطوير الموبايل مهم؟</h3>
                        <div class="space-y-3">
                            <div class="flex items-start gap-3 bg-cyan-50 rounded-lg p-4 border border-cyan-100">
                                <span class="text-cyan-600 font-bold text-lg mt-0.5">1</span>
                                <p class="text-sm text-slate-700">
                                    <strong>الموبايل سيطر على الديسكتوب:</strong> في 2023، الموبايل حقق <span class="term">40 مليار زيارة</span> مقابل <span class="term">10 مليار زيارة</span> فقط للديسكتوب.
                                </p>
                            </div>
                            <div class="flex items-start gap-3 bg-teal-50 rounded-lg p-4 border border-teal-100">
                                <span class="text-teal-600 font-bold text-lg mt-0.5">2</span>
                                <p class="text-sm text-slate-700">
                                    <strong>تطبيقات في كل المجالات:</strong>
                                    <span class="term">الصحة</span>، <span class="term">البنوك</span>، <span class="term">التعليم</span>، <span class="term">التجارة الإلكترونية</span>، الترفيه، التواصل الاجتماعي، وغيرها.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Stats Visual --}}
                    <div class="bg-slate-50 rounded-xl p-5 border border-slate-200">
                        <h4 class="text-sm font-bold text-slate-600 mb-3 text-center">مقارنة الزيارات (2023)</h4>
                        <div class="flex items-end justify-center gap-8">
                            <div class="text-center">
                                <div class="bg-teal-500 rounded-t-lg w-20 h-32 flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">40 مليار</span>
                                </div>
                                <p class="text-xs text-slate-600 mt-2 font-semibold">الموبايل</p>
                            </div>
                            <div class="text-center">
                                <div class="bg-slate-400 rounded-t-lg w-20 h-16 flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">10 مليار</span>
                                </div>
                                <p class="text-xs text-slate-600 mt-2 font-semibold">الديسكتوب</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 2: الفرق بين تطوير الموبايل والديسكتوب --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-blue-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">الفرق بين تطوير الموبايل والديسكتوب</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 2000px;">
                <div class="space-y-5">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm border-collapse">
                            <thead>
                                <tr>
                                    <th class="bg-blue-50 text-blue-700 font-bold px-4 py-3 text-right rounded-tr-xl border border-blue-100">المعيار</th>
                                    <th class="bg-teal-50 text-teal-700 font-bold px-4 py-3 text-right border border-teal-100">الموبايل</th>
                                    <th class="bg-slate-100 text-slate-700 font-bold px-4 py-3 text-right rounded-tl-xl border border-slate-200">الديسكتوب</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4 py-3 font-semibold text-slate-700 border border-slate-100 bg-blue-50/30">الشاشة</td>
                                    <td class="px-4 py-3 text-slate-600 border border-slate-100">شاشة <span class="term">صغيرة</span> + إدخال باللمس</td>
                                    <td class="px-4 py-3 text-slate-600 border border-slate-100">شاشة <span class="term">كبيرة</span> + كيبورد وماوس</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 font-semibold text-slate-700 border border-slate-100 bg-blue-50/30">الموارد</td>
                                    <td class="px-4 py-3 text-slate-600 border border-slate-100"><span class="term">ذاكرة محدودة</span> + بطارية محدودة</td>
                                    <td class="px-4 py-3 text-slate-600 border border-slate-100"><span class="term">موارد أكبر</span> + طاقة مستمرة</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-3 font-semibold text-slate-700 border border-slate-100 bg-blue-50/30">واجهة المستخدم</td>
                                    <td class="px-4 py-3 text-slate-600 border border-slate-100">تصميم <span class="term">متجاوب</span> وبسيط</td>
                                    <td class="px-4 py-3 text-slate-600 border border-slate-100">تصميمات <span class="term">معقدة</span> ومتعددة النوافذ</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 flex items-start gap-3">
                        <span class="text-amber-500 text-xl mt-0.5">💡</span>
                        <p class="text-sm text-amber-800">
                            تطوير الموبايل يتطلب مراعاة <strong>القيود</strong> مثل حجم الشاشة، استهلاك البطارية، وسرعة الشبكة، بينما الديسكتوب عنده موارد أكثر.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 3: Native vs Hybrid --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-emerald-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">Native vs Hybrid</h2>
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
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        {{-- Native Apps --}}
                        <div class="bg-emerald-50 rounded-xl p-5 border-2 border-emerald-200">
                            <div class="flex items-center gap-2 mb-3">
                                <div class="w-8 h-8 rounded-lg bg-emerald-500 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <h3 class="font-bold text-emerald-700 text-base">التطبيقات الأصلية <span class="term-en">(Native Apps)</span></h3>
                            </div>
                            <ul class="text-sm text-slate-700 space-y-2">
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">+</span>
                                    <span>مطورة <span class="term">لمنصة محددة</span> (Android أو iOS)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">+</span>
                                    <span><span class="term">أداء عالي</span> وسرعة ممتازة</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-500 mt-1">+</span>
                                    <span><span class="term">وصول كامل</span> لموارد الجهاز (الكاميرا، GPS، المستشعرات)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-red-500 mt-1">-</span>
                                    <span>تحتاج <span class="term">كود منفصل</span> لكل منصة</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-red-500 mt-1">-</span>
                                    <span>تكلفة وجهد تطوير أعلى</span>
                                </li>
                            </ul>
                        </div>

                        {{-- Hybrid Apps --}}
                        <div class="bg-blue-50 rounded-xl p-5 border-2 border-blue-200">
                            <div class="flex items-center gap-2 mb-3">
                                <div class="w-8 h-8 rounded-lg bg-blue-500 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75L16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/>
                                    </svg>
                                </div>
                                <h3 class="font-bold text-blue-700 text-base">التطبيقات الهجينة <span class="term-en">(Hybrid Apps)</span></h3>
                            </div>
                            <ul class="text-sm text-slate-700 space-y-2">
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-500 mt-1">+</span>
                                    <span>تقنيات ويب <span class="term-en">(HTML/CSS/JS)</span> ملفوفة في <span class="term">حاوية أصلية</span></span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-500 mt-1">+</span>
                                    <span><span class="term">كود واحد</span> لكل المنصات</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-500 mt-1">+</span>
                                    <span>أطر عمل مثل <span class="term-en">Ionic</span> و <span class="term-en">Cordova</span></span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-red-500 mt-1">-</span>
                                    <span><span class="term">أداء أقل</span> من التطبيقات الأصلية</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-red-500 mt-1">-</span>
                                    <span>وصول محدود لبعض موارد الجهاز</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 4: المنصات ولغات البرمجة --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-violet-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">المنصات ولغات البرمجة</h2>
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
                    {{-- Tree Root --}}
                    <div class="bg-violet-100 rounded-xl p-4 text-center border border-violet-200">
                        <p class="font-extrabold text-violet-800 text-lg">تطوير تطبيقات الموبايل <span class="term-en">(Mobile Dev)</span></p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        {{-- Cross-Platform --}}
                        <div class="bg-white rounded-xl p-5 border-2 border-violet-200">
                            <h3 class="font-bold text-violet-700 mb-3 text-center">متعدد المنصات <span class="term-en">(Cross-Platform)</span></h3>
                            <div class="space-y-2">
                                <div class="bg-violet-50 rounded-lg p-3 text-center">
                                    <span class="term-en font-semibold text-violet-700">Xamarin</span>
                                    <span class="text-slate-500 text-sm"> — C#</span>
                                </div>
                                <div class="bg-blue-50 rounded-lg p-3 text-center">
                                    <span class="term-en font-semibold text-blue-700">React Native</span>
                                    <span class="text-slate-500 text-sm"> — JavaScript</span>
                                </div>
                                <div class="bg-cyan-50 rounded-lg p-3 text-center">
                                    <span class="term-en font-semibold text-cyan-700">Flutter</span>
                                    <span class="text-slate-500 text-sm"> — Dart</span>
                                </div>
                            </div>
                        </div>

                        {{-- Native --}}
                        <div class="bg-white rounded-xl p-5 border-2 border-emerald-200">
                            <h3 class="font-bold text-emerald-700 mb-3 text-center">أصلي <span class="term-en">(Native)</span></h3>
                            <div class="space-y-2">
                                <div class="bg-slate-50 rounded-lg p-3">
                                    <p class="font-semibold text-slate-700 text-center mb-1">iOS</p>
                                    <p class="text-sm text-slate-500 text-center">
                                        <span class="term-en">Swift</span> / <span class="term-en">Objective-C</span> — بيئة <span class="term-en">Xcode</span>
                                    </p>
                                </div>
                                <div class="bg-emerald-50 rounded-lg p-3">
                                    <p class="font-semibold text-emerald-700 text-center mb-1">Android</p>
                                    <p class="text-sm text-slate-500 text-center">
                                        <span class="term-en">Java</span> / <span class="term-en">Kotlin</span> — بيئة <span class="term-en">Android Studio</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 5: معمارية تطبيقات الموبايل --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-amber-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 0h.008v.008h-.008V7.5z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">معمارية تطبيقات الموبايل</h2>
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
                    {{-- Layered Architecture --}}
                    <h3 class="font-bold text-amber-700">البنية الطبقية <span class="term-en">(Layered Architecture)</span></h3>
                    <div class="space-y-0">
                        <div class="bg-amber-100 rounded-t-xl p-4 border-2 border-amber-300 text-center">
                            <p class="font-bold text-amber-800"><span class="term">طبقة العرض</span> <span class="term-en">(Presentation Layer)</span></p>
                            <p class="text-sm text-amber-700">واجهة المستخدم <span class="term-en">(UI/UX)</span> — ما يشوفه المستخدم ويتفاعل معاه</p>
                        </div>
                        <div class="flex justify-center">
                            <div class="w-0.5 h-4 bg-amber-300"></div>
                        </div>
                        <div class="bg-orange-100 p-4 border-2 border-orange-300 text-center">
                            <p class="font-bold text-orange-800"><span class="term">طبقة منطق الأعمال</span> <span class="term-en">(Business Logic Layer)</span></p>
                            <p class="text-sm text-orange-700">الوظائف الأساسية والتواصل بين الطبقات</p>
                        </div>
                        <div class="flex justify-center">
                            <div class="w-0.5 h-4 bg-orange-300"></div>
                        </div>
                        <div class="bg-yellow-100 rounded-b-xl p-4 border-2 border-yellow-300 text-center">
                            <p class="font-bold text-yellow-800"><span class="term">طبقة الوصول للبيانات</span> <span class="term-en">(Data Access Layer)</span></p>
                            <p class="text-sm text-yellow-700">التخزين المحلي وقواعد البيانات</p>
                        </div>
                    </div>

                    {{-- Client-Server --}}
                    <h3 class="font-bold text-amber-700 mt-6">نموذج العميل-الخادم <span class="term-en">(Client-Server)</span></h3>
                    <div class="bg-white rounded-xl p-5 border border-slate-200">
                        <div class="flex flex-col md:flex-row items-center justify-center gap-4">
                            <div class="bg-teal-100 text-teal-700 font-bold px-5 py-3 rounded-xl text-center min-w-[120px]">
                                التطبيق (Client)
                            </div>
                            <div class="flex flex-col items-center">
                                <svg class="w-8 h-8 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/>
                                </svg>
                            </div>
                            <div class="bg-amber-100 text-amber-700 font-bold px-5 py-3 rounded-xl text-center min-w-[120px]">
                                الخادم (Server)
                            </div>
                        </div>
                        <div class="flex flex-wrap justify-center gap-2 mt-4">
                            <span class="text-xs bg-slate-100 text-slate-600 px-3 py-1.5 rounded-lg font-medium"><span class="term-en">RESTful APIs</span></span>
                            <span class="text-xs bg-slate-100 text-slate-600 px-3 py-1.5 rounded-lg font-medium"><span class="term-en">GraphQL</span></span>
                            <span class="text-xs bg-slate-100 text-slate-600 px-3 py-1.5 rounded-lg font-medium"><span class="term-en">Firebase</span></span>
                            <span class="text-xs bg-slate-100 text-slate-600 px-3 py-1.5 rounded-lg font-medium"><span class="term-en">AWS</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 6: مراحل تطوير التطبيق --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-indigo-500">
            <button onclick="toggleSection('sec6')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">مراحل تطوير التطبيق</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec6', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec6" style="max-height: 2000px;">
                <div class="space-y-4">
                    {{-- Timeline --}}
                    <div class="relative">
                        {{-- Step 1 --}}
                        <div class="flex gap-4 mb-6">
                            <div class="flex flex-col items-center">
                                <div class="w-10 h-10 rounded-full bg-indigo-500 flex items-center justify-center text-white font-bold text-sm shrink-0">1</div>
                                <div class="w-0.5 h-full bg-indigo-200 mt-1"></div>
                            </div>
                            <div class="bg-indigo-50 rounded-xl p-4 border border-indigo-100 flex-1">
                                <h4 class="font-bold text-indigo-700"><span class="term">التخطيط</span> <span class="term-en">(Planning)</span></h4>
                                <p class="text-sm text-slate-600 mt-1">تحديد الفكرة، الجمهور المستهدف، المتطلبات الوظيفية وغير الوظيفية</p>
                            </div>
                        </div>

                        {{-- Step 2 --}}
                        <div class="flex gap-4 mb-6">
                            <div class="flex flex-col items-center">
                                <div class="w-10 h-10 rounded-full bg-violet-500 flex items-center justify-center text-white font-bold text-sm shrink-0">2</div>
                                <div class="w-0.5 h-full bg-violet-200 mt-1"></div>
                            </div>
                            <div class="bg-violet-50 rounded-xl p-4 border border-violet-100 flex-1">
                                <h4 class="font-bold text-violet-700"><span class="term">التصميم</span> <span class="term-en">(Design)</span></h4>
                                <p class="text-sm text-slate-600 mt-1">إنشاء <span class="term-en">Wireframes</span> و <span class="term-en">Mockups</span> لواجهة المستخدم</p>
                            </div>
                        </div>

                        {{-- Step 3 --}}
                        <div class="flex gap-4 mb-6">
                            <div class="flex flex-col items-center">
                                <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold text-sm shrink-0">3</div>
                                <div class="w-0.5 h-full bg-blue-200 mt-1"></div>
                            </div>
                            <div class="bg-blue-50 rounded-xl p-4 border border-blue-100 flex-1">
                                <h4 class="font-bold text-blue-700"><span class="term">التطوير</span> <span class="term-en">(Development)</span></h4>
                                <p class="text-sm text-slate-600 mt-1">كتابة الكود البرمجي (Frontend + Backend)</p>
                            </div>
                        </div>

                        {{-- Step 4 --}}
                        <div class="flex gap-4 mb-6">
                            <div class="flex flex-col items-center">
                                <div class="w-10 h-10 rounded-full bg-amber-500 flex items-center justify-center text-white font-bold text-sm shrink-0">4</div>
                                <div class="w-0.5 h-full bg-amber-200 mt-1"></div>
                            </div>
                            <div class="bg-amber-50 rounded-xl p-4 border border-amber-100 flex-1">
                                <h4 class="font-bold text-amber-700"><span class="term">الاختبار</span> <span class="term-en">(Testing)</span></h4>
                                <p class="text-sm text-slate-600 mt-1">أنواع الاختبارات:</p>
                                <div class="flex flex-wrap gap-1.5 mt-2">
                                    <span class="text-xs bg-amber-100 text-amber-700 px-2 py-1 rounded-md"><span class="term-en">Unit Testing</span></span>
                                    <span class="text-xs bg-amber-100 text-amber-700 px-2 py-1 rounded-md"><span class="term-en">Integration Testing</span></span>
                                    <span class="text-xs bg-amber-100 text-amber-700 px-2 py-1 rounded-md"><span class="term-en">Performance Testing</span></span>
                                    <span class="text-xs bg-amber-100 text-amber-700 px-2 py-1 rounded-md"><span class="term-en">UI Testing</span></span>
                                </div>
                                <p class="text-xs text-amber-600 mt-2 font-semibold">+ تحدي <span class="term">تجزئة الأجهزة</span> <span class="term-en">(Device Fragmentation)</span></p>
                            </div>
                        </div>

                        {{-- Step 5 --}}
                        <div class="flex gap-4 mb-6">
                            <div class="flex flex-col items-center">
                                <div class="w-10 h-10 rounded-full bg-emerald-500 flex items-center justify-center text-white font-bold text-sm shrink-0">5</div>
                                <div class="w-0.5 h-full bg-emerald-200 mt-1"></div>
                            </div>
                            <div class="bg-emerald-50 rounded-xl p-4 border border-emerald-100 flex-1">
                                <h4 class="font-bold text-emerald-700"><span class="term">النشر</span> <span class="term-en">(Deployment)</span></h4>
                                <p class="text-sm text-slate-600 mt-1">رفع التطبيق على <span class="term-en">Google Play Store</span> و <span class="term-en">Apple App Store</span></p>
                            </div>
                        </div>

                        {{-- Step 6 --}}
                        <div class="flex gap-4">
                            <div class="flex flex-col items-center">
                                <div class="w-10 h-10 rounded-full bg-teal-500 flex items-center justify-center text-white font-bold text-sm shrink-0">6</div>
                            </div>
                            <div class="bg-teal-50 rounded-xl p-4 border border-teal-100 flex-1">
                                <h4 class="font-bold text-teal-700"><span class="term">الصيانة</span> <span class="term-en">(Maintenance)</span></h4>
                                <p class="text-sm text-slate-600 mt-1">تحديثات، إصلاح الأخطاء، إضافة ميزات جديدة</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 7: أنظمة التشغيل والاتجاهات الحديثة --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-fuchsia-500">
            <button onclick="toggleSection('sec7')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-fuchsia-100 flex items-center justify-center text-fuchsia-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">أنظمة التشغيل والاتجاهات الحديثة</h2>
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
                    {{-- Market Share --}}
                    <h3 class="font-bold text-fuchsia-700">حصة السوق</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-emerald-50 rounded-xl p-5 border border-emerald-200 text-center">
                            <div class="text-3xl font-extrabold text-emerald-600 mb-1">72.44%</div>
                            <p class="text-sm font-bold text-emerald-700"><span class="term-en">Android</span></p>
                        </div>
                        <div class="bg-slate-50 rounded-xl p-5 border border-slate-200 text-center">
                            <div class="text-3xl font-extrabold text-slate-600 mb-1">26.75%</div>
                            <p class="text-sm font-bold text-slate-700"><span class="term-en">iOS</span></p>
                        </div>
                    </div>

                    {{-- Trends --}}
                    <h3 class="font-bold text-fuchsia-700 mt-4">الاتجاهات الحديثة <span class="term-en">(Modern Trends)</span></h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="bg-fuchsia-50 rounded-xl p-4 border border-fuchsia-100">
                            <h4 class="font-bold text-fuchsia-700 text-sm mb-1"><span class="term">الذكاء الاصطناعي وتعلم الآلة</span></h4>
                            <p class="text-xs text-slate-600"><span class="term-en">TensorFlow Lite</span> و <span class="term-en">CoreML</span> لتشغيل نماذج AI على الجهاز</p>
                        </div>
                        <div class="bg-violet-50 rounded-xl p-4 border border-violet-100">
                            <h4 class="font-bold text-violet-700 text-sm mb-1"><span class="term">إنترنت الأشياء</span> <span class="term-en">(IoT)</span></h4>
                            <p class="text-xs text-slate-600">ربط التطبيقات بالأجهزة الذكية والمستشعرات</p>
                        </div>
                        <div class="bg-pink-50 rounded-xl p-4 border border-pink-100">
                            <h4 class="font-bold text-pink-700 text-sm mb-1"><span class="term">الواقع المعزز والافتراضي</span> <span class="term-en">(AR/VR)</span></h4>
                            <p class="text-xs text-slate-600"><span class="term-en">ARCore</span> (Android) و <span class="term-en">ARKit</span> (iOS)</p>
                        </div>
                        <div class="bg-blue-50 rounded-xl p-4 border border-blue-100">
                            <h4 class="font-bold text-blue-700 text-sm mb-1"><span class="term">شبكات الجيل الخامس</span> <span class="term-en">(5G)</span></h4>
                            <p class="text-xs text-slate-600">سرعات عالية جدا تفتح آفاق جديدة للتطبيقات</p>
                        </div>
                        <div class="bg-amber-50 rounded-xl p-4 border border-amber-100 md:col-span-2">
                            <h4 class="font-bold text-amber-700 text-sm mb-1"><span class="term">البلوكتشين والتطبيقات اللامركزية</span> <span class="term-en">(Blockchain / DApps)</span></h4>
                            <p class="text-xs text-slate-600">تطبيقات آمنة وشفافة بدون خادم مركزي</p>
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
                            <div class="flashcard-front bg-gradient-to-br from-teal-500 to-cyan-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">1</span>
                                <p class="font-bold text-base">ما الفرق بين Native و Hybrid؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-teal-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    <strong class="text-emerald-600">Native:</strong> لمنصة محددة، أداء عالي، وصول كامل للموارد<br><br>
                                    <strong class="text-blue-600">Hybrid:</strong> كود واحد لكل المنصات، تقنيات ويب، أداء أقل
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 2 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-violet-500 to-purple-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">2</span>
                                <p class="font-bold text-base">اذكر 3 أطر عمل Cross-Platform</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-violet-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    1. <strong class="text-violet-600">Xamarin</strong> (C#)<br>
                                    2. <strong class="text-blue-600">React Native</strong> (JavaScript)<br>
                                    3. <strong class="text-cyan-600">Flutter</strong> (Dart)
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 3 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">3</span>
                                <p class="font-bold text-base">ما هي طبقات معمارية التطبيق؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-amber-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    1. <strong class="text-amber-600">Presentation Layer</strong> — واجهة المستخدم<br>
                                    2. <strong class="text-orange-600">Business Logic Layer</strong> — الوظائف<br>
                                    3. <strong class="text-yellow-600">Data Access Layer</strong> — التخزين
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 4 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">4</span>
                                <p class="font-bold text-base">ما نسبة Android في السوق؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-emerald-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    <strong class="text-emerald-600">Android: 72.44%</strong><br>
                                    <strong class="text-slate-600">iOS: 26.75%</strong><br><br>
                                    <span class="text-emerald-600 font-semibold">Android يسيطر على السوق بفارق كبير</span>
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
        if (!progress.mobile_lec1) progress.mobile_lec1 = [];

        const idx = progress.mobile_lec1.indexOf(sectionId);
        if (idx === -1) {
            progress.mobile_lec1.push(sectionId);
            btn.classList.remove('text-slate-400', 'border-slate-200');
            btn.classList.add('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
            btn.textContent = 'تم ✓';
        } else {
            progress.mobile_lec1.splice(idx, 1);
            btn.classList.add('text-slate-400', 'border-slate-200');
            btn.classList.remove('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
            btn.textContent = 'تم';
        }

        saveProgress(progress);
    }

    document.addEventListener('DOMContentLoaded', function() {
        const progress = getProgress();
        if (progress.mobile_lec1 && progress.mobile_lec1.length > 0) {
            progress.mobile_lec1.forEach(function(sectionId) {
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
