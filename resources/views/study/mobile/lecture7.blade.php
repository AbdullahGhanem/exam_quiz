@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'mobile') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-amber-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-amber-600 to-orange-600 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة السابعة: Android Layouts</h1>
                <p class="text-amber-200 text-sm">ConstraintLayout · LinearLayout · TableLayout · Views</p>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 1: Layouts overview --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-amber-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600"><span class="text-xl">📐</span></div>
                    <h2 class="text-lg font-bold text-slate-800">ما هي الـ Layouts؟</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec1', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec1" style="max-height: 2500px;">
                <div class="space-y-5">
                    <div class="bg-amber-50/70 rounded-xl p-5 border border-amber-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">Layout</span> هي الـ <strong>container</strong> اللي يحدد ترتيب وموقع الـ
                            <span class="term-en">Views</span> (الأزرار، النصوص، الصور...) داخل الشاشة. ملفات الـ Layout تنحفظ في
                            <code class="bg-white px-2 py-0.5 rounded font-mono text-xs">res/layout/*.xml</code>.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-emerald-50 rounded-xl p-5 border border-emerald-200">
                            <h3 class="font-bold text-emerald-700 mb-2">📦 ConstraintLayout</h3>
                            <p class="text-xs text-slate-600">الافتراضي. يسمح بترتيب العناصر بناءً على <strong>قيود (constraints)</strong> بين بعضها أو بين العنصر والـ parent.</p>
                        </div>
                        <div class="bg-blue-50 rounded-xl p-5 border border-blue-200">
                            <h3 class="font-bold text-blue-700 mb-2">↕️ LinearLayout</h3>
                            <p class="text-xs text-slate-600">يرتب العناصر في <strong>سطر واحد</strong> (vertical أو horizontal).</p>
                        </div>
                        <div class="bg-purple-50 rounded-xl p-5 border border-purple-200">
                            <h3 class="font-bold text-purple-700 mb-2">🖼️ FrameLayout</h3>
                            <p class="text-xs text-slate-600">يضع كل العناصر فوق بعض (stacked) — مفيد لإطار صورة واحدة.</p>
                        </div>
                        <div class="bg-rose-50 rounded-xl p-5 border border-rose-200">
                            <h3 class="font-bold text-rose-700 mb-2">📊 TableLayout</h3>
                            <p class="text-xs text-slate-600">يرتب العناصر في <strong>صفوف وأعمدة</strong> (rows & columns).</p>
                        </div>
                    </div>

                    <div class="bg-slate-50 rounded-xl p-4 border border-slate-200">
                        <h3 class="font-bold text-slate-700 text-sm mb-2">خصائص أساسية لكل View / Layout:</h3>
                        <ul class="text-xs text-slate-600 space-y-1.5">
                            <li>• <code class="bg-white px-1.5 rounded font-mono">layout_width</code> — العرض</li>
                            <li>• <code class="bg-white px-1.5 rounded font-mono">layout_height</code> — الارتفاع</li>
                            <li>• القيم الشائعة: <strong>match_parent</strong> (يملأ الأب)، <strong>wrap_content</strong> (بحجم المحتوى)، أو قيمة بـ <strong>dp</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 2: LinearLayout --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-blue-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600"><span class="text-xl">↕️</span></div>
                    <h2 class="text-lg font-bold text-slate-800">LinearLayout</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 3500px;">
                <div class="space-y-5">
                    <div class="bg-blue-50/70 rounded-xl p-5 border border-blue-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">LinearLayout</span> يرتب أبناءه في <strong>اتجاه واحد</strong> فقط:
                            <code class="bg-white px-2 py-0.5 rounded font-mono text-xs">android:orientation="vertical"</code> أو <code class="bg-white px-2 py-0.5 rounded font-mono text-xs">"horizontal"</code>.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white rounded-xl border border-slate-200 p-5">
                            <h3 class="font-bold text-blue-700 mb-2 text-center">vertical</h3>
                            <div class="space-y-1.5">
                                <div class="bg-blue-200 h-6 rounded text-center text-xs flex items-center justify-center text-blue-700">Button 1</div>
                                <div class="bg-blue-200 h-6 rounded text-center text-xs flex items-center justify-center text-blue-700">Button 2</div>
                                <div class="bg-blue-200 h-6 rounded text-center text-xs flex items-center justify-center text-blue-700">Button 3</div>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl border border-slate-200 p-5">
                            <h3 class="font-bold text-blue-700 mb-2 text-center">horizontal</h3>
                            <div class="flex gap-1.5">
                                <div class="bg-blue-200 flex-1 h-6 rounded text-center text-xs flex items-center justify-center text-blue-700">B1</div>
                                <div class="bg-blue-200 flex-1 h-6 rounded text-center text-xs flex items-center justify-center text-blue-700">B2</div>
                                <div class="bg-blue-200 flex-1 h-6 rounded text-center text-xs flex items-center justify-center text-blue-700">B3</div>
                            </div>
                        </div>
                    </div>

                    {{-- layout_weight --}}
                    <div class="bg-indigo-50 rounded-xl p-5 border border-indigo-200">
                        <h3 class="font-bold text-indigo-700 mb-2">⚖️ layout_weight</h3>
                        <p class="text-sm text-slate-700 mb-3">
                            خاصية مهمة جداً في LinearLayout — تحدد <strong>نسبة المساحة</strong> اللي ياخذها كل عنصر من الفراغ المتبقي.
                        </p>
                        <div class="bg-white rounded-lg p-3 text-xs font-mono text-slate-700 mb-3 overflow-x-auto" dir="ltr">
                            <pre>&lt;Button android:layout_width="0dp" android:layout_weight="1" /&gt;
&lt;Button android:layout_width="0dp" android:layout_weight="2" /&gt;</pre>
                        </div>
                        <p class="text-xs text-slate-600">الزر الثاني ياخذ <strong>ضعف</strong> مساحة الزر الأول. لاحظ <code class="bg-amber-100 px-1 rounded">layout_width="0dp"</code> لمّا نستخدم weight أفقياً.</p>
                    </div>

                    {{-- Code Example --}}
                    <div class="bg-slate-900 rounded-xl p-5 overflow-x-auto" dir="ltr">
                        <pre class="text-xs text-slate-300 font-mono leading-relaxed">&lt;LinearLayout
    xmlns:android="http://schemas.android.com/apk/res/android"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    android:orientation="vertical"&gt;

    &lt;Button
        android:id="@@+id/btn1"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="Button 1" /&gt;

    &lt;Button
        android:id="@@+id/btn2"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="Button 2" /&gt;

&lt;/LinearLayout&gt;</pre>
                    </div>

                    <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4">
                        <p class="text-sm text-emerald-800">
                            💡 <strong>Nested LinearLayouts:</strong> ممكن تحط LinearLayout عمودي يحتوي على LinearLayouts أفقية لبناء grids مثل لوحة الأرقام في الحاسبة.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 3: TableLayout --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-rose-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-rose-100 flex items-center justify-center text-rose-600"><span class="text-xl">📊</span></div>
                    <h2 class="text-lg font-bold text-slate-800">TableLayout</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec3', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec3" style="max-height: 3500px;">
                <div class="space-y-5">
                    <div class="bg-rose-50/70 rounded-xl p-5 border border-rose-100">
                        <p class="text-slate-700 leading-relaxed">
                            <span class="term">TableLayout</span> يرتب الأبناء في <strong>صفوف</strong> (<span class="term-en">TableRow</span>) وأعمدة. كل TableRow عبارة عن صف، وكل عنصر داخل الصف يمثّل خلية.
                        </p>
                    </div>

                    <div class="bg-slate-900 rounded-xl p-5 overflow-x-auto" dir="ltr">
                        <pre class="text-xs text-slate-300 font-mono leading-relaxed">&lt;TableLayout
    android:layout_width="match_parent"
    android:layout_height="wrap_content"&gt;

    &lt;TableRow&gt;
        &lt;Button android:text="1" /&gt;
        &lt;Button android:text="2" /&gt;
        &lt;Button android:text="3" /&gt;
    &lt;/TableRow&gt;

    &lt;TableRow&gt;
        &lt;Button android:text="4" /&gt;
        &lt;Button android:text="5" /&gt;
        &lt;Button android:text="6" /&gt;
    &lt;/TableRow&gt;

&lt;/TableLayout&gt;</pre>
                    </div>

                    {{-- TableLayout Properties --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5 overflow-x-auto">
                        <h3 class="font-bold text-rose-700 mb-3 text-sm">خصائص TableLayout المهمة:</h3>
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="border-b-2 border-rose-200">
                                    <th class="text-start py-2 px-3 text-rose-700 font-bold">الخاصية</th>
                                    <th class="text-start py-2 px-3 text-rose-700 font-bold">الوظيفة</th>
                                </tr>
                            </thead>
                            <tbody class="text-slate-600">
                                <tr class="border-b border-slate-100">
                                    <td class="py-2 px-3 font-mono text-xs">collapseColumns</td>
                                    <td class="py-2 px-3">يخفي عمود معين (يتسبب بانهياره)</td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2 px-3 font-mono text-xs">stretchColumns</td>
                                    <td class="py-2 px-3">يمدّ العمود ليملأ الفراغ المتاح</td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2 px-3 font-mono text-xs">shrinkColumns</td>
                                    <td class="py-2 px-3">يقلّص العمود إذا الصف ضيّق</td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2 px-3 font-mono text-xs">layout_column</td>
                                    <td class="py-2 px-3">يحدد رقم العمود اللي يبدأ منه العنصر</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-3 font-mono text-xs">layout_span</td>
                                    <td class="py-2 px-3">عدد الأعمدة اللي يمتد عليها العنصر (مثل colspan)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 4: Views & ImageView --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-emerald-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600"><span class="text-xl">🧱</span></div>
                    <h2 class="text-lg font-bold text-slate-800">Views الشائعة (Button, ImageView, TextView)</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec4', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec4" style="max-height: 3000px;">
                <div class="space-y-5">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-emerald-50 rounded-xl p-4 border border-emerald-200">
                            <h3 class="font-bold text-emerald-700 mb-1">Button</h3>
                            <p class="text-xs text-slate-600">زر قابل للضغط. خصائص رئيسية: <code>id</code>, <code>text</code>, <code>onClick</code>.</p>
                        </div>
                        <div class="bg-blue-50 rounded-xl p-4 border border-blue-200">
                            <h3 class="font-bold text-blue-700 mb-1">TextView</h3>
                            <p class="text-xs text-slate-600">يعرض نصاً فقط (غير قابل للتعديل من المستخدم).</p>
                        </div>
                        <div class="bg-purple-50 rounded-xl p-4 border border-purple-200">
                            <h3 class="font-bold text-purple-700 mb-1">EditText</h3>
                            <p class="text-xs text-slate-600">حقل إدخال نصي للمستخدم (مثل username/password).</p>
                        </div>
                    </div>

                    <div class="bg-amber-50 rounded-xl p-5 border border-amber-200">
                        <h3 class="font-bold text-amber-700 mb-2">🖼️ ImageView</h3>
                        <p class="text-sm text-slate-700 mb-3">يعرض صورة من <code class="bg-white px-1.5 rounded font-mono">res/drawable/</code>.</p>
                        <div class="bg-slate-900 rounded-lg p-4 overflow-x-auto" dir="ltr">
                            <pre class="text-xs text-slate-300 font-mono">&lt;ImageView
    android:id="@@+id/imageView"
    android:layout_width="match_parent"
    android:layout_height="wrap_content"
    app:srcCompat="@@drawable/logo"
    android:contentDescription="@@string/logo" /&gt;</pre>
                        </div>
                        <p class="text-xs text-slate-600 mt-2">
                            <strong>app:srcCompat</strong> — مصدر الصورة (يستخدم AppCompat للتوافق).<br>
                            <strong>contentDescription</strong> — وصف للـ accessibility.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 5: Activity & AndroidManifest --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-cyan-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center text-cyan-600"><span class="text-xl">📋</span></div>
                    <h2 class="text-lg font-bold text-slate-800">إنشاء Activity جديدة + AndroidManifest</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec5', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec5" style="max-height: 3500px;">
                <div class="space-y-5">
                    {{-- New Activity Wizard --}}
                    <div class="bg-cyan-50/70 rounded-xl p-5 border border-cyan-100">
                        <h3 class="font-bold text-cyan-700 mb-3">إنشاء Activity جديدة (Empty Activity):</h3>
                        <ol class="space-y-2 text-sm text-slate-700 list-decimal pr-5">
                            <li><strong>Right click</strong> على package → <em>New → Activity → Empty Activity</em></li>
                            <li>عبّي <strong>Activity Name</strong> (اسم class الـ Java)</li>
                            <li>عبّي <strong>Layout Name</strong> (ملف XML للـ UI)</li>
                            <li>اختر <strong>Source Language: Java</strong></li>
                            <li>اضغط <strong>Finish</strong></li>
                        </ol>
                        <div class="bg-amber-50 border border-amber-200 rounded-lg p-3 mt-3 text-xs text-amber-800">
                            ⚠️ Android Studio يضيف الـ Activity تلقائياً للـ <code class="bg-amber-100 px-1 rounded">AndroidManifest.xml</code>.
                        </div>
                    </div>

                    {{-- AndroidManifest --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-slate-800 mb-3">AndroidManifest.xml — تسجيل الـ Activities</h3>
                        <div class="bg-slate-900 rounded-lg p-4 overflow-x-auto mb-3" dir="ltr">
                            <pre class="text-xs text-slate-300 font-mono">&lt;activity
    android:name=".MainActivity"
    android:exported="true"&gt;
    &lt;intent-filter&gt;
        &lt;action android:name="android.intent.action.MAIN" /&gt;
        &lt;category android:name="android.intent.category.LAUNCHER" /&gt;
    &lt;/intent-filter&gt;
&lt;/activity&gt;

&lt;activity
    android:name=".SecondActivity"
    android:exported="true" /&gt;</pre>
                        </div>
                        <ul class="text-xs text-slate-600 space-y-1.5">
                            <li>• <strong>android:name</strong> — اسم class الـ Activity</li>
                            <li>• <strong>android:exported="true"</strong> — يسمح لتطبيقات أخرى بفتح هذه الـ Activity (مطلوب للـ launcher)</li>
                            <li>• <strong>intent-filter</strong> + <strong>action.MAIN</strong> + <strong>category.LAUNCHER</strong> = الـ Activity هي نقطة الدخول للتطبيق (تظهر في قائمة التطبيقات)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Quick Recap --}}
    <div class="card rounded-2xl border-2 border-amber-200 bg-gradient-to-br from-amber-50 to-orange-50 p-6 mb-8">
        <h3 class="font-bold text-amber-800 mb-4 flex items-center gap-2"><span class="text-xl">⚡</span> خلاصة سريعة</h3>
        <ul class="space-y-2 text-sm text-slate-700">
            <li>✓ أنواع Layouts: <strong>ConstraintLayout, LinearLayout, FrameLayout, TableLayout</strong></li>
            <li>✓ <strong>LinearLayout</strong> له اتجاه واحد (vertical/horizontal) + خاصية <strong>layout_weight</strong></li>
            <li>✓ <strong>TableLayout</strong> = صفوف <strong>TableRow</strong> + خصائص stretchColumns/collapseColumns/layout_span</li>
            <li>✓ <strong>match_parent</strong> = يملأ الأب · <strong>wrap_content</strong> = بحجم المحتوى</li>
            <li>✓ <strong>ImageView</strong> يستخدم <code>app:srcCompat</code> للصورة</li>
            <li>✓ Activity جديدة → تنضاف تلقائياً لـ <strong>AndroidManifest.xml</strong></li>
            <li>✓ <strong>action.MAIN + category.LAUNCHER</strong> = نقطة دخول التطبيق</li>
        </ul>
    </div>
</div>
@endsection
