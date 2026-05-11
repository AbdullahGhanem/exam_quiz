@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'nlp') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-amber-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-amber-600 to-orange-700 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة الخامسة: WSD و Semantic Roles</h1>
                <p class="text-amber-200 text-sm">Word Sense Disambiguation · WordNet · Thematic Roles</p>
            </div>
            <div class="px-6 py-3 bg-white/60 border-t border-amber-100">
                <div class="flex items-center justify-between mb-1.5">
                    <span class="text-xs font-semibold text-slate-500">تقدم المراجعة</span>
                    <span class="text-xs font-bold text-amber-600" id="progress-text">0 / 6</span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2">
                    <div class="bg-gradient-to-r from-amber-500 to-orange-600 h-2 rounded-full transition-all duration-500" id="progress-bar" style="width: 0%"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 1: Vagueness vs Ambiguity --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-amber-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600"><span class="text-xl">🌫️</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Vagueness (الإبهام)</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec1', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec1" style="max-height: 2500px;">
                <div class="space-y-4">
                    <div class="bg-amber-50/70 rounded-xl p-5 border border-amber-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Vagueness</span> = <strong>نقص اليقين أو الوضوح</strong>. مختلف عن الـ ambiguity (تعدد المعاني المحددة).
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <p class="font-bold text-amber-700 mb-2">مثال:</p>
                        <p class="text-sm text-slate-700">"I want to eat <strong>Indian food</strong> for lunch."</p>
                        <ul class="text-xs text-slate-600 mt-2 space-y-1">
                            <li>• ماذا بالضبط أريد أن آكل؟ (لا تحديد)</li>
                            <li>• متى بالضبط؟ (لا تحديد)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 2: Resolving Ambiguities --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-orange-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-orange-100 flex items-center justify-center text-orange-600"><span class="text-xl">🛠️</span></div>
                    <h2 class="text-lg font-bold text-slate-800">حلول الغموض</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 4000px;">
                <div class="space-y-3">
                    <div class="bg-white rounded-xl border border-orange-200 p-4">
                        <h3 class="font-bold text-orange-700 mb-1">📌 POS Tagging</h3>
                        <p class="text-sm text-slate-700">يقرر هل الكلمة <strong>اسم أم فعل</strong>. مثال: duck → noun (طائر) أم verb (يخفض)؟</p>
                    </div>
                    <div class="bg-white rounded-xl border border-orange-200 p-4">
                        <h3 class="font-bold text-orange-700 mb-1">📌 Word Sense Disambiguation (WSD)</h3>
                        <p class="text-sm text-slate-700">يقرر معنى الكلمة. مثال: make = "create" أم "cook"؟</p>
                    </div>
                    <div class="bg-white rounded-xl border border-orange-200 p-4">
                        <h3 class="font-bold text-orange-700 mb-1">📌 Lexical Disambiguation</h3>
                        <p class="text-sm text-slate-700">حل غموض <strong>الـ POS</strong> + غموض <strong>المعنى</strong> — كلاهما من lexical disambiguation.</p>
                    </div>
                    <div class="bg-white rounded-xl border border-orange-200 p-4">
                        <h3 class="font-bold text-orange-700 mb-1">📌 Syntactic Ambiguity</h3>
                        <p class="text-sm text-slate-700">مثال: "her duck" — يُحل بـ <strong>probabilistic parsing</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 3: Parts of Speech --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-yellow-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-yellow-100 flex items-center justify-center text-yellow-700"><span class="text-xl">🏷️</span></div>
                    <h2 class="text-lg font-bold text-slate-800">فئات الكلمات (Parts of Speech)</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec3', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec3" style="max-height: 4500px;">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm border-collapse">
                        <thead>
                            <tr class="bg-yellow-100">
                                <th class="border border-yellow-200 px-3 py-2 text-right font-bold text-yellow-800">الفئة</th>
                                <th class="border border-yellow-200 px-3 py-2 text-right font-bold text-yellow-800">الوظيفة</th>
                                <th class="border border-yellow-200 px-3 py-2 text-right font-bold text-yellow-800">أمثلة</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white"><td class="border border-yellow-100 px-3 py-2 font-bold">Noun</td><td class="border border-yellow-100 px-3 py-2">أسماء الأشياء</td><td class="border border-yellow-100 px-3 py-2">boy, cat, truth</td></tr>
                            <tr class="bg-yellow-50"><td class="border border-yellow-100 px-3 py-2 font-bold">Verb</td><td class="border border-yellow-100 px-3 py-2">فعل أو حالة</td><td class="border border-yellow-100 px-3 py-2">become, hit</td></tr>
                            <tr class="bg-white"><td class="border border-yellow-100 px-3 py-2 font-bold">Pronoun</td><td class="border border-yellow-100 px-3 py-2">يستخدم بدلاً من اسم</td><td class="border border-yellow-100 px-3 py-2">I, you, we</td></tr>
                            <tr class="bg-yellow-50"><td class="border border-yellow-100 px-3 py-2 font-bold">Adverb</td><td class="border border-yellow-100 px-3 py-2">يعدّل V/Adj/Adv</td><td class="border border-yellow-100 px-3 py-2">sadly, very</td></tr>
                            <tr class="bg-white"><td class="border border-yellow-100 px-3 py-2 font-bold">Adjective</td><td class="border border-yellow-100 px-3 py-2">يعدّل اسماً</td><td class="border border-yellow-100 px-3 py-2">happy, clever</td></tr>
                            <tr class="bg-yellow-50"><td class="border border-yellow-100 px-3 py-2 font-bold">Conjunction</td><td class="border border-yellow-100 px-3 py-2">يربط أشياء</td><td class="border border-yellow-100 px-3 py-2">and, but, while</td></tr>
                            <tr class="bg-white"><td class="border border-yellow-100 px-3 py-2 font-bold">Preposition</td><td class="border border-yellow-100 px-3 py-2">علاقة الاسم</td><td class="border border-yellow-100 px-3 py-2">to, from, into</td></tr>
                            <tr class="bg-yellow-50"><td class="border border-yellow-100 px-3 py-2 font-bold">Interjection</td><td class="border border-yellow-100 px-3 py-2">هتاف/تعجب</td><td class="border border-yellow-100 px-3 py-2">ouch, oh, alas</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 4: WordNet & WSD --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-emerald-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600"><span class="text-xl">📚</span></div>
                    <h2 class="text-lg font-bold text-slate-800">WordNet و WSD</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec4', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec4" style="max-height: 4500px;">
                <div class="space-y-4">
                    <div class="bg-emerald-50/70 rounded-xl p-5 border border-emerald-100">
                        <p class="text-slate-700 leading-relaxed">
                            معظم الكلمات لها <strong>معاني متعددة</strong>. مثال:
                            "Ellen has a strong <em>interest</em> in computational linguistics" vs "Ellen pays a large amount of <em>interest</em> on her credit card."
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-emerald-700 mb-2">WordNet</h3>
                        <p class="text-sm text-slate-700 mb-2">قاعدة بيانات لغوية كبيرة <strong>مجانية ومتاحة</strong> للإنجليزية.</p>
                        <ul class="text-sm text-slate-700 space-y-1">
                            <li>• الأسماء، الأفعال، الصفات، الظروف مجمعة في <strong>synsets</strong> (مرادفات معرفية)</li>
                            <li>• كل synset يعبّر عن <strong>مفهوم متميز</strong></li>
                            <li>• مرتبطة بعلاقات conceptual-semantic و lexical</li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-emerald-700 mb-2">تطبيقات WSD:</h3>
                        <div class="space-y-2 text-sm">
                            <div class="bg-emerald-50 rounded-lg p-3">
                                <strong class="text-emerald-700">🌐 Machine Translation:</strong>
                                <p class="text-slate-700 text-xs mt-1">"change" بالإنجليزية → "changement" (تحول) أم "monnaie" (نقود) بالفرنسية؟</p>
                            </div>
                            <div class="bg-emerald-50 rounded-lg p-3">
                                <strong class="text-emerald-700">🔍 Information Retrieval:</strong>
                                <p class="text-slate-700 text-xs mt-1">query "depression" → وثائق عن المرض، الطقس، الاقتصاد؟</p>
                            </div>
                            <div class="bg-emerald-50 rounded-lg p-3">
                                <strong class="text-emerald-700">📊 Information Extraction:</strong>
                                <p class="text-slate-700 text-xs mt-1">"drugs" → مخدرات غير قانونية أم أدوية طبية؟</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 5: Semantic Role Labeling --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-blue-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600"><span class="text-xl">🎭</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Semantic Role Labeling (SRL)</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec5', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec5" style="max-height: 3500px;">
                <div class="space-y-4">
                    <div class="bg-blue-50/70 rounded-xl p-5 border border-blue-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">SRL</span> يحدد <strong>الدور الدلالي</strong> الذي تلعبه كل عبارة اسمية كـ argument للفعل.
                            بمعنى: <strong>من فعل ماذا لمن في أين؟</strong>
                        </p>
                        <p class="text-xs text-slate-500 mt-2">يُسمى أيضاً: case role analysis، thematic analysis، shallow semantic parsing.</p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <p class="font-bold text-blue-700 mb-2">مثال:</p>
                        <p class="text-sm text-slate-700 mb-2">"The police officer detained the suspect at the scene of the crime"</p>
                        <div class="bg-slate-50 rounded-lg p-3 mt-2">
                            <p class="text-xs text-slate-600">
                                <strong class="text-blue-700">The police officer</strong> = <em>Agent</em> ·
                                <strong class="text-rose-700">detained</strong> = <em>Predicate</em> ·
                                <strong class="text-emerald-700">the suspect</strong> = <em>Theme</em> ·
                                <strong class="text-amber-700">at the scene of the crime</strong> = <em>Location</em>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 6: Thematic Roles --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-violet-500">
            <button onclick="toggleSection('sec6')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600"><span class="text-xl">🎬</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Thematic Roles</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec6', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec6" style="max-height: 5000px;">
                <div class="space-y-3">
                    <div class="bg-violet-50/70 rounded-xl p-4 border border-violet-100">
                        <p class="text-slate-700">
                            <span class="term">Thematic roles</span> = تعميمات دلالية على الأدوار المحددة لكل فعل (giver, taker, eater...).
                            كلهم يجمعهم نفس الشيء — مثلاً، كلهم <strong>agents</strong> للأفعال.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border-l-4 border-violet-500 p-3">
                        <p class="font-bold text-violet-700">AGENT</p>
                        <p class="text-sm text-slate-700">من يفعل الفعل عمداً.</p>
                        <p class="text-xs text-slate-500">مثال: <em>The waiter spilled the soup.</em></p>
                    </div>
                    <div class="bg-white rounded-xl border-l-4 border-pink-500 p-3">
                        <p class="font-bold text-pink-700">PATIENT</p>
                        <p class="text-sm text-slate-700">من يحدث له شيء ويتأثر بما حدث.</p>
                        <p class="text-xs text-slate-500">مثال: <em>Sue mowed the lawn.</em></p>
                    </div>
                    <div class="bg-white rounded-xl border-l-4 border-rose-500 p-3">
                        <p class="font-bold text-rose-700">EXPERIENCER</p>
                        <p class="text-sm text-slate-700">من يدرك أو يشعر بشيء.</p>
                        <p class="text-xs text-slate-500">مثال: <em>John has a headache.</em></p>
                    </div>
                    <div class="bg-white rounded-xl border-l-4 border-amber-500 p-3">
                        <p class="font-bold text-amber-700">THEME</p>
                        <p class="text-sm text-slate-700">ما يتغير موضعه أو حالته أو يكون في حالة.</p>
                        <p class="text-xs text-slate-500">مثال: <em>The pirate sank [the ship].</em></p>
                    </div>
                    <div class="bg-white rounded-xl border-l-4 border-emerald-500 p-3">
                        <p class="font-bold text-emerald-700">LOCATION</p>
                        <p class="text-sm text-slate-700">المكان في جملة فعل المكان.</p>
                        <p class="text-xs text-slate-500">مثال: <em>The pirate sank the ship [at sea].</em></p>
                    </div>
                    <div class="bg-white rounded-xl border-l-4 border-cyan-500 p-3">
                        <p class="font-bold text-cyan-700">SOURCE / GOAL</p>
                        <p class="text-sm text-slate-700">من أين / إلى أين تتحرك الحركة.</p>
                        <p class="text-xs text-slate-500">مثال: <em>I flew in from Boston</em> (Source). <em>I drove to Portland</em> (Goal).</p>
                    </div>
                    <div class="bg-white rounded-xl border-l-4 border-fuchsia-500 p-3">
                        <p class="font-bold text-fuchsia-700">INSTRUMENT / FORCE / RESULT / BENEFICIARY</p>
                        <p class="text-sm text-slate-700">أدوات إضافية في الـ SRL.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Recap --}}
    <div class="card rounded-2xl border-2 border-amber-200 bg-gradient-to-br from-amber-50 to-orange-50 p-6 mb-8">
        <h3 class="font-bold text-amber-800 mb-4 flex items-center gap-2"><span class="text-xl">⚡</span> خلاصة سريعة للمراجعة</h3>
        <ul class="space-y-2 text-sm text-slate-700">
            <li>✓ <strong>Vagueness</strong> = نقص يقين، مختلف عن ambiguity (تعدد المعاني المحددة)</li>
            <li>✓ <strong>POS Tagging</strong> = تحديد الفئة النحوية (noun/verb/...)</li>
            <li>✓ <strong>WSD</strong> = اختيار المعنى الصحيح من معاني متعددة (make = create or cook?)</li>
            <li>✓ <strong>Lexical Disambiguation</strong> = WSD + POS معاً</li>
            <li>✓ <strong>WordNet</strong> = قاعدة بيانات لغوية، تجمع الكلمات في <strong>synsets</strong></li>
            <li>✓ <strong>تطبيقات WSD:</strong> Machine Translation · Information Retrieval · Information Extraction</li>
            <li>✓ <strong>SRL</strong> = من فعل ماذا لمن أين (case role analysis)</li>
            <li>✓ <strong>Thematic Roles:</strong> Agent · Patient · Experiencer · Theme · Location · Source · Goal · Instrument · Result · Beneficiary</li>
        </ul>
    </div>
</div>

<script>
    const STORAGE_KEY = 'nlp_lec5';
    const TOTAL_SECTIONS = 6;

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
    function getProgress() { try { return JSON.parse(localStorage.getItem(STORAGE_KEY) || '{}'); } catch { return {}; } }
    function saveProgress(progress) { localStorage.setItem(STORAGE_KEY, JSON.stringify(progress)); }
    function updateProgressBar() {
        const progress = getProgress(); const done = progress.done ? progress.done.length : 0;
        const pct = Math.round((done / TOTAL_SECTIONS) * 100);
        const bar = document.getElementById('progress-bar'); const text = document.getElementById('progress-text');
        if (bar) bar.style.width = pct + '%'; if (text) text.textContent = done + ' / ' + TOTAL_SECTIONS;
    }
    function markDone(sectionId, btn) {
        const progress = getProgress(); if (!progress.done) progress.done = [];
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
        saveProgress(progress); updateProgressBar();
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
