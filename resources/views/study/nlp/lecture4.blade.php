@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'nlp') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-emerald-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-emerald-600 to-green-700 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة الرابعة: Morphemes و Bag-of-Words</h1>
                <p class="text-emerald-200 text-sm">Inflection · Derivation · BoW · Word2Vec · Confusion Matrix</p>
            </div>
            <div class="px-6 py-3 bg-white/60 border-t border-emerald-100">
                <div class="flex items-center justify-between mb-1.5">
                    <span class="text-xs font-semibold text-slate-500">تقدم المراجعة</span>
                    <span class="text-xs font-bold text-emerald-600" id="progress-text">0 / 6</span>
                </div>
                <div class="w-full bg-slate-100 rounded-full h-2">
                    <div class="bg-gradient-to-r from-emerald-500 to-green-600 h-2 rounded-full transition-all duration-500" id="progress-bar" style="width: 0%"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 1: Inflectional vs Derivational --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-emerald-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600"><span class="text-xl">🔬</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Inflection vs Derivation Morphemes</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec1', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec1" style="max-height: 4500px;">
                <div class="space-y-5">
                    <div class="bg-emerald-50/70 rounded-xl p-5 border border-emerald-100">
                        <p class="text-slate-700 leading-relaxed">
                            النوعان يستخدمان <strong>affixation</strong> (إضافة لواصق) لكن لأهداف مختلفة:
                            <span class="term">Inflection</span> = صور مختلفة لنفس الكلمة،
                            <span class="term">Derivation</span> = كلمات جديدة كلياً.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-emerald-50 rounded-xl p-5 border-2 border-emerald-200">
                            <h3 class="font-bold text-emerald-700 mb-2">📐 Inflectional</h3>
                            <p class="text-sm text-slate-700 mb-2">صور جديدة لنفس الكلمة. <strong>المعنى والفئة لا يتغيران</strong>، فقط الخصائص النحوية.</p>
                            <ul class="text-xs text-slate-600 space-y-1">
                                <li>• <code>-s</code> (plural)</li>
                                <li>• <code>-'s</code> (possessive)</li>
                                <li>• <code>-ed</code> (past tense)</li>
                                <li>• <code>-ing</code> (progressive)</li>
                                <li>• <code>-er</code> (comparison)</li>
                                <li>• <code>-est</code> (superlative)</li>
                            </ul>
                        </div>
                        <div class="bg-teal-50 rounded-xl p-5 border-2 border-teal-200">
                            <h3 class="font-bold text-teal-700 mb-2">🆕 Derivational</h3>
                            <p class="text-sm text-slate-700 mb-2">إنشاء كلمات جديدة بمعنى مختلف، وقد تنتمي <strong>لفئة نحوية مختلفة</strong>.</p>
                            <ul class="text-xs text-slate-600 space-y-1">
                                <li>• <code>re-</code> + Write (V) → <code>rewrite</code> (V)</li>
                                <li>• Write (V) + <code>-er</code> → <code>writer</code> (N)</li>
                                <li>• V → N · N → ADJ · N → V · N → N</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 2: Bag-of-Words --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-cyan-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center text-cyan-600"><span class="text-xl">🛍️</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Bag-of-Words (BoW) Model</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 5000px;">
                <div class="space-y-4">
                    <div class="bg-cyan-50/70 rounded-xl p-5 border border-cyan-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Bag-of-Words</span> = تمثيل النص يصف <strong>تكرار الكلمات</strong> في وثيقة.
                            تسمى "حقيبة" لأنها <strong>تتجاهل ترتيب أو هيكل الكلمات</strong> — فقط هل الكلمة موجودة وكم مرة.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-cyan-700 mb-3">المكونات:</h3>
                        <ul class="text-sm text-slate-700 space-y-2">
                            <li>📖 <strong>Vocabulary</strong> = قائمة الكلمات المعروفة</li>
                            <li>📊 <strong>Measure</strong> = مقياس وجود الكلمات (boolean / count / TF-IDF)</li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-cyan-700 mb-3">3 خطوات لبناء BoW:</h3>
                        <div class="space-y-2">
                            <div class="flex items-start gap-2 bg-cyan-50 rounded-lg p-3">
                                <span class="bg-cyan-600 text-white font-bold rounded-full w-6 h-6 flex items-center justify-center text-xs flex-shrink-0">1</span>
                                <div>
                                    <p class="font-bold text-cyan-700 text-sm">Collect Data</p>
                                    <p class="text-xs text-slate-600">جمع الوثائق. مثال: "It was the best of times" + "it was the worst of times" + ...</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-2 bg-cyan-50 rounded-lg p-3">
                                <span class="bg-cyan-600 text-white font-bold rounded-full w-6 h-6 flex items-center justify-center text-xs flex-shrink-0">2</span>
                                <div>
                                    <p class="font-bold text-cyan-700 text-sm">Design the Vocabulary</p>
                                    <p class="text-xs text-slate-600">قائمة بكل الكلمات الفريدة (تجاهل case + punctuation). مثال: 10 كلمات من 24.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-2 bg-cyan-50 rounded-lg p-3">
                                <span class="bg-cyan-600 text-white font-bold rounded-full w-6 h-6 flex items-center justify-center text-xs flex-shrink-0">3</span>
                                <div>
                                    <p class="font-bold text-cyan-700 text-sm">Create Document Vectors</p>
                                    <p class="text-xs text-slate-600">كل وثيقة = vector بطول vocabulary. أبسط مقياس: <strong>0/1 (boolean)</strong> لوجود الكلمة.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 mb-1">مثال vector لـ "it was the best of times":</p>
                        <pre class="bg-slate-900 text-slate-100 rounded-lg p-3 text-xs overflow-x-auto"><code dir="ltr">"it" = 1, "was" = 1, "the" = 1, "best" = 1, "of" = 1, "times" = 1,
