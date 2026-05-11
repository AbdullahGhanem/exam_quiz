@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'mobile') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-slate-700 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-slate-700 to-slate-900 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة التاسعة: مصادر Android الإضافية</h1>
                <p class="text-slate-300 text-sm">Android Material — Videos &amp; PPT</p>
            </div>
        </div>
    </div>

    {{-- Resource Card --}}
    <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden mb-6">
        <div class="p-8">

            <div class="flex items-start gap-4 mb-6">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center text-white shadow-md shadow-emerald-200 flex-shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>
                    </svg>
                </div>
                <div class="flex-1">
                    <h2 class="text-xl font-bold text-slate-800 mb-2">رابط SharePoint للمواد الكاملة</h2>
                    <p class="text-slate-600 leading-relaxed text-sm">
                        مجلد على SharePoint يحتوي على <strong>فيديوهات الشرح</strong> و<strong>ملفات الـ PowerPoint</strong>
                        الخاصة بمواد Android من د. مروة الصديق. استخدم بريدك الجامعي للدخول.
                    </p>
                </div>
            </div>

            <a href="https://engkfsedu-my.sharepoint.com/:f:/g/personal/marwaelsadeek_ai_kfs_edu_eg/IgBAzf8f8G4zRr13GucJsRAnAelfhL2L7MsPB8pHhek9Bs4?e=qVtbsE"
               target="_blank"
               rel="noopener noreferrer"
               class="block w-full bg-gradient-to-r from-slate-800 to-slate-900 hover:from-slate-700 hover:to-slate-800 text-white font-bold py-4 px-6 rounded-xl text-center transition-all shadow-md hover:shadow-lg">
                <span class="inline-flex items-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/>
                    </svg>
                    افتح المجلد على SharePoint
                </span>
            </a>

            <p class="text-xs text-slate-400 text-center mt-3">
                يفتح في تبويب جديد · يتطلب تسجيل دخول بحساب الجامعة
            </p>
        </div>
    </div>

    {{-- Coverage hint --}}
    <div class="card rounded-2xl border border-emerald-200 bg-gradient-to-br from-emerald-50/60 to-teal-50/60 p-6">
        <h3 class="font-bold text-emerald-800 mb-3 flex items-center gap-2">
            <span class="text-xl">📚</span> ما الذي تغطيه المواد؟
        </h3>
        <ul class="space-y-2 text-sm text-slate-700">
            <li class="flex gap-2">
                <span class="text-emerald-600 font-bold flex-shrink-0">•</span>
                <span>شرح <strong>Android Studio</strong> وهيكلة المشاريع — <a href="{{ route('study.show', ['subject' => 'mobile', 'lecture' => 6]) }}" class="text-teal-600 hover:underline font-semibold">المحاضرة 6</a></span>
            </li>
            <li class="flex gap-2">
                <span class="text-emerald-600 font-bold flex-shrink-0">•</span>
                <span>شرح <strong>Activity Lifecycle</strong> — <a href="{{ route('study.show', ['subject' => 'mobile', 'lecture' => 7]) }}" class="text-teal-600 hover:underline font-semibold">المحاضرة 7</a></span>
            </li>
            <li class="flex gap-2">
                <span class="text-emerald-600 font-bold flex-shrink-0">•</span>
                <span>شرح <strong>Android Layouts</strong> — <a href="{{ route('study.show', ['subject' => 'mobile', 'lecture' => 8]) }}" class="text-teal-600 hover:underline font-semibold">المحاضرة 8</a></span>
            </li>
        </ul>
    </div>
</div>
@endsection
