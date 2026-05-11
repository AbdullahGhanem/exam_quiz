@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'graphics') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-emerald-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-emerald-500 to-teal-600 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة الثالثة: مجالات وتطبيقات الرسم بالحاسب</h1>
                <p class="text-emerald-200 text-sm">Major Areas &amp; Applications of Computer Graphics</p>
            </div>
            {{-- Progress Bar --}}
            <div class="px-6 py-3 bg-white/60 border-t border-emerald-100">
                <div class="flex items-center justify-between mb-1.5">
                    <span class="text-xs font-semibold text-slate-500">تقدم المراجعة</span>
                    <span class="text-xs font-bold text-emerald-600" id="progress-text">0 / 7</span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2">
                    <div class="bg-gradient-to-r from-emerald-500 to-teal-500 h-2 rounded-full transition-all duration-500" id="progress-bar" style="width: 0%"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 1: Major Areas Overview --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-emerald-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600"><span class="text-xl">🗺️</span></div>
                    <h2 class="text-lg font-bold text-slate-800">المجالات الرئيسية في CG</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec1', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec1" style="max-height: 2000px;">
                <div class="space-y-5">
                    <div class="bg-emerald-50/70 rounded-xl p-5 border border-emerald-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Computer Graphics</span> تغطي أساسيات توليد الصور <strong>2D و 3D</strong> في الحاسب باستخدام
                            خوارزميات وتقنيات مختلفة. من ألعاب الفيديو إلى الأفلام والصور الطبية والمحاكاة — الـ CG موجودة في كل مكان.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 text-sm">
                        <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-3 text-center"><span class="text-2xl">🧱</span><p class="font-bold text-emerald-700 mt-1">Modelling</p></div>
                        <div class="bg-teal-50 border border-teal-200 rounded-lg p-3 text-center"><span class="text-2xl">🎨</span><p class="font-bold text-teal-700 mt-1">Rendering</p></div>
                        <div class="bg-cyan-50 border border-cyan-200 rounded-lg p-3 text-center"><span class="text-2xl">🎬</span><p class="font-bold text-cyan-700 mt-1">Animation</p></div>
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-3 text-center"><span class="text-2xl">🖱️</span><p class="font-bold text-blue-700 mt-1">User Interaction</p></div>
                        <div class="bg-indigo-50 border border-indigo-200 rounded-lg p-3 text-center"><span class="text-2xl">📊</span><p class="font-bold text-indigo-700 mt-1">Visualization</p></div>
                        <div class="bg-violet-50 border border-violet-200 rounded-lg p-3 text-center"><span class="text-2xl">🖼️</span><p class="font-bold text-violet-700 mt-1">Image Processing</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 2: Modelling --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-teal-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-teal-100 flex items-center justify-center text-teal-600"><span class="text-xl">🧱</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Modelling — النمذجة</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 2500px;">
                <div class="space-y-5">
                    <div class="bg-teal-50/70 rounded-xl p-5 border border-teal-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Modelling</span> = الوصف الرياضي لشكل الجسم وكيف يبدو.
                            ببساطة: <strong>تعريف الأجسام</strong> بطريقة تستطيع الحاسب تخزينها والتعامل معها.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-teal-700 mb-2">مثال — كوب القهوة:</h3>
                        <p class="text-sm text-slate-700 leading-relaxed">
                            يتم وصف الكوب كـ <strong>مجموعة من النقاط ثلاثية الأبعاد المرتبة</strong>،
                            متصلة بقاعدة <span class="term-en">interpolation</span> (الاستيفاء)،
                            ثم تُدمج مع <span class="term-en">reflection model</span> لمحاكاة كيف يتفاعل الضوء مع الكوب.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 3: Rendering --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-cyan-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center text-cyan-600"><span class="text-xl">🎨</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Rendering — الرندرة</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec3', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec3" style="max-height: 2500px;">
                <div class="space-y-5">
                    <div class="bg-cyan-50/70 rounded-xl p-5 border border-cyan-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Rendering</span> = توليد <strong>صور مظلّلة</strong> من نموذج 3D.
                            يتضمن تطبيق <span class="term-en">lighting</span> و <span class="term-en">shading</span> و <span class="term-en">textures</span>
                            على الأجسام لإنتاج الصورة النهائية.
                        </p>
                    </div>
                    <div class="bg-amber-50 border-l-4 border-amber-400 rounded-lg p-4">
                        <p class="text-sm text-amber-900">
                            <strong>💡 من أين أتى المصطلح؟</strong>
                            من عالم الفن — حيث "rendering" يعني <em>تظليل الرسومات</em> لتبدو ثلاثية الأبعاد.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <p class="text-sm text-slate-700">
                            مثال: صورة ليست فوتوغرافية — هي نموذج 3D مع textures, shading, shadows, environment maps, materials. تم إنشاؤها باستخدام <strong>Blender 3D</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 4: Animation --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-blue-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600"><span class="text-xl">🎬</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Animation — التحريك</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec4', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec4" style="max-height: 2500px;">
                <div class="space-y-5">
                    <div class="bg-blue-50/70 rounded-xl p-5 border border-blue-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Animation</span> تضيف <strong>الحركة</strong> للنماذج عن طريق توليد
                            <strong>سلسلة من الصور</strong> (frames) تحاكي الحركة.
                            بينما الـ Modelling والـ Rendering يركزون على الصور الساكنة، الـ Animation يضيف <strong>بُعد الزمن</strong>.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-blue-700 mb-2">مثال — شخصية كرتونية تمشي:</h3>
                        <p class="text-sm text-slate-700 leading-relaxed">
                            يتم رندرة عدة <span class="term-en">frames</span> حيث يتغير موضع الشخصية تغيراً <strong>بسيطاً</strong> بين كل frame والآخر.
                            سرعة عرض الـ frames تنتج إحساساً بالحركة.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 5: User Interaction & Visualization --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-indigo-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-600"><span class="text-xl">🖱️</span></div>
                    <h2 class="text-lg font-bold text-slate-800">User Interaction & Visualization</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec5', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec5" style="max-height: 2500px;">
                <div class="space-y-5">
                    <div class="bg-indigo-50 rounded-xl p-5 border border-indigo-200">
                        <h3 class="font-bold text-indigo-700 mb-2">User Interaction</h3>
                        <p class="text-sm text-slate-700 leading-relaxed">
                            هي الجسر بين <strong>الإنسان والحاسب</strong> — تدير كيف يتحكم المستخدم ويتفاعل
                            مع البيئات الرقمية عبر <span class="term-en">input devices</span> مثل <strong>Mouse</strong> و<strong>Keyboard</strong>.
                        </p>
                        <p class="text-xs text-slate-500 mt-2">
                            مثال: في برامج CAD، يستخدم المصممون الـ Mouse للتدوير، التكبير، والتعديل على نماذج 3D.
                        </p>
                    </div>
                    <div class="bg-violet-50 rounded-xl p-5 border border-violet-200">
                        <h3 class="font-bold text-violet-700 mb-2">Visualization</h3>
                        <p class="text-sm text-slate-700 leading-relaxed">
                            <span class="term">Visualization</span> = تحويل البيانات المعقدة إلى <strong>تنسيقات بصرية</strong>
                            تساعد المستخدم على فهمها بسهولة. مثل الـ <strong>graphs</strong> و<strong>charts</strong>.
                        </p>
                        <p class="text-xs text-slate-500 mt-2">
                            مثال: نظام التنبؤ بالطقس يصور تغيرات درجة الحرارة عبر الزمن بالـ graphs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 6: Image Processing & 3D Scanning --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-violet-500">
            <button onclick="toggleSection('sec6')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600"><span class="text-xl">🖼️</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Image Processing & 3D Scanning</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec6', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec6" style="max-height: 2500px;">
                <div class="space-y-5">
                    <div class="bg-violet-50 rounded-xl p-5 border border-violet-200">
                        <h3 class="font-bold text-violet-700 mb-2">Image Processing</h3>
                        <p class="text-sm text-slate-700 leading-relaxed">
                            معالجة الصور <strong>مختلفة عن CG</strong> لكنها <strong>مرتبطة بشدة</strong>.
                            تتعامل مع <strong>تعديل وتحويل صور 2D</strong>: filtering، resizing، enhancing.
                            مستخدمة في كل من Computer Graphics و Computer Vision.
                        </p>
                        <p class="text-xs text-slate-500 mt-2">
                            مثال شائع: إزالة الـ noise من صورة باستخدام برامج مثل Photoshop.
                        </p>
                    </div>
                    <div class="bg-fuchsia-50 rounded-xl p-5 border border-fuchsia-200">
                        <h3 class="font-bold text-fuchsia-700 mb-2">3D Scanning</h3>
                        <p class="text-sm text-slate-700 leading-relaxed">
                            مسح ثلاثي الأبعاد للأجسام من العالم الحقيقي باستخدام <strong>أجهزة متخصصة</strong>
                            تعتمد على تقنية <span class="term-en">range-finding</span>.
                            البيانات الناتجة تُستخدم لإنشاء نماذج 3D دقيقة.
                        </p>
                        <p class="text-xs text-slate-500 mt-2">
                            مثال: ماسح 3D يلتقط الأبعاد الدقيقة لتمثال، يسمح بإعادة إنتاجه أو تعديله رقمياً.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 7: Applications --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-amber-500">
            <button onclick="toggleSection('sec7')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600"><span class="text-xl">🚀</span></div>
                    <h2 class="text-lg font-bold text-slate-800">تطبيقات الـ CG في الصناعة</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec7', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec7" style="max-height: 4500px;">
                <div class="space-y-3">
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <div class="flex items-center gap-2 mb-2"><span class="text-2xl">🎮</span><h3 class="font-bold text-amber-700">Video Games</h3></div>
                        <p class="text-sm text-slate-600">أكثر مثال شائع للـ CG. تعتمد بشدة على بيئات 3D غامرة، شخصيات، وأنيميشن واقعي. الألعاب الحديثة تستخدم تقنيات Modelling وRendering متطورة.</p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <div class="flex items-center gap-2 mb-2"><span class="text-2xl">🎞️</span><h3 class="font-bold text-amber-700">Cartoons & Animated Films</h3></div>
                        <p class="text-sm text-slate-600">صناعة الكرتون والأفلام المتحركة تستفيد من تقنيات الـ CG لتوليد العالم البصري كاملاً.</p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <div class="flex items-center gap-2 mb-2"><span class="text-2xl">✨</span><h3 class="font-bold text-amber-700">Visual Effects (VFX) في الأفلام</h3></div>
                        <p class="text-sm text-slate-600">الأفلام الحديثة تستخدم CG بشكل مكثف لإنتاج الـ <strong>Visual Effects</strong> و<strong>CGI</strong> (Computer-Generated Imagery).</p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <div class="flex items-center gap-2 mb-2"><span class="text-2xl">📐</span><h3 class="font-bold text-amber-700">Computer-Aided Design (CAD)</h3></div>
                        <p class="text-sm text-slate-600">في العمارة، الهندسة، والتصنيع. تسمح للمستخدمين بإنشاء وتعديل نماذج 3D <strong>قبل</strong> الإنتاج الفعلي. مثال: تصميم قطع السيارات.</p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <div class="flex items-center gap-2 mb-2"><span class="text-2xl">🏥</span><h3 class="font-bold text-amber-700">Medical Imaging</h3></div>
                        <p class="text-sm text-slate-600">تقنيات مثل <strong>CT Scan</strong> (Computed Tomography) و<strong>MRI</strong> (Magnetic Resonance Imaging) تعتمد على CG لإنتاج صور تفصيلية لجسم الإنسان.</p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <div class="flex items-center gap-2 mb-2"><span class="text-2xl">✈️</span><h3 class="font-bold text-amber-700">Simulations</h3></div>
                        <p class="text-sm text-slate-600">المحاكاة تخلق <strong>سيناريوهات واقعية</strong> للتدريب والتحليل. مثل Flight Simulators للطيارين، أو محاكاة لرجال الإطفاء.</p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <div class="flex items-center gap-2 mb-2"><span class="text-2xl">📈</span><h3 class="font-bold text-amber-700">Information Visualization</h3></div>
                        <p class="text-sm text-slate-600">استخدام الرسوميات لتمثيل بيانات مجردة بطريقة سهلة الفهم. تشمل Charts وGraphs في صناعات مثل المال، التعليم، البحث.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Recap --}}
    <div class="card rounded-2xl border-2 border-emerald-200 bg-gradient-to-br from-emerald-50 to-teal-50 p-6 mb-8">
        <h3 class="font-bold text-emerald-800 mb-4 flex items-center gap-2"><span class="text-xl">⚡</span> خلاصة سريعة للمراجعة</h3>
        <ul class="space-y-2 text-sm text-slate-700">
            <li>✓ المجالات الرئيسية: <strong>Modelling, Rendering, Animation, User Interaction, Visualization, Image Processing, 3D Scanning</strong></li>
            <li>✓ <strong>Modelling</strong> = وصف رياضي للأشكال (نقاط 3D + interpolation + reflection model)</li>
            <li>✓ <strong>Rendering</strong> = توليد صور مظلّلة من نماذج 3D (lighting, shading, textures)</li>
            <li>✓ <strong>Animation</strong> = سلسلة frames تحاكي الحركة، تضيف بُعد الزمن</li>
            <li>✓ <strong>3D Scanning</strong> يستخدم <strong>range-finding</strong> لالتقاط أبعاد أجسام حقيقية</li>
            <li>✓ <strong>Image Processing</strong> ≠ <strong>Computer Graphics</strong> لكنهما مترابطان</li>
            <li>✓ التطبيقات: Games, Films/VFX, CAD, Medical (CT/MRI), Simulations (Flight Sim), Info Viz</li>
        </ul>
    </div>
</div>

<script>
    const STORAGE_KEY = 'graphics_lec3';
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
