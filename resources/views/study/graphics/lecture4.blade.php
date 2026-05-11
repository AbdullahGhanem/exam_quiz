@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'graphics') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-blue-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة الرابعة: Graphics APIs و الـ Pipelines</h1>
                <p class="text-blue-200 text-sm">Graphics APIs &amp; Graphics Pipelines</p>
            </div>
            <div class="px-6 py-3 bg-white/60 border-t border-blue-100">
                <div class="flex items-center justify-between mb-1.5">
                    <span class="text-xs font-semibold text-slate-500">تقدم المراجعة</span>
                    <span class="text-xs font-bold text-blue-600" id="progress-text">0 / 7</span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2">
                    <div class="bg-gradient-to-r from-blue-500 to-indigo-600 h-2 rounded-full transition-all duration-500" id="progress-bar" style="width: 0%"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 1: What is Graphics API --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-blue-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600"><span class="text-xl">🔌</span></div>
                    <h2 class="text-lg font-bold text-slate-800">ما هو Graphics API؟</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec1', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec1" style="max-height: 2500px;">
                <div class="space-y-5">
                    <div class="bg-blue-50/70 rounded-xl p-5 border border-blue-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Graphics API</span> <span class="term-en">(Application Programming Interface)</span>
                            هو <strong>مجموعة من الدوال</strong> تسمح للبرامج بأداء عمليات مثل
                            رسم الصور والأسطح ثلاثية الأبعاد. الـ API يوفر طريقة للبرنامج <strong>للتواصل مع العتاد (Hardware)</strong>.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-blue-700 mb-3">كل برنامج رسوميات يحتاج نوعين من الـ APIs:</h3>
                        <div class="space-y-3">
                            <div class="flex items-start gap-3 bg-blue-50 rounded-lg p-3 border border-blue-200">
                                <span class="bg-blue-600 text-white font-bold rounded-full w-6 h-6 flex items-center justify-center text-xs flex-shrink-0">1</span>
                                <div>
                                    <p class="font-bold text-blue-700">Graphics API</p>
                                    <p class="text-sm text-slate-600">يتعامل مع <strong>المخرجات البصرية</strong> (visual output).</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3 bg-indigo-50 rounded-lg p-3 border border-indigo-200">
                                <span class="bg-indigo-600 text-white font-bold rounded-full w-6 h-6 flex items-center justify-center text-xs flex-shrink-0">2</span>
                                <div>
                                    <p class="font-bold text-indigo-700">User-Interface API</p>
                                    <p class="text-sm text-slate-600">يدير <strong>مدخلات المستخدم</strong> (user input).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 2: Types of Graphics APIs --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-indigo-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-600"><span class="text-xl">🧰</span></div>
                    <h2 class="text-lg font-bold text-slate-800">طريقتان لاستخدام Graphics APIs</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 3000px;">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-emerald-50 rounded-xl p-5 border-2 border-emerald-200">
                        <h3 class="font-bold text-emerald-700 mb-2 flex items-center gap-2"><span class="text-xl">📦</span> Integrated Approach</h3>
                        <p class="text-sm text-slate-700 mb-3">
                            بعض اللغات (مثل <strong>Java</strong>) فيها graphics وuser-interface APIs <strong>مدمجة</strong>.
                        </p>
                        <ul class="text-xs text-slate-600 space-y-1">
                            <li>✓ <strong>Portability</strong> — الكود يشتغل عبر أنظمة مختلفة</li>
                            <li>✓ كل شيء <strong>قياسي</strong></li>
                            <li>✓ سهل للمبتدئين</li>
                        </ul>
                    </div>
                    <div class="bg-violet-50 rounded-xl p-5 border-2 border-violet-200">
                        <h3 class="font-bold text-violet-700 mb-2 flex items-center gap-2"><span class="text-xl">🧱</span> Library-Based Approach</h3>
                        <p class="text-sm text-slate-700 mb-3">
                            مثل <strong>Direct3D</strong> و<strong>OpenGL</strong>.
                            أوامر الرسم تكون جزء من <strong>مكتبة برمجية</strong>.
                        </p>
                        <ul class="text-xs text-slate-600 space-y-1">
                            <li>✓ <strong>أقوى</strong> وأكثر تحكم</li>
                            <li>✗ قد تختلف بين النظم — تحتاج مكتبة إضافية لإدارة UI</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 3: Direct3D vs OpenGL --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-cyan-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center text-cyan-600"><span class="text-xl">⚔️</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Direct3D vs OpenGL</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec3', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec3" style="max-height: 3500px;">
                <div class="space-y-4">
                    <div class="bg-cyan-50/70 rounded-xl p-4 border border-cyan-100">
                        <p class="text-sm text-slate-700">
                            <strong>Direct3D</strong> و<strong>OpenGL</strong> هما الأشهر والأكثر استخداماً.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white rounded-xl border-2 border-blue-200 p-5">
                            <h3 class="font-bold text-blue-700 mb-2 flex items-center gap-2"><span class="text-xl">🎮</span> Direct3D</h3>
                            <ul class="text-sm text-slate-700 space-y-1.5">
                                <li>• ينتمي لـ <strong>DirectX</strong> من Microsoft</li>
                                <li>• يركز على <strong>3D rendering</strong></li>
                                <li>• شائع في <strong>video games</strong></li>
                                <li>• مثال: لعبة <strong>Halo</strong> تستخدمه</li>
                            </ul>
                        </div>
                        <div class="bg-white rounded-xl border-2 border-emerald-200 p-5">
                            <h3 class="font-bold text-emerald-700 mb-2 flex items-center gap-2"><span class="text-xl">🌍</span> OpenGL</h3>
                            <ul class="text-sm text-slate-700 space-y-1.5">
                                <li>• <strong>Cross-platform</strong> (مفتوح)</li>
                                <li>• يستخدم لـ <strong>2D و 3D</strong></li>
                                <li>• شائع في <strong>CAD</strong> والتصور العلمي</li>
                                <li>• مثال: <strong>Google Earth</strong> يستخدمه</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 4: What is Graphics Pipeline --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-violet-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600"><span class="text-xl">🚇</span></div>
                    <h2 class="text-lg font-bold text-slate-800">ما هو Graphics Pipeline؟</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec4', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec4" style="max-height: 2500px;">
                <div class="space-y-5">
                    <div class="bg-violet-50/70 rounded-xl p-5 border border-violet-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Graphics Pipeline</span> = <strong>سلسلة الخطوات</strong> اللي يتبعها الحاسب لإنشاء صور 3D
                            وعرضها على شاشة 2D. تأخذ المدخلات (مثل geometry لنماذج 3D) وتحولها إلى <strong>بكسلات</strong> على الشاشة.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5 text-center">
                        <div class="flex flex-wrap items-center justify-center gap-2 text-xs">
                            <span class="bg-blue-100 text-blue-700 font-bold px-3 py-2 rounded-lg">3D Models</span>
                            <span class="text-slate-400">→</span>
                            <span class="bg-violet-100 text-violet-700 font-bold px-3 py-2 rounded-lg">Pipeline (5 stages)</span>
                            <span class="text-slate-400">→</span>
                            <span class="bg-emerald-100 text-emerald-700 font-bold px-3 py-2 rounded-lg">Pixels on Screen</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 5: Pipeline Stages --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-fuchsia-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-fuchsia-100 flex items-center justify-center text-fuchsia-600"><span class="text-xl">📋</span></div>
                    <h2 class="text-lg font-bold text-slate-800">5 مراحل الـ Pipeline</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec5', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec5" style="max-height: 5000px;">
                <div class="space-y-3">
                    <div class="bg-white rounded-xl border-2 border-blue-200 p-4">
                        <div class="flex items-start gap-3">
                            <span class="bg-blue-600 text-white font-bold rounded-full w-7 h-7 flex items-center justify-center text-sm flex-shrink-0">1</span>
                            <div>
                                <h3 class="font-bold text-blue-700 mb-1">Vertex Processing</h3>
                                <p class="text-sm text-slate-700">حساب <strong>مواقع نقاط 3D</strong> (vertices) — هذه النقاط تشكّل الهيكل الأساسي للأجسام 3D.</p>
                                <p class="text-xs text-slate-500 mt-1">مثال: في لعبة سباق سيارات — موقع كل vertex من نموذج السيارة يُحسب هنا.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl border-2 border-cyan-200 p-4">
                        <div class="flex items-start gap-3">
                            <span class="bg-cyan-600 text-white font-bold rounded-full w-7 h-7 flex items-center justify-center text-sm flex-shrink-0">2</span>
                            <div>
                                <h3 class="font-bold text-cyan-700 mb-1">Clipping & Culling</h3>
                                <p class="text-sm text-slate-700">يقرر النظام <strong>أي الأجزاء داخل رؤية الكاميرا</strong> وأيها خارجها — الخارجة تُحذف <span class="term-en">(culled)</span>، والمقطوعة جزئياً تُقص <span class="term-en">(clipped)</span>.</p>
                                <p class="text-xs text-slate-500 mt-1">مثال: في لعبة FPS — فقط ما يراه اللاعب يُرسم، الباقي يُحذف.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl border-2 border-violet-200 p-4">
                        <div class="flex items-start gap-3">
                            <span class="bg-violet-600 text-white font-bold rounded-full w-7 h-7 flex items-center justify-center text-sm flex-shrink-0">3</span>
                            <div>
                                <h3 class="font-bold text-violet-700 mb-1">Rasterization</h3>
                                <p class="text-sm text-slate-700"><strong>تحويل النماذج 3D إلى pixels (أو fragments)</strong>. هذه الـ pixels تمثّل الصورة النهائية اللي ستظهر على الشاشة.</p>
                                <p class="text-xs text-slate-500 mt-1">مثال: نموذج 3D لشجرة في لعبة → مجموعة بكسلات ملونة تمثّل الشجرة.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl border-2 border-fuchsia-200 p-4">
                        <div class="flex items-start gap-3">
                            <span class="bg-fuchsia-600 text-white font-bold rounded-full w-7 h-7 flex items-center justify-center text-sm flex-shrink-0">4</span>
                            <div>
                                <h3 class="font-bold text-fuchsia-700 mb-1">Fragment Processing</h3>
                                <p class="text-sm text-slate-700">يُعطى لكل pixel <strong>لونه ونسيجه النهائي</strong>. النظام يطبّق <strong>lighting</strong> و<strong>shading</strong> لجعل الصورة أكثر واقعية.</p>
                                <p class="text-xs text-slate-500 mt-1">مثال: عندما تشرق الشمس على شجرة في لعبة — الـ Fragment Processing يضمن ظهور التظليل المناسب.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl border-2 border-rose-200 p-4">
                        <div class="flex items-start gap-3">
                            <span class="bg-rose-600 text-white font-bold rounded-full w-7 h-7 flex items-center justify-center text-sm flex-shrink-0">5</span>
                            <div>
                                <h3 class="font-bold text-rose-700 mb-1">Output Merging</h3>
                                <p class="text-sm text-slate-700">يأخذ الـ fragments الملونة ويقرر <strong>أي البكسلات مرئية</strong>. يضمن ظهور الأجسام الأمامية وإخفاء الخلفية.</p>
                                <p class="text-xs text-slate-500 mt-1">مثال: لو سيارة تمر خلف مبنى — السيارة تختفي لأن Output Merging يُظهر بكسلات المبنى أمامها.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 6: Triangles & Z-Buffering --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-amber-500">
            <button onclick="toggleSection('sec6')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600"><span class="text-xl">🔺</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Triangles و Z-Buffering</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec6', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec6" style="max-height: 3500px;">
                <div class="space-y-4">
                    <div class="bg-amber-50 rounded-xl p-5 border border-amber-200">
                        <h3 class="font-bold text-amber-700 mb-2 flex items-center gap-2"><span class="text-xl">🔺</span> دور المثلثات</h3>
                        <p class="text-sm text-slate-700 leading-relaxed">
                            في CG نستخدم <strong>المثلثات (triangles)</strong> كثيراً جداً — لأنها أشكال <strong>بسيطة</strong> يسهل على الحاسب معالجتها.
                            معظم نماذج 3D تتكون من <strong>آلاف، إن لم يكن ملايين</strong> من المثلثات الصغيرة.
                        </p>
                    </div>
                    <div class="bg-orange-50 rounded-xl p-5 border border-orange-200">
                        <h3 class="font-bold text-orange-700 mb-2 flex items-center gap-2"><span class="text-xl">📏</span> Z-Buffering</h3>
                        <p class="text-sm text-slate-700 leading-relaxed">
                            <span class="term">Z-Buffer</span> تقنية لإدارة <strong>عمق الأجسام</strong> في الـ Pipeline.
                            في المشاهد المعقدة بأجسام كثيرة، عرض الأجسام بالترتيب الصحيح تحدٍ.
                        </p>
                        <p class="text-sm text-slate-700 mt-2">
                            القاعدة: <strong>الأجسام الأقرب للكاميرا تُرسم أمام الأبعد</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 7: Level of Detail (LOD) --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-rose-500">
            <button onclick="toggleSection('sec7')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-rose-100 flex items-center justify-center text-rose-600"><span class="text-xl">🔍</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Level of Detail (LOD)</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec7', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec7" style="max-height: 2500px;">
                <div class="space-y-4">
                    <div class="bg-rose-50/70 rounded-xl p-5 border border-rose-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Level of Detail (LOD)</span> = الأجسام البعيدة عن الكاميرا تُرسم بـ <strong>عدد أقل</strong> من المثلثات،
                            لأنه لا حاجة لتفاصيل دقيقة. كلما اقترب الجسم — يُستخدم <strong>عدد أكبر</strong> من المثلثات لتحسين التفاصيل.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-rose-700 mb-2">لماذا LOD مهم؟</h3>
                        <ul class="text-sm text-slate-700 space-y-1.5">
                            <li>✓ يقلل <strong>الحمل على المعالج</strong> (GPU/CPU)</li>
                            <li>✓ يحسّن <strong>الأداء (FPS)</strong></li>
                            <li>✓ لا يفقد المستخدم أي تفاصيل مرئية مهمة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Recap --}}
    <div class="card rounded-2xl border-2 border-blue-200 bg-gradient-to-br from-blue-50 to-indigo-50 p-6 mb-8">
        <h3 class="font-bold text-blue-800 mb-4 flex items-center gap-2"><span class="text-xl">⚡</span> خلاصة سريعة للمراجعة</h3>
        <ul class="space-y-2 text-sm text-slate-700">
            <li>✓ <strong>Graphics API</strong> = مجموعة دوال للتواصل مع الـ Hardware</li>
            <li>✓ كل برنامج يحتاج <strong>Graphics API</strong> + <strong>UI API</strong></li>
            <li>✓ <strong>طريقتان:</strong> Integrated (مثل Java) · Library-Based (مثل Direct3D, OpenGL)</li>
            <li>✓ <strong>Direct3D</strong> = Microsoft, للـ games · <strong>OpenGL</strong> = cross-platform, للـ CAD</li>
            <li>✓ <strong>Pipeline = 5 stages:</strong> Vertex → Clipping/Culling → Rasterization → Fragment Processing → Output Merging</li>
            <li>✓ <strong>Triangles</strong> هي الشكل الأساسي في CG — معظم النماذج 3D ملايين منها</li>
            <li>✓ <strong>Z-Buffer</strong> يدير <strong>عمق</strong> الأجسام (الأقرب يظهر أمام الأبعد)</li>
            <li>✓ <strong>LOD</strong> = أجسام بعيدة بمثلثات أقل = أداء أفضل</li>
        </ul>
    </div>
</div>

<script>
    const STORAGE_KEY = 'graphics_lec4';
    const TOTAL_SECTIONS = 7;

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
