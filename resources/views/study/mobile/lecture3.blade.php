@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'mobile') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-cyan-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-cyan-600 to-teal-600 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة الثالثة: أخذ المدخلات في Java</h1>
                <p class="text-cyan-200 text-sm">Java Input — Scanner & JOptionPane</p>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 1: أخذ المدخلات باستخدام Scanner --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-cyan-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-cyan-100 flex items-center justify-center text-cyan-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">أخذ المدخلات باستخدام Scanner</h2>
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
                    {{-- Import --}}
                    <div class="bg-cyan-50/70 rounded-xl p-5 border border-cyan-100">
                        <p class="text-slate-700 leading-relaxed text-base mb-3">
                            لأخذ مدخلات من المستخدم في Java نستخدم كلاس <span class="term">Scanner</span> <span class="term-en">(java.util.Scanner)</span>.
                            لازم أولاً نعمل <span class="term">import</span> في بداية الملف:
                        </p>
                        <div class="bg-slate-900 rounded-lg p-4 text-sm font-mono text-emerald-400 overflow-x-auto" dir="ltr">
                            <code>import java.util.Scanner;</code>
                        </div>
                    </div>

                    {{-- Create Scanner Object --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-slate-800 mb-3">إنشاء كائن Scanner</h3>
                        <div class="bg-slate-900 rounded-lg p-4 text-sm font-mono text-emerald-400 overflow-x-auto mb-3" dir="ltr">
                            <code>Scanner s = new Scanner(System.in);</code>
                        </div>
                        <div class="bg-amber-50 border border-amber-200 rounded-lg p-3 flex items-start gap-2">
                            <span class="text-amber-500 mt-0.5">💡</span>
                            <p class="text-sm text-amber-800">
                                <span class="term">System.in</span> = الإدخال من <strong>الكيبورد</strong> (لوحة المفاتيح). هو مصدر الإدخال القياسي في Java.
                            </p>
                        </div>
                    </div>

                    {{-- Scanner Methods --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-slate-800 mb-3">دوال القراءة المتوفرة</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div class="bg-cyan-50 rounded-lg p-3 border border-cyan-100">
                                <code class="text-cyan-700 font-mono text-sm font-bold">nextInt()</code>
                                <p class="text-xs text-slate-500 mt-1">تقرأ عدد صحيح <span class="term-en">(int)</span></p>
                            </div>
                            <div class="bg-cyan-50 rounded-lg p-3 border border-cyan-100">
                                <code class="text-cyan-700 font-mono text-sm font-bold">nextDouble()</code>
                                <p class="text-xs text-slate-500 mt-1">تقرأ عدد عشري <span class="term-en">(double)</span></p>
                            </div>
                            <div class="bg-cyan-50 rounded-lg p-3 border border-cyan-100">
                                <code class="text-cyan-700 font-mono text-sm font-bold">nextLine()</code>
                                <p class="text-xs text-slate-500 mt-1">تقرأ سطر كامل <span class="term-en">(String)</span></p>
                            </div>
                            <div class="bg-cyan-50 rounded-lg p-3 border border-cyan-100">
                                <code class="text-cyan-700 font-mono text-sm font-bold">next()</code>
                                <p class="text-xs text-slate-500 mt-1">تقرأ كلمة واحدة <span class="term-en">(String)</span></p>
                            </div>
                        </div>
                    </div>

                    {{-- Full Example --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-slate-800 mb-3">مثال كامل</h3>
                        <div class="bg-slate-900 rounded-lg p-4 text-sm font-mono text-emerald-400 overflow-x-auto leading-relaxed" dir="ltr">
<pre>Scanner s = new Scanner(System.in);
System.out.println("Enter number");
int x = s.nextInt();
System.out.println("your number is: " + x);</pre>
                        </div>
                        <p class="text-sm text-slate-600 mt-3">
                            البرنامج يطلب من المستخدم إدخال رقم، يقرأه بـ <code class="bg-slate-100 px-1.5 py-0.5 rounded text-cyan-700 font-mono text-xs">nextInt()</code> ويخزنه في المتغير <code class="bg-slate-100 px-1.5 py-0.5 rounded text-cyan-700 font-mono text-xs">x</code>، ثم يطبعه.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 2: أخذ المدخلات باستخدام JOptionPane --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-blue-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25V18a2.25 2.25 0 002.25 2.25h13.5A2.25 2.25 0 0021 18V8.25m-18 0V6a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 6v2.25m-18 0h18"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">أخذ المدخلات باستخدام JOptionPane</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 3000px;">
                <div class="space-y-5">
                    {{-- Import --}}
                    <div class="bg-blue-50/70 rounded-xl p-5 border border-blue-100">
                        <p class="text-slate-700 leading-relaxed text-base mb-3">
                            <span class="term">JOptionPane</span> <span class="term-en">(javax.swing.JOptionPane)</span> يوفر <strong>نوافذ رسومية</strong> للإدخال والإخراج بدل الـ Console.
                        </p>
                        <div class="bg-slate-900 rounded-lg p-4 text-sm font-mono text-emerald-400 overflow-x-auto" dir="ltr">
                            <code>import javax.swing.JOptionPane;</code>
                        </div>
                    </div>

                    {{-- Two Methods --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        {{-- showInputDialog --}}
                        <div class="bg-blue-50 rounded-xl p-5 border border-blue-200">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-xl">📥</span>
                                <h3 class="font-bold text-blue-700">نافذة إدخال</h3>
                            </div>
                            <p class="term-en mb-2">(showInputDialog)</p>
                            <p class="text-sm text-slate-600 mb-3">تظهر نافذة للمستخدم يكتب فيها قيمة، وترجع <span class="term">String</span> دائماً.</p>
                            <div class="bg-slate-900 rounded-lg p-3 text-xs font-mono text-emerald-400 overflow-x-auto" dir="ltr">
<pre>String name = JOptionPane
  .showInputDialog("Enter name");</pre>
                            </div>
                        </div>

                        {{-- showMessageDialog --}}
                        <div class="bg-indigo-50 rounded-xl p-5 border border-indigo-200">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-xl">📢</span>
                                <h3 class="font-bold text-indigo-700">نافذة رسالة</h3>
                            </div>
                            <p class="term-en mb-2">(showMessageDialog)</p>
                            <p class="text-sm text-slate-600 mb-3">تظهر نافذة <strong>عرض فقط</strong> — لا تأخذ إدخال من المستخدم.</p>
                            <div class="bg-slate-900 rounded-lg p-3 text-xs font-mono text-emerald-400 overflow-x-auto" dir="ltr">
<pre>JOptionPane.showMessageDialog(
  null, "Hello " + name);</pre>
                            </div>
                        </div>
                    </div>

                    {{-- Full Example --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-slate-800 mb-3">مثال كامل</h3>
                        <div class="bg-slate-900 rounded-lg p-4 text-sm font-mono text-emerald-400 overflow-x-auto leading-relaxed" dir="ltr">
<pre>String input = JOptionPane.showInputDialog("Enter your age");
int age = Integer.parseInt(input);
JOptionPane.showMessageDialog(null, "Your age is: " + age);</pre>
                        </div>
                    </div>

                    {{-- Important Note --}}
                    <div class="bg-red-50 border border-red-200 rounded-xl p-4 flex items-start gap-3">
                        <span class="text-red-500 text-lg mt-0.5">⚠️</span>
                        <p class="text-sm text-red-800">
                            <strong>مهم جداً:</strong> <code class="bg-red-100 px-1.5 py-0.5 rounded font-mono text-xs">showInputDialog</code> ترجع <span class="term">String</span> دائماً!
                            إذا تبي رقم لازم تحوله باستخدام <code class="bg-red-100 px-1.5 py-0.5 rounded font-mono text-xs">Integer.parseInt()</code> أو <code class="bg-red-100 px-1.5 py-0.5 rounded font-mono text-xs">Double.parseDouble()</code>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 3: تحويل الأنواع --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-emerald-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">تحويل الأنواع</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec3', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec3" style="max-height: 2000px;">
                <div class="space-y-5">
                    <div class="bg-emerald-50/70 rounded-xl p-5 border border-emerald-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            لأن <span class="term">JOptionPane</span> يرجع <span class="term">String</span> دائماً، نحتاج نحول النص لرقم عشان نقدر نستخدمه في العمليات الحسابية.
                        </p>
                    </div>

                    {{-- Conversion Methods --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-white rounded-xl border-2 border-emerald-200 p-5">
                            <h3 class="font-bold text-emerald-700 mb-2">تحويل لـ int</h3>
                            <div class="bg-slate-900 rounded-lg p-3 text-sm font-mono text-emerald-400 overflow-x-auto" dir="ltr">
                                <code>Integer.parseInt(string)</code>
                            </div>
                            <p class="text-xs text-slate-500 mt-2">يحول نص لعدد صحيح</p>
                        </div>
                        <div class="bg-white rounded-xl border-2 border-teal-200 p-5">
                            <h3 class="font-bold text-teal-700 mb-2">تحويل لـ double</h3>
                            <div class="bg-slate-900 rounded-lg p-3 text-sm font-mono text-emerald-400 overflow-x-auto" dir="ltr">
                                <code>Double.parseDouble(string)</code>
                            </div>
                            <p class="text-xs text-slate-500 mt-2">يحول نص لعدد عشري</p>
                        </div>
                    </div>

                    {{-- Full Example --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-slate-800 mb-3">مثال عملي</h3>
                        <div class="bg-slate-900 rounded-lg p-4 text-sm font-mono text-emerald-400 overflow-x-auto leading-relaxed" dir="ltr">
<pre>String input = JOptionPane.showInputDialog("Enter age");
int age = Integer.parseInt(input);

String priceStr = JOptionPane.showInputDialog("Enter price");
double price = Double.parseDouble(priceStr);</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 4: أنواع الأخطاء الثلاثة --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-red-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-red-100 flex items-center justify-center text-red-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">أنواع الأخطاء الثلاثة</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec4', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec4" style="max-height: 2000px;">
                <div class="space-y-4">
                    {{-- Syntax Error --}}
                    <div class="bg-red-50 rounded-xl p-5 border border-red-200">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-xl">🔴</span>
                            <div>
                                <h3 class="font-bold text-red-700">خطأ نحوي</h3>
                                <span class="term-en">(Syntax Error)</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 mb-3">
                            نسيت <code class="bg-red-100 px-1.5 py-0.5 rounded font-mono text-xs">;</code> أو كتبت الكلمة المفتاحية غلط.
                            <strong>المترجم يكتشفها</strong> قبل التشغيل ويعطيك رسالة خطأ.
                        </p>
                        <div class="bg-slate-900 rounded-lg p-3 text-sm font-mono overflow-x-auto" dir="ltr">
                            <span class="text-red-400">// Missing semicolon</span><br>
                            <span class="text-emerald-400">int x = 5</span> <span class="text-red-500 font-bold">← خطأ! ناقص ;</span>
                        </div>
                    </div>

                    {{-- Runtime Error --}}
                    <div class="bg-orange-50 rounded-xl p-5 border border-orange-200">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-xl">🟠</span>
                            <div>
                                <h3 class="font-bold text-orange-700">خطأ وقت التشغيل</h3>
                                <span class="term-en">(Runtime Error)</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 mb-3">
                            البرنامج <strong>يترجم بنجاح</strong> لكن يقع وقت التشغيل. مثال شائع: <span class="term">القسمة على صفر</span>.
                        </p>
                        <div class="bg-slate-900 rounded-lg p-3 text-sm font-mono overflow-x-auto" dir="ltr">
                            <span class="text-emerald-400">int result = 10 / 0;</span> <span class="text-red-500 font-bold">← ArithmeticException!</span>
                        </div>
                    </div>

                    {{-- Logical Error --}}
                    <div class="bg-amber-50 rounded-xl p-5 border border-amber-200">
                        <div class="flex items-center gap-2 mb-3">
                            <span class="text-xl">🟡</span>
                            <div>
                                <h3 class="font-bold text-amber-700">خطأ منطقي</h3>
                                <span class="term-en">(Logical Error)</span>
                            </div>
                        </div>
                        <p class="text-sm text-slate-600 mb-3">
                            <strong>الأصعب!</strong> البرنامج يشتغل بدون أي خطأ لكن النتيجة <strong>غلط</strong>. مثل استخدام <code class="bg-amber-100 px-1 rounded font-mono text-xs">+</code> بدل <code class="bg-amber-100 px-1 rounded font-mono text-xs">-</code>.
                            المترجم <strong>ما يكتشفها</strong> لأن الكود صحيح نحوياً.
                        </p>
                        <div class="bg-slate-900 rounded-lg p-3 text-sm font-mono overflow-x-auto" dir="ltr">
                            <span class="text-slate-500">// المطلوب: المتوسط</span><br>
                            <span class="text-emerald-400">double avg = a + b / 2;</span> <span class="text-red-500 font-bold">← خطأ! المفروض (a+b)/2</span>
                        </div>
                    </div>

                    {{-- Summary Table --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5 overflow-x-auto">
                        <h3 class="font-bold text-slate-800 mb-3">ملخص المقارنة</h3>
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="border-b border-slate-200">
                                    <th class="text-start py-2 px-3 text-slate-500 font-semibold">النوع</th>
                                    <th class="text-start py-2 px-3 text-slate-500 font-semibold">متى يظهر؟</th>
                                    <th class="text-start py-2 px-3 text-slate-500 font-semibold">يكتشفه المترجم؟</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2 px-3 font-bold text-red-600">Syntax</td>
                                    <td class="py-2 px-3 text-slate-600">وقت الترجمة</td>
                                    <td class="py-2 px-3 text-emerald-600 font-bold">نعم</td>
                                </tr>
                                <tr class="border-b border-slate-100">
                                    <td class="py-2 px-3 font-bold text-orange-600">Runtime</td>
                                    <td class="py-2 px-3 text-slate-600">وقت التشغيل</td>
                                    <td class="py-2 px-3 text-red-600 font-bold">لا</td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-3 font-bold text-amber-600">Logical</td>
                                    <td class="py-2 px-3 text-slate-600">بعد التشغيل (النتيجة غلط)</td>
                                    <td class="py-2 px-3 text-red-600 font-bold">لا</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 5: اختبر نفسك (Flashcards) --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-violet-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">اختبر نفسك</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec5', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec5" style="max-height: 2000px;">
                <p class="text-sm text-slate-500 mb-5">اضغط على البطاقة لرؤية الإجابة 👇</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    {{-- Flashcard 1 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-cyan-500 to-teal-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">🤔</span>
                                <p class="font-bold text-base">كيف تنشئ كائن Scanner؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-cyan-200 flex flex-col items-center justify-center text-center">
                                <div class="bg-slate-900 rounded-lg p-3 text-xs font-mono text-emerald-400 mb-2 w-full" dir="ltr">
                                    <code>Scanner s = new Scanner(System.in);</code>
                                </div>
                                <p class="text-sm text-slate-600">مع <code class="bg-slate-100 px-1 rounded font-mono text-xs">import java.util.Scanner;</code> في البداية</p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 2 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">📥</span>
                                <p class="font-bold text-base">ما الفرق بين showInputDialog و showMessageDialog؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-blue-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    <strong class="text-blue-600">showInputDialog</strong> = نافذة <strong>إدخال</strong> (ترجع String)<br><br>
                                    <strong class="text-indigo-600">showMessageDialog</strong> = نافذة <strong>عرض رسالة فقط</strong> (ما ترجع شي)
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 3 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-emerald-500 to-green-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">🔄</span>
                                <p class="font-bold text-base">كيف تحول String لـ int؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-emerald-200 flex flex-col items-center justify-center text-center">
                                <div class="bg-slate-900 rounded-lg p-3 text-xs font-mono text-emerald-400 w-full" dir="ltr">
                                    <code>int x = Integer.parseInt(string);</code>
                                </div>
                                <p class="text-sm text-slate-600 mt-2">وللـ double: <code class="bg-slate-100 px-1 rounded font-mono text-xs">Double.parseDouble()</code></p>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 4 --}}
                    <div class="flashcard h-48" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner w-full h-full">
                            <div class="flashcard-front bg-gradient-to-br from-red-500 to-rose-600 rounded-xl p-5 flex flex-col items-center justify-center text-white text-center">
                                <span class="text-2xl mb-2">🐛</span>
                                <p class="font-bold text-base">أي نوع أخطاء لا يكتشفه المترجم؟</p>
                            </div>
                            <div class="flashcard-back bg-white rounded-xl p-5 border-2 border-red-200 flex flex-col items-center justify-center text-center">
                                <p class="text-sm text-slate-700 leading-relaxed">
                                    <strong class="text-orange-600">Runtime Error</strong> — يقع وقت التشغيل<br><br>
                                    <strong class="text-amber-600">Logical Error</strong> — الأصعب! البرنامج يشتغل لكن النتيجة غلط<br><br>
                                    <span class="text-slate-500 text-xs">المترجم يكتشف بس الـ Syntax Errors</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        try {
            return JSON.parse(localStorage.getItem('study_progress') || '{}');
        } catch { return {}; }
    }

    function saveProgress(progress) {
        localStorage.setItem('study_progress', JSON.stringify(progress));
    }

    function markDone(sectionId, btn) {
        const progress = getProgress();
        if (!progress.mobile_lec3) progress.mobile_lec3 = [];

        const idx = progress.mobile_lec3.indexOf(sectionId);
        if (idx === -1) {
            progress.mobile_lec3.push(sectionId);
            btn.classList.remove('text-slate-400', 'border-slate-200');
            btn.classList.add('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
            btn.textContent = 'تم ✓';
        } else {
            progress.mobile_lec3.splice(idx, 1);
            btn.classList.add('text-slate-400', 'border-slate-200');
            btn.classList.remove('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
            btn.textContent = 'تم';
        }

        saveProgress(progress);
    }

    document.addEventListener('DOMContentLoaded', function() {
        const progress = getProgress();
        if (progress.mobile_lec3 && progress.mobile_lec3.length > 0) {
            progress.mobile_lec3.forEach(function(sectionId) {
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