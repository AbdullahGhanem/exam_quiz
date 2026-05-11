@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'mobile') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-emerald-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-emerald-600 to-green-600 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة السادسة: Android & Android Studio</h1>
                <p class="text-emerald-200 text-sm">Software Development for Mobile Devices</p>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 1: ما هو Android؟ --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-emerald-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                        <span class="text-xl">🤖</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">ما هو Android؟</h2>
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
                    <div class="bg-emerald-50/70 rounded-xl p-5 border border-emerald-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            <span class="term">Android</span> هو نظام تشغيل <span class="term">مفتوح المصدر</span> <span class="term-en">(Open-Source Mobile OS)</span> طوّرته <span class="term">Google</span>،
                            وأول جهاز Android طُرح في عام <strong>2008</strong>. النظام مبني على <span class="term">Linux Kernel</span>.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white rounded-xl border border-slate-200 p-5">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-xl">💻</span>
                                <h3 class="font-bold text-emerald-700">لغات البرمجة</h3>
                            </div>
                            <p class="text-sm text-slate-600">تطبيقات Android تُكتب عادةً بلغة <span class="term-en font-semibold">Java</span> أو <span class="term-en font-semibold">Kotlin</span> (وأحياناً C#، Python، Dart).</p>
                        </div>
                        <div class="bg-white rounded-xl border border-slate-200 p-5">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-xl">🎨</span>
                                <h3 class="font-bold text-green-700">UI / UX</h3>
                            </div>
                            <p class="text-sm text-slate-600">واجهات المستخدم تُبنى بلغة <span class="term-en font-semibold">XML</span> (eXtensible Markup Language).</p>
                        </div>
                    </div>

                    <div class="bg-cyan-50 border border-cyan-200 rounded-xl p-4">
                        <p class="text-sm text-cyan-800 leading-relaxed">
                            <strong>توسعات Android:</strong> Google طوّرت أيضاً
                            <span class="term-en font-semibold">Android TV</span> للتلفزيونات،
                            <span class="term-en font-semibold">Android Auto</span> للسيارات،
                            و <span class="term-en font-semibold">Wear OS</span> للساعات الذكية.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 2: Android Versions & API Level --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-blue-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600">
                        <span class="text-xl">🍰</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">إصدارات Android و API Level</h2>
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
                    <div class="bg-blue-50/70 rounded-xl p-5 border border-blue-100">
                        <p class="text-slate-700 leading-relaxed">
                            كل إصدار من Android له <span class="term">اسم رمزي</span> (غالباً اسم حلوى) و<span class="term">رقم API Level</span>.
                            <span class="term">API Level</span> هو رقم صحيح يحدّد مراجعة الـ framework API التي يقدّمها الإصدار.
                        </p>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 p-5 overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="border-b-2 border-blue-200">
                                    <th class="text-start py-2 px-3 text-blue-700 font-bold">الإصدار</th>
                                    <th class="text-start py-2 px-3 text-blue-700 font-bold">الاسم الرمزي</th>
                                    <th class="text-start py-2 px-3 text-blue-700 font-bold">API</th>
                                    <th class="text-start py-2 px-3 text-blue-700 font-bold">السنة</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-600">
                                <tr class="border-b border-slate-100"><td class="py-2 px-3">1.5</td><td class="py-2 px-3">Cupcake</td><td class="py-2 px-3 font-mono">3</td><td class="py-2 px-3">2009</td></tr>
                                <tr class="border-b border-slate-100"><td class="py-2 px-3">4.4</td><td class="py-2 px-3">KitKat</td><td class="py-2 px-3 font-mono">19</td><td class="py-2 px-3">2013</td></tr>
                                <tr class="border-b border-slate-100"><td class="py-2 px-3">5.0</td><td class="py-2 px-3">Lollipop</td><td class="py-2 px-3 font-mono">21</td><td class="py-2 px-3">2014</td></tr>
                                <tr class="border-b border-slate-100"><td class="py-2 px-3">6.0</td><td class="py-2 px-3">Marshmallow</td><td class="py-2 px-3 font-mono">23</td><td class="py-2 px-3">2015</td></tr>
                                <tr class="border-b border-slate-100"><td class="py-2 px-3">8.0</td><td class="py-2 px-3">Oreo</td><td class="py-2 px-3 font-mono">26</td><td class="py-2 px-3">2017</td></tr>
                                <tr class="border-b border-slate-100"><td class="py-2 px-3">9.0</td><td class="py-2 px-3">Pie</td><td class="py-2 px-3 font-mono">28</td><td class="py-2 px-3">2018</td></tr>
                                <tr class="border-b border-slate-100"><td class="py-2 px-3">11</td><td class="py-2 px-3">R</td><td class="py-2 px-3 font-mono">30</td><td class="py-2 px-3">2020</td></tr>
                                <tr class="border-b border-slate-100"><td class="py-2 px-3">13</td><td class="py-2 px-3">Tiramisu</td><td class="py-2 px-3 font-mono">33</td><td class="py-2 px-3">2022</td></tr>
                                <tr class="border-b border-slate-100"><td class="py-2 px-3">14</td><td class="py-2 px-3">Upside Down Cake</td><td class="py-2 px-3 font-mono">34</td><td class="py-2 px-3">2023</td></tr>
                                <tr><td class="py-2 px-3 font-bold">15</td><td class="py-2 px-3 font-bold">Vanilla Ice Cream</td><td class="py-2 px-3 font-mono font-bold">35</td><td class="py-2 px-3 font-bold">2024</td></tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-slate-800 mb-3">الـ Framework API يتكوّن من:</h3>
                        <ul class="space-y-2 text-sm text-slate-600">
                            <li class="flex items-start gap-2"><span class="text-blue-500 mt-1">▸</span> مجموعة أساسية من <strong>الحزم والكلاسات</strong> (packages & classes)</li>
                            <li class="flex items-start gap-2"><span class="text-blue-500 mt-1">▸</span> عناصر XML للـ <strong>Manifest file</strong></li>
                            <li class="flex items-start gap-2"><span class="text-blue-500 mt-1">▸</span> عناصر XML لإعلان والوصول للـ <strong>Resources</strong></li>
                            <li class="flex items-start gap-2"><span class="text-blue-500 mt-1">▸</span> مجموعة من <strong>Intents</strong></li>
                            <li class="flex items-start gap-2"><span class="text-blue-500 mt-1">▸</span> مجموعة من <strong>Permissions</strong> يطلبها التطبيق</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 3: Android Architecture --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-cyan-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center text-cyan-600">
                        <span class="text-xl">🏛️</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">معمارية Android (Architecture)</h2>
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
                    <div class="bg-cyan-50/70 rounded-xl p-5 border border-cyan-100">
                        <p class="text-slate-700 leading-relaxed">
                            معمارية Android تتكوّن من <strong>5 طبقات</strong> (من الأسفل للأعلى):
                        </p>
                    </div>

                    {{-- Layer 1: Linux Kernel --}}
                    <div class="bg-red-50 rounded-xl p-5 border-r-4 border-red-400">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="w-7 h-7 rounded-full bg-red-500 text-white flex items-center justify-center text-sm font-bold">1</span>
                            <h3 class="font-bold text-red-700">Linux Kernel</h3>
                        </div>
                        <p class="text-sm text-slate-700 mb-2">قلب المعمارية ويوجد في <strong>أسفل</strong> الترتيب.</p>
                        <p class="text-xs text-slate-600">مسؤول عن: <span class="term-en">Device Drivers</span>، Power Management، Memory Management، Device Management، الوصول للموارد (Camera, Keypad, Display).</p>
                    </div>

                    {{-- Layer 2: Native Libraries --}}
                    <div class="bg-emerald-50 rounded-xl p-5 border-r-4 border-emerald-400">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="w-7 h-7 rounded-full bg-emerald-500 text-white flex items-center justify-center text-sm font-bold">2</span>
                            <h3 class="font-bold text-emerald-700">Native Libraries</h3>
                        </div>
                        <p class="text-sm text-slate-700 mb-3">مكتبات مبنية خصيصاً لنظام Android:</p>
                        <ul class="text-xs text-slate-600 space-y-1.5">
                            <li>• <strong>WebKit</strong> — دعم المتصفح</li>
                            <li>• <strong>SQLite</strong> — قواعد البيانات</li>
                            <li>• <strong>FreeType</strong> — دعم الخطوط</li>
                            <li>• <strong>Media</strong> — تشغيل وتسجيل الصوت والفيديو</li>
                            <li>• <strong>SSL (Secure Sockets Layer)</strong> — أمان الإنترنت</li>
                        </ul>
                    </div>

                    {{-- Layer 3: Android Runtime --}}
                    <div class="bg-amber-50 rounded-xl p-5 border-r-4 border-amber-400">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="w-7 h-7 rounded-full bg-amber-500 text-white flex items-center justify-center text-sm font-bold">3</span>
                            <h3 class="font-bold text-amber-700">Android Runtime</h3>
                        </div>
                        <p class="text-sm text-slate-700 mb-2">يحتوي على Core Libraries و <span class="term">DVM (Dalvik Virtual Machine)</span>.</p>
                        <p class="text-xs text-slate-600 mb-2">DVM مسؤول عن <strong>تشغيل تطبيقات Android</strong>. شبيه بـ JVM لكن <strong>محسّن للأجهزة المحمولة</strong>: يستهلك ذاكرة أقل ويوفّر أداء سريع.</p>
                        <p class="text-xs text-slate-600">DVM يستخدم خصائص Linux الأساسية مثل <strong>Memory Management</strong> و <strong>Multi-threading</strong>.</p>
                    </div>

                    {{-- Layer 4: Application Framework --}}
                    <div class="bg-blue-50 rounded-xl p-5 border-r-4 border-blue-400">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="w-7 h-7 rounded-full bg-blue-500 text-white flex items-center justify-center text-sm font-bold">4</span>
                            <h3 class="font-bold text-blue-700">Application Framework</h3>
                        </div>
                        <p class="text-sm text-slate-700 mb-3">يقدّم خدمات عالية المستوى للتطبيقات على شكل Java classes:</p>
                        <ul class="text-xs text-slate-600 space-y-1.5">
                            <li>• <strong>Content Providers</strong> — مشاركة البيانات بين التطبيقات</li>
                            <li>• <strong>Notifications Manager</strong> — عرض التنبيهات والإشعارات</li>
                            <li>• <strong>Activity Manager</strong> — التحكم في دورة حياة التطبيق و activity stack</li>
                            <li>• <strong>View System</strong> — مجموعة Views لبناء واجهات المستخدم</li>
                            <li>• <strong>Resource Manager</strong> — الوصول للموارد غير البرمجية (strings, colors, layouts)</li>
                        </ul>
                    </div>

                    {{-- Layer 5: Applications --}}
                    <div class="bg-violet-50 rounded-xl p-5 border-r-4 border-violet-400">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="w-7 h-7 rounded-full bg-violet-500 text-white flex items-center justify-center text-sm font-bold">5</span>
                            <h3 class="font-bold text-violet-700">Applications</h3>
                        </div>
                        <p class="text-sm text-slate-700">الطبقة العليا — التطبيقات تُثبّت على هذه الطبقة فقط (Contacts, Browser, Games, ...).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 4: Android Studio --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-teal-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-teal-100 flex items-center justify-center text-teal-600">
                        <span class="text-xl">🛠️</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">Android Studio — التثبيت وأول مشروع</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec4', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec4" style="max-height: 2500px;">
                <div class="space-y-5">
                    <div class="bg-teal-50/70 rounded-xl p-5 border border-teal-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Android Studio</span> هو الـ IDE الرسمي لتطوير تطبيقات Android. يمكن تنزيله من
                            <a href="https://developer.android.com/studio" class="text-teal-600 underline" dir="ltr" target="_blank">developer.android.com/studio</a>
                        </p>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-slate-800 mb-3">المكونات التي تُثبّت:</h3>
                        <div class="grid grid-cols-2 gap-2 text-sm">
                            <div class="bg-teal-50 rounded-lg p-2.5 text-teal-700 font-semibold text-center">Android Studio</div>
                            <div class="bg-teal-50 rounded-lg p-2.5 text-teal-700 font-semibold text-center">Android SDK</div>
                            <div class="bg-teal-50 rounded-lg p-2.5 text-teal-700 font-semibold text-center">Android Virtual Device</div>
                            <div class="bg-teal-50 rounded-lg p-2.5 text-teal-700 font-semibold text-center">Performance (Intel HAXM)</div>
                        </div>
                        <p class="text-xs text-slate-500 mt-3">المساحة المطلوبة: <strong>3.8 GB</strong>. Android Studio يبحث عن JDK وموقع SDK.</p>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-slate-800 mb-3">خطوات إنشاء أول مشروع (HelloWorld):</h3>
                        <ol class="space-y-2 text-sm text-slate-600 list-decimal pr-5">
                            <li>من شاشة الترحيب → <strong>Start a new Android Studio project</strong></li>
                            <li>اختر template: <strong>Basic Activity</strong> (مش الافتراضي)</li>
                            <li>أعطِ اسم للتطبيق واختر اللغة <strong>Java</strong></li>
                            <li>اضغط <strong>Finish</strong></li>
                        </ol>
                        <div class="bg-amber-50 border border-amber-200 rounded-lg p-3 mt-4 text-xs text-amber-800">
                            بعد الإنشاء: Android Studio ينشئ مجلد المشروع داخل <code class="bg-amber-100 px-1 rounded">AndroidStudioProjects</code>،
                            ويبني المشروع باستخدام <strong>Gradle</strong> كـ build system.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 5: Project Structure --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-indigo-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-600">
                        <span class="text-xl">📁</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">هيكلة المشروع (Project Structure)</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec5', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec5" style="max-height: 3000px;">
                <div class="space-y-5">
                    <div class="bg-indigo-50/70 rounded-xl p-5 border border-indigo-100">
                        <p class="text-slate-700 leading-relaxed">
                            في عرض <code class="bg-white px-2 py-0.5 rounded font-mono text-xs">Project &gt; Android</code>،
                            مشروع Android يحتوي على <strong>3 أو 4 مجلدات أساسية</strong>:
                            <span class="font-mono text-xs">manifests, java, java (generated), res</span>
                        </p>
                    </div>

                    {{-- manifests --}}
                    <div class="bg-white rounded-xl border-r-4 border-indigo-400 border border-slate-200 p-5">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xl">📋</span>
                            <h3 class="font-bold text-indigo-700">1. manifests</h3>
                        </div>
                        <p class="text-sm text-slate-600">يحتوي على ملف <code class="bg-slate-100 px-1.5 rounded font-mono text-xs">AndroidManifest.xml</code> الذي يصف <strong>كل مكونات تطبيق Android</strong>.</p>
                    </div>

                    {{-- java --}}
                    <div class="bg-white rounded-xl border-r-4 border-blue-400 border border-slate-200 p-5">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xl">☕</span>
                            <h3 class="font-bold text-blue-700">2. java</h3>
                        </div>
                        <p class="text-sm text-slate-600">يحتوي على ملفات <strong>Java source code</strong> الخاصة بالتطبيق.</p>
                    </div>

                    {{-- res --}}
                    <div class="bg-white rounded-xl border-r-4 border-emerald-400 border border-slate-200 p-5">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xl">🎨</span>
                            <h3 class="font-bold text-emerald-700">3. res (Resources)</h3>
                        </div>
                        <p class="text-sm text-slate-600 mb-3">كل الموارد: صور، layout files، نصوص، أيقونات، styling.</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-xs">
                            <div class="bg-emerald-50 p-2.5 rounded-lg"><strong>drawable/</strong> — صور التطبيق</div>
                            <div class="bg-emerald-50 p-2.5 rounded-lg"><strong>layout/</strong> — ملفات UI للـ activities</div>
                            <div class="bg-emerald-50 p-2.5 rounded-lg"><strong>menu/</strong> — XML للقوائم</div>
                            <div class="bg-emerald-50 p-2.5 rounded-lg"><strong>mipmap/</strong> — أيقونات launcher</div>
                            <div class="bg-emerald-50 p-2.5 rounded-lg col-span-2"><strong>values/</strong> — strings, colors</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 6: Run on Emulator / Real Device --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-orange-500">
            <button onclick="toggleSection('sec6')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-orange-100 flex items-center justify-center text-orange-600">
                        <span class="text-xl">▶️</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">تشغيل التطبيق (Emulator / Real Device)</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec6', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec6" style="max-height: 2500px;">
                <div class="space-y-5">
                    {{-- Emulator --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-orange-700 mb-3">📱 على الـ Emulator (الجهاز الافتراضي)</h3>
                        <ol class="space-y-2 text-sm text-slate-600 list-decimal pr-5">
                            <li>اختر <code class="bg-slate-100 px-1.5 rounded text-xs">Run &gt; Run 'app'</code> أو اضغط أيقونة Run</li>
                            <li>من <strong>Available Devices</strong> اختر الجهاز الافتراضي اللي عملته</li>
                            <li>الـ emulator يقلع ويثبت التطبيق وينفّذه</li>
                        </ol>
                        <div class="bg-amber-50 border border-amber-200 rounded-lg p-3 mt-3 text-xs text-amber-800">
                            <strong>نصيحة:</strong> ابدأ الـ emulator مع بداية الجلسة وما تقفله إلا بعد ما تخلص.
                        </div>
                    </div>

                    {{-- Real Device --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-red-700 mb-3">🔌 على جهاز حقيقي</h3>
                        <p class="text-sm text-slate-600 mb-3"><strong>المتطلبات:</strong> جهاز Android، كابل USB، (وعلى Windows: USB driver مناسب).</p>

                        <div class="bg-red-50 rounded-lg p-4 border border-red-200">
                            <h4 class="font-bold text-red-700 text-sm mb-2">تفعيل USB Debugging:</h4>
                            <ol class="space-y-1.5 text-xs text-slate-700 list-decimal pr-5">
                                <li>افتح <strong>Settings &gt; About phone</strong></li>
                                <li>اضغط على <strong>Build number</strong> سبع مرات</li>
                                <li>ارجع للإعدادات → <strong>Developer Options</strong> ظهرت</li>
                                <li>فعّل <strong>USB Debugging</strong></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 7: Application Components --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-purple-500">
            <button onclick="toggleSection('sec7')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-purple-100 flex items-center justify-center text-purple-600">
                        <span class="text-xl">🧩</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">مكونات التطبيق (Application Components)</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec7', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec7" style="max-height: 3500px;">
                <div class="space-y-5">
                    <div class="bg-purple-50/70 rounded-xl p-5 border border-purple-100">
                        <p class="text-slate-700 leading-relaxed"><strong>4 مكونات رئيسية</strong> داخل تطبيق Android:</p>
                    </div>

                    {{-- 4 Main Components --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-purple-50 rounded-xl p-5 border border-purple-200">
                            <div class="flex items-center gap-2 mb-2"><span class="text-xl">🪟</span><h3 class="font-bold text-purple-700">Activities</h3></div>
                            <p class="text-sm text-slate-600">تتحكم بالـ <strong>UI</strong> وتدير تفاعل المستخدم مع شاشة الموبايل.</p>
                        </div>
                        <div class="bg-fuchsia-50 rounded-xl p-5 border border-fuchsia-200">
                            <div class="flex items-center gap-2 mb-2"><span class="text-xl">⚙️</span><h3 class="font-bold text-fuchsia-700">Services</h3></div>
                            <p class="text-sm text-slate-600">تتعامل مع <strong>المعالجة في الخلفية</strong> (background processing).</p>
                        </div>
                        <div class="bg-pink-50 rounded-xl p-5 border border-pink-200">
                            <div class="flex items-center gap-2 mb-2"><span class="text-xl">📡</span><h3 class="font-bold text-pink-700">Broadcast Receivers</h3></div>
                            <p class="text-sm text-slate-600">تتولى <strong>التواصل بين Android OS والتطبيقات</strong>.</p>
                        </div>
                        <div class="bg-rose-50 rounded-xl p-5 border border-rose-200">
                            <div class="flex items-center gap-2 mb-2"><span class="text-xl">🗄️</span><h3 class="font-bold text-rose-700">Content Providers</h3></div>
                            <p class="text-sm text-slate-600">تتعامل مع إدارة <strong>البيانات وقواعد البيانات</strong>.</p>
                        </div>
                    </div>

                    <div class="bg-slate-100 rounded-xl p-4">
                        <h3 class="font-bold text-slate-700 mb-3 text-sm">مكونات إضافية للربط والبناء:</h3>
                        <div class="space-y-2 text-sm">
                            <div class="bg-white rounded-lg p-3 border border-slate-200"><strong class="text-purple-700">Fragments</strong> — يمثّل سلوكاً أو جزءاً من واجهة المستخدم داخل Activity</div>
                            <div class="bg-white rounded-lg p-3 border border-slate-200"><strong class="text-purple-700">Views</strong> — عناصر UI مرسومة على الشاشة (صور، نصوص، أزرار...)</div>
                            <div class="bg-white rounded-lg p-3 border border-slate-200"><strong class="text-purple-700">Layouts</strong> — هرميات Views تتحكم بشكل وترتيب الشاشة</div>
                            <div class="bg-white rounded-lg p-3 border border-slate-200"><strong class="text-purple-700">Resources</strong> — عناصر خارجية: strings، constants، صور</div>
                            <div class="bg-white rounded-lg p-3 border border-slate-200"><strong class="text-purple-700">Manifest</strong> — ملف الإعدادات الرئيسي للتطبيق</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Recap --}}
    <div class="card rounded-2xl border-2 border-emerald-200 bg-gradient-to-br from-emerald-50 to-green-50 p-6 mb-8">
        <h3 class="font-bold text-emerald-800 mb-4 flex items-center gap-2"><span class="text-xl">⚡</span> خلاصة سريعة للمراجعة</h3>
        <ul class="space-y-2 text-sm text-slate-700">
            <li>✓ Android = OS مفتوح المصدر من Google، مبني على <strong>Linux Kernel</strong>، ظهر 2008</li>
            <li>✓ المعمارية = <strong>5 طبقات</strong>: Linux Kernel → Native Libs → Runtime (DVM) → Framework → Apps</li>
            <li>✓ <strong>DVM</strong> شبيه JVM لكن محسّن للموبايل (ذاكرة أقل، أداء أسرع)</li>
            <li>✓ مجلدات المشروع: <strong>manifests, java, res</strong> (drawable/layout/menu/mipmap/values)</li>
            <li>✓ Build system = <strong>Gradle</strong></li>
            <li>✓ 4 مكونات رئيسية: <strong>Activities, Services, Broadcast Receivers, Content Providers</strong></li>
        </ul>
    </div>
</div>
@endsection
