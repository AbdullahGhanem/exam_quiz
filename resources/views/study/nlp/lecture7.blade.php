@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'nlp') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-rose-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-rose-600 to-red-700 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h12M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة السابعة: Hidden Markov Models</h1>
                <p class="text-rose-200 text-sm">HMM · Sequence Labeling · Markov Chains</p>
            </div>
            <div class="px-6 py-3 bg-white/60 border-t border-rose-100">
                <div class="flex items-center justify-between mb-1.5">
                    <span class="text-xs font-semibold text-slate-500">تقدم المراجعة</span>
                    <span class="text-xs font-bold text-rose-600" id="progress-text">0 / 6</span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2">
                    <div class="bg-gradient-to-r from-rose-500 to-red-600 h-2 rounded-full transition-all duration-500" id="progress-bar" style="width: 0%"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 1: What is HMM --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-rose-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-rose-100 flex items-center justify-center text-rose-600"><span class="text-xl">🎲</span></div>
                    <h2 class="text-lg font-bold text-slate-800">ما هو HMM؟</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec1', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec1" style="max-height: 3000px;">
                <div class="space-y-4">
                    <div class="bg-rose-50/70 rounded-xl p-5 border border-rose-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Hidden Markov Model (HMM)</span> = <strong>sequence model</strong> —
                            يعطي label/class لكل وحدة في تسلسل، مما يربط <strong>تسلسل من المشاهدات بتسلسل من اللصاقات</strong>.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-rose-700 mb-2">خصائصه:</h3>
                        <ul class="text-sm text-slate-700 space-y-1.5">
                            <li>🎲 <strong>Probabilistic sequence model</strong></li>
                            <li>📊 يحسب <strong>distribution احتمالي</strong> على تسلسلات اللصاقات الممكنة</li>
                            <li>🏆 يختار <strong>أفضل تسلسل لصاقات</strong></li>
                            <li>🌱 نوع من <strong>generative models</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 2: Sequence Labeling Tasks --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-pink-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-pink-100 flex items-center justify-center text-pink-600"><span class="text-xl">🏷️</span></div>
                    <h2 class="text-lg font-bold text-slate-800">مهام Sequence Labeling في NLP</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 3500px;">
                <div class="space-y-3">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="bg-pink-50 border border-pink-200 rounded-lg p-3">
                            <p class="font-bold text-pink-700">🎤 Speech Recognition</p>
                            <p class="text-xs text-slate-600 mt-1">acoustic signals → words</p>
                        </div>
                        <div class="bg-pink-50 border border-pink-200 rounded-lg p-3">
                            <p class="font-bold text-pink-700">📌 POS Tagging</p>
                            <p class="text-xs text-slate-600 mt-1">words → POS tags</p>
                        </div>
                        <div class="bg-pink-50 border border-pink-200 rounded-lg p-3">
                            <p class="font-bold text-pink-700">🏢 Named Entity Recognition</p>
                            <p class="text-xs text-slate-600 mt-1">words → entity types</p>
                        </div>
                        <div class="bg-pink-50 border border-pink-200 rounded-lg p-3">
                            <p class="font-bold text-pink-700">📋 Information Extraction</p>
                            <p class="text-xs text-slate-600 mt-1">extract structured info</p>
                        </div>
                    </div>
                    <div class="bg-amber-50 border-l-4 border-amber-400 rounded-lg p-4">
                        <p class="text-sm text-amber-900">
                            ⚠️ <strong>ليست كل مهام NLP sequence labeling</strong> —
                            فقط المهام التي تكون فيها <strong>المعلومات السابقة في التسلسل تؤثر/تساعد التالي</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 3: Markov Chain --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-red-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-red-100 flex items-center justify-center text-red-600"><span class="text-xl">🔗</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Markov Chain — تعريفات</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec3', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec3" style="max-height: 4500px;">
                <div class="space-y-4">
                    <div class="bg-red-50/70 rounded-xl p-5 border border-red-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Weighted Finite-State Automaton</span> = أتومتا بـ <strong>احتمالات</strong> على الـ arcs.
                            مجموع الاحتمالات الخارجة من أي حالة = <strong>1</strong>.
                            <br><br>
                            <span class="term">Markov Chain</span> = حالة خاصة من WFSA حيث تسلسل الـ input <strong>يحدد بشكل وحيد</strong> أي حالات تمر بها الأوتوماتا.
                        </p>
                    </div>
                    <div class="bg-amber-50 border-l-4 border-amber-400 rounded-lg p-4">
                        <p class="text-sm text-amber-900">
                            ⚠️ <strong>قيود Markov Chains:</strong> لا تستطيع تمثيل <strong>المسائل الغامضة بطبعها</strong>.
                            مفيدة لإسناد احتمالات <strong>للتسلسلات غير الغامضة</strong>.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-red-700 mb-3">First-Order Observable Markov Model:</h3>
                        <ul class="text-sm text-slate-700 space-y-1.5">
                            <li>• مجموعة حالات: <code>Q = q₁, q₂, ..., qₙ</code> — الحالة في وقت <code>t</code> هي <code>qₜ</code></li>
                            <li>• Transition probabilities <code>A = a₁₁, a₁₂, ..., aₙₙ</code> — كل <code>aᵢⱼ</code> = احتمال الانتقال من حالة <code>i</code> إلى <code>j</code></li>
                            <li>• مصفوفة <strong>Transition Probability Matrix A</strong></li>
                            <li>• Initial probability vector <code>π</code></li>
                        </ul>
                        <div class="bg-slate-100 rounded-lg p-3 mt-3">
                            <p class="text-sm text-center font-mono">
                                <strong>الحالة الحالية تعتمد فقط على الحالة السابقة:</strong>
                            </p>
                            <p class="text-center font-mono text-slate-700 mt-1">
                                P(qᵢ | q₁...qᵢ₋₁) = P(qᵢ | qᵢ₋₁)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 4: HMM Components --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-violet-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600"><span class="text-xl">🔍</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Hidden vs Observed States</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec4', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec4" style="max-height: 4500px;">
                <div class="space-y-4">
                    <div class="bg-violet-50/70 rounded-xl p-5 border border-violet-100">
                        <p class="text-slate-700 leading-relaxed">
                            في كثير من الأحيان نريد معرفة ما <strong>أنتج</strong> التسلسل — الـ <span class="term">hidden sequence</span> للتسلسل المُشاهد.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-violet-700 mb-3">أمثلة على hidden vs observed:</h3>
                        <div class="space-y-2">
                            <div class="bg-violet-50 rounded-lg p-3">
                                <p class="font-bold text-violet-700 text-sm">🎤 Speech Recognition</p>
                                <p class="text-xs text-slate-600">الكلمات (hidden) من الإشارة الصوتية (observed)</p>
                            </div>
                            <div class="bg-purple-50 rounded-lg p-3">
                                <p class="font-bold text-purple-700 text-sm">📌 POS Tagging</p>
                                <p class="text-xs text-slate-600">POS tags (hidden) للكلمات (observed)</p>
                            </div>
                            <div class="bg-fuchsia-50 rounded-lg p-3">
                                <p class="font-bold text-fuchsia-700 text-sm">🏢 NER</p>
                                <p class="text-xs text-slate-600">فئات الكيانات (hidden) للكلمات (observed)</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-rose-50 border-l-4 border-rose-400 rounded-lg p-4">
                        <p class="text-sm text-rose-900">
                            🔑 <strong>المبدأ الأساسي:</strong> مشاهدة واحدة أو أكثر تسمح لنا بـ <strong>الاستدلال</strong> على تسلسل من الحالات المخفية.
                            نسبة hidden:observed ليست بالضرورة 1:1.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 5: 3 Information Types --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-amber-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600"><span class="text-xl">🎯</span></div>
                    <h2 class="text-lg font-bold text-slate-800">3 أنواع للمعلومات في HMM</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec5', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec5" style="max-height: 4500px;">
                <div class="space-y-3">
                    <div class="bg-white rounded-xl border-2 border-blue-200 p-4">
                        <div class="flex items-start gap-3">
                            <span class="bg-blue-600 text-white font-bold rounded-full w-7 h-7 flex items-center justify-center text-sm flex-shrink-0">1</span>
                            <div>
                                <h3 class="font-bold text-blue-700 mb-1">Transition Data — احتمالات الانتقال</h3>
                                <p class="text-sm text-slate-700">احتمال الانتقال إلى حالة جديدة <strong>بشرط</strong> الحالة الحالية.</p>
                                <p class="text-xs text-slate-500 mt-1 font-mono">P(tᵢ | tᵢ₋₁) = C(tᵢ₋₁, tᵢ) / C(tᵢ₋₁)</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl border-2 border-emerald-200 p-4">
                        <div class="flex items-start gap-3">
                            <span class="bg-emerald-600 text-white font-bold rounded-full w-7 h-7 flex items-center justify-center text-sm flex-shrink-0">2</span>
                            <div>
                                <h3 class="font-bold text-emerald-700 mb-1">Emission Data — احتمالات المشاهدة</h3>
                                <p class="text-sm text-slate-700">احتمال الانتقال إلى <strong>حالة مُشاهدة</strong> بشرط <strong>حالة مخفية</strong>.</p>
                                <p class="text-xs text-slate-500 mt-1 font-mono">P(wᵢ | tᵢ) = C(tᵢ, wᵢ) / C(tᵢ)</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl border-2 border-amber-200 p-4">
                        <div class="flex items-start gap-3">
                            <span class="bg-amber-600 text-white font-bold rounded-full w-7 h-7 flex items-center justify-center text-sm flex-shrink-0">3</span>
                            <div>
                                <h3 class="font-bold text-amber-700 mb-1">Initial State — الحالة الأولية</h3>
                                <p class="text-sm text-slate-700">احتمال البدء بحالة مخفية معينة (<strong>prior probability</strong>).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 6: 3 Problems HMMs solve --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-emerald-500">
            <button onclick="toggleSection('sec6')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600"><span class="text-xl">🧩</span></div>
                    <h2 class="text-lg font-bold text-slate-800">3 مشاكل تحلها HMMs</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec6', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec6" style="max-height: 4500px;">
                <div class="space-y-3">
                    <div class="bg-white rounded-xl border-2 border-emerald-200 p-4">
                        <div class="flex items-start gap-3">
                            <span class="bg-emerald-600 text-white font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">1</span>
                            <div>
                                <h3 class="font-bold text-emerald-700 mb-1">Likelihood</h3>
                                <p class="text-sm text-slate-700">
                                    معطى <strong>تسلسل مشاهدات</strong> + <strong>model</strong>،
                                    ما احتمال هذا التسلسل given the model؟
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl border-2 border-blue-200 p-4">
                        <div class="flex items-start gap-3">
                            <span class="bg-blue-600 text-white font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">2</span>
                            <div>
                                <h3 class="font-bold text-blue-700 mb-1">Decoding</h3>
                                <p class="text-sm text-slate-700">
                                    معطى <strong>تسلسل مشاهدات</strong> + <strong>model</strong>،
                                    ما هو <strong>أكثر تسلسل حالات احتمالاً</strong>؟
                                </p>
                                <p class="text-xs text-slate-500 mt-1">يُحل عادةً بـ Viterbi algorithm.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl border-2 border-violet-200 p-4">
                        <div class="flex items-start gap-3">
                            <span class="bg-violet-600 text-white font-bold rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0">3</span>
                            <div>
                                <h3 class="font-bold text-violet-700 mb-1">Learning</h3>
                                <p class="text-sm text-slate-700">
                                    معطى <strong>تسلسل مشاهدات</strong> + model partially specified،
                                    جد <strong>أفضل model parameters</strong>.
                                </p>
                                <p class="text-xs text-slate-500 mt-1">يُحل عادةً بـ Baum-Welch / EM algorithm.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Recap --}}
    <div class="card rounded-2xl border-2 border-rose-200 bg-gradient-to-br from-rose-50 to-red-50 p-6 mb-8">
        <h3 class="font-bold text-rose-800 mb-4 flex items-center gap-2"><span class="text-xl">⚡</span> خلاصة سريعة للمراجعة</h3>
        <ul class="space-y-2 text-sm text-slate-700">
            <li>✓ <strong>HMM</strong> = sequence model + probabilistic + generative</li>
            <li>✓ <strong>4 مهام sequence labeling:</strong> Speech Recognition · POS Tagging · NER · Information Extraction</li>
            <li>✓ <strong>WFSA</strong> = أتومتا باحتمالات (مجموع كل حالة = 1)</li>
            <li>✓ <strong>Markov Chain</strong> = حالة خاصة من WFSA — لا يمكنه تمثيل غموض</li>
            <li>✓ <strong>First-Order:</strong> الحالة الحالية تعتمد فقط على الحالة السابقة</li>
            <li>✓ <strong>3 معلومات HMM:</strong> Transition · Emission · Initial State (prior)</li>
            <li>✓ <strong>3 مشاكل HMM:</strong> 1) Likelihood (احتمال تسلسل) · 2) Decoding (أفضل state sequence) · 3) Learning (model parameters)</li>
            <li>✓ Hidden states = ما نريد معرفته. Observed states = ما نراه.</li>
        </ul>
    </div>
</div>

<script>
    const STORAGE_KEY = 'nlp_lec7';
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
