@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
    <div class="mb-6">
        <a href="{{ route('study.index') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-orange-600 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            كل المواد
        </a>
    </div>

    <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden mb-8">
        <div class="bg-gradient-to-r from-orange-500 to-amber-600 px-8 py-6 text-center">
            <h1 class="text-2xl font-extrabold text-white mb-1">أساسيات الرسم بالحاسب</h1>
            <p class="text-orange-200 text-sm">Fundamental of Computer Graphics — محاضرتين</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <a href="{{ route('study.show', ['subject' => 'graphics', 'lecture' => 1]) }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-orange-400 shadow-sm hover:shadow-lg hover:shadow-orange-100 transition-all p-6 h-full">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-orange-500 to-orange-700 flex items-center justify-center text-white text-xl font-extrabold shadow-md shadow-orange-200">1</div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">المحاضرة الأولى</h2>
                        <p class="text-xs text-slate-400">Computer Graphics مقدمة</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 mb-4">تعريف CG، أنواع الرسوميات، Raster vs Vector، البكسل والدقة، الرندرة وتقنياتها، الأنيميشن</p>
                <div class="flex flex-wrap gap-1.5 mb-3">
                    <span class="text-xs bg-orange-50 text-orange-600 px-2 py-1 rounded-md font-medium">Raster</span>
                    <span class="text-xs bg-amber-50 text-amber-600 px-2 py-1 rounded-md font-medium">Vector</span>
                    <span class="text-xs bg-emerald-50 text-emerald-600 px-2 py-1 rounded-md font-medium">Rendering</span>
                </div>
                <span class="text-orange-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ المراجعة &larr;</span>
            </div>
        </a>

        <a href="{{ route('study.show', ['subject' => 'graphics', 'lecture' => 2]) }}" class="group">
            <div class="card rounded-2xl border-2 border-slate-200 hover:border-amber-400 shadow-sm hover:shadow-lg hover:shadow-amber-100 transition-all p-6 h-full">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500 to-amber-700 flex items-center justify-center text-white text-xl font-extrabold shadow-md shadow-amber-200">2</div>
                    <div>
                        <h2 class="font-bold text-slate-800 text-lg">المحاضرة الثانية</h2>
                        <p class="text-xs text-slate-400">CRT والمسح وتطبيقات CG</p>
                    </div>
                </div>
                <p class="text-sm text-slate-600 mb-4">أنبوب الأشعة المهبطية CRT، Raster Scan vs Random Scan، تطبيقات الرسم بالحاسب</p>
                <div class="flex flex-wrap gap-1.5 mb-3">
                    <span class="text-xs bg-amber-50 text-amber-600 px-2 py-1 rounded-md font-medium">CRT</span>
                    <span class="text-xs bg-indigo-50 text-indigo-600 px-2 py-1 rounded-md font-medium">Raster Scan</span>
                    <span class="text-xs bg-violet-50 text-violet-600 px-2 py-1 rounded-md font-medium">Applications</span>
                </div>
                <span class="text-amber-600 text-sm font-semibold group-hover:translate-x-1 transition-transform">ابدأ المراجعة &larr;</span>
            </div>
        </a>
    </div>
</div>
@endsection
