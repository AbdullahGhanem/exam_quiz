@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'graphics') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-violet-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-violet-600 to-purple-700 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة الخامسة: المجموعات والـ Mappings</h1>
                <p class="text-violet-200 text-sm">Sets and Mapping in Computer Graphics</p>
            </div>
            <div class="px-6 py-3 bg-white/60 border-t border-violet-100">
                <div class="flex items-center justify-between mb-1.5">
                    <span class="text-xs font-semibold text-slate-500">تقدم المراجعة</span>
                    <span class="text-xs font-bold text-violet-600" id="progress-text">0 / 8</span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2">
                    <div class="bg-gradient-to-r from-violet-500 to-purple-600 h-2 rounded-full transition-all duration-500" id="progress-bar" style="width: 0%"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 1: Sets in CG --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-violet-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600"><span class="text-xl">🧮</span></div>
                    <h2 class="text-lg font-bold text-slate-800">المجموعات في CG وتعريفاتها</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec1', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec1" style="max-height: 3500px;">
                <div class="space-y-5">
                    <div class="bg-violet-50/70 rounded-xl p-5 border border-violet-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Set</span> = <strong>تجميعة من العناصر المتميزة</strong>.
                            في CG، نستخدم الـ Sets لتجميع بيانات مثل <strong>نقاط، vectors، وألوان</strong>.
                            تساعد في تعريف الحدود، إدارة نقاط البيانات، وعمليات مثل union، intersection، difference.
                        </p>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-violet-700 mb-3">الانتماء (Membership)</h3>
                        <p class="text-sm text-slate-700 mb-3">
                            انتماء عنصر لمجموعة يُرمز له بالرمز <code class="bg-violet-100 text-violet-700 px-2 py-0.5 rounded font-bold">∈</code>.
                        </p>
                        <div class="bg-slate-900 text-slate-100 rounded-lg p-4 font-mono text-center text-lg">
                            a ∈ S
                        </div>
                        <p class="text-xs text-slate-500 mt-2 text-center">
                            تعني: العنصر <strong>a</strong> ينتمي إلى المجموعة <strong>S</strong>.
                        </p>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-violet-700 mb-3">المجموعات الشائعة</h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-center">
                            <div class="bg-violet-50 border border-violet-200 rounded-lg p-3">
                                <p class="text-2xl font-bold text-violet-700 font-mono">ℝ</p>
                                <p class="text-xs text-slate-600 mt-1">كل الأعداد الحقيقية</p>
                            </div>
                            <div class="bg-purple-50 border border-purple-200 rounded-lg p-3">
                                <p class="text-2xl font-bold text-purple-700 font-mono">ℝ²</p>
                                <p class="text-xs text-slate-600 mt-1">كل النقاط في 2D</p>
                            </div>
                            <div class="bg-fuchsia-50 border border-fuchsia-200 rounded-lg p-3">
                                <p class="text-2xl font-bold text-fuchsia-700 font-mono">ℝ³</p>
                                <p class="text-xs text-slate-600 mt-1">كل النقاط في 3D</p>
                            </div>
                            <div class="bg-pink-50 border border-pink-200 rounded-lg p-3">
                                <p class="text-2xl font-bold text-pink-700 font-mono">ℤ</p>
                                <p class="text-xs text-slate-600 mt-1">الأعداد الصحيحة</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 2: Cartesian Products --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-purple-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-purple-100 flex items-center justify-center text-purple-600"><span class="text-xl">✖️</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Cartesian Product</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 3500px;">
                <div class="space-y-5">
                    <div class="bg-purple-50/70 rounded-xl p-5 border border-purple-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Cartesian Product</span> = عملية على مجموعتين A و B، تُكتب
                            <code class="bg-purple-100 text-purple-700 px-2 py-0.5 rounded font-bold">A × B</code>.
                            الناتج = <strong>مجموعة من الأزواج المرتبة</strong> من عناصر A و B.
                        </p>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-purple-700 mb-3">الصيغة العامة:</h3>
                        <div class="bg-slate-900 text-slate-100 rounded-lg p-4 font-mono text-center">
                            A × B = {(a₁, b₁), (a₂, b₂), (a₃, b₃), ...}
                        </div>
                    </div>

                    <div class="bg-fuchsia-50 border-l-4 border-fuchsia-400 rounded-lg p-4">
                        <p class="text-sm text-fuchsia-900 leading-relaxed">
                            <strong>📌 تطبيق في CG — Texture Mapping:</strong>
                            لو A تحتوي على نقاط على سطح، و B تحتوي على ألوان —
                            الـ Cartesian Product يربط <strong>كل نقطة بلون فريد</strong>.
                            هذا أساس الـ Texture Mapping في النماذج 3D.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 3: Mappings & Functions --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-fuchsia-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-fuchsia-100 flex items-center justify-center text-fuchsia-600"><span class="text-xl">🔗</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Mappings و Functions</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec3', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec3" style="max-height: 3500px;">
                <div class="space-y-5">
                    <div class="bg-fuchsia-50/70 rounded-xl p-5 border border-fuchsia-100">
                        <p class="text-slate-700 leading-relaxed">
                            من مجموعتين، إذا أردنا إيجاد <strong>علاقة</strong> بينهما — يأتي مفهوم الـ <span class="term">Mapping</span>.
                            في CG له دور كبير في تحويل المجموعات.
                        </p>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-fuchsia-700 mb-3">التعريف الرسمي:</h3>
                        <p class="text-sm text-slate-700 mb-3">
                            الـ <strong>Mapping</strong> أو الـ <strong>Function</strong> يربط عناصر من مجموعة (الـ <span class="term">domain</span>)
                            بعناصر في مجموعة أخرى (الـ <span class="term">codomain</span>).
                        </p>
                        <div class="bg-slate-900 text-slate-100 rounded-lg p-4 font-mono text-center text-lg">
                            f : A → B
                        </div>
                        <p class="text-xs text-slate-500 mt-2 text-center">
                            تعني: دالة <strong>f</strong> تربط عناصر A بعناصر B.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 4: Domain & Range --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-pink-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-pink-100 flex items-center justify-center text-pink-600"><span class="text-xl">🎯</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Domain و Range</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec4', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec4" style="max-height: 3500px;">
                <div class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-pink-50 rounded-xl p-5 border-2 border-pink-200">
                            <h3 class="font-bold text-pink-700 mb-2 flex items-center gap-2"><span class="text-xl">📥</span> Domain</h3>
                            <p class="text-sm text-slate-700">مجموعة <strong>كل قيم الإدخال</strong> الممكنة.</p>
                        </div>
                        <div class="bg-rose-50 rounded-xl p-5 border-2 border-rose-200">
                            <h3 class="font-bold text-rose-700 mb-2 flex items-center gap-2"><span class="text-xl">📤</span> Range</h3>
                            <p class="text-sm text-slate-700">مجموعة <strong>كل قيم الإخراج</strong> الممكنة.</p>
                        </div>
                    </div>

                    <div class="bg-fuchsia-50 border-l-4 border-fuchsia-400 rounded-lg p-4">
                        <p class="text-sm text-fuchsia-900 leading-relaxed">
                            <strong>📌 مثال CG — تحويل 3D إلى Screen:</strong>
                            في mapping يحول إحداثيات 3D <code>(x, y, z)</code> إلى إحداثيات شاشة 2D <code>(u, v)</code>:
                        </p>
                        <ul class="text-sm text-fuchsia-900 mt-2 space-y-1">
                            <li>• <strong>Domain</strong> = نقاط 3D</li>
                            <li>• <strong>Range</strong> = نقاط الشاشة 2D</li>
                            <li>• الدالة تحوّل كل نقطة 3D إلى نظيرتها 2D</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 5: Inverse Mappings --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-rose-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-rose-100 flex items-center justify-center text-rose-600"><span class="text-xl">↩️</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Inverse Mappings</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec5', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec5" style="max-height: 3500px;">
                <div class="space-y-5">
                    <div class="bg-rose-50/70 rounded-xl p-5 border border-rose-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Inverse mapping</span> <code class="bg-rose-100 text-rose-700 px-2 py-0.5 rounded font-bold">f⁻¹</code>
                            <strong>يعكس</strong> الدالة الأصلية. لو <code>f(a) = b</code>، فإن <code>f⁻¹(b) = a</code>.
                        </p>
                    </div>

                    <div class="bg-amber-50 border-l-4 border-amber-400 rounded-lg p-4">
                        <p class="text-sm text-amber-900 leading-relaxed">
                            <strong>⚠️ شرط وجود الـ Inverse:</strong>
                            الـ Inverse Mapping يوجد <strong>فقط</strong> إذا كانت الدالة <span class="term">bijective</span> —
                            أي <strong>injective و surjective معاً</strong>.
                        </p>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-rose-700 mb-2">مثال:</h3>
                        <p class="text-sm text-slate-700 mb-2">
                            لو <code>f(x) = x³</code>، فإن:
                        </p>
                        <div class="bg-slate-900 text-slate-100 rounded-lg p-4 font-mono text-center">
                            f⁻¹(x) = ∛x
                        </div>
                        <p class="text-xs text-slate-500 mt-2">
                            لأن f تعطي <strong>cube فريد</strong> لكل عدد حقيقي، يمكن "عكسها" بأخذ الجذر التكعيبي.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 6: Types of Mappings --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-indigo-500">
            <button onclick="toggleSection('sec6')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-600"><span class="text-xl">🏷️</span></div>
                    <h2 class="text-lg font-bold text-slate-800">أنواع الـ Mappings</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec6', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec6" style="max-height: 4500px;">
                <div class="space-y-3">
                    <div class="bg-white rounded-xl border-2 border-blue-200 p-5">
                        <h3 class="font-bold text-blue-700 mb-2 flex items-center gap-2">
                            <span class="bg-blue-600 text-white font-bold rounded-full w-6 h-6 flex items-center justify-center text-xs">1</span>
                            Injective (One-to-One)
                        </h3>
                        <p class="text-sm text-slate-700 mb-2">
                            <strong>لا يوجد عنصران</strong> في الـ domain يربطان بنفس العنصر في الـ target.
                        </p>
                        <p class="text-xs text-slate-500">
                            مثال: <code>f(x) = 2x</code> لـ <code>x ∈ ℤ</code> — كل x يعطي قيمة <strong>فريدة</strong>.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border-2 border-emerald-200 p-5">
                        <h3 class="font-bold text-emerald-700 mb-2 flex items-center gap-2">
                            <span class="bg-emerald-600 text-white font-bold rounded-full w-6 h-6 flex items-center justify-center text-xs">2</span>
                            Surjective (Onto)
                        </h3>
                        <p class="text-sm text-slate-700 mb-2">
                            <strong>كل عنصر</strong> في الـ target له <strong>على الأقل عنصر واحد</strong> في الـ domain يربط به.
                        </p>
                        <p class="text-xs text-slate-500">
                            مثال: <code>f(x) = x²</code> لـ <code>x ∈ ℝ</code> — <strong>ليست</strong> surjective على ℝ، لأنه لا يوجد عدد حقيقي مربعه سالب.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border-2 border-violet-200 p-5">
                        <h3 class="font-bold text-violet-700 mb-2 flex items-center gap-2">
                            <span class="bg-violet-600 text-white font-bold rounded-full w-6 h-6 flex items-center justify-center text-xs">3</span>
                            Bijective
                        </h3>
                        <p class="text-sm text-slate-700 mb-2">
                            الدالة تكون bijective إذا كانت <strong>injective و surjective معاً</strong>.
                        </p>
                        <p class="text-xs text-slate-500">
                            <strong>مهم:</strong> فقط الـ bijective functions لها <span class="term-en">inverse</span> — مما يجعلها مفيدة جداً في التطبيقات الرياضية.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 7: Intervals & Set Operations --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-cyan-500">
            <button onclick="toggleSection('sec7')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center text-cyan-600"><span class="text-xl">📐</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Intervals وعمليات على المجموعات</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec7', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec7" style="max-height: 4000px;">
                <div class="space-y-5">

                    <div class="bg-cyan-50/70 rounded-xl p-5 border border-cyan-100">
                        <h3 class="font-bold text-cyan-700 mb-2">Intervals</h3>
                        <p class="text-sm text-slate-700">
                            الـ <span class="term">Interval</span> = مجموعة تحتوي كل الأرقام بين نقطتين نهايتين.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-3">
                            <div class="bg-white rounded-lg p-3 border border-cyan-200">
                                <p class="font-mono font-bold text-cyan-700 text-center">(0, 1)</p>
                                <p class="text-xs text-slate-600 text-center mt-1"><strong>Open Interval</strong> — يستثني 0 و 1</p>
                            </div>
                            <div class="bg-white rounded-lg p-3 border border-cyan-200">
                                <p class="font-mono font-bold text-cyan-700 text-center">[0, 1]</p>
                                <p class="text-xs text-slate-600 text-center mt-1"><strong>Closed Interval</strong> — يضمّ 0 و 1</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-blue-700 mb-3">عمليات على المجموعات</h3>
                        <div class="space-y-3">
                            <div class="bg-blue-50 rounded-lg p-3 border border-blue-200">
                                <div class="flex items-center gap-3">
                                    <span class="bg-blue-600 text-white font-bold rounded-lg px-3 py-1 font-mono">∪</span>
                                    <div class="flex-1">
                                        <p class="font-bold text-blue-700">Union — اتحاد</p>
                                        <p class="text-xs text-slate-600">كل العناصر من المجموعتين.</p>
                                        <code class="text-xs">{1, 2} ∪ {2, 3} = {1, 2, 3}</code>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-emerald-50 rounded-lg p-3 border border-emerald-200">
                                <div class="flex items-center gap-3">
                                    <span class="bg-emerald-600 text-white font-bold rounded-lg px-3 py-1 font-mono">∩</span>
                                    <div class="flex-1">
                                        <p class="font-bold text-emerald-700">Intersection — تقاطع</p>
                                        <p class="text-xs text-slate-600">العناصر المشتركة.</p>
                                        <code class="text-xs">{1, 2} ∩ {2, 3} = {2}</code>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-rose-50 rounded-lg p-3 border border-rose-200">
                                <div class="flex items-center gap-3">
                                    <span class="bg-rose-600 text-white font-bold rounded-lg px-3 py-1 font-mono">−</span>
                                    <div class="flex-1">
                                        <p class="font-bold text-rose-700">Difference — فرق</p>
                                        <p class="text-xs text-slate-600">العناصر في إحداهما وليست في الأخرى.</p>
                                        <code class="text-xs">{1, 2} − {2, 3} = {1}</code>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 8: Applications in CG --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-emerald-500">
            <button onclick="toggleSection('sec8')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600"><span class="text-xl">🎯</span></div>
                    <h2 class="text-lg font-bold text-slate-800">تطبيقات في CG والبرمجة</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec8', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec8" style="max-height: 3000px;">
                <div class="space-y-4">
                    <div class="bg-emerald-50/70 rounded-xl p-5 border border-emerald-100">
                        <p class="text-slate-700 leading-relaxed">
                            في البرمجة، الدوال (mappings) تترجم المدخلات إلى مخرجات — تماماً كالدوال الرياضية.
                            مفهوم الـ Sets يلعب دوراً مهماً أيضاً (مثل قواعد البيانات حيث السجلات أعضاء في مجموعة).
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-emerald-700 mb-2">مثال — التحويل في CG:</h3>
                        <p class="text-sm text-slate-700 mb-2">لو لدينا دالة تأخذ نقطة <code>(x, y)</code> وتحوّلها:</p>
                        <div class="bg-slate-900 text-slate-100 rounded-lg p-4 font-mono text-center">
                            f(x, y) = (2x, 3y)
                        </div>
                        <p class="text-xs text-slate-500 mt-2 text-center">
                            هذه الدالة <strong>تمدّد</strong> النقطة في اتجاه x بمعامل <strong>2</strong>،
                            وفي اتجاه y بمعامل <strong>3</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Recap --}}
    <div class="card rounded-2xl border-2 border-violet-200 bg-gradient-to-br from-violet-50 to-purple-50 p-6 mb-8">
        <h3 class="font-bold text-violet-800 mb-4 flex items-center gap-2"><span class="text-xl">⚡</span> خلاصة سريعة للمراجعة</h3>
        <ul class="space-y-2 text-sm text-slate-700">
            <li>✓ <strong>Set</strong> = مجموعة عناصر متميزة، رمز الانتماء: <code>∈</code></li>
            <li>✓ المجموعات الشائعة: <code>ℝ</code> (حقيقية) · <code>ℝ²</code> (2D) · <code>ℝ³</code> (3D) · <code>ℤ</code> (صحيحة)</li>
            <li>✓ <strong>Cartesian Product</strong> <code>A × B</code> = أزواج مرتبة من A و B (أساس Texture Mapping)</li>
            <li>✓ <strong>Mapping</strong> <code>f: A → B</code> يربط domain بـ codomain</li>
            <li>✓ <strong>Domain</strong> = المدخلات · <strong>Range</strong> = المخرجات</li>
            <li>✓ <strong>Inverse <code>f⁻¹</code></strong> يوجد <strong>فقط</strong> إذا كانت الدالة <strong>bijective</strong></li>
            <li>✓ <strong>3 أنواع:</strong> Injective (one-to-one) · Surjective (onto) · Bijective (الاثنان معاً)</li>
            <li>✓ <strong>Intervals:</strong> <code>(0,1)</code> open · <code>[0,1]</code> closed</li>
            <li>✓ <strong>Operations:</strong> Union ∪ · Intersection ∩ · Difference −</li>
        </ul>
    </div>
</div>

<script>
    const STORAGE_KEY = 'graphics_lec5';
    const TOTAL_SECTIONS = 8;

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
        try { return JSON.parse(localStorage.getItem(STORAGE_KEY) || '{}'); }
        catch { return {}; }
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
    });
</script>
@endsection
