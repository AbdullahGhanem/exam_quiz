@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-6">
        <a href="{{ route('study.index') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-teal-600 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            كل المواد
        </a>
    </div>

    <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden mb-8">
        <div class="bg-gradient-to-r from-teal-600 to-cyan-600 px-8 py-6 text-center">
            <h1 class="text-2xl font-extrabold text-white mb-1">تطوير تطبيقات الموبايل</h1>
            <p class="text-teal-200 text-sm">Mobile Applications Development — 4 محاضرات</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        {{-- Lecture 1 --}}
        <a href="{{ route('study.show', ['subject' => 'mobile', 'lecture' => 1]) }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-teal-400 shadow-sm hover:shadow-lg hover:shadow-teal-100 transition-all p-6 h-full">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-teal-500 to-teal-700 flex items-center justify-center text-white text-xl font-extrabold shadow-md shadow-teal-200">1</div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">المحاضرة الأولى</h2>
                        <p class="text-xs text-slate-400">مقدمة في تطوير الموبايل</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 mb-4">تعريف Mobile Dev، الفرق عن Desktop، Native vs Hybrid، المنصات، المعمارية</p>
                <div class="flex flex-wrap gap-1.5 mb-3">
                    <span class="text-xs bg-teal-50 text-teal-600 px-2 py-1 rounded-md font-medium">Native</span>
                    <span class="text-xs bg-cyan-50 text-cyan-600 px-2 py-1 rounded-md font-medium">Hybrid</span>
                    <span class="text-xs bg-emerald-50 text-emerald-600 px-2 py-1 rounded-md font-medium">Architecture</span>
                </div>
                <span class="text-teal-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ المراجعة &larr;</span>
            </div>
        </a>

        {{-- Lecture 2 --}}
        <a href="{{ route('study.show', ['subject' => 'mobile', 'lecture' => 2]) }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-blue-400 shadow-sm hover:shadow-lg hover:shadow-blue-100 transition-all p-6 h-full">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-blue-700 flex items-center justify-center text-white text-xl font-extrabold shadow-md shadow-blue-200">2</div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">المحاضرة الثانية</h2>
                        <p class="text-xs text-slate-400">أساسيات Java</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 mb-4">تعريف Java، WORA، خصائص اللغة، JDK/JRE/JVM، كيف تشتغل Java</p>
                <div class="flex flex-wrap gap-1.5 mb-3">
                    <span class="text-xs bg-blue-50 text-blue-600 px-2 py-1 rounded-md font-medium">WORA</span>
                    <span class="text-xs bg-indigo-50 text-indigo-600 px-2 py-1 rounded-md font-medium">JDK/JRE/JVM</span>
                    <span class="text-xs bg-violet-50 text-violet-600 px-2 py-1 rounded-md font-medium">Bytecode</span>
                </div>
                <span class="text-blue-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ المراجعة &larr;</span>
            </div>
        </a>

        {{-- Lecture 3 --}}
        <a href="{{ route('study.show', ['subject' => 'mobile', 'lecture' => 3]) }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-cyan-400 shadow-sm hover:shadow-lg hover:shadow-cyan-100 transition-all p-6 h-full">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-cyan-500 to-cyan-700 flex items-center justify-center text-white text-xl font-extrabold shadow-md shadow-cyan-200">3</div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">المحاضرة الثالثة</h2>
                        <p class="text-xs text-slate-400">أخذ المدخلات في Java</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 mb-4">Scanner class، JOptionPane، نوافذ الإدخال والرسائل، أنواع الأخطاء</p>
                <div class="flex flex-wrap gap-1.5 mb-3">
                    <span class="text-xs bg-cyan-50 text-cyan-600 px-2 py-1 rounded-md font-medium">Scanner</span>
                    <span class="text-xs bg-teal-50 text-teal-600 px-2 py-1 rounded-md font-medium">JOptionPane</span>
                    <span class="text-xs bg-red-50 text-red-600 px-2 py-1 rounded-md font-medium">Errors</span>
                </div>
                <span class="text-cyan-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ المراجعة &larr;</span>
            </div>
        </a>

        {{-- Lecture 4 --}}
        <a href="{{ route('study.show', ['subject' => 'mobile', 'lecture' => 4]) }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-violet-400 shadow-sm hover:shadow-lg hover:shadow-violet-100 transition-all p-6 h-full">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-violet-500 to-violet-700 flex items-center justify-center text-white text-xl font-extrabold shadow-md shadow-violet-200">4</div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">المحاضرة الرابعة</h2>
                        <p class="text-xs text-slate-400">الجمل الشرطية If-Else</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 mb-4">if, if-else, switch، العوامل العلائقية والمنطقية، جداول الحقيقة</p>
                <div class="flex flex-wrap gap-1.5 mb-3">
                    <span class="text-xs bg-violet-50 text-violet-600 px-2 py-1 rounded-md font-medium">if-else</span>
                    <span class="text-xs bg-fuchsia-50 text-fuchsia-600 px-2 py-1 rounded-md font-medium">Logical Ops</span>
                    <span class="text-xs bg-amber-50 text-amber-600 px-2 py-1 rounded-md font-medium">switch</span>
                </div>
                <span class="text-violet-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ المراجعة &larr;</span>
            </div>
        </a>
    </div>
</div>
@endsection
