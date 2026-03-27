@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-6">
        <a href="{{ route('study.index') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-indigo-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
            العودة للفهرس
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-violet-600 to-indigo-600 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl font-extrabold text-white">2</span>
                </div>
                <h1 class="text-2xl font-extrabold text-white mb-2">المحاضرة الثانية: مهام NLP والتحليل اللغوي</h1>
                <p class="text-violet-200 text-sm">NLP Tasks & Linguistic Analysis</p>
            </div>
        </div>
    </div>

    {{-- Progress Bar --}}
    <div class="mb-8 card rounded-xl border border-slate-200/60 shadow-sm p-4">
        <div class="flex items-center justify-between mb-2">
            <span class="text-sm font-semibold text-slate-600">التقدم</span>
            <span class="text-sm text-slate-400" id="progress-text">0 / 7</span>
        </div>
        <div class="w-full bg-slate-100 rounded-full h-2">
            <div class="bg-gradient-to-r from-violet-500 to-indigo-500 h-2 rounded-full transition-all duration-500" id="main-progress" style="width: 0%"></div>
        </div>
    </div>

    {{-- Section 1: مهام NLP الأساسية --}}
    <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden mb-6" style="border-top: 4px solid #6366f1;">
        <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-4 hover:bg-slate-50/50 transition-colors">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center">
                    <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/></svg>
                </div>
                <div class="text-right">
                    <h2 class="font-bold text-slate-800">مهام NLP الأساسية</h2>
                    <p class="text-xs text-slate-400">Core NLP Tasks Pipeline</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <button onclick="event.stopPropagation(); markDone('sec1', this)" class="text-xs px-3 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors done-btn" data-section="0">تم</button>
                <svg class="w-5 h-5 text-slate-400 chevron" id="chev-sec1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
            </div>
        </button>
        <div class="study-section" id="sec1" style="max-height: 2000px;">
            <div class="px-6 pb-6 space-y-4">
                <p class="text-sm text-slate-600 leading-relaxed">
                    يمر النص في NLP عبر سلسلة من المراحل (<span class="term-en">Pipeline</span>) لتحويله من نص خام إلى معلومات مفهومة:
                </p>

                {{-- Pipeline Diagram --}}
                <div class="overflow-x-auto pb-2">
                    <div class="flex items-center gap-0 min-w-max justify-center" dir="ltr">
                        <div class="bg-slate-700 text-white text-xs font-bold px-4 py-3 rounded-xl text-center shadow-md">
                            النص<br><span class="text-slate-300 text-[10px]">Text</span>
                        </div>
                        <svg class="w-8 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        <div class="bg-emerald-500 text-white text-xs font-bold px-4 py-3 rounded-xl text-center shadow-md">
                            التقطيع<br><span class="text-emerald-200 text-[10px]">Tokenization</span>
                        </div>
                        <svg class="w-8 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        <div class="bg-blue-500 text-white text-xs font-bold px-4 py-3 rounded-xl text-center shadow-md">
                            تصنيف الكلمات<br><span class="text-blue-200 text-[10px]">POS Tagging</span>
                        </div>
                        <svg class="w-8 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        <div class="bg-amber-500 text-white text-xs font-bold px-4 py-3 rounded-xl text-center shadow-md">
                            الكيانات المسماة<br><span class="text-amber-200 text-[10px]">NER</span>
                        </div>
                        <svg class="w-8 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        <div class="bg-violet-500 text-white text-xs font-bold px-4 py-3 rounded-xl text-center shadow-md">
                            التحليل النحوي<br><span class="text-violet-200 text-[10px]">Parsing</span>
                        </div>
                        <svg class="w-8 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                        <div class="bg-rose-500 text-white text-xs font-bold px-4 py-3 rounded-xl text-center shadow-md">
                            التحليل الدلالي<br><span class="text-rose-200 text-[10px]">Semantics</span>
                        </div>
                    </div>
                </div>

                {{-- Step descriptions --}}
                <div class="grid grid-cols-1 gap-2 text-sm">
                    <div class="flex items-start gap-2 bg-emerald-50 rounded-lg px-3 py-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 mt-1.5 flex-shrink-0"></span>
                        <p class="text-slate-700"><strong class="text-emerald-700">التقطيع:</strong> تقسيم النص إلى وحدات صغيرة (كلمات، رموز)</p>
                    </div>
                    <div class="flex items-start gap-2 bg-blue-50 rounded-lg px-3 py-2">
                        <span class="w-2 h-2 rounded-full bg-blue-500 mt-1.5 flex-shrink-0"></span>
                        <p class="text-slate-700"><strong class="text-blue-700">تصنيف الكلمات:</strong> تحديد نوع كل كلمة (اسم، فعل، صفة...)</p>
                    </div>
                    <div class="flex items-start gap-2 bg-amber-50 rounded-lg px-3 py-2">
                        <span class="w-2 h-2 rounded-full bg-amber-500 mt-1.5 flex-shrink-0"></span>
                        <p class="text-slate-700"><strong class="text-amber-700">التعرف على الكيانات:</strong> استخراج الأسماء المهمة (أشخاص، أماكن، منظمات)</p>
                    </div>
                    <div class="flex items-start gap-2 bg-violet-50 rounded-lg px-3 py-2">
                        <span class="w-2 h-2 rounded-full bg-violet-500 mt-1.5 flex-shrink-0"></span>
                        <p class="text-slate-700"><strong class="text-violet-700">التحليل النحوي:</strong> تحليل البنية النحوية والعلاقات بين الكلمات</p>
                    </div>
                    <div class="flex items-start gap-2 bg-rose-50 rounded-lg px-3 py-2">
                        <span class="w-2 h-2 rounded-full bg-rose-500 mt-1.5 flex-shrink-0"></span>
                        <p class="text-slate-700"><strong class="text-rose-700">التحليل الدلالي:</strong> فهم المعنى الحقيقي للنص وعلاقاته</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 2: التقطيع (Tokenization) --}}
    <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden mb-6" style="border-top: 4px solid #10b981;">
        <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-4 hover:bg-slate-50/50 transition-colors">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/></svg>
                </div>
                <div class="text-right">
                    <h2 class="font-bold text-slate-800"><span class="term">التقطيع</span></h2>
                    <p class="text-xs text-slate-400">Tokenization</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <button onclick="event.stopPropagation(); markDone('sec2', this)" class="text-xs px-3 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors done-btn" data-section="1">تم</button>
                <svg class="w-5 h-5 text-slate-400 chevron" id="chev-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
            </div>
        </button>
        <div class="study-section" id="sec2" style="max-height: 5000px;">
            <div class="px-6 pb-6 space-y-5">
                <p class="text-sm text-slate-600 leading-relaxed">
                    <span class="term">التقطيع</span> <span class="term-en">(Tokenization)</span> هو تقسيم النص إلى وحدات أصغر تسمى <span class="term">tokens</span> (كلمات، أرقام، علامات ترقيم).
                </p>

                {{-- Visual Example --}}
                <div class="bg-slate-800 rounded-xl p-4 text-sm" dir="ltr">
                    <div class="text-slate-400 mb-2 font-mono text-xs">Input:</div>
                    <div class="text-emerald-400 font-mono mb-3">"Natural Language Processing"</div>
                    <div class="text-slate-400 mb-2 font-mono text-xs">Output:</div>
                    <div class="flex gap-2 flex-wrap">
                        <span class="bg-emerald-500/20 text-emerald-300 px-3 py-1 rounded-lg font-mono text-sm border border-emerald-500/30">'Natural'</span>
                        <span class="bg-emerald-500/20 text-emerald-300 px-3 py-1 rounded-lg font-mono text-sm border border-emerald-500/30">'Language'</span>
                        <span class="bg-emerald-500/20 text-emerald-300 px-3 py-1 rounded-lg font-mono text-sm border border-emerald-500/30">'Processing'</span>
                    </div>
                </div>

                {{-- Methods Comparison --}}
                <h3 class="text-sm font-bold text-slate-700">طرق التقطيع:</h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    {{-- Method 1: split() --}}
                    <div class="border border-slate-200 rounded-xl overflow-hidden">
                        <div class="bg-slate-100 px-4 py-2 font-bold text-sm text-slate-700 flex items-center gap-2">
                            <span class="w-6 h-6 bg-slate-600 text-white rounded-md flex items-center justify-center text-xs">1</span>
                            <span dir="ltr">split()</span> في بايثون
                        </div>
                        <div class="p-4 space-y-2">
                            <p class="text-xs text-slate-500">بسيط، يقسم على المسافة فقط</p>
                            <div class="bg-slate-800 rounded-lg p-3 text-xs font-mono" dir="ltr">
                                <div class="text-blue-400">text.split()</div>
                                <div class="text-slate-500 mt-1"># splits on whitespace</div>
                                <div class="text-blue-400 mt-2">text.split('. ')</div>
                                <div class="text-slate-500 mt-1"># splits on ". "</div>
                            </div>
                        </div>
                    </div>

                    {{-- Method 2: NLTK word_tokenize --}}
                    <div class="border border-emerald-200 rounded-xl overflow-hidden">
                        <div class="bg-emerald-50 px-4 py-2 font-bold text-sm text-emerald-700 flex items-center gap-2">
                            <span class="w-6 h-6 bg-emerald-600 text-white rounded-md flex items-center justify-center text-xs">2</span>
                            NLTK word_tokenize
                        </div>
                        <div class="p-4 space-y-2">
                            <p class="text-xs text-slate-500">أذكى، يفصل علامات الترقيم كـ tokens منفصلة</p>
                            <div class="bg-slate-800 rounded-lg p-3 text-xs font-mono" dir="ltr">
                                <div class="text-emerald-400">word_tokenize("SpaceX's")</div>
                                <div class="text-slate-400 mt-1">&rarr; ["SpaceX", "'s"]</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Method 3: sent_tokenize --}}
                <div class="border border-blue-200 rounded-xl overflow-hidden">
                    <div class="bg-blue-50 px-4 py-2 font-bold text-sm text-blue-700 flex items-center gap-2">
                        <span class="w-6 h-6 bg-blue-600 text-white rounded-md flex items-center justify-center text-xs">3</span>
                        NLTK sent_tokenize
                    </div>
                    <div class="p-4 space-y-2">
                        <p class="text-xs text-slate-500">يقسم النص إلى جمل كاملة بدلاً من كلمات</p>
                        <div class="bg-slate-800 rounded-lg p-3 text-xs font-mono" dir="ltr">
                            <div class="text-blue-400">sent_tokenize("Hello world. How are you?")</div>
                            <div class="text-slate-400 mt-1">&rarr; ["Hello world.", "How are you?"]</div>
                        </div>
                    </div>
                </div>

                {{-- Comparison Table --}}
                <div class="overflow-x-auto">
                    <table class="w-full text-sm border border-slate-200 rounded-xl overflow-hidden">
                        <thead>
                            <tr class="bg-slate-800 text-white">
                                <th class="px-4 py-2 text-right">الطريقة</th>
                                <th class="px-4 py-2 text-right">المدخل</th>
                                <th class="px-4 py-2 text-right">المخرج</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-t border-slate-200 bg-slate-50">
                                <td class="px-4 py-2 font-mono text-xs" dir="ltr">split()</td>
                                <td class="px-4 py-2 font-mono text-xs" dir="ltr">"SpaceX's launch"</td>
                                <td class="px-4 py-2 font-mono text-xs" dir="ltr">["SpaceX's", "launch"]</td>
                            </tr>
                            <tr class="border-t border-slate-200">
                                <td class="px-4 py-2 font-mono text-xs" dir="ltr">word_tokenize()</td>
                                <td class="px-4 py-2 font-mono text-xs" dir="ltr">"SpaceX's launch"</td>
                                <td class="px-4 py-2 font-mono text-xs" dir="ltr">["SpaceX", "'s", "launch"]</td>
                            </tr>
                            <tr class="border-t border-slate-200 bg-slate-50">
                                <td class="px-4 py-2 font-mono text-xs" dir="ltr">sent_tokenize()</td>
                                <td class="px-4 py-2 font-mono text-xs" dir="ltr">"Hi. Bye."</td>
                                <td class="px-4 py-2 font-mono text-xs" dir="ltr">["Hi.", "Bye."]</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- Interactive Tokenizer --}}
                <div class="border-2 border-emerald-200 rounded-xl overflow-hidden bg-emerald-50/50">
                    <div class="bg-emerald-100 px-4 py-3 flex items-center justify-between">
                        <h4 class="font-bold text-sm text-emerald-800 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z"/></svg>
                            جرّب بنفسك!
                        </h4>
                        <div class="flex gap-1 bg-white rounded-lg p-0.5 border border-emerald-200">
                            <button onclick="setTokenMode('simple')" id="mode-simple" class="text-xs px-3 py-1 rounded-md font-medium transition-colors bg-emerald-600 text-white">split بسيط</button>
                            <button onclick="setTokenMode('smart')" id="mode-smart" class="text-xs px-3 py-1 rounded-md font-medium transition-colors text-slate-500 hover:text-slate-700">split ذكي</button>
                        </div>
                    </div>
                    <div class="p-4 space-y-3">
                        <input type="text" id="tokenizer-input" oninput="tokenizeInput()" placeholder="اكتب نصاً هنا... مثال: Hello, world! It's NLP." class="w-full px-4 py-3 rounded-xl border border-emerald-200 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:border-transparent font-mono" dir="ltr">
                        <div class="min-h-[40px] flex flex-wrap gap-2" id="token-output">
                            <span class="text-xs text-slate-400">النتيجة ستظهر هنا...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 3: POS Tagging --}}
    <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden mb-6" style="border-top: 4px solid #3b82f6;">
        <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-4 hover:bg-slate-50/50 transition-colors">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z"/><path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z"/></svg>
                </div>
                <div class="text-right">
                    <h2 class="font-bold text-slate-800">تصنيف أجزاء الكلام</h2>
                    <p class="text-xs text-slate-400">POS Tagging (Part-of-Speech)</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <button onclick="event.stopPropagation(); markDone('sec3', this)" class="text-xs px-3 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors done-btn" data-section="2">تم</button>
                <svg class="w-5 h-5 text-slate-400 chevron" id="chev-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
            </div>
        </button>
        <div class="study-section" id="sec3" style="max-height: 3000px;">
            <div class="px-6 pb-6 space-y-5">
                <p class="text-sm text-slate-600 leading-relaxed">
                    <span class="term">تصنيف أجزاء الكلام</span> <span class="term-en">(POS Tagging)</span> هو عملية تعيين نوع لكل كلمة في الجملة (اسم، فعل، صفة، أداة تعريف...).
                </p>
                <p class="text-sm text-slate-500">
                    POS = Part-of-Speech
                </p>

                {{-- Visual POS Example --}}
                <div class="bg-slate-50 rounded-xl p-5 border border-slate-200">
                    <p class="text-xs text-slate-400 mb-3 font-medium">مثال: تحليل الجملة</p>
                    <div class="flex flex-wrap gap-3 justify-center" dir="ltr">
                        {{-- the --}}
                        <div class="flex flex-col items-center gap-1">
                            <span class="bg-slate-200 text-slate-700 px-4 py-2 rounded-xl font-bold text-lg">the</span>
                            <span class="text-xs font-bold text-slate-500 bg-slate-100 px-2 py-0.5 rounded">Det</span>
                            <span class="text-[10px] text-slate-400">أداة تعريف</span>
                        </div>
                        {{-- lead --}}
                        <div class="flex flex-col items-center gap-1">
                            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-xl font-bold text-lg border border-blue-200">lead</span>
                            <span class="text-xs font-bold text-blue-600 bg-blue-50 px-2 py-0.5 rounded">N</span>
                            <span class="text-[10px] text-blue-500">اسم</span>
                        </div>
                        {{-- paint --}}
                        <div class="flex flex-col items-center gap-1">
                            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-xl font-bold text-lg border border-blue-200">paint</span>
                            <span class="text-xs font-bold text-blue-600 bg-blue-50 px-2 py-0.5 rounded">N</span>
                            <span class="text-[10px] text-blue-500">اسم</span>
                        </div>
                        {{-- is --}}
                        <div class="flex flex-col items-center gap-1">
                            <span class="bg-emerald-100 text-emerald-700 px-4 py-2 rounded-xl font-bold text-lg border border-emerald-200">is</span>
                            <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded">V</span>
                            <span class="text-[10px] text-emerald-500">فعل</span>
                        </div>
                        {{-- unsafe --}}
                        <div class="flex flex-col items-center gap-1">
                            <span class="bg-violet-100 text-violet-700 px-4 py-2 rounded-xl font-bold text-lg border border-violet-200">unsafe</span>
                            <span class="text-xs font-bold text-violet-600 bg-violet-50 px-2 py-0.5 rounded">Adj</span>
                            <span class="text-[10px] text-violet-500">صفة</span>
                        </div>
                    </div>
                </div>

                {{-- Legend --}}
                <div class="flex flex-wrap gap-3 justify-center">
                    <div class="flex items-center gap-1.5 text-xs">
                        <span class="w-3 h-3 rounded bg-blue-400"></span>
                        <span class="text-slate-600">اسم <span class="term-en">(Noun)</span> = أزرق</span>
                    </div>
                    <div class="flex items-center gap-1.5 text-xs">
                        <span class="w-3 h-3 rounded bg-emerald-400"></span>
                        <span class="text-slate-600">فعل <span class="term-en">(Verb)</span> = أخضر</span>
                    </div>
                    <div class="flex items-center gap-1.5 text-xs">
                        <span class="w-3 h-3 rounded bg-violet-400"></span>
                        <span class="text-slate-600">صفة <span class="term-en">(Adjective)</span> = بنفسجي</span>
                    </div>
                    <div class="flex items-center gap-1.5 text-xs">
                        <span class="w-3 h-3 rounded bg-slate-400"></span>
                        <span class="text-slate-600">أداة <span class="term-en">(Determiner)</span> = رمادي</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 4: NER --}}
    <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden mb-6" style="border-top: 4px solid #f59e0b;">
        <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-4 hover:bg-slate-50/50 transition-colors">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center">
                    <svg class="w-5 h-5 text-amber-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/></svg>
                </div>
                <div class="text-right">
                    <h2 class="font-bold text-slate-800">التعرف على الكيانات المسماة</h2>
                    <p class="text-xs text-slate-400">Named Entity Recognition (NER)</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <button onclick="event.stopPropagation(); markDone('sec4', this)" class="text-xs px-3 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors done-btn" data-section="3">تم</button>
                <svg class="w-5 h-5 text-slate-400 chevron" id="chev-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
            </div>
        </button>
        <div class="study-section" id="sec4" style="max-height: 3000px;">
            <div class="px-6 pb-6 space-y-5">
                <p class="text-sm text-slate-600 leading-relaxed">
                    <span class="term">التعرف على الكيانات المسماة</span> <span class="term-en">(NER - Named Entity Recognition)</span> هو التعرف على الأسماء المهمة في النص وتصنيفها (أشخاص، منظمات، أماكن، أوقات، قيم مالية).
                </p>
                <p class="text-xs text-slate-500">
                    يُعرف أيضاً بـ: <span class="term-en">entity identification, entity extraction</span>
                </p>

                {{-- NER Visual Example --}}
                <div class="bg-slate-50 rounded-xl p-5 border border-slate-200">
                    <p class="text-xs text-slate-400 mb-3 font-medium">مثال: استخراج الكيانات من جملة</p>
                    <div class="flex flex-wrap items-center gap-2 text-base font-medium justify-center" dir="ltr">
                        <span class="bg-blue-100 text-blue-800 px-3 py-1.5 rounded-lg border-2 border-blue-300 relative">
                            U.N.
                            <span class="absolute -top-2.5 -right-2 bg-blue-600 text-white text-[9px] px-1.5 py-0.5 rounded font-bold">ORG</span>
                        </span>
                        <span class="text-slate-500">official</span>
                        <span class="bg-amber-100 text-amber-800 px-3 py-1.5 rounded-lg border-2 border-amber-300 relative">
                            Ekeus
                            <span class="absolute -top-2.5 -right-2 bg-amber-600 text-white text-[9px] px-1.5 py-0.5 rounded font-bold">PER</span>
                        </span>
                        <span class="text-slate-500">heads for</span>
                        <span class="bg-emerald-100 text-emerald-800 px-3 py-1.5 rounded-lg border-2 border-emerald-300 relative">
                            Baghdad
                            <span class="absolute -top-2.5 -right-2 bg-emerald-600 text-white text-[9px] px-1.5 py-0.5 rounded font-bold">LOC</span>
                        </span>
                    </div>
                </div>

                {{-- Legend --}}
                <div class="bg-white rounded-xl p-4 border border-slate-200">
                    <p class="text-xs text-slate-400 mb-3 font-medium">أنواع الكيانات:</p>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3 text-sm">
                        <div class="flex items-center gap-2">
                            <span class="w-8 text-center bg-amber-100 text-amber-700 text-xs font-bold px-1.5 py-0.5 rounded">PER</span>
                            <span class="text-slate-600">أشخاص</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-8 text-center bg-blue-100 text-blue-700 text-xs font-bold px-1.5 py-0.5 rounded">ORG</span>
                            <span class="text-slate-600">منظمات</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-8 text-center bg-emerald-100 text-emerald-700 text-xs font-bold px-1.5 py-0.5 rounded">LOC</span>
                            <span class="text-slate-600">أماكن</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-8 text-center bg-violet-100 text-violet-700 text-xs font-bold px-1.5 py-0.5 rounded">TIME</span>
                            <span class="text-slate-600">أوقات</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-8 text-center bg-rose-100 text-rose-700 text-xs font-bold px-1.5 py-0.5 rounded">MON</span>
                            <span class="text-slate-600">قيم مالية</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-8 text-center bg-cyan-100 text-cyan-700 text-xs font-bold px-1.5 py-0.5 rounded">PCT</span>
                            <span class="text-slate-600">نسب مئوية</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 5: Parsing --}}
    <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden mb-6" style="border-top: 4px solid #8b5cf6;">
        <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-4 hover:bg-slate-50/50 transition-colors">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center">
                    <svg class="w-5 h-5 text-violet-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
                </div>
                <div class="text-right">
                    <h2 class="font-bold text-slate-800"><span class="term">التحليل النحوي</span></h2>
                    <p class="text-xs text-slate-400">Parsing / Syntactic Analysis</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <button onclick="event.stopPropagation(); markDone('sec5', this)" class="text-xs px-3 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors done-btn" data-section="4">تم</button>
                <svg class="w-5 h-5 text-slate-400 chevron" id="chev-sec5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
            </div>
        </button>
        <div class="study-section" id="sec5" style="max-height: 5000px;">
            <div class="px-6 pb-6 space-y-5">
                <p class="text-sm text-slate-600 leading-relaxed">
                    <span class="term">التحليل النحوي</span> <span class="term-en">(Parsing)</span> هو تحديد البنية النحوية للجملة بتحليل الكلمات بناءً على قواعد اللغة.
                </p>

                {{-- Grammar Rules --}}
                <div class="bg-slate-50 rounded-xl p-5 border border-slate-200">
                    <h4 class="text-sm font-bold text-slate-700 mb-3">القواعد النحوية <span class="term-en">(Grammar Rules)</span>:</h4>
                    <div class="space-y-2">
                        <div class="flex items-center gap-3 flex-wrap">
                            <div class="bg-slate-800 text-violet-300 font-mono text-xs px-3 py-1.5 rounded-lg flex-shrink-0" dir="ltr">sentence &rarr; noun_phrase, verb_phrase</div>
                            <span class="text-xs text-slate-500">الجملة = عبارة اسمية + عبارة فعلية</span>
                        </div>
                        <div class="flex items-center gap-3 flex-wrap">
                            <div class="bg-slate-800 text-blue-300 font-mono text-xs px-3 py-1.5 rounded-lg flex-shrink-0" dir="ltr">noun_phrase &rarr; proper_noun</div>
                            <span class="text-xs text-slate-500">عبارة اسمية = اسم علم</span>
                        </div>
                        <div class="flex items-center gap-3 flex-wrap">
                            <div class="bg-slate-800 text-blue-300 font-mono text-xs px-3 py-1.5 rounded-lg flex-shrink-0" dir="ltr">noun_phrase &rarr; determiner, noun</div>
                            <span class="text-xs text-slate-500">عبارة اسمية = أداة تعريف + اسم</span>
                        </div>
                        <div class="flex items-center gap-3 flex-wrap">
                            <div class="bg-slate-800 text-emerald-300 font-mono text-xs px-3 py-1.5 rounded-lg flex-shrink-0" dir="ltr">verb_phrase &rarr; verb, noun_phrase</div>
                            <span class="text-xs text-slate-500">عبارة فعلية = فعل + عبارة اسمية</span>
                        </div>
                    </div>
                </div>

                {{-- Parse Tree --}}
                <div class="bg-white rounded-xl p-5 border border-violet-200 overflow-x-auto">
                    <h4 class="text-sm font-bold text-violet-700 mb-4">شجرة التحليل لجملة <span dir="ltr" class="font-mono">"Tom ate an apple"</span>:</h4>
                    <div class="font-mono text-sm min-w-max" dir="ltr">
                        <div class="flex flex-col items-center">
                            {{-- Root: sentence --}}
                            <div class="bg-violet-600 text-white px-3 py-1 rounded-lg text-xs font-bold">sentence</div>
                            <div class="w-px h-4 bg-violet-300"></div>
                            <div class="flex gap-12">
                                {{-- Left branch: noun_phrase --}}
                                <div class="flex flex-col items-center">
                                    <div class="bg-blue-500 text-white px-2 py-1 rounded text-xs font-bold">noun_phrase</div>
                                    <div class="w-px h-3 bg-blue-300"></div>
                                    <div class="bg-blue-400 text-white px-2 py-0.5 rounded text-[10px]">proper_noun</div>
                                    <div class="w-px h-3 bg-blue-200"></div>
                                    <div class="bg-slate-100 text-slate-800 px-3 py-1 rounded-lg text-sm font-bold border border-slate-300">"Tom"</div>
                                </div>
                                {{-- Right branch: verb_phrase --}}
                                <div class="flex flex-col items-center">
                                    <div class="bg-emerald-500 text-white px-2 py-1 rounded text-xs font-bold">verb_phrase</div>
                                    <div class="w-px h-3 bg-emerald-300"></div>
                                    <div class="flex gap-8">
                                        {{-- verb --}}
                                        <div class="flex flex-col items-center">
                                            <div class="bg-emerald-400 text-white px-2 py-0.5 rounded text-[10px]">verb</div>
                                            <div class="w-px h-3 bg-emerald-200"></div>
                                            <div class="bg-slate-100 text-slate-800 px-3 py-1 rounded-lg text-sm font-bold border border-slate-300">"ate"</div>
                                        </div>
                                        {{-- noun_phrase --}}
                                        <div class="flex flex-col items-center">
                                            <div class="bg-blue-500 text-white px-2 py-1 rounded text-xs font-bold">noun_phrase</div>
                                            <div class="w-px h-3 bg-blue-300"></div>
                                            <div class="flex gap-4">
                                                <div class="flex flex-col items-center">
                                                    <div class="bg-slate-500 text-white px-2 py-0.5 rounded text-[10px]">det</div>
                                                    <div class="w-px h-3 bg-slate-300"></div>
                                                    <div class="bg-slate-100 text-slate-800 px-3 py-1 rounded-lg text-sm font-bold border border-slate-300">"an"</div>
                                                </div>
                                                <div class="flex flex-col items-center">
                                                    <div class="bg-blue-400 text-white px-2 py-0.5 rounded text-[10px]">noun</div>
                                                    <div class="w-px h-3 bg-blue-200"></div>
                                                    <div class="bg-slate-100 text-slate-800 px-3 py-1 rounded-lg text-sm font-bold border border-slate-300">"apple"</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Parsing Architecture --}}
                <div class="bg-slate-50 rounded-xl p-5 border border-slate-200">
                    <h4 class="text-sm font-bold text-slate-700 mb-4">بنية نظام التحليل النحوي:</h4>
                    <div class="overflow-x-auto">
                        <div class="flex items-center gap-0 min-w-max justify-center" dir="ltr">
                            <div class="bg-slate-700 text-white text-xs font-bold px-4 py-3 rounded-xl text-center shadow-md">
                                Input<br><span class="text-slate-400 text-[10px]">المدخل</span>
                            </div>
                            <svg class="w-8 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                            <div class="flex flex-col items-center gap-1">
                                <div class="bg-violet-600 text-white text-xs font-bold px-4 py-3 rounded-xl text-center shadow-md">
                                    المحلل المعجمي<br><span class="text-violet-300 text-[10px]">Lexical Analyzer</span>
                                </div>
                                <svg class="w-5 h-6 text-amber-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m0 0l-6.75-6.75M12 19.5l6.75-6.75"/></svg>
                                <div class="bg-amber-500 text-white text-[10px] font-bold px-3 py-1.5 rounded-lg">Symbol Table</div>
                                <svg class="w-5 h-6 text-amber-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 19.5v-15m0 0l6.75 6.75M12 4.5L5.25 11.25"/></svg>
                            </div>
                            <svg class="w-8 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                            <div class="bg-blue-600 text-white text-xs font-bold px-2 py-1 rounded-lg">tokens</div>
                            <svg class="w-8 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                            <div class="bg-indigo-600 text-white text-xs font-bold px-4 py-3 rounded-xl text-center shadow-md">
                                المحلل النحوي<br><span class="text-indigo-300 text-[10px]">Parser</span>
                            </div>
                            <svg class="w-8 h-5 text-slate-400 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                            <div class="bg-emerald-600 text-white text-xs font-bold px-4 py-3 rounded-xl text-center shadow-md">
                                Output<br><span class="text-emerald-300 text-[10px]">المخرج</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 space-y-2 text-sm">
                        <div class="flex items-start gap-2 bg-violet-50 rounded-lg px-3 py-2">
                            <span class="w-2 h-2 rounded-full bg-violet-500 mt-1.5 flex-shrink-0"></span>
                            <p class="text-slate-700"><strong class="text-violet-700">المحلل المعجمي <span class="term-en">(Lexical Analyzer)</span>:</strong> يأخذ الحروف ويحولها إلى tokens يفهمها الـ Parser</p>
                        </div>
                        <div class="flex items-start gap-2 bg-indigo-50 rounded-lg px-3 py-2">
                            <span class="w-2 h-2 rounded-full bg-indigo-500 mt-1.5 flex-shrink-0"></span>
                            <p class="text-slate-700"><strong class="text-indigo-700">المحلل النحوي <span class="term-en">(Parser)</span>:</strong> يأخذ الـ tokens ويحلل تسلسلها حسب القواعد النحوية</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 6: تحديات NLP --}}
    <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden mb-6" style="border-top: 4px solid #ef4444;">
        <button onclick="toggleSection('sec6')" class="w-full flex items-center justify-between px-6 py-4 hover:bg-slate-50/50 transition-colors">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-red-100 flex items-center justify-center">
                    <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                </div>
                <div class="text-right">
                    <h2 class="font-bold text-slate-800">تحديات NLP</h2>
                    <p class="text-xs text-slate-400">NLP Challenges</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <button onclick="event.stopPropagation(); markDone('sec6', this)" class="text-xs px-3 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors done-btn" data-section="5">تم</button>
                <svg class="w-5 h-5 text-slate-400 chevron" id="chev-sec6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
            </div>
        </button>
        <div class="study-section" id="sec6" style="max-height: 4000px;">
            <div class="px-6 pb-6 space-y-5">

                {{-- Ambiguity --}}
                <div class="bg-red-50 rounded-xl p-5 border border-red-200">
                    <h4 class="text-sm font-bold text-red-700 mb-3">
                        <span class="term">الغموض</span> <span class="term-en">(Ambiguity)</span>
                    </h4>
                    <p class="text-sm text-slate-600 mb-4">كلمة أو جملة لها أكثر من معنى واحد، ولا يمكن تحديد المعنى المقصود بدون سياق.</p>

                    {{-- Bank example --}}
                    <div class="bg-white rounded-xl p-4 border border-red-100 mb-3">
                        <div class="flex items-center justify-center gap-6" dir="ltr">
                            <div class="flex flex-col items-center gap-2 text-center">
                                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21"/></svg>
                                </div>
                                <span class="text-xs text-blue-700 font-bold">بنك مالي</span>
                                <span class="text-[10px] text-slate-400">Financial Bank</span>
                            </div>
                            <div class="flex flex-col items-center">
                                <svg class="w-5 h-5 text-red-400 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                                <div class="bg-red-500 text-white px-4 py-2 rounded-xl font-bold text-lg my-2">"bank"</div>
                                <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                            </div>
                            <div class="flex flex-col items-center gap-2 text-center">
                                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525"/></svg>
                                </div>
                                <span class="text-xs text-emerald-700 font-bold">ضفة نهر</span>
                                <span class="text-[10px] text-slate-400">River Bank</span>
                            </div>
                        </div>
                    </div>

                    {{-- Sentence ambiguity --}}
                    <div class="bg-white rounded-xl p-4 border border-red-100">
                        <p class="text-xs text-slate-400 mb-2">غموض الجملة:</p>
                        <div class="bg-slate-800 rounded-lg p-3 text-center mb-3" dir="ltr">
                            <span class="text-amber-300 font-mono text-sm">"I saw her duck"</span>
                        </div>
                        <div class="grid grid-cols-2 gap-3 text-center text-sm">
                            <div class="bg-orange-50 rounded-lg p-3 border border-orange-200">
                                <span class="text-orange-700 font-bold">المعنى 1:</span>
                                <p class="text-xs text-slate-600 mt-1">شفت بطتها (duck = بطة)</p>
                            </div>
                            <div class="bg-pink-50 rounded-lg p-3 border border-pink-200">
                                <span class="text-pink-700 font-bold">المعنى 2:</span>
                                <p class="text-xs text-slate-600 mt-1">شفتها تنحني (duck = تنحني)</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Sparsity --}}
                <div class="bg-orange-50 rounded-xl p-5 border border-orange-200">
                    <h4 class="text-sm font-bold text-orange-700 mb-3">
                        <span class="term">التناثر</span> <span class="term-en">(Sparsity)</span>
                    </h4>
                    <p class="text-sm text-slate-600 mb-4">بعض الكلمات نادرة جداً وتظهر قليل في البيانات، مما يصعب على النموذج تعلمها.</p>

                    {{-- Sparse Grid Visual --}}
                    <div class="bg-white rounded-xl p-4 border border-orange-100">
                        <p class="text-xs text-slate-400 mb-2 text-center">تمثيل بصري: معظم الخلايا فارغة (بيانات متناثرة)</p>
                        <div class="grid grid-cols-8 gap-1 max-w-xs mx-auto">
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-orange-400"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>

                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-orange-400"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>

                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-orange-400"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>

                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-orange-400"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>

                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                            <div class="w-full aspect-square rounded bg-orange-400"></div>
                            <div class="w-full aspect-square rounded bg-slate-100"></div>
                        </div>
                        <div class="flex justify-center gap-4 mt-3 text-[10px] text-slate-500">
                            <div class="flex items-center gap-1"><span class="w-3 h-3 rounded bg-orange-400"></span> بيانات موجودة</div>
                            <div class="flex items-center gap-1"><span class="w-3 h-3 rounded bg-slate-100 border border-slate-200"></span> فارغ (معظم البيانات)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 7: اختبر نفسك --}}
    <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden mb-6" style="border-top: 4px solid #6366f1;">
        <button onclick="toggleSection('sec7')" class="w-full flex items-center justify-between px-6 py-4 hover:bg-slate-50/50 transition-colors">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/></svg>
                </div>
                <div class="text-right">
                    <h2 class="font-bold text-slate-800">اختبر نفسك</h2>
                    <p class="text-xs text-slate-400">Self-Test Flashcards</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <button onclick="event.stopPropagation(); markDone('sec7', this)" class="text-xs px-3 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors done-btn" data-section="6">تم</button>
                <svg class="w-5 h-5 text-slate-400 chevron" id="chev-sec7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
            </div>
        </button>
        <div class="study-section" id="sec7" style="max-height: 3000px;">
            <div class="px-6 pb-6 space-y-4">
                <p class="text-sm text-slate-500 mb-2">اضغط على البطاقة لرؤية الإجابة:</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    {{-- Flashcard 1 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-indigo-500 to-violet-600 rounded-xl p-5 flex flex-col items-center justify-center text-center text-white">
                                <svg class="w-6 h-6 mb-2 opacity-50" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/></svg>
                                <p class="text-sm font-bold">ما هو التقطيع <span class="term-en" style="color: #c7d2fe;">(Tokenization)</span>؟</p>
                            </div>
                            <div class="flashcard-back bg-white border-2 border-indigo-200 rounded-xl p-5 flex items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">تقسيم النص إلى وحدات أصغر (<span class="term">tokens</span>) مثل كلمات وأرقام وعلامات ترقيم</p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 2 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl p-5 flex flex-col items-center justify-center text-center text-white">
                                <svg class="w-6 h-6 mb-2 opacity-50" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/></svg>
                                <p class="text-sm font-bold">ما الفرق بين <span dir="ltr">split()</span> و NLTK؟</p>
                            </div>
                            <div class="flashcard-back bg-white border-2 border-emerald-200 rounded-xl p-5 flex items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed"><span dir="ltr" class="font-mono">split()</span> بسيط يقسم على المسافة. NLTK أذكى يفصل علامات الترقيم كـ tokens منفصلة</p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 3 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl p-5 flex flex-col items-center justify-center text-center text-white">
                                <svg class="w-6 h-6 mb-2 opacity-50" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/></svg>
                                <p class="text-sm font-bold">ما هو POS Tagging؟</p>
                            </div>
                            <div class="flashcard-back bg-white border-2 border-blue-200 rounded-xl p-5 flex items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">تعيين نوع لكل كلمة (اسم، فعل، صفة...). مثال: <span dir="ltr" class="font-mono text-xs">the/Det lead/N is/V unsafe/Adj</span></p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 4 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-violet-500 to-purple-600 rounded-xl p-5 flex flex-col items-center justify-center text-center text-white">
                                <svg class="w-6 h-6 mb-2 opacity-50" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/></svg>
                                <p class="text-sm font-bold">ما هي مكونات نظام التحليل النحوي؟</p>
                            </div>
                            <div class="flashcard-back bg-white border-2 border-violet-200 rounded-xl p-5 flex items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">المحلل المعجمي <span class="term-en">(Lexical Analyzer)</span> يحول النص إلى tokens ثم المحلل النحوي <span class="term-en">(Parser)</span> يحلل تسلسلها، وكلاهما يتصل بجدول الرموز <span class="term-en">(Symbol Table)</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
// ===== Section Toggle =====
function toggleSection(id) {
    var section = document.getElementById(id);
    var chevron = document.getElementById('chev-' + id);
    if (!section || !chevron) return;

    if (section.classList.contains('collapsed')) {
        section.classList.remove('collapsed');
        section.style.maxHeight = section.scrollHeight + 'px';
        chevron.classList.remove('rotated');
    } else {
        section.classList.add('collapsed');
        chevron.classList.add('rotated');
    }
}

// ===== Interactive Tokenizer =====
var tokenMode = 'simple';

function setTokenMode(mode) {
    tokenMode = mode;
    var simpleBtn = document.getElementById('mode-simple');
    var smartBtn = document.getElementById('mode-smart');

    if (mode === 'simple') {
        simpleBtn.className = 'text-xs px-3 py-1 rounded-md font-medium transition-colors bg-emerald-600 text-white';
        smartBtn.className = 'text-xs px-3 py-1 rounded-md font-medium transition-colors text-slate-500 hover:text-slate-700';
    } else {
        smartBtn.className = 'text-xs px-3 py-1 rounded-md font-medium transition-colors bg-emerald-600 text-white';
        simpleBtn.className = 'text-xs px-3 py-1 rounded-md font-medium transition-colors text-slate-500 hover:text-slate-700';
    }
    tokenizeInput();
}

function tokenizeInput() {
    var input = document.getElementById('tokenizer-input').value;
    var output = document.getElementById('token-output');

    if (!input.trim()) {
        output.textContent = '';
        var placeholder = document.createElement('span');
        placeholder.className = 'text-xs text-slate-400';
        placeholder.textContent = 'النتيجة ستظهر هنا...';
        output.appendChild(placeholder);
        return;
    }

    var tokens;
    if (tokenMode === 'simple') {
        tokens = input.split(/\s+/).filter(function(t) { return t.length > 0; });
    } else {
        tokens = input.match(/(\w+|[^\w\s])/g) || [];
    }

    var colors = [
        'bg-emerald-100 text-emerald-800 border-emerald-300',
        'bg-blue-100 text-blue-800 border-blue-300',
        'bg-violet-100 text-violet-800 border-violet-300',
        'bg-amber-100 text-amber-800 border-amber-300',
        'bg-rose-100 text-rose-800 border-rose-300',
        'bg-cyan-100 text-cyan-800 border-cyan-300',
    ];

    // Clear existing content
    while (output.firstChild) {
        output.removeChild(output.firstChild);
    }

    for (var i = 0; i < tokens.length; i++) {
        var colorClass = colors[i % colors.length];
        var span = document.createElement('span');
        span.className = 'inline-flex items-center px-3 py-1 rounded-lg text-sm font-mono font-medium border ' + colorClass;
        span.textContent = tokens[i];
        output.appendChild(span);
    }
}

// ===== Progress Tracking =====
var STORAGE_KEY = 'study_progress';
var LECTURE_KEY = 'lec2';
var TOTAL_SECTIONS = 7;

function getProgress() {
    try {
        var data = JSON.parse(localStorage.getItem(STORAGE_KEY) || '{}');
        if (!data[LECTURE_KEY]) {
            data[LECTURE_KEY] = [0, 0, 0, 0, 0, 0, 0];
        }
        return data;
    } catch(e) {
        var fresh = {};
        fresh[LECTURE_KEY] = [0, 0, 0, 0, 0, 0, 0];
        return fresh;
    }
}

function saveProgress(data) {
    try {
        localStorage.setItem(STORAGE_KEY, JSON.stringify(data));
    } catch(e) {}
}

function updateProgressBar() {
    var data = getProgress();
    var sections = data[LECTURE_KEY] || [];
    var done = sections.filter(function(v) { return v === 1; }).length;
    var pct = Math.round((done / TOTAL_SECTIONS) * 100);

    var bar = document.getElementById('main-progress');
    var text = document.getElementById('progress-text');
    if (bar) bar.style.width = pct + '%';
    if (text) text.textContent = done + ' / ' + TOTAL_SECTIONS;
}

function markDone(sectionId, btn) {
    var index = parseInt(btn.getAttribute('data-section'));
    var data = getProgress();

    if (data[LECTURE_KEY][index] === 1) {
        data[LECTURE_KEY][index] = 0;
        btn.textContent = 'تم';
        btn.className = 'text-xs px-3 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors done-btn';
    } else {
        data[LECTURE_KEY][index] = 1;
        btn.textContent = 'مكتمل';
        btn.className = 'text-xs px-3 py-1 rounded-lg border border-emerald-300 bg-emerald-50 text-emerald-600 transition-colors done-btn';
    }

    saveProgress(data);
    updateProgressBar();
}

// ===== Init on Load =====
document.addEventListener('DOMContentLoaded', function() {
    var data = getProgress();
    var sections = data[LECTURE_KEY] || [];

    // Restore done buttons state
    var buttons = document.querySelectorAll('.done-btn');
    buttons.forEach(function(btn) {
        var index = parseInt(btn.getAttribute('data-section'));
        if (sections[index] === 1) {
            btn.textContent = 'مكتمل';
            btn.className = 'text-xs px-3 py-1 rounded-lg border border-emerald-300 bg-emerald-50 text-emerald-600 transition-colors done-btn';
        }
    });

    updateProgressBar();
});
</script>
@endsection
