@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-6">
        <a href="{{ route('study.index') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-indigo-600 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            كل المواد
        </a>
    </div>

    <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden mb-8">
        <div class="bg-gradient-to-r from-indigo-600 to-violet-600 px-8 py-6 text-center">
            <h1 class="text-2xl font-extrabold text-white mb-1">معالجة اللغات الطبيعية</h1>
            <p class="text-indigo-200 text-sm">Natural Language Processing — 7 محاضرات</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <a href="{{ route('study.show', ['subject' => 'nlp', 'lecture' => 1]) }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-indigo-400 shadow-sm hover:shadow-lg hover:shadow-indigo-100 transition-all p-6 h-full">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-500 to-indigo-700 flex items-center justify-center text-white text-xl font-extrabold shadow-md shadow-indigo-200">1</div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">المحاضرة الأولى</h2>
                        <p class="text-xs text-slate-400">مقدمة في NLP</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 mb-4">NLU & NLG، المستويات اللغوية، اختبار تورينغ، ELIZA، التطبيقات</p>
                <div class="flex flex-wrap gap-1.5 mb-3">
                    <span class="text-xs bg-indigo-50 text-indigo-600 px-2 py-1 rounded-md font-medium">NLU & NLG</span>
                    <span class="text-xs bg-violet-50 text-violet-600 px-2 py-1 rounded-md font-medium">Turing Test</span>
                    <span class="text-xs bg-fuchsia-50 text-fuchsia-600 px-2 py-1 rounded-md font-medium">ELIZA</span>
                </div>
                <span class="text-indigo-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ المراجعة &larr;</span>
            </div>
        </a>

        <a href="{{ route('study.show', ['subject' => 'nlp', 'lecture' => 2]) }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-violet-400 shadow-sm hover:shadow-lg hover:shadow-violet-100 transition-all p-6 h-full">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-violet-500 to-violet-700 flex items-center justify-center text-white text-xl font-extrabold shadow-md shadow-violet-200">2</div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">المحاضرة الثانية</h2>
                        <p class="text-xs text-slate-400">مهام NLP والتحليل اللغوي</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 mb-4">التقطيع، POS Tagging، NER، التحليل النحوي، التحديات</p>
                <div class="flex flex-wrap gap-1.5 mb-3">
                    <span class="text-xs bg-violet-50 text-violet-600 px-2 py-1 rounded-md font-medium">Tokenization</span>
                    <span class="text-xs bg-emerald-50 text-emerald-600 px-2 py-1 rounded-md font-medium">POS</span>
                    <span class="text-xs bg-amber-50 text-amber-600 px-2 py-1 rounded-md font-medium">Parsing</span>
                </div>
                <span class="text-violet-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ المراجعة &larr;</span>
            </div>
        </a>

        {{-- Lecture 3 --}}
        <a href="{{ route('study.show', ['subject' => 'nlp', 'lecture' => 3]) }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-fuchsia-400 shadow-sm hover:shadow-lg hover:shadow-fuchsia-100 transition-all p-6 h-full">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-fuchsia-600 to-pink-700 flex items-center justify-center text-white text-xl font-extrabold shadow-md shadow-fuchsia-200">3</div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">المحاضرة الثالثة</h2>
                        <p class="text-xs text-slate-400">أسس NLP ومستويات المعرفة</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 mb-4">NLU vs NLG، أسباب صعوبة NLP، 7 مستويات للمعرفة (Phonology→World)، Morphemes، "I made her duck"</p>
                <div class="flex flex-wrap gap-1.5 mb-3">
                    <span class="text-xs bg-fuchsia-50 text-fuchsia-600 px-2 py-1 rounded-md font-medium">NLU/NLG</span>
                    <span class="text-xs bg-pink-50 text-pink-600 px-2 py-1 rounded-md font-medium">7 Levels</span>
                    <span class="text-xs bg-rose-50 text-rose-600 px-2 py-1 rounded-md font-medium">Ambiguity</span>
                </div>
                <span class="text-fuchsia-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ المراجعة &larr;</span>
            </div>
        </a>

        {{-- Lecture 4 --}}
        <a href="{{ route('study.show', ['subject' => 'nlp', 'lecture' => 4]) }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-emerald-400 shadow-sm hover:shadow-lg hover:shadow-emerald-100 transition-all p-6 h-full">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-600 to-green-700 flex items-center justify-center text-white text-xl font-extrabold shadow-md shadow-emerald-200">4</div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">المحاضرة الرابعة</h2>
                        <p class="text-xs text-slate-400">Morphemes و Bag-of-Words</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 mb-4">Inflection vs Derivation، BoW (3 خطوات)، One-hot، Word2Vec (CBOW/Skip-Gram)، Confusion Matrix</p>
                <div class="flex flex-wrap gap-1.5 mb-3">
                    <span class="text-xs bg-emerald-50 text-emerald-600 px-2 py-1 rounded-md font-medium">BoW</span>
                    <span class="text-xs bg-teal-50 text-teal-600 px-2 py-1 rounded-md font-medium">Word2Vec</span>
                    <span class="text-xs bg-cyan-50 text-cyan-600 px-2 py-1 rounded-md font-medium">TP/FP/TN/FN</span>
                </div>
                <span class="text-emerald-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ المراجعة &larr;</span>
            </div>
        </a>

        {{-- Lecture 5 --}}
        <a href="{{ route('study.show', ['subject' => 'nlp', 'lecture' => 5]) }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-amber-400 shadow-sm hover:shadow-lg hover:shadow-amber-100 transition-all p-6 h-full">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-600 to-orange-700 flex items-center justify-center text-white text-xl font-extrabold shadow-md shadow-amber-200">5</div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">المحاضرة الخامسة</h2>
                        <p class="text-xs text-slate-400">WSD و Semantic Roles</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 mb-4">Vagueness، Word Sense Disambiguation، WordNet (synsets)، SRL، Thematic Roles (Agent/Patient/Theme/...)</p>
                <div class="flex flex-wrap gap-1.5 mb-3">
                    <span class="text-xs bg-amber-50 text-amber-600 px-2 py-1 rounded-md font-medium">WSD</span>
                    <span class="text-xs bg-orange-50 text-orange-600 px-2 py-1 rounded-md font-medium">WordNet</span>
                    <span class="text-xs bg-yellow-50 text-yellow-700 px-2 py-1 rounded-md font-medium">SRL</span>
                </div>
                <span class="text-amber-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ المراجعة &larr;</span>
            </div>
        </a>

        {{-- Lecture 6 --}}
        <a href="{{ route('study.show', ['subject' => 'nlp', 'lecture' => 6]) }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-cyan-400 shadow-sm hover:shadow-lg hover:shadow-cyan-100 transition-all p-6 h-full">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-cyan-600 to-blue-700 flex items-center justify-center text-white text-xl font-extrabold shadow-md shadow-cyan-200">6</div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">المحاضرة السادسة</h2>
                        <p class="text-xs text-slate-400">Word Embeddings و Word2Vec</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 mb-4">GPT-3، Distributional Semantics، Word Vectors، Word2Vec details (softmax)، Gradient Descent vs SGD، GloVe</p>
                <div class="flex flex-wrap gap-1.5 mb-3">
                    <span class="text-xs bg-cyan-50 text-cyan-600 px-2 py-1 rounded-md font-medium">GPT-3</span>
                    <span class="text-xs bg-blue-50 text-blue-600 px-2 py-1 rounded-md font-medium">SGD</span>
                    <span class="text-xs bg-indigo-50 text-indigo-600 px-2 py-1 rounded-md font-medium">GloVe</span>
                </div>
                <span class="text-cyan-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ المراجعة &larr;</span>
            </div>
        </a>

        {{-- Lecture 7 --}}
        <a href="{{ route('study.show', ['subject' => 'nlp', 'lecture' => 7]) }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-rose-400 shadow-sm hover:shadow-lg hover:shadow-rose-100 transition-all p-6 h-full">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-rose-600 to-red-700 flex items-center justify-center text-white text-xl font-extrabold shadow-md shadow-rose-200">7</div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">المحاضرة السابعة</h2>
                        <p class="text-xs text-slate-400">Hidden Markov Models</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 mb-4">HMM، Sequence Labeling، Markov Chains، Transition vs Emission، 3 مشاكل تحلها HMMs</p>
                <div class="flex flex-wrap gap-1.5 mb-3">
                    <span class="text-xs bg-rose-50 text-rose-600 px-2 py-1 rounded-md font-medium">HMM</span>
                    <span class="text-xs bg-red-50 text-red-600 px-2 py-1 rounded-md font-medium">Markov</span>
                    <span class="text-xs bg-pink-50 text-pink-600 px-2 py-1 rounded-md font-medium">Transitions</span>
                </div>
                <span class="text-rose-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ المراجعة &larr;</span>
            </div>
        </a>
    </div>
</div>
@endsection
