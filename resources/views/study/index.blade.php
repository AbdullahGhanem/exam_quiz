@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
    {{-- Header --}}
    <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden mb-8">
        <div class="bg-gradient-to-r from-indigo-600 to-violet-600 px-8 py-8 text-center">
            <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                </svg>
            </div>
            <h1 class="text-3xl font-extrabold text-white mb-2">دليل المراجعة التفاعلي</h1>
            <p class="text-indigo-200 text-sm">اختر المادة وابدأ المراجعة بالعربي</p>
        </div>
    </div>

    {{-- Subject Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        {{-- NLP Subject --}}
        <a href="{{ route('study.subject', 'nlp') }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-indigo-400 shadow-sm hover:shadow-lg hover:shadow-indigo-100 transition-all p-6 h-full">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-indigo-500 to-violet-600 flex items-center justify-center mb-4 shadow-md shadow-indigo-200 group-hover:shadow-lg group-hover:shadow-indigo-300 transition-shadow">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/>
                    </svg>
                </div>
                <h2 class="font-bold text-slate-800 text-xl mb-1">معالجة اللغات الطبيعية</h2>
                <p class="text-sm text-slate-400 mb-3">Introduction to NLP</p>
                <p class="text-sm text-slate-600 mb-4">مقدمة NLP، الفهم والتوليد، المستويات اللغوية، اختبار تورينغ، التقطيع، التحليل النحوي</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs bg-indigo-50 text-indigo-600 px-2.5 py-1 rounded-lg font-medium">محاضرتين</span>
                    <span class="text-indigo-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ &larr;</span>
                </div>
            </div>
        </a>

        {{-- Mobile Subject --}}
        <a href="{{ route('study.subject', 'mobile') }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-teal-400 shadow-sm hover:shadow-lg hover:shadow-teal-100 transition-all p-6 h-full">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-teal-500 to-cyan-600 flex items-center justify-center mb-4 shadow-md shadow-teal-200 group-hover:shadow-lg group-hover:shadow-teal-300 transition-shadow">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"/>
                    </svg>
                </div>
                <h2 class="font-bold text-slate-800 text-xl mb-1">تطوير تطبيقات الموبايل</h2>
                <p class="text-sm text-slate-400 mb-3">Mobile Applications Development</p>
                <p class="text-sm text-slate-600 mb-4">مقدمة Mobile Dev، أساسيات Java، أخذ المدخلات، الجمل الشرطية If-Else</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs bg-teal-50 text-teal-600 px-2.5 py-1 rounded-lg font-medium">4 محاضرات</span>
                    <span class="text-teal-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ &larr;</span>
                </div>
            </div>
        </a>
        {{-- Computer Graphics Subject --}}
        <a href="{{ route('study.subject', 'graphics') }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-orange-400 shadow-sm hover:shadow-lg hover:shadow-orange-100 transition-all p-6 h-full">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-orange-500 to-amber-600 flex items-center justify-center mb-4 shadow-md shadow-orange-200 group-hover:shadow-lg group-hover:shadow-orange-300 transition-shadow">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"/>
                    </svg>
                </div>
                <h2 class="font-bold text-slate-800 text-xl mb-1">أساسيات الرسم بالحاسب</h2>
                <p class="text-sm text-slate-400 mb-3">Fundamental of Computer Graphics</p>
                <p class="text-sm text-slate-600 mb-4">أنواع الرسوميات، Raster vs Vector، البكسل، الرندرة، CRT، Raster vs Random Scan، التطبيقات</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs bg-orange-50 text-orange-600 px-2.5 py-1 rounded-lg font-medium">محاضرتين</span>
                    <span class="text-orange-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ &larr;</span>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
