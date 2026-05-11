@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'nlp') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-fuchsia-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-fuchsia-600 to-pink-700 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة الثالثة: أسس NLP ومستويات المعرفة</h1>
                <p class="text-fuchsia-200 text-sm">NLP Foundations &amp; Levels of Linguistic Knowledge</p>
            </div>
            <div class="px-6 py-3 bg-white/60 border-t border-fuchsia-100">
                <div class="flex items-center justify-between mb-1.5">
                    <span class="text-xs font-semibold text-slate-500">تقدم المراجعة</span>
                    <span class="text-xs font-bold text-fuchsia-600" id="progress-text">0 / 7</span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2">
                    <div class="bg-gradient-to-r from-fuchsia-500 to-pink-500 h-2 rounded-full transition-all duration-500" id="progress-bar" style="width: 0%"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 1: What is NLP --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-fuchsia-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-fuchsia-100 flex items-center justify-center text-fuchsia-600"><span class="text-xl">💬</span></div>
                    <h2 class="text-lg font-bold text-slate-800">ما هو NLP؟</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec1', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec1" style="max-height: 2500px;">
                <div class="space-y-5">
                    <div class="bg-fuchsia-50/70 rounded-xl p-5 border border-fuchsia-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">NLP</span> = عملية تحليل الحاسب لمدخلات بلغة بشرية، وتحويل هذه المدخلات إلى
                            <strong>تمثيل مفيد</strong>. الهدف الأساسي: جعل الحاسب يقوم بمهام مفيدة مع اللغة البشرية.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-fuchsia-700 mb-3">صور اللغة الطبيعية:</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div class="bg-fuchsia-50 rounded-lg p-3 border border-fuchsia-200">
                                <p class="font-bold text-fuchsia-700 text-sm">📝 نص مكتوب (Text)</p>
                                <p class="text-xs text-slate-600 mt-1">يحتاج: lexical, syntactic, semantic, discourse, world knowledge.</p>
                            </div>
                            <div class="bg-pink-50 rounded-lg p-3 border border-pink-200">
                                <p class="font-bold text-pink-700 text-sm">🎤 كلام منطوق (Speech)</p>
                                <p class="text-xs text-slate-600 mt-1">كل ما سبق + speech recognition + speech synthesis.</p>
                            </div>
                        </div>
                        <p class="text-xs text-slate-500 mt-3">في هذا المقرر نركّز على <strong>النص المكتوب</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 2: NLU vs NLG --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-pink-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-pink-100 flex items-center justify-center text-pink-600"><span class="text-xl">🔄</span></div>
                    <h2 class="text-lg font-bold text-slate-800">مكونات NLP: NLU و NLG</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 3500px;">
                <div class="space-y-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-pink-50 rounded-xl p-5 border-2 border-pink-200">
                            <h3 class="font-bold text-pink-700 mb-2 flex items-center gap-2"><span class="text-xl">📥</span> NLU</h3>
                            <p class="term-en text-xs mb-2">Natural Language Understanding</p>
                            <p class="text-sm text-slate-700">تحويل اللغة الطبيعية إلى <strong>تمثيل داخلي مفيد</strong> للحاسب.</p>
                            <p class="text-xs text-slate-500 mt-2">يتضمن: morphological، syntactic، semantic، discourse analysis.</p>
                        </div>
                        <div class="bg-purple-50 rounded-xl p-5 border-2 border-purple-200">
                            <h3 class="font-bold text-purple-700 mb-2 flex items-center gap-2"><span class="text-xl">📤</span> NLG</h3>
                            <p class="term-en text-xs mb-2">Natural Language Generation</p>
                            <p class="text-sm text-slate-700">إنتاج لغة طبيعية من <strong>تمثيل داخلي</strong>.</p>
                            <p class="text-xs text-slate-500 mt-2">يتضمن: deep planning (ماذا تقول)، syntactic generation.</p>
                        </div>
                    </div>
                    <div class="bg-amber-50 border-l-4 border-amber-400 rounded-lg p-4">
                        <p class="text-sm text-amber-900">
                            ⚠️ <strong>NLU أصعب بكثير من NLG</strong> — لكن الاثنين صعبان.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 3: Why NLP is hard --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-rose-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-rose-100 flex items-center justify-center text-rose-600"><span class="text-xl">🤯</span></div>
                    <h2 class="text-lg font-bold text-slate-800">لماذا NLP صعب؟</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec3', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec3" style="max-height: 4000px;">
                <div class="space-y-3">
                    <div class="bg-white rounded-xl border-2 border-rose-200 p-4">
                        <div class="flex items-start gap-3">
                            <span class="bg-rose-600 text-white font-bold rounded-full w-7 h-7 flex items-center justify-center text-sm flex-shrink-0">1</span>
                            <div>
                                <h3 class="font-bold text-rose-700 mb-1">اللغة غامضة <span class="term-en">(Ambiguous)</span></h3>
                                <p class="text-sm text-slate-700">مثال: "Jack saw Sam yesterday. <strong>He</strong> went back to the restaurant" — من هو "He"؟</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl border-2 border-pink-200 p-4">
                        <div class="flex items-start gap-3">
                            <span class="bg-pink-600 text-white font-bold rounded-full w-7 h-7 flex items-center justify-center text-sm flex-shrink-0">2</span>
                            <div>
                                <h3 class="font-bold text-pink-700 mb-1">يتطلب استدلال يتجاوز ما هو مذكور صراحةً</h3>
                                <p class="text-sm text-slate-700">يحتاج <strong>world knowledge</strong>. مثال: "I couldn't submit my homework because my horse ate it." — يحتاج معرفة أن الخيول تأكل أحياناً ولكن لا تعرف القراءة.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl border-2 border-fuchsia-200 p-4">
                        <div class="flex items-start gap-3">
                            <span class="bg-fuchsia-600 text-white font-bold rounded-full w-7 h-7 flex items-center justify-center text-sm flex-shrink-0">3</span>
                            <div>
                                <h3 class="font-bold text-fuchsia-700 mb-1">اللغة صعبة حتى على البشر</h3>
                                <p class="text-sm text-slate-700">سوء الفهم بين البشر شائع — كيف نتوقع من الحاسب أن يكون أفضل؟</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 4: Ambiguity Levels --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-violet-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600"><span class="text-xl">🎭</span></div>
                    <h2 class="text-lg font-bold text-slate-800">مستويات الغموض</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec4', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec4" style="max-height: 4000px;">
                <div class="space-y-4">
                    <div class="bg-violet-50/70 rounded-xl p-4 border border-violet-100">
                        <p class="text-sm text-slate-700">
                            <strong>لماذا اللغة غامضة؟</strong> لو وضعنا عبارة فريدة لكل فكرة ممكنة، اللغة تصبح طويلة ومعقدة للغاية.
                            الغموض القابل للحل يسمح بـ <strong>عبارات أقصر</strong> = ضغط البيانات <span class="term-en">(data compression)</span>.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-violet-700 mb-3">طبيعة اللغة الطبيعية vs لغة البرمجة:</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 text-sm">
                            <div class="bg-violet-50 rounded-lg p-3 border border-violet-200">
                                <p class="font-bold text-violet-700">🌐 اللغة الطبيعية</p>
                                <p class="text-xs text-slate-600 mt-1">غامضة بطبعها، تعتمد على المعرفة والاستدلال.</p>
                            </div>
                            <div class="bg-emerald-50 rounded-lg p-3 border border-emerald-200">
                                <p class="font-bold text-emerald-700">💻 لغات البرمجة</p>
                                <p class="text-xs text-slate-600 mt-1">مصممة لتكون <strong>غير غامضة</strong> — كل جملة لها parse تعريف وحيد.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-violet-700 mb-3">أنواع الغموض في NLP:</h3>
                        <ul class="text-sm text-slate-700 space-y-2">
                            <li>• <strong>Word senses (Lexical):</strong> bank — بنك مالي أم ضفة نهر؟</li>
                            <li>• <strong>Part of speech:</strong> chair — اسم (كرسي) أم فعل (يترأس)؟</li>
                            <li>• <strong>Syntactic structure:</strong> "I can see a man with a telescope" — التليسكوب مع من؟</li>
                            <li>• <strong>Multiple:</strong> "I made her duck" — 5 معانٍ ممكنة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 5: 7 Levels of Knowledge --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-indigo-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-600"><span class="text-xl">🎯</span></div>
                    <h2 class="text-lg font-bold text-slate-800">7 مستويات للمعرفة اللغوية</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec5', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec5" style="max-height: 5500px;">
                <div class="space-y-3">
                    <div class="bg-white rounded-xl border-l-4 border-indigo-500 p-4">
                        <h3 class="font-bold text-indigo-700">1. Phonology — الصوتيات</h3>
                        <p class="text-sm text-slate-700 mt-1">كيف ترتبط الكلمات بالأصوات. مثال: <em>Red/Read, Flower/Flour, I/Eye, Write/Right</em> (homophones).</p>
                    </div>
                    <div class="bg-white rounded-xl border-l-4 border-blue-500 p-4">
                        <h3 class="font-bold text-blue-700">2. Morphology — التشكيل</h3>
                        <p class="text-sm text-slate-700 mt-1">كيف تُبنى الكلمات من <strong>morphemes</strong> (أصغر وحدة معنى). مثال: washing = wash + ing.</p>
                    </div>
                    <div class="bg-white rounded-xl border-l-4 border-cyan-500 p-4">
                        <h3 class="font-bold text-cyan-700">3. Syntax — التركيب النحوي</h3>
                        <p class="text-sm text-slate-700 mt-1">كيف تُجمع الكلمات لتكوين جمل صحيحة، ودور كل كلمة في الجملة.</p>
                    </div>
                    <div class="bg-white rounded-xl border-l-4 border-emerald-500 p-4">
                        <h3 class="font-bold text-emerald-700">4. Semantics — الدلالة</h3>
                        <p class="text-sm text-slate-700 mt-1">معاني الكلمات وكيف تتجمع لتكوين معنى الجملة (دراسة <strong>المعنى المستقل عن السياق</strong>).</p>
                    </div>
                    <div class="bg-white rounded-xl border-l-4 border-amber-500 p-4">
                        <h3 class="font-bold text-amber-700">5. Pragmatics — البراجماتية</h3>
                        <p class="text-sm text-slate-700 mt-1">كيف تُستخدم الجمل في <strong>مواقف مختلفة</strong> وكيف يؤثر الاستخدام على التفسير.</p>
                    </div>
                    <div class="bg-white rounded-xl border-l-4 border-orange-500 p-4">
                        <h3 class="font-bold text-orange-700">6. Discourse — الخطاب</h3>
                        <p class="text-sm text-slate-700 mt-1">كيف تؤثر <strong>الجمل السابقة</strong> على تفسير الجملة التالية. مهم لتفسير الضمائر.</p>
                    </div>
                    <div class="bg-white rounded-xl border-l-4 border-rose-500 p-4">
                        <h3 class="font-bold text-rose-700">7. World Knowledge — المعرفة بالعالم</h3>
                        <p class="text-sm text-slate-700 mt-1">معرفة عامة عن العالم، ومعرفة كل متحدث بمعتقدات وأهداف الآخرين.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 6: Morphology Details --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-emerald-500">
            <button onclick="toggleSection('sec6')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600"><span class="text-xl">🧬</span></div>
                    <h2 class="text-lg font-bold text-slate-800">الـ Morphology و الـ Morphemes</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec6', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec6" style="max-height: 4000px;">
                <div class="space-y-4">
                    <div class="bg-emerald-50/70 rounded-xl p-5 border border-emerald-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Morpheme</span> = أصغر وحدة معنى تكون كلمة. مثلاً <code>washing</code> = <code>wash</code> + <code>-ing</code>.
                            الـ Morphology تحاول صياغة قواعد لكيفية تكوين الكلمات.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-emerald-700 mb-3">تركيب الكلمة:</h3>
                        <div class="space-y-2">
                            <div class="bg-emerald-50 rounded-lg p-3 border border-emerald-200">
                                <p class="font-bold text-emerald-700 text-sm">📌 Stem (الأصل)</p>
                                <p class="text-xs text-slate-600 mt-1">الجذر الذي تبنى عليه باقي الكلمة. مثال: <code>tree, go, fat</code>.</p>
                            </div>
                            <div class="bg-teal-50 rounded-lg p-3 border border-teal-200">
                                <p class="font-bold text-teal-700 text-sm">📌 Affixes (اللواصق)</p>
                                <p class="text-xs text-slate-600 mt-1">عناصر تُضاف للجذر. نوعان:</p>
                                <ul class="text-xs text-slate-600 mt-1 space-y-1 mr-4">
                                    <li>• <strong>Prefix</strong> (سابقة): <code>pre-</code>, <code>un-</code> (مثال: <em>postpone</em>)</li>
                                    <li>• <strong>Suffix</strong> (لاحقة): <code>-ed</code>, <code>-ing</code> (مثال: <em>tossed</em>)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bg-cyan-50 border-l-4 border-cyan-400 rounded-lg p-4">
                        <p class="text-sm text-cyan-900">
                            💡 <strong>تطبيق:</strong> في Information Retrieval — <code>goose</code> و<code>geese</code> كلمتان تشيران لنفس الجذر، ومهم التعرف عليهما.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 7: I made her duck case study --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-amber-500">
            <button onclick="toggleSection('sec7')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600"><span class="text-xl">🦆</span></div>
                    <h2 class="text-lg font-bold text-slate-800">دراسة حالة: "I made her duck"</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec7', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec7" style="max-height: 5000px;">
                <div class="space-y-4">
                    <div class="bg-amber-50/70 rounded-xl p-5 border border-amber-100">
                        <p class="text-slate-700 leading-relaxed">
                            جملة واحدة — <code>I made her duck</code> — لها <strong>5 تفسيرات مختلفة</strong> على الأقل، حسب الغموض في كل كلمة.
                        </p>
                    </div>
                    <div class="space-y-2">
                        <div class="bg-white rounded-lg p-3 border border-amber-200">
                            <p class="text-sm"><strong class="text-amber-700">1.</strong> I cooked duck for her. (طبخت بطة لها)</p>
                        </div>
                        <div class="bg-white rounded-lg p-3 border border-amber-200">
                            <p class="text-sm"><strong class="text-amber-700">2.</strong> I cooked duck belonging to her. (طبخت بطتها)</p>
                        </div>
                        <div class="bg-white rounded-lg p-3 border border-amber-200">
                            <p class="text-sm"><strong class="text-amber-700">3.</strong> I created a toy duck which she owns. (صنعت بطة لعبة تملكها)</p>
                        </div>
                        <div class="bg-white rounded-lg p-3 border border-amber-200">
                            <p class="text-sm"><strong class="text-amber-700">4.</strong> I caused her to lower her head/body. (جعلتها تخفض رأسها)</p>
                        </div>
                        <div class="bg-white rounded-lg p-3 border border-amber-200">
                            <p class="text-sm"><strong class="text-amber-700">5.</strong> I used magic and turned her into a duck. (حوّلتها إلى بطة بالسحر)</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-amber-700 mb-2">مصادر الغموض:</h3>
                        <ul class="text-sm text-slate-700 space-y-1.5">
                            <li>• <strong>duck:</strong> اسم (طائر) أو فعل (يخفض) — morphologically &amp; syntactically</li>
                            <li>• <strong>her:</strong> dative (لها) أو possessive (تخصها) — syntactically</li>
                            <li>• <strong>make:</strong> create أو cook — semantically</li>
                            <li>• <strong>make:</strong> Transitive / Di-transitive / Action-transitive — syntactically</li>
                        </ul>
                    </div>
                    <div class="bg-emerald-50 border-l-4 border-emerald-400 rounded-lg p-4">
                        <p class="text-sm text-emerald-900">
                            💡 <strong>الخلاصة:</strong> فئات معرفة اللغة (Phonology، Syntax، Semantics، إلخ) يمكن النظر إليها كـ
                            <strong>مكونات لحل الغموض</strong>. في الكلام المنطوق يضاف غموض إضافي: تحديد حدود الكلمات.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Recap --}}
    <div class="card rounded-2xl border-2 border-fuchsia-200 bg-gradient-to-br from-fuchsia-50 to-pink-50 p-6 mb-8">
        <h3 class="font-bold text-fuchsia-800 mb-4 flex items-center gap-2"><span class="text-xl">⚡</span> خلاصة سريعة للمراجعة</h3>
        <ul class="space-y-2 text-sm text-slate-700">
            <li>✓ <strong>NLP</strong> = تحليل + توليد لغة بشرية في الحاسب</li>
            <li>✓ المكونات: <strong>NLU</strong> (فهم) + <strong>NLG</strong> (توليد) — NLU أصعب</li>
            <li>✓ <strong>3 أسباب لصعوبة NLP:</strong> الغموض · يحتاج استدلال + معرفة · صعب حتى للبشر</li>
            <li>✓ <strong>الغموض = ضغط بيانات</strong> — يسمح بعبارات أقصر</li>
            <li>✓ لغات البرمجة <strong>غير غامضة</strong>، اللغة الطبيعية غامضة</li>
            <li>✓ <strong>7 مستويات معرفة:</strong> Phonology · Morphology · Syntax · Semantics · Pragmatics · Discourse · World Knowledge</li>
            <li>✓ <strong>Morpheme</strong> = أصغر وحدة معنى. <strong>Stem + Affixes</strong> (Prefix/Suffix)</li>
            <li>✓ "I made her duck" = 5 تفسيرات (مثال كلاسيكي على الغموض)</li>
        </ul>
    </div>
</div>

<script>
    const STORAGE_KEY = 'nlp_lec3';
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
