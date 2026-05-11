@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'mobile') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-teal-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-teal-600 to-cyan-600 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة الخامسة: التكرار والـ Methods</h1>
                <p class="text-teal-200 text-sm">Loops · Break/Continue · Methods · Variable Scope</p>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 1: Control Statements --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-teal-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-teal-100 flex items-center justify-center text-teal-600">
                        <span class="text-xl">🎯</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">جمل التحكم: Selection vs Iteration</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec1', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec1" style="max-height: 2000px;">
                <div class="space-y-5">
                    <div class="bg-teal-50/70 rounded-xl p-5 border border-teal-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            ترتيب تنفيذ الأوامر داخل الـ method عادةً <span class="term">خطي</span> <span class="term-en">(Linear)</span> — جملة بعد جملة بالترتيب.
                            لكن <span class="term">جمل التحكم</span> <span class="term-en">(Control Statements)</span> تتيح لنا تغيير هذا المسار.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-violet-50 rounded-xl p-5 border border-violet-200">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-xl">🔀</span>
                                <h3 class="font-bold text-violet-700">جمل الاختيار</h3>
                            </div>
                            <p class="term-en mb-2">(Selection / Conditional)</p>
                            <p class="text-sm text-slate-600">تقرر هل ينفذ سطر معين أو لا.</p>
                            <p class="text-xs text-slate-500 mt-2">مثال: <code>if</code>, <code>if-else</code>, <code>switch</code></p>
                        </div>
                        <div class="bg-teal-50 rounded-xl p-5 border border-teal-200">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-xl">🔁</span>
                                <h3 class="font-bold text-teal-700">جمل التكرار</h3>
                            </div>
                            <p class="term-en mb-2">(Iteration / Repetition)</p>
                            <p class="text-sm text-slate-600">تنفذ نفس الكود مرات متعددة.</p>
                            <p class="text-xs text-slate-500 mt-2">مثال: <code>while</code>, <code>do-while</code>, <code>for</code></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 2: While Loop --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-cyan-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center text-cyan-600">
                        <span class="text-xl">🔄</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">حلقة while</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 3500px;">
                <div class="space-y-5">
                    <div class="bg-cyan-50/70 rounded-xl p-5 border border-cyan-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">while</span> تنفذ مجموعة من الأوامر <strong>طالما</strong> الشرط <span class="term-en">(condition)</span> صحيح.
                            بمجرد ما يصبح الشرط <code>false</code> — تخرج من الحلقة.
                        </p>
                    </div>

                    {{-- Syntax --}}
                    <div>
                        <h3 class="font-bold text-slate-700 mb-2 text-sm">الـ Syntax:</h3>
                        <pre class="bg-slate-900 text-slate-100 rounded-xl p-4 text-sm overflow-x-auto"><code dir="ltr">while (expression)
{
    statement(s)
}</code></pre>
                    </div>

                    {{-- Essentials --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-cyan-700 mb-3">العناصر الأساسية لأي حلقة:</h3>
                        <ul class="space-y-2 text-sm text-slate-700">
                            <li class="flex gap-2"><span class="text-cyan-500 font-bold">1.</span> <span><strong>Control Variable</strong> — متغير العدّاد <span class="term-en">(loop counter)</span></span></li>
                            <li class="flex gap-2"><span class="text-cyan-500 font-bold">2.</span> <span><strong>Initial Value</strong> — قيمة ابتدائية للعدّاد</span></li>
                            <li class="flex gap-2"><span class="text-cyan-500 font-bold">3.</span> <span><strong>Increment / Decrement</strong> — تحديث قيمة العدّاد</span></li>
                            <li class="flex gap-2"><span class="text-cyan-500 font-bold">4.</span> <span><strong>Continuation Condition</strong> — الشرط اللي يقرر استمرار التكرار</span></li>
                        </ul>
                    </div>

                    {{-- Example --}}
                    <div>
                        <h3 class="font-bold text-slate-700 mb-2 text-sm">مثال — اطبع "Welcome" مئة مرة:</h3>
                        <pre class="bg-slate-900 text-slate-100 rounded-xl p-4 text-sm overflow-x-auto"><code dir="ltr">int count = 0;             <span style="color:#94a3b8">// initialization</span>
while (count &lt; 100) {       <span style="color:#94a3b8">// condition</span>
    System.out.println("Welcome");
    count++;               <span style="color:#94a3b8">// increment</span>
}</code></pre>
                    </div>

                    <div class="bg-amber-50 border-l-4 border-amber-400 rounded-lg p-4">
                        <p class="text-sm text-amber-900">
                            <strong>⚠️ تحذير:</strong> لو نسيت تحديث العدّاد — تدخل في <span class="term">Infinite Loop</span> ولن يخرج البرنامج أبداً.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 3: Sentinel Value --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-sky-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-sky-100 flex items-center justify-center text-sky-600">
                        <span class="text-xl">🚩</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">قيم Sentinel / Flag</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec3', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec3" style="max-height: 3000px;">
                <div class="space-y-5">
                    <div class="bg-sky-50/70 rounded-xl p-5 border border-sky-100">
                        <p class="text-slate-700 leading-relaxed">
                            ممكن نخلّي المستخدم يقرر متى تنتهي الحلقة عن طريق إدخال <span class="term">قيمة محددة</span> — تسمى
                            <span class="term-en">Sentinel Value</span> أو <span class="term-en">Flag Value</span>.
                            مثلاً: <code>0</code> يعني "خلاص بسّ".
                        </p>
                    </div>

                    <div>
                        <h3 class="font-bold text-slate-700 mb-2 text-sm">مثال — اجمع أرقام لحد ما المستخدم يدخل 0:</h3>
                        <pre class="bg-slate-900 text-slate-100 rounded-xl p-4 text-sm overflow-x-auto"><code dir="ltr">Scanner input = new Scanner(System.in);
int number, sum = 0;

System.out.println("Please, enter the value of the first number: ");
number = input.nextInt();

while (number != 0) {
    sum += number;
    System.out.println("Please, enter the value of the next number: ");
    number = input.nextInt();
}

System.out.println("The sum of numbers: " + sum);</code></pre>
                    </div>

                    <div class="bg-rose-50 border-l-4 border-rose-400 rounded-lg p-4">
                        <p class="text-sm text-rose-900 leading-relaxed">
                            <strong>⚠️ Caution — لا تستخدم floating-point في شرط الحلقة:</strong>
                            القيم العشرية في الكمبيوتر <span class="term">تقريبية</span> <span class="term-en">(approximations)</span>،
                            فمقارنة <code>x == 0.1</code> ممكن تكون <code>false</code> حتى لو شكلها <code>0.1</code>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 4: Break & Continue --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-rose-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-rose-100 flex items-center justify-center text-rose-600">
                        <span class="text-xl">⛔</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">break و continue</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec4', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec4" style="max-height: 3000px;">
                <div class="space-y-5">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-rose-50 rounded-xl p-5 border border-rose-200">
                            <div class="flex items-center gap-2 mb-2"><span class="text-xl">🛑</span><h3 class="font-bold text-rose-700">break</h3></div>
                            <p class="text-sm text-slate-700 mb-3">يوقف الحلقة <strong>تماماً</strong> ويخرج للسطر اللي بعدها مباشرة.</p>
                            <pre class="bg-slate-900 text-slate-100 rounded-lg p-3 text-xs overflow-x-auto"><code dir="ltr">while (true) {
    if (x &gt; 100) {
        break;   <span style="color:#94a3b8">// ينهي الحلقة</span>
    }
    x++;
}</code></pre>
                        </div>
                        <div class="bg-amber-50 rounded-xl p-5 border border-amber-200">
                            <div class="flex items-center gap-2 mb-2"><span class="text-xl">↪️</span><h3 class="font-bold text-amber-700">continue</h3></div>
                            <p class="text-sm text-slate-700 mb-3">يتخطى <strong>باقي الكود في الإيتيريشن الحالية</strong> ويرجع لأول الحلقة.</p>
                            <pre class="bg-slate-900 text-slate-100 rounded-lg p-3 text-xs overflow-x-auto"><code dir="ltr">for (int i = 1; i &lt;= 10; i++) {
    if (i % 2 == 0) {
        continue;  <span style="color:#94a3b8">// تخطّى الزوجي</span>
    }
    System.out.println(i);
}</code></pre>
                        </div>
                    </div>

                    <div class="bg-slate-50 rounded-xl p-4 border border-slate-200">
                        <p class="text-sm text-slate-700 leading-relaxed">
                            <strong>الفرق باختصار:</strong>
                            <code>break</code> = اخرج من الحلقة، <code>continue</code> = اتخطى لتكرار جديد.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 5: do-while --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-indigo-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-600">
                        <span class="text-xl">🔂</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">حلقة do-while</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec5', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec5" style="max-height: 3000px;">
                <div class="space-y-5">

                    <div class="bg-indigo-50/70 rounded-xl p-5 border border-indigo-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">do-while</span> تختلف عن <code>while</code> في حاجة واحدة لكن مهمة:
                            تقيّم الشرط في <strong>آخر الحلقة</strong> — يعني الكود ينفذ <span class="term">مرة على الأقل</span> ولو الشرط <code>false</code>.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <h3 class="font-bold text-slate-700 mb-2 text-sm">while (شرط أولاً):</h3>
                            <pre class="bg-slate-900 text-slate-100 rounded-xl p-4 text-xs overflow-x-auto"><code dir="ltr">while (condition) {
    Statement(s);
}</code></pre>
                            <p class="text-xs text-slate-500 mt-2">قد لا يتنفذ أبداً.</p>
                        </div>
                        <div>
                            <h3 class="font-bold text-slate-700 mb-2 text-sm">do-while (شرط آخراً):</h3>
                            <pre class="bg-slate-900 text-slate-100 rounded-xl p-4 text-xs overflow-x-auto"><code dir="ltr">do {
    Statement(s);
} while (condition);</code></pre>
                            <p class="text-xs text-slate-500 mt-2">يتنفذ مرة على الأقل.</p>
                        </div>
                    </div>

                    <div>
                        <h3 class="font-bold text-slate-700 mb-2 text-sm">مثال عملي — اطلب رقم موجب لحد ما المستخدم يلتزم:</h3>
                        <pre class="bg-slate-900 text-slate-100 rounded-xl p-4 text-sm overflow-x-auto"><code dir="ltr">Scanner in = new Scanner(System.in);
int n;
do {
    System.out.println("Enter a positive number: ");
    n = in.nextInt();
} while (n &lt; 0);</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 6: for Loop --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-blue-500">
            <button onclick="toggleSection('sec6')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600">
                        <span class="text-xl">➰</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">حلقة for</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec6', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec6" style="max-height: 4000px;">
                <div class="space-y-5">

                    <div class="bg-blue-50/70 rounded-xl p-5 border border-blue-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">for</span> هي الطريقة المختصرة لكتابة حلقة فيها <strong>عدّاد</strong>.
                            كل عناصر الحلقة (تهيئة + شرط + تحديث) في <strong>سطر واحد</strong>.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-bold text-slate-700 mb-2 text-sm">الـ Syntax:</h3>
                        <pre class="bg-slate-900 text-slate-100 rounded-xl p-4 text-sm overflow-x-auto"><code dir="ltr">for (initialization; termination; increment/decrement) {
    statement(s)
}</code></pre>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                        <div class="bg-blue-50 rounded-lg p-3 border border-blue-200">
                            <p class="font-bold text-blue-700 text-sm mb-1">Initialization</p>
                            <p class="text-xs text-slate-600">ينفذ <strong>مرة واحدة</strong> في بداية الحلقة.</p>
                        </div>
                        <div class="bg-blue-50 rounded-lg p-3 border border-blue-200">
                            <p class="font-bold text-blue-700 text-sm mb-1">Termination</p>
                            <p class="text-xs text-slate-600">لما يصبح <code>false</code> — تنتهي الحلقة.</p>
                        </div>
                        <div class="bg-blue-50 rounded-lg p-3 border border-blue-200">
                            <p class="font-bold text-blue-700 text-sm mb-1">Increment</p>
                            <p class="text-xs text-slate-600">ينفذ <strong>بعد كل تكرار</strong>.</p>
                        </div>
                    </div>

                    <div>
                        <h3 class="font-bold text-slate-700 mb-2 text-sm">صور مختلفة — كلها مكافئة:</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div>
                                <p class="text-xs text-slate-500 mb-1">الصورة العادية</p>
                                <pre class="bg-slate-900 text-slate-100 rounded-lg p-3 text-xs overflow-x-auto"><code dir="ltr">for (int i = 0; i &lt; 10; i++) {
    System.out.println(i + 1);
}</code></pre>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 mb-1">بدون initialization</p>
                                <pre class="bg-slate-900 text-slate-100 rounded-lg p-3 text-xs overflow-x-auto"><code dir="ltr">int i = 0;
for (; i &lt; 10; i++) {
    System.out.println(i + 1);
}</code></pre>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 mb-1">بدون increment (داخل الجسم)</p>
                                <pre class="bg-slate-900 text-slate-100 rounded-lg p-3 text-xs overflow-x-auto"><code dir="ltr">int i = 0;
for (; i &lt; 10; ) {
    System.out.println(i + 1);
    i++;
}</code></pre>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 mb-1">بدون كل شيء + break</p>
                                <pre class="bg-slate-900 text-slate-100 rounded-lg p-3 text-xs overflow-x-auto"><code dir="ltr">int i = 0;
for (;;) {
    if (i &gt;= 10) { break; }
    System.out.println(i + 1);
    i++;
}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 7: Nested Loops --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-fuchsia-500">
            <button onclick="toggleSection('sec7')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-fuchsia-100 flex items-center justify-center text-fuchsia-600">
                        <span class="text-xl">🌀</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">الحلقات المتداخلة (Nested)</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec7', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec7" style="max-height: 3000px;">
                <div class="space-y-5">

                    <div class="bg-fuchsia-50/70 rounded-xl p-5 border border-fuchsia-100">
                        <p class="text-slate-700 leading-relaxed">
                            الحلقات المتداخلة = حلقة <span class="term">داخل حلقة</span>:
                            <strong>outer loop</strong> + <strong>inner loop</strong>.
                            في كل تكرار للحلقة الخارجية — تتنفذ الحلقة الداخلية <strong>كاملة</strong> من جديد.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-bold text-slate-700 mb-2 text-sm">مثال — جدول الضرب 5×5:</h3>
                        <pre class="bg-slate-900 text-slate-100 rounded-xl p-4 text-sm overflow-x-auto"><code dir="ltr">for (int i = 1; i &lt;= 5; i++) {        <span style="color:#94a3b8">// outer</span>
    for (int j = 1; j &lt;= 5; j++) {    <span style="color:#94a3b8">// inner</span>
        System.out.print(i * j + "\t");
    }
    System.out.println();             <span style="color:#94a3b8">// new row</span>
}</code></pre>
                    </div>

                    <div class="bg-slate-50 border border-slate-200 rounded-xl p-4">
                        <p class="text-sm text-slate-700">
                            💡 <strong>تمشية ذهنية:</strong> لما <code>i = 1</code>، الـ inner ينفذ <code>j = 1, 2, 3, 4, 5</code>،
                            بعدين يطبع سطر جديد، ثم <code>i</code> تصبح <code>2</code> ويعيد الـ inner من جديد.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 8: Methods --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-emerald-500">
            <button onclick="toggleSection('sec8')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                        <span class="text-xl">🧩</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">الـ Methods (الدوال)</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec8', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec8" style="max-height: 4500px;">
                <div class="space-y-5">

                    <div class="bg-emerald-50/70 rounded-xl p-5 border border-emerald-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Method</span> = مجموعة من الجمل مجمّعة سوا لتنفيذ <strong>عملية واحدة</strong>.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                        <div class="bg-emerald-50 rounded-lg p-3 border border-emerald-200">
                            <p class="font-bold text-emerald-700 text-sm mb-1">♻️ إعادة الاستخدام</p>
                            <p class="text-xs text-slate-600">اكتبه مرة واحدة، استخدمه في أي مكان.</p>
                        </div>
                        <div class="bg-emerald-50 rounded-lg p-3 border border-emerald-200">
                            <p class="font-bold text-emerald-700 text-sm mb-1">🔒 إخفاء التعقيد</p>
                            <p class="text-xs text-slate-600">المستخدم يعرف "ماذا يفعل" بدون "كيف".</p>
                        </div>
                        <div class="bg-emerald-50 rounded-lg p-3 border border-emerald-200">
                            <p class="font-bold text-emerald-700 text-sm mb-1">📉 تقليل الفوضى</p>
                            <p class="text-xs text-slate-600">يقسّم البرنامج لقطع صغيرة قابلة للقراءة.</p>
                        </div>
                    </div>

                    {{-- Anatomy of a method --}}
                    <div>
                        <h3 class="font-bold text-slate-700 mb-2 text-sm">تشريح الـ method:</h3>
                        <pre class="bg-slate-900 text-slate-100 rounded-xl p-4 text-sm overflow-x-auto"><code dir="ltr">public int max(int num1, int num2)   <span style="color:#94a3b8">// ← method header</span>
{
    int result;                       <span style="color:#94a3b8">// ← method body</span>
    if (num1 &gt; num2)
        result = num1;
    else
        result = num2;
    return result;                    <span style="color:#94a3b8">// ← return value</span>
}

<span style="color:#94a3b8">// استدعاء الـ method (Invoke):</span>
int z = max(x, y);                    <span style="color:#94a3b8">// x, y = actual parameters</span></code></pre>
                    </div>

                    {{-- Method components --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-emerald-700 mb-3">مكونات الـ Method Header:</h3>
                        <div class="space-y-3 text-sm">
                            <div class="flex gap-3">
                                <span class="bg-emerald-100 text-emerald-700 font-bold px-2 py-0.5 rounded text-xs whitespace-nowrap">Access Modifier</span>
                                <div>
                                    <code class="text-emerald-700">public</code> ← مرئي للجميع.
                                    <code class="text-emerald-700">private</code> ← داخل الكلاس فقط.
                                    <code class="text-emerald-700">protected</code> ← داخل الـ package والـ subclasses.
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <span class="bg-cyan-100 text-cyan-700 font-bold px-2 py-0.5 rounded text-xs whitespace-nowrap">Return Type</span>
                                <div>نوع البيانات اللي يرجعه الـ method. لو لا يرجع شيء → <code>void</code>.</div>
                            </div>
                            <div class="flex gap-3">
                                <span class="bg-blue-100 text-blue-700 font-bold px-2 py-0.5 rounded text-xs whitespace-nowrap">Method Name</span>
                                <div>اسم الـ method (lowerCamelCase عادةً).</div>
                            </div>
                            <div class="flex gap-3">
                                <span class="bg-violet-100 text-violet-700 font-bold px-2 py-0.5 rounded text-xs whitespace-nowrap">Parameters</span>
                                <div>متغيرات معرّفة في الـ header، تتمرّر <strong>بالقيمة</strong> <span class="term-en">(by value)</span>.</div>
                            </div>
                            <div class="flex gap-3">
                                <span class="bg-fuchsia-100 text-fuchsia-700 font-bold px-2 py-0.5 rounded text-xs whitespace-nowrap">Method Body</span>
                                <div>الكود اللي يحدد ماذا يفعل الـ method.</div>
                            </div>
                        </div>
                    </div>

                    {{-- Calling --}}
                    <div>
                        <h3 class="font-bold text-slate-700 mb-2 text-sm">استدعاء الـ Method:</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            <div>
                                <p class="text-xs text-slate-500 mb-1">إذا يرجع قيمة</p>
                                <pre class="bg-slate-900 text-slate-100 rounded-lg p-3 text-xs overflow-x-auto"><code dir="ltr">int larger = max(3, 4);</code></pre>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 mb-1">إذا void</p>
                                <pre class="bg-slate-900 text-slate-100 rounded-lg p-3 text-xs overflow-x-auto"><code dir="ltr">System.out.println("Welcome");</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 9: Variable Scope --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-amber-500">
            <button onclick="toggleSection('sec9')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600">
                        <span class="text-xl">🔭</span>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">نطاق المتغيرات (Variable Scope)</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec9', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec9" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec9" style="max-height: 3500px;">
                <div class="space-y-5">

                    <div class="bg-amber-50/70 rounded-xl p-5 border border-amber-100">
                        <p class="text-slate-700 leading-relaxed">
                            في Java، المتغيرات <strong>متاحة فقط داخل المنطقة اللي تم إنشاؤها فيها</strong>.
                            هذه المنطقة تُسمى <span class="term">Scope</span>.
                        </p>
                    </div>

                    <div class="space-y-3">
                        {{-- Method Scope --}}
                        <div class="bg-white rounded-xl border border-slate-200 p-5">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="bg-amber-100 text-amber-700 font-bold px-2 py-1 rounded text-xs">Method Scope</span>
                                <h3 class="font-bold text-slate-800">داخل الـ Method</h3>
                            </div>
                            <p class="text-sm text-slate-600 mb-2">المتغير المعرّف داخل method متاح فقط <strong>بعد سطر التعريف</strong> داخل نفس الـ method.</p>
                            <pre class="bg-slate-900 text-slate-100 rounded-lg p-3 text-xs overflow-x-auto"><code dir="ltr">void foo() {
    int x = 5;       <span style="color:#94a3b8">// متاح في باقي الـ method</span>
    System.out.println(x);
}
<span style="color:#94a3b8">// خارج foo: x غير معروف</span></code></pre>
                        </div>

                        {{-- Block Scope --}}
                        <div class="bg-white rounded-xl border border-slate-200 p-5">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="bg-orange-100 text-orange-700 font-bold px-2 py-1 rounded text-xs">Block Scope</span>
                                <h3 class="font-bold text-slate-800">داخل البلوك { }</h3>
                            </div>
                            <p class="text-sm text-slate-600 mb-2">أي متغير معرّف بين <code>{ }</code> متاح فقط داخل هذه الأقواس.</p>
                            <pre class="bg-slate-900 text-slate-100 rounded-lg p-3 text-xs overflow-x-auto"><code dir="ltr">if (true) {
    int y = 10;      <span style="color:#94a3b8">// موجود فقط داخل الـ if</span>
}
<span style="color:#94a3b8">// y غير معرّف هنا</span></code></pre>
                        </div>

                        {{-- Global Scope --}}
                        <div class="bg-white rounded-xl border border-slate-200 p-5">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="bg-rose-100 text-rose-700 font-bold px-2 py-1 rounded text-xs">Global Scope</span>
                                <h3 class="font-bold text-slate-800">خارج كل الـ methods</h3>
                            </div>
                            <p class="text-sm text-slate-600 mb-2">المتغير المعرّف داخل الكلاس وخارج أي method متاح <strong>لكل الـ methods</strong>.</p>
                            <pre class="bg-slate-900 text-slate-100 rounded-lg p-3 text-xs overflow-x-auto"><code dir="ltr">class App {
    int counter = 0;     <span style="color:#94a3b8">// global (class field)</span>

    void inc() { counter++; }
    void show() { System.out.println(counter); }
}</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Recap --}}
    <div class="card rounded-2xl border-2 border-teal-200 bg-gradient-to-br from-teal-50 to-cyan-50 p-6 mb-8">
        <h3 class="font-bold text-teal-800 mb-4 flex items-center gap-2"><span class="text-xl">⚡</span> خلاصة سريعة للمراجعة</h3>
        <ul class="space-y-2 text-sm text-slate-700">
            <li>✓ <strong>3 أنواع تكرار:</strong> <code>while</code> (شرط أولاً) · <code>do-while</code> (شرط آخراً، يتنفذ مرة على الأقل) · <code>for</code> (مختصر بعدّاد)</li>
            <li>✓ <strong>أي حلقة تحتاج 4 عناصر:</strong> control variable · initial value · increment/decrement · continuation condition</li>
            <li>✓ <strong>Sentinel value</strong> = قيمة (مثل <code>0</code>) تنهي الإدخال</li>
            <li>✓ <code>break</code> = اخرج من الحلقة، <code>continue</code> = اتخطى لتكرار جديد</li>
            <li>✓ ❌ لا تقارن <strong>floating-point</strong> بـ <code>==</code> في شرط حلقة</li>
            <li>✓ <strong>Method:</strong> header (modifier + return type + name + params) + body</li>
            <li>✓ <strong>Access modifiers:</strong> public · private · protected · void (لا يرجع شيء)</li>
            <li>✓ <strong>Scope:</strong> method (داخل method) · block (داخل { }) · global (داخل class خارج method)</li>
        </ul>
    </div>
</div>

<script>
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
        try { return JSON.parse(localStorage.getItem('study_progress') || '{}'); }
        catch { return {}; }
    }

    function saveProgress(progress) {
        localStorage.setItem('study_progress', JSON.stringify(progress));
    }

    function markDone(sectionId, btn) {
        const progress = getProgress();
        if (!progress.mobile_lec5) progress.mobile_lec5 = [];

        const idx = progress.mobile_lec5.indexOf(sectionId);
        if (idx === -1) {
            progress.mobile_lec5.push(sectionId);
            btn.classList.remove('text-slate-400', 'border-slate-200');
            btn.classList.add('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
            btn.textContent = 'تم ✓';
        } else {
            progress.mobile_lec5.splice(idx, 1);
            btn.classList.add('text-slate-400', 'border-slate-200');
            btn.classList.remove('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
            btn.textContent = 'تم';
        }
        saveProgress(progress);
    }

    document.addEventListener('DOMContentLoaded', function() {
        const progress = getProgress();
        if (progress.mobile_lec5 && progress.mobile_lec5.length > 0) {
            progress.mobile_lec5.forEach(function(sectionId) {
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
    });
</script>
@endsection
