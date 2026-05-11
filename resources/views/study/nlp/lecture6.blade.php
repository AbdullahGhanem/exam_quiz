@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'nlp') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-cyan-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-cyan-600 to-blue-700 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456z"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة السادسة: Word Embeddings و Word2Vec</h1>
                <p class="text-cyan-200 text-sm">GPT-3 · Word Vectors · Word2Vec · GD/SGD · GloVe</p>
            </div>
            <div class="px-6 py-3 bg-white/60 border-t border-cyan-100">
                <div class="flex items-center justify-between mb-1.5">
                    <span class="text-xs font-semibold text-slate-500">تقدم المراجعة</span>
                    <span class="text-xs font-bold text-cyan-600" id="progress-text">0 / 7</span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2">
                    <div class="bg-gradient-to-r from-cyan-500 to-blue-600 h-2 rounded-full transition-all duration-500" id="progress-bar" style="width: 0%"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 1: GPT-3 --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-cyan-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center text-cyan-600"><span class="text-xl">🤖</span></div>
                    <h2 class="text-lg font-bold text-slate-800">GPT-3</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec1', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec1" style="max-height: 4000px;">
                <div class="space-y-4">
                    <div class="bg-cyan-50/70 rounded-xl p-5 border border-cyan-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">GPT-3</span> = <span class="term-en">Generative Pre-trained Transformer (3rd Gen)</span> — language model
                            قدمته <strong>OpenAI</strong> في ورقة "Language Models Are Few-Shot Learners" (مايو 2020).
                            <strong>Autoregressive</strong> language model.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-cyan-700 mb-3">المميزات الرئيسية:</h3>
                        <ul class="text-sm text-slate-700 space-y-2">
                            <li>🔢 <strong>175 مليار parameter</strong> — من أكبر language models</li>
                            <li>📚 <strong>Pre-trained</strong> على نصوص الإنترنت المتنوعة</li>
                            <li>🎯 يقوم بمهام عديدة: text completion, Q&amp;A, translation, code generation</li>
                            <li>⚡ <strong>Few-shot learning</strong>: يؤدي مهام بأمثلة قليلة جداً (أو بدون!)</li>
                            <li>✍️ يولّد نصوصاً تشبه الكتابة البشرية باستخدام Deep Learning</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 2: Meaning representation --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-blue-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600"><span class="text-xl">🧠</span></div>
                    <h2 class="text-lg font-bold text-slate-800">كيف نمثّل معنى الكلمة؟</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 3500px;">
                <div class="space-y-4">
                    <div class="bg-blue-50/70 rounded-xl p-5 border border-blue-100">
                        <p class="text-slate-700 leading-relaxed">
                            الطريقة اللغوية الشائعة للتفكير في المعنى:
                            <span class="term-en">signifier (symbol) ⇔ signified (idea or thing)</span>
                            = <span class="term">Denotational Semantics</span>.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-blue-700 mb-2">الحل التقليدي: WordNet</h3>
                        <p class="text-sm text-slate-700 mb-2">قاموس مرادفات يحتوي قوائم synonym sets و hypernyms ("is a" relationships).</p>
                        <h4 class="font-bold text-rose-600 mt-3 text-sm">⚠️ مشاكل WordNet:</h4>
                        <ul class="text-sm text-slate-700 space-y-1 mt-1">
                            <li>• يفقد مرادفات صحيحة فقط في سياقات معينة</li>
                            <li>• يفقد المعاني الجديدة للكلمات (wicked, badass, ninja...)</li>
                            <li>• <strong>ذاتي (Subjective)</strong></li>
                            <li>• يحتاج <strong>عمل بشري</strong> لإنشائه وتحديثه</li>
                            <li>• لا يمكن استخدامه لحساب تشابه دقيق بين الكلمات</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 3: Distributional Semantics --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-indigo-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-600"><span class="text-xl">🌐</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Distributional Semantics و Word Vectors</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec3', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec3" style="max-height: 4500px;">
                <div class="space-y-4">
                    <div class="bg-indigo-50/70 rounded-xl p-5 border border-indigo-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Distributional Semantics</span>: معنى الكلمة يُحدد بالكلمات التي تظهر <strong>قريبة منها بشكل متكرر</strong>.
                        </p>
                        <p class="text-sm text-indigo-900 italic mt-2 font-semibold">
                            "You shall know a word by the company it keeps" — J. R. Firth, 1957
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-indigo-700 mb-2">Context-based</h3>
                        <p class="text-sm text-slate-700">عندما تظهر كلمة <code>w</code> في نص، الـ <strong>context</strong> هي الكلمات التي تظهر قريبة منها (داخل window ثابت). نستخدم سياقات <code>w</code> المتعددة لبناء تمثيل لها.</p>
                    </div>
                    <div class="bg-blue-50 rounded-xl p-5 border border-blue-200">
                        <h3 class="font-bold text-blue-700 mb-2">Word Vectors (Embeddings)</h3>
                        <p class="text-sm text-slate-700 mb-2">
                            <strong>Dense vectors</strong> (n-dim arrays) لكل كلمة، مختارة بحيث تكون <strong>متشابهة</strong> لكلمات تظهر في سياقات متشابهة.
                            التشابه يُقاس بالـ <span class="term-en">dot product</span>.
                        </p>
                        <p class="text-xs text-slate-500">تُسمى أيضاً: <strong>word embeddings</strong>, <strong>neural word representations</strong>, <strong>distributed representation</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 4: Word2Vec details --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-violet-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600"><span class="text-xl">🎯</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Word2Vec: تفاصيل الخوارزمية</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec4', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec4" style="max-height: 5000px;">
                <div class="space-y-4">
                    <div class="bg-violet-50/70 rounded-xl p-5 border border-violet-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Word2Vec</span> (Mikolov et al. 2013) = framework لتعلم word vectors.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-violet-700 mb-3">الفكرة الأساسية:</h3>
                        <ol class="text-sm text-slate-700 space-y-1.5 list-decimal mr-5">
                            <li>لدينا corpus كبير من النصوص</li>
                            <li>كل كلمة في القاموس الثابت تُمثل بـ vector</li>
                            <li>مرّ على كل موضع <code>t</code>: لديك center word <code>c</code> و context words <code>o</code></li>
                            <li>استخدم تشابه vectors <code>c</code> و <code>o</code> لحساب احتمال <code>P(o|c)</code></li>
                            <li>عدّل vectors لتعظيم هذا الاحتمال</li>
                        </ol>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-violet-700 mb-2">دالة الاحتمال (Softmax):</h3>
                        <pre class="bg-slate-900 text-slate-100 rounded-lg p-3 text-sm overflow-x-auto"><code dir="ltr">P(o|c) = exp(uₒᵀ vc) / Σ exp(uwᵀ vc)</code></pre>
                        <p class="text-xs text-slate-500 mt-2">
                            • Exponentiation تجعل القيم موجبة<br>
                            • Dot product يقارن تشابه o و c — كلما زاد، زاد الاحتمال<br>
                            • Normalization على كل القاموس → distribution احتمالي
                        </p>
                    </div>
                    <div class="bg-amber-50 border-l-4 border-amber-400 rounded-lg p-4">
                        <p class="text-sm text-amber-900">
                            💡 <strong>لماذا vectors لكل كلمة؟</strong> سهولة التحسين، وفي النهاية نأخذ متوسطهما. <code>v</code> = center، <code>u</code> = context.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 5: Loss & Gradient Descent --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-emerald-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600"><span class="text-xl">📉</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Loss Function و Gradient Descent</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec5', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec5" style="max-height: 4500px;">
                <div class="space-y-4">
                    <div class="bg-emerald-50/70 rounded-xl p-5 border border-emerald-100">
                        <p class="text-slate-700 leading-relaxed">
                            <strong>Loss / Cost function</strong> = Average Negative Log-Likelihood. الهدف:
                            <strong>تقليل الـ loss = تعظيم دقة التنبؤ</strong>.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-emerald-700 mb-2">Gradient Descent (GD)</h3>
                        <p class="text-sm text-slate-700">
                            خوارزمية لتقليل <code>J(θ)</code>. الفكرة: من القيمة الحالية لـ <code>θ</code>،
                            احسب gradient، ثم خذ <strong>خطوة صغيرة في اتجاه الـ negative gradient</strong>. كرّر.
                        </p>
                        <pre class="bg-slate-900 text-slate-100 rounded-lg p-3 text-xs mt-2 overflow-x-auto"><code dir="ltr">θ_new = θ_old − α · ∇J(θ)
        ↑ step size / learning rate</code></pre>
                    </div>
                    <div class="bg-rose-50 border-l-4 border-rose-400 rounded-lg p-4">
                        <p class="text-sm text-rose-900">
                            ⚠️ <strong>مشكلة GD:</strong> <code>J(θ)</code> دالة لكل windows في الـ corpus (ربما مليارات!)
                            مكلفة جداً للحساب — تنتظر طويلاً قبل update واحد.
                        </p>
                    </div>
                    <div class="bg-emerald-50 rounded-xl p-5 border border-emerald-200">
                        <h3 class="font-bold text-emerald-700 mb-2">الحل: Stochastic Gradient Descent (SGD)</h3>
                        <p class="text-sm text-slate-700">
                            <strong>SGD</strong>: عيّن windows عشوائياً، حدّث بعد كل واحد.
                            أسرع بكثير، يمكن استخدامه مع training samples ضخمة.
                        </p>
                        <ul class="text-xs text-slate-600 mt-2 space-y-1">
                            <li>• <strong>Stochastic</strong> = عشوائي (vs deterministic)</li>
                            <li>• قد يهرب من <strong>shallow local minima</strong> أسرع</li>
                            <li>• حل جيد لكن ليس optimal</li>
                            <li>• تقارب أسرع بكثير</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 6: Co-occurrence & GloVe --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-orange-500">
            <button onclick="toggleSection('sec6')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-orange-100 flex items-center justify-center text-orange-600"><span class="text-xl">📊</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Co-occurrence Matrix و GloVe</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec6', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec6" style="max-height: 4500px;">
                <div class="space-y-4">
                    <div class="bg-orange-50/70 rounded-xl p-5 border border-orange-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Co-occurrence Matrix X</span>: مصفوفة تسجل <strong>كم مرة تظهر كل كلمتين معاً</strong> في windows.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-orange-700 mb-3">خياران لبناءها:</h3>
                        <ul class="text-sm text-slate-700 space-y-2">
                            <li>📐 <strong>Window:</strong> مشابه لـ word2vec — يلتقط معلومات syntactic + semantic ("word space")</li>
                            <li>📄 <strong>Word-document:</strong> يعطي مواضيع عامة (كل مصطلحات الرياضة لها entries متشابهة) → "Latent Semantic Analysis"</li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-orange-700 mb-2">GloVe</h3>
                        <p class="text-sm text-slate-700">
                            <span class="term-en">Global Vectors for Word Representation</span> — خوارزمية <strong>unsupervised</strong> لتمثيل الكلمات.
                        </p>
                        <ul class="text-xs text-slate-600 mt-2 space-y-1">
                            <li>• تدريب على <strong>إحصاءات global word-word co-occurrence</strong></li>
                            <li>• النتيجة تُظهر <strong>linear substructures</strong> مثيرة في فضاء word vectors</li>
                            <li>• الفكرة الأساسية: <strong>نسب co-occurrence probabilities</strong> تشفّر مكونات المعنى</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 7: GD vs SGD comparison --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-rose-500">
            <button onclick="toggleSection('sec7')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-rose-100 flex items-center justify-center text-rose-600"><span class="text-xl">⚖️</span></div>
                    <h2 class="text-lg font-bold text-slate-800">GD vs SGD — مقارنة شاملة</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec7', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec7" style="max-height: 4000px;">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm border-collapse">
                        <thead>
                            <tr class="bg-rose-100">
                                <th class="border border-rose-200 px-3 py-2 text-right font-bold text-rose-800">المعيار</th>
                                <th class="border border-rose-200 px-3 py-2 text-right font-bold text-rose-800">Gradient Descent</th>
                                <th class="border border-rose-200 px-3 py-2 text-right font-bold text-rose-800">Stochastic GD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white"><td class="border border-rose-100 px-3 py-2 font-bold">العينة</td><td class="border border-rose-100 px-3 py-2">كل training data</td><td class="border border-rose-100 px-3 py-2">عينة واحدة</td></tr>
                            <tr class="bg-rose-50"><td class="border border-rose-100 px-3 py-2 font-bold">السرعة</td><td class="border border-rose-100 px-3 py-2">بطيء، مكلف</td><td class="border border-rose-100 px-3 py-2">أسرع، أقل تكلفة</td></tr>
                            <tr class="bg-white"><td class="border border-rose-100 px-3 py-2 font-bold">للبيانات الضخمة</td><td class="border border-rose-100 px-3 py-2">غير مناسب</td><td class="border border-rose-100 px-3 py-2">مناسب جداً</td></tr>
                            <tr class="bg-rose-50"><td class="border border-rose-100 px-3 py-2 font-bold">الطبيعة</td><td class="border border-rose-100 px-3 py-2">Deterministic</td><td class="border border-rose-100 px-3 py-2">Stochastic (عشوائي)</td></tr>
                            <tr class="bg-white"><td class="border border-rose-100 px-3 py-2 font-bold">الحل</td><td class="border border-rose-100 px-3 py-2">Optimal (مع وقت كافٍ)</td><td class="border border-rose-100 px-3 py-2">جيد لكن ليس optimal</td></tr>
                            <tr class="bg-rose-50"><td class="border border-rose-100 px-3 py-2 font-bold">Local Minima</td><td class="border border-rose-100 px-3 py-2">صعب الهروب</td><td class="border border-rose-100 px-3 py-2">يهرب من shallow ones بسهولة</td></tr>
                            <tr class="bg-white"><td class="border border-rose-100 px-3 py-2 font-bold">التقارب</td><td class="border border-rose-100 px-3 py-2">بطيء</td><td class="border border-rose-100 px-3 py-2">أسرع بكثير</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Recap --}}
    <div class="card rounded-2xl border-2 border-cyan-200 bg-gradient-to-br from-cyan-50 to-blue-50 p-6 mb-8">
        <h3 class="font-bold text-cyan-800 mb-4 flex items-center gap-2"><span class="text-xl">⚡</span> خلاصة سريعة للمراجعة</h3>
        <ul class="space-y-2 text-sm text-slate-700">
            <li>✓ <strong>GPT-3</strong> = OpenAI · 175B params · autoregressive · few-shot learning</li>
            <li>✓ <strong>Denotational semantics:</strong> signifier (symbol) ↔ signified (idea/thing)</li>
            <li>✓ <strong>WordNet</strong> مفيد لكنه ذاتي، يفقد معاني جديدة، يحتاج عمل بشري</li>
            <li>✓ <strong>One-hot vectors:</strong> orthogonal — لا تشابه طبيعي</li>
            <li>✓ <strong>Distributional semantics:</strong> "you shall know a word by the company it keeps"</li>
            <li>✓ <strong>Word embeddings = dense vectors</strong> تتعلم تشابه الكلمات</li>
            <li>✓ <strong>Word2Vec:</strong> CBOW (سياق→وسطى) · Skip-Gram (وسطى→سياق)</li>
            <li>✓ <strong>Softmax:</strong> normalization تعطي distribution احتمالي</li>
            <li>✓ <strong>SGD أسرع من GD</strong> لكن أقل دقة، يهرب من local minima أفضل</li>
            <li>✓ <strong>GloVe</strong> = unsupervised word embeddings من co-occurrence statistics</li>
        </ul>
    </div>
</div>

<script>
    const STORAGE_KEY = 'nlp_lec6';
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