"worst" = 0, "age" = 0, "wisdom" = 0, "foolishness" = 0
→ [1, 1, 1, 1, 1, 1, 0, 0, 0, 0]</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 3: One-hot encoding --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-blue-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600"><span class="text-xl">🎯</span></div>
                    <h2 class="text-lg font-bold text-slate-800">One-Hot Encoding</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec3', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec3" style="max-height: 3000px;">
                <div class="space-y-4">
                    <div class="bg-blue-50/70 rounded-xl p-5 border border-blue-100">
                        <p class="text-slate-700 leading-relaxed">
                            كلمة واحدة تُمثّل كـ <strong>one-hot vector</strong> بحجم القاموس بأكمله — موضع <code>1</code> واحد، الباقي <code>0</code>.
                        </p>
                    </div>
                    <div>
                        <pre class="bg-slate-900 text-slate-100 rounded-lg p-3 text-xs overflow-x-auto"><code dir="ltr">motel = [0 0 0 0 0 0 0 0 0 0 1 0 0 0 0]
hotel = [0 0 0 0 0 0 0 1 0 0 0 0 0 0 0]</code></pre>
                    </div>
                    <div class="bg-rose-50 border-l-4 border-rose-400 rounded-lg p-4">
                        <p class="text-sm text-rose-900">
                            ⚠️ <strong>المشكلة:</strong> هذان المتجهان <strong>متعامدان (orthogonal)</strong>!
                            لا يوجد فكرة طبيعية للتشابه بين one-hot vectors. حل WordNet للـ synonyms ضعيف وغير شامل.
                            <br><br>
                            <strong>الحل المعاصر:</strong> تعلّم تشابه الكلمات داخل المتجهات نفسها → <em>Word Embeddings</em>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 4: Word2Vec architectures --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-violet-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600"><span class="text-xl">🧠</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Word2Vec: CBOW vs Skip-Gram</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec4', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec4" style="max-height: 4000px;">
                <div class="space-y-4">
                    <div class="bg-violet-50/70 rounded-xl p-5 border border-violet-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Word2Vec</span> له <strong>معماريتان</strong> لتعلم word embeddings.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-violet-50 rounded-xl p-5 border-2 border-violet-200">
                            <h3 class="font-bold text-violet-700 mb-2">📦 CBOW</h3>
                            <p class="term-en text-xs mb-2">Continuous Bag-of-Words</p>
                            <p class="text-sm text-slate-700">يتنبأ <strong>بالكلمة الوسطى</strong> من الكلمات المحيطة (السياق).</p>
                            <p class="text-xs text-slate-500 mt-2">Bag-of-words لأن <strong>ترتيب</strong> كلمات السياق غير مهم.</p>
                        </div>
                        <div class="bg-purple-50 rounded-xl p-5 border-2 border-purple-200">
                            <h3 class="font-bold text-purple-700 mb-2">🎯 Skip-Gram</h3>
                            <p class="text-sm text-slate-700">العكس: يتنبأ <strong>بكلمات السياق</strong> من كلمة وسطى واحدة.</p>
                            <p class="text-xs text-slate-500 mt-2">يستخدم لتنبؤ جملة من كلمة input.</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-violet-700 mb-2">مثال Skip-grams (window=2):</h3>
                        <p class="text-xs text-slate-600 mb-2">"The wide road shimmered in the hot sun"</p>
                        <p class="text-xs text-slate-500">من <strong>shimmered</strong>: (shimmered, wide), (shimmered, road), (shimmered, in), (shimmered, the)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 5: Confusion Matrix --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-amber-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600"><span class="text-xl">📊</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Confusion Matrix</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec5', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec5" style="max-height: 4000px;">
                <div class="space-y-4">
                    <div class="bg-amber-50/70 rounded-xl p-5 border border-amber-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Confusion Matrix</span> تقيّم أداء model تصنيفي بمقارنة <strong>التوقعات</strong> بالقيم <strong>الحقيقية</strong>.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div class="bg-emerald-50 rounded-xl p-4 border-2 border-emerald-200">
                            <p class="font-bold text-emerald-700 text-sm">✅ True Positive (TP)</p>
                            <p class="text-xs text-slate-600 mt-1">توقعت positive — وكان <strong>صحيح</strong>.</p>
                        </div>
                        <div class="bg-emerald-50 rounded-xl p-4 border-2 border-emerald-200">
                            <p class="font-bold text-emerald-700 text-sm">✅ True Negative (TN)</p>
                            <p class="text-xs text-slate-600 mt-1">توقعت negative — وكان <strong>صحيح</strong>.</p>
                        </div>
                        <div class="bg-rose-50 rounded-xl p-4 border-2 border-rose-200">
                            <p class="font-bold text-rose-700 text-sm">❌ False Positive (Type I)</p>
                            <p class="text-xs text-slate-600 mt-1">توقعت positive — لكن <strong>خطأ</strong>.</p>
                        </div>
                        <div class="bg-rose-50 rounded-xl p-4 border-2 border-rose-200">
                            <p class="font-bold text-rose-700 text-sm">❌ False Negative (Type II)</p>
                            <p class="text-xs text-slate-600 mt-1">توقعت negative — لكن <strong>خطأ</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 6: Morphology for NLP applications --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-pink-500">
            <button onclick="toggleSection('sec6')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-pink-100 flex items-center justify-center text-pink-600"><span class="text-xl">🌍</span></div>
                    <h2 class="text-lg font-bold text-slate-800">تطبيقات Morphology في NLP</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec6', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>
            <div class="study-section px-6 pb-6" id="sec6" style="max-height: 3000px;">
                <div class="space-y-3">
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-pink-700 mb-2">🌐 Machine Translation</h3>
                        <p class="text-sm text-slate-700">
                            في الترجمة، نحلل الكلمة المصدر إلى morphemes
                            (مثل Noun, Direct Case, Plural) ثم ننقل وننتج الكلمة الهدف بنفس الخصائص النحوية.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-pink-700 mb-2">🔍 Information Retrieval</h3>
                        <p class="text-sm text-slate-700">
                            <code>goose</code> و <code>geese</code> كلمتان لكنهما تشيران لنفس الجذر <code>goose</code>.
                            بدون تحليل morphological، البحث عن "goose" قد يفقد الوثائق التي تحتوي "geese".
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Recap --}}
    <div class="card rounded-2xl border-2 border-emerald-200 bg-gradient-to-br from-emerald-50 to-green-50 p-6 mb-8">
        <h3 class="font-bold text-emerald-800 mb-4 flex items-center gap-2"><span class="text-xl">⚡</span> خلاصة سريعة للمراجعة</h3>
        <ul class="space-y-2 text-sm text-slate-700">
            <li>✓ <strong>Inflectional</strong> = صور جديدة لنفس الكلمة (-s, -ed, -ing, -er, -est)</li>
            <li>✓ <strong>Derivational</strong> = كلمات جديدة (re-, -er, -ness) قد تغير الفئة النحوية</li>
            <li>✓ <strong>BoW</strong> = تمثيل وثيقة كـ vector، يتجاهل ترتيب الكلمات</li>
            <li>✓ <strong>3 خطوات BoW:</strong> Collect Data · Design Vocabulary · Create Document Vectors</li>
            <li>✓ <strong>One-hot:</strong> vector فيه 1 واحد فقط — متجهات الكلمات orthogonal (لا تشابه)</li>
            <li>✓ <strong>Word2Vec - CBOW:</strong> سياق → كلمة وسطى</li>
            <li>✓ <strong>Word2Vec - Skip-Gram:</strong> كلمة وسطى → سياق</li>
            <li>✓ <strong>Confusion Matrix:</strong> TP · TN · FP (Type I) · FN (Type II)</li>
        </ul>
    </div>
</div>

<script>
    const STORAGE_KEY = 'nlp_lec4';
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
