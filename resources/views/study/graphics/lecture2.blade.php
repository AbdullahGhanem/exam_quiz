@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">

    {{-- Header --}}
    <div class="mb-8">
        <a href="{{ route('study.subject', 'graphics') }}" class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-amber-600 transition-colors mb-4">
            <svg class="w-4 h-4 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
            </svg>
            العودة للمحاضرات
        </a>
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden">
            <div class="bg-gradient-to-r from-amber-500 to-amber-700 px-8 py-8 text-center">
                <div class="w-16 h-16 rounded-2xl bg-white/15 backdrop-blur-sm flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"/>
                    </svg>
                </div>
                <h1 class="text-2xl md:text-3xl font-extrabold text-white mb-2">المحاضرة الثانية: أنبوب الأشعة المهبطية وتطبيقات الرسم بالحاسب</h1>
                <p class="text-amber-200 text-sm">CRT, Raster Scan, Random Scan & Applications</p>
            </div>
            {{-- Progress Bar --}}
            <div class="px-6 py-3 bg-amber-50 border-t border-amber-100">
                <div class="flex items-center justify-between mb-1">
                    <span class="text-xs font-semibold text-amber-700">التقدم</span>
                    <span class="text-xs font-bold text-amber-700" id="progressText">0 / 7</span>
                </div>
                <div class="w-full bg-amber-100 rounded-full h-2">
                    <div class="bg-gradient-to-r from-amber-500 to-amber-600 h-2 rounded-full transition-all duration-500" id="progressBar" style="width: 0%"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 1: أنبوب الأشعة المهبطية CRT --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-amber-500">
            <button onclick="toggleSection('sec1')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">أنبوب الأشعة المهبطية CRT</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec1', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec1" style="max-height: 5000px;">
                <div class="space-y-5">
                    {{-- Definition --}}
                    <div class="bg-amber-50/70 rounded-xl p-5 border border-amber-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            جهاز الإخراج الرئيسي في الأنظمة الرسومية التقليدية هو <span class="term">شاشة الفيديو</span> <span class="term-en">(Video Display)</span>.
                            العنصر الرئيسي فيها هو <span class="term">أنبوب الأشعة المهبطية</span> <span class="term-en">(Cathode Ray Tube — CRT)</span>.
                        </p>
                    </div>

                    {{-- How CRT Works --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-amber-700 mb-3">كيف يعمل CRT؟</h3>
                        <div class="space-y-3">
                            <div class="flex items-start gap-3">
                                <div class="w-7 h-7 rounded-lg bg-amber-100 flex items-center justify-center text-amber-700 font-bold text-sm flex-shrink-0 mt-0.5">1</div>
                                <p class="text-sm text-slate-700"><span class="term">مدفع الإلكترونات</span> <span class="term-en">(Electron Gun)</span> يطلق شعاع إلكترونات نحو الشاشة.</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-7 h-7 rounded-lg bg-amber-100 flex items-center justify-center text-amber-700 font-bold text-sm flex-shrink-0 mt-0.5">2</div>
                                <p class="text-sm text-slate-700">الشعاع يمر عبر أنظمة <span class="term">التركيز والانحراف</span> <span class="term-en">(Focusing & Deflection Systems)</span> التي توجهه نحو مواقع محددة على الشاشة.</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-7 h-7 rounded-lg bg-amber-100 flex items-center justify-center text-amber-700 font-bold text-sm flex-shrink-0 mt-0.5">3</div>
                                <p class="text-sm text-slate-700">الشاشة مطلية بمادة <span class="term">الفوسفور</span> <span class="term-en">(Phosphor)</span> التي تتوهج عند اصطدام الإلكترونات بها.</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-7 h-7 rounded-lg bg-amber-100 flex items-center justify-center text-amber-700 font-bold text-sm flex-shrink-0 mt-0.5">4</div>
                                <p class="text-sm text-slate-700">عندما يصطدم الشعاع بالشاشة تنبعث <span class="term">نقطة ضوئية صغيرة</span> في تلك النقطة.</p>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-7 h-7 rounded-lg bg-amber-100 flex items-center justify-center text-amber-700 font-bold text-sm flex-shrink-0 mt-0.5">5</div>
                                <p class="text-sm text-slate-700">يعيد رسم الصورة بتوجيه الشعاع بسرعة لنفس النقاط قبل أن يخبو ضوء الفوسفور.</p>
                            </div>
                        </div>
                    </div>

                    {{-- CRT Diagram --}}
                    <div class="bg-slate-900 rounded-xl p-6 border border-slate-700 overflow-x-auto">
                        <h3 class="font-bold text-amber-400 mb-4 text-center text-sm">مخطط أنبوب الأشعة المهبطية CRT</h3>
                        <div class="flex items-center justify-center gap-0 min-w-[600px] mx-auto" dir="ltr">
                            {{-- Base --}}
                            <div class="flex flex-col items-center">
                                <div class="w-14 h-20 bg-slate-700 rounded-lg border-2 border-slate-500 flex items-center justify-center">
                                    <div class="space-y-1">
                                        <div class="w-1.5 h-1.5 bg-amber-400 rounded-full mx-auto"></div>
                                        <div class="flex gap-1">
                                            <div class="w-1.5 h-1.5 bg-amber-400 rounded-full"></div>
                                            <div class="w-1.5 h-1.5 bg-amber-400 rounded-full"></div>
                                        </div>
                                        <div class="w-1.5 h-1.5 bg-amber-400 rounded-full mx-auto"></div>
                                    </div>
                                </div>
                                <span class="text-[10px] text-slate-400 mt-1.5 whitespace-nowrap">Connector Pins</span>
                            </div>

                            {{-- Arrow --}}
                            <div class="w-4 h-0.5 bg-amber-500"></div>

                            {{-- Electron Gun --}}
                            <div class="flex flex-col items-center">
                                <div class="w-16 h-16 bg-gradient-to-r from-red-700 to-red-500 rounded-lg border-2 border-red-400 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-red-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                                </div>
                                <span class="text-[10px] text-red-400 mt-1.5 whitespace-nowrap">Electron Gun</span>
                            </div>

                            {{-- Arrow --}}
                            <div class="w-4 h-0.5 bg-amber-500"></div>

                            {{-- Control Grid --}}
                            <div class="flex flex-col items-center">
                                <div class="w-10 h-16 bg-slate-600 rounded border-2 border-slate-400 flex items-center justify-center">
                                    <div class="space-y-1.5">
                                        <div class="w-5 h-0.5 bg-yellow-400"></div>
                                        <div class="w-5 h-0.5 bg-yellow-400"></div>
                                        <div class="w-5 h-0.5 bg-yellow-400"></div>
                                    </div>
                                </div>
                                <span class="text-[10px] text-slate-400 mt-1.5 whitespace-nowrap">Control Grid</span>
                            </div>

                            {{-- Arrow --}}
                            <div class="w-4 h-0.5 bg-amber-500"></div>

                            {{-- Focusing System --}}
                            <div class="flex flex-col items-center">
                                <div class="w-12 h-16 bg-blue-900 rounded-lg border-2 border-blue-500 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><circle cx="12" cy="12" r="7" stroke-dasharray="3 2"/></svg>
                                </div>
                                <span class="text-[10px] text-blue-400 mt-1.5 whitespace-nowrap">Focusing</span>
                            </div>

                            {{-- Arrow --}}
                            <div class="w-4 h-0.5 bg-amber-500"></div>

                            {{-- Deflection --}}
                            <div class="flex flex-col items-center">
                                <div class="w-14 h-16 bg-purple-900 rounded-lg border-2 border-purple-500 flex items-center justify-center">
                                    <div class="text-center">
                                        <span class="text-[9px] text-purple-300 font-bold block">X</span>
                                        <span class="text-[9px] text-purple-300 font-bold block">Y</span>
                                    </div>
                                </div>
                                <span class="text-[10px] text-purple-400 mt-1.5 whitespace-nowrap">X/Y Deflect</span>
                            </div>

                            {{-- Beam Arrow --}}
                            <div class="flex items-center">
                                <div class="w-8 h-0.5 bg-gradient-to-r from-amber-500 to-green-400"></div>
                                <div class="w-0 h-0 border-t-4 border-b-4 border-l-[6px] border-t-transparent border-b-transparent border-l-green-400"></div>
                            </div>

                            {{-- Phosphor Screen --}}
                            <div class="flex flex-col items-center">
                                <div class="w-20 h-20 bg-gradient-to-br from-green-800 to-green-600 rounded-xl border-2 border-green-400 flex items-center justify-center shadow-lg shadow-green-500/30">
                                    <div class="w-3 h-3 bg-green-300 rounded-full animate-pulse shadow-lg shadow-green-300/60"></div>
                                </div>
                                <span class="text-[10px] text-green-400 mt-1.5 whitespace-nowrap">Phosphor Screen</span>
                            </div>
                        </div>

                        {{-- Beam label --}}
                        <div class="text-center mt-3">
                            <span class="text-[10px] text-amber-400 bg-slate-800 px-3 py-1 rounded-full">Electron Beam &rarr;</span>
                        </div>
                    </div>

                    {{-- Key Note --}}
                    <div class="bg-amber-50 border border-amber-200 rounded-xl p-4 flex items-start gap-3">
                        <span class="text-amber-500 text-xl mt-0.5">!</span>
                        <p class="text-sm text-amber-800 font-semibold">
                            مادة الفوسفور تضيء لفترة قصيرة فقط، لذلك يجب إعادة رسم الصورة باستمرار (<span class="term">Refresh</span>) قبل أن يختفي الضوء.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 2: المسح النقطي (Raster Scan) --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-blue-500">
            <button onclick="toggleSection('sec2')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center text-blue-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">المسح النقطي <span class="term-en">(Raster Scan)</span></h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec2', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec2" style="max-height: 5000px;">
                <div class="space-y-5">
                    {{-- Description --}}
                    <div class="bg-blue-50/70 rounded-xl p-5 border border-blue-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            في نظام <span class="term">المسح النقطي</span> <span class="term-en">(Raster Scan)</span>، الشعاع يمسح الشاشة <strong>صف بصف</strong> من أعلى لأسفل. كثافة الشعاع تتغير
                            (<span class="term-en">on/off</span>) لإنشاء نمط من النقاط المضيئة.
                        </p>
                    </div>

                    {{-- Key Concepts --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-blue-50 rounded-xl p-5 border border-blue-100">
                            <h3 class="font-bold text-blue-700 mb-2">Frame Buffer</h3>
                            <p class="text-sm text-slate-600">
                                تعريف الصورة يُخزن في <span class="term">Refresh Buffer</span> أو <span class="term">Frame Buffer</span> — وهي ذاكرة تحمل قيم الكثافة لكل نقاط الشاشة.
                            </p>
                        </div>
                        <div class="bg-blue-50 rounded-xl p-5 border border-blue-100">
                            <h3 class="font-bold text-blue-700 mb-2">البكسل <span class="term-en">(Pixel)</span></h3>
                            <p class="text-sm text-slate-600">
                                كل نقطة على الشاشة تُسمى <span class="term">بكسل</span> <span class="term-en">(picture element)</span> أو <span class="term-en">pel</span>. وهي أصغر وحدة يمكن عرضها.
                            </p>
                        </div>
                    </div>

                    {{-- Retrace --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5">
                        <h3 class="font-bold text-blue-700 mb-3">الارتداد <span class="term-en">(Retrace)</span></h3>
                        <div class="space-y-3">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3"/></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-slate-700"><span class="term">الارتداد الأفقي</span> <span class="term-en">(Horizontal Retrace)</span></p>
                                    <p class="text-sm text-slate-600">عند نهاية كل صف، الشعاع يرجع لبداية الصف التالي (من اليمين لليسار).</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-blue-100 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 9l6-6m0 0l6 6m-6-6v12a6 6 0 01-12 0v-3"/></svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-slate-700"><span class="term">الارتداد الرأسي</span> <span class="term-en">(Vertical Retrace)</span></p>
                                    <p class="text-sm text-slate-600">عند نهاية كل الصفوف (آخر صف)، الشعاع يرجع للأعلى لبداية الشاشة.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Raster Scan Visual --}}
                    <div class="bg-slate-900 rounded-xl p-6 border border-slate-700">
                        <h3 class="font-bold text-blue-400 mb-4 text-center text-sm">طريقة المسح النقطي (Raster Scan)</h3>
                        <div class="max-w-md mx-auto space-y-2" dir="ltr">
                            {{-- Scan Line 1 --}}
                            <div class="flex items-center gap-2">
                                <span class="text-[10px] text-slate-500 w-12 text-left">Row 1</span>
                                <div class="flex-1 h-2 bg-gradient-to-r from-blue-500 to-blue-400 rounded-full relative">
                                    <div class="absolute -left-1 top-1/2 -translate-y-1/2 w-2 h-2 bg-green-400 rounded-full"></div>
                                </div>
                                <svg class="w-3 h-3 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                            </div>
                            {{-- Horizontal Retrace --}}
                            <div class="flex items-center gap-2 opacity-50">
                                <span class="text-[10px] text-yellow-500 w-12 text-left italic">retrace</span>
                                <div class="flex-1 h-0.5 border-t border-dashed border-yellow-500"></div>
                                <svg class="w-3 h-3 text-yellow-500 rotate-180" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                            </div>
                            {{-- Scan Line 2 --}}
                            <div class="flex items-center gap-2">
                                <span class="text-[10px] text-slate-500 w-12 text-left">Row 2</span>
                                <div class="flex-1 h-2 bg-gradient-to-r from-blue-500 to-blue-400 rounded-full"></div>
                                <svg class="w-3 h-3 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                            </div>
                            {{-- Horizontal Retrace --}}
                            <div class="flex items-center gap-2 opacity-50">
                                <span class="text-[10px] text-yellow-500 w-12 text-left italic">retrace</span>
                                <div class="flex-1 h-0.5 border-t border-dashed border-yellow-500"></div>
                                <svg class="w-3 h-3 text-yellow-500 rotate-180" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                            </div>
                            {{-- Scan Line 3 --}}
                            <div class="flex items-center gap-2">
                                <span class="text-[10px] text-slate-500 w-12 text-left">Row 3</span>
                                <div class="flex-1 h-2 bg-gradient-to-r from-blue-500 to-blue-400 rounded-full"></div>
                                <svg class="w-3 h-3 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                            </div>
                            {{-- More rows --}}
                            <div class="flex items-center gap-2">
                                <span class="text-[10px] text-slate-500 w-12 text-left">...</span>
                                <div class="flex-1 h-2 bg-gradient-to-r from-blue-500/40 to-blue-400/40 rounded-full"></div>
                            </div>
                            {{-- Last Row --}}
                            <div class="flex items-center gap-2">
                                <span class="text-[10px] text-slate-500 w-12 text-left">Row N</span>
                                <div class="flex-1 h-2 bg-gradient-to-r from-blue-500 to-blue-400 rounded-full"></div>
                                <svg class="w-3 h-3 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                            </div>
                            {{-- Vertical Retrace --}}
                            <div class="flex items-center justify-center mt-2 gap-2 opacity-60">
                                <svg class="w-4 h-4 text-red-400 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3"/></svg>
                                <span class="text-[10px] text-red-400 italic">Vertical Retrace (back to top)</span>
                                <svg class="w-4 h-4 text-red-400 rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 3: المسح العشوائي (Random Scan) --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-emerald-500">
            <button onclick="toggleSection('sec3')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-100 flex items-center justify-center text-emerald-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">المسح العشوائي <span class="term-en">(Random Scan / Vector Scan)</span></h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec3', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec3" style="max-height: 5000px;">
                <div class="space-y-5">
                    {{-- Description --}}
                    <div class="bg-emerald-50/70 rounded-xl p-5 border border-emerald-100">
                        <p class="text-slate-700 leading-relaxed text-base">
                            في نظام <span class="term">المسح العشوائي</span> <span class="term-en">(Random Scan)</span>، الشعاع يتوجه <strong>فقط</strong> للجزء المطلوب رسمه من الشاشة — مش كل الشاشة.
                        </p>
                    </div>

                    {{-- Alternative Names --}}
                    <div class="bg-emerald-50 rounded-xl p-4 border border-emerald-100">
                        <h3 class="font-bold text-emerald-700 mb-2">أسماء أخرى:</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-xs bg-emerald-100 text-emerald-700 px-3 py-1.5 rounded-lg font-medium">Vector Display</span>
                            <span class="text-xs bg-emerald-100 text-emerald-700 px-3 py-1.5 rounded-lg font-medium">Stroke-Writing Display</span>
                            <span class="text-xs bg-emerald-100 text-emerald-700 px-3 py-1.5 rounded-lg font-medium">Calligraphic Display</span>
                        </div>
                    </div>

                    {{-- Key Concepts --}}
                    <div class="bg-white rounded-xl border border-slate-200 p-5 space-y-4">
                        <div>
                            <h3 class="font-bold text-emerald-700 mb-2">تخزين الصورة</h3>
                            <p class="text-sm text-slate-600">
                                تعريف الصورة يُخزن كمجموعة <span class="term">أوامر رسم خطوط</span> في ذاكرة تسمى <span class="term">Refresh Display File</span>. النظام يدور عبر هذه الأوامر ويرسم كل خط بالتتابع.
                            </p>
                        </div>
                        <div>
                            <h3 class="font-bold text-emerald-700 mb-2">معدل التحديث</h3>
                            <p class="text-sm text-slate-600">
                                يعيد رسم الصورة <span class="term">30-60 مرة في الثانية</span> لمنع اختفاء الرسم.
                            </p>
                        </div>
                    </div>

                    {{-- Random Scan Visual --}}
                    <div class="bg-slate-900 rounded-xl p-6 border border-slate-700">
                        <h3 class="font-bold text-emerald-400 mb-4 text-center text-sm">طريقة المسح العشوائي (Random Scan) — رسم مثلث</h3>
                        <div class="max-w-sm mx-auto" dir="ltr">
                            <div class="relative w-64 h-56 mx-auto">
                                {{-- Dark screen background --}}
                                <div class="absolute inset-0 bg-slate-800 rounded-lg border border-slate-600"></div>

                                {{-- Triangle drawn with CSS --}}
                                <svg class="absolute inset-0 w-full h-full" viewBox="0 0 256 224">
                                    {{-- Step 1: Line A -> B --}}
                                    <line x1="128" y1="30" x2="40" y2="180" stroke="#34d399" stroke-width="2.5" stroke-linecap="round">
                                        <animate attributeName="stroke-dasharray" from="0,300" to="300,0" dur="1s" begin="0s" fill="freeze"/>
                                    </line>
                                    {{-- Step 2: Line B -> C --}}
                                    <line x1="40" y1="180" x2="216" y2="180" stroke="#34d399" stroke-width="2.5" stroke-linecap="round">
                                        <animate attributeName="stroke-dasharray" from="0,300" to="300,0" dur="1s" begin="1s" fill="freeze"/>
                                    </line>
                                    {{-- Step 3: Line C -> A --}}
                                    <line x1="216" y1="180" x2="128" y2="30" stroke="#34d399" stroke-width="2.5" stroke-linecap="round">
                                        <animate attributeName="stroke-dasharray" from="0,300" to="300,0" dur="1s" begin="2s" fill="freeze"/>
                                    </line>
                                    {{-- Vertices --}}
                                    <circle cx="128" cy="30" r="4" fill="#fbbf24"/>
                                    <circle cx="40" cy="180" r="4" fill="#fbbf24"/>
                                    <circle cx="216" cy="180" r="4" fill="#fbbf24"/>
                                    {{-- Labels --}}
                                    <text x="128" y="20" text-anchor="middle" fill="#fbbf24" font-size="11" font-weight="bold">A</text>
                                    <text x="28" y="195" text-anchor="middle" fill="#fbbf24" font-size="11" font-weight="bold">B</text>
                                    <text x="228" y="195" text-anchor="middle" fill="#fbbf24" font-size="11" font-weight="bold">C</text>
                                </svg>
                            </div>
                            <div class="flex justify-center gap-4 mt-3">
                                <span class="text-[10px] text-emerald-400 bg-slate-800 px-2 py-1 rounded">Step 1: A &rarr; B</span>
                                <span class="text-[10px] text-emerald-400 bg-slate-800 px-2 py-1 rounded">Step 2: B &rarr; C</span>
                                <span class="text-[10px] text-emerald-400 bg-slate-800 px-2 py-1 rounded">Step 3: C &rarr; A</span>
                            </div>
                        </div>
                        <p class="text-center text-[11px] text-slate-400 mt-3">الشعاع يرسم فقط الخطوط المطلوبة — لا يمسح الشاشة كاملة</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 4: مقارنة Raster Scan و Random Scan --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-violet-500">
            <button onclick="toggleSection('sec4')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-violet-100 flex items-center justify-center text-violet-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">مقارنة Raster Scan و Random Scan</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec4', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec4" style="max-height: 5000px;">
                <div class="space-y-5">
                    {{-- Comparison Table --}}
                    <div class="overflow-x-auto rounded-xl border border-violet-200">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="bg-violet-50">
                                    <th class="px-4 py-3 text-right font-bold text-violet-700 border-b border-violet-200">المعيار</th>
                                    <th class="px-4 py-3 text-right font-bold text-blue-700 border-b border-violet-200 bg-blue-50/50">
                                        Raster Scan
                                    </th>
                                    <th class="px-4 py-3 text-right font-bold text-emerald-700 border-b border-violet-200 bg-emerald-50/50">
                                        Random Scan
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-violet-100">
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-4 py-3 font-semibold text-slate-700">المسح</td>
                                    <td class="px-4 py-3 text-slate-600">صف بصف (كل الشاشة)</td>
                                    <td class="px-4 py-3 text-slate-600">فقط أماكن الرسم</td>
                                </tr>
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-4 py-3 font-semibold text-slate-700">التخزين</td>
                                    <td class="px-4 py-3 text-slate-600"><span class="term">Frame Buffer</span></td>
                                    <td class="px-4 py-3 text-slate-600"><span class="term">Refresh Display File</span></td>
                                </tr>
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-4 py-3 font-semibold text-slate-700">المحتوى</td>
                                    <td class="px-4 py-3 text-slate-600">صور واقعية (ألوان كاملة)</td>
                                    <td class="px-4 py-3 text-slate-600">خطوط ورسوم بسيطة</td>
                                </tr>
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-4 py-3 font-semibold text-slate-700">السرعة</td>
                                    <td class="px-4 py-3 text-slate-600">أبطأ (يمسح كل شيء)</td>
                                    <td class="px-4 py-3 text-slate-600">أسرع (يرسم المطلوب فقط)</td>
                                </tr>
                                <tr class="hover:bg-slate-50 transition-colors">
                                    <td class="px-4 py-3 font-semibold text-slate-700">الاسم الآخر</td>
                                    <td class="px-4 py-3 text-slate-600"><span class="term-en">Raster Display</span></td>
                                    <td class="px-4 py-3 text-slate-600"><span class="term-en">Vector / Stroke Display</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- Visual Summary --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-blue-50 rounded-xl p-4 border border-blue-200 text-center">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-2">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/></svg>
                            </div>
                            <h4 class="font-bold text-blue-700 mb-1">Raster Scan</h4>
                            <p class="text-xs text-slate-600">يمسح كل الشاشة صف بصف</p>
                            <p class="text-xs text-blue-600 font-semibold mt-1">مناسب للصور الواقعية</p>
                        </div>
                        <div class="bg-emerald-50 rounded-xl p-4 border border-emerald-200 text-center">
                            <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mx-auto mb-2">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5"/></svg>
                            </div>
                            <h4 class="font-bold text-emerald-700 mb-1">Random Scan</h4>
                            <p class="text-xs text-slate-600">يرسم فقط المطلوب</p>
                            <p class="text-xs text-emerald-600 font-semibold mt-1">مناسب للرسوم الخطية</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 5: تطبيقات الرسم بالحاسب --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-orange-500">
            <button onclick="toggleSection('sec5')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-orange-100 flex items-center justify-center text-orange-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">تطبيقات الرسم بالحاسب</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec5', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec5" style="max-height: 5000px;">
                <div class="space-y-5">
                    <div class="bg-orange-50/70 rounded-xl p-4 border border-orange-100">
                        <p class="text-slate-700 text-sm">الرسم بالحاسب يُستخدم في مجالات كثيرة ومتنوعة. هذه أبرز التطبيقات:</p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        {{-- GUI --}}
                        <div class="bg-white rounded-xl border border-orange-200 p-4 hover:shadow-md hover:border-orange-300 transition-all">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-9 h-9 rounded-lg bg-orange-100 flex items-center justify-center text-lg">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm">واجهات المستخدم الرسومية</h4>
                                    <span class="term-en">GUIs</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500">التفاعل مع الحاسب بالماوس والأيقونات والنوافذ</p>
                        </div>

                        {{-- Business Presentations --}}
                        <div class="bg-white rounded-xl border border-orange-200 p-4 hover:shadow-md hover:border-orange-300 transition-all">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-9 h-9 rounded-lg bg-orange-100 flex items-center justify-center text-lg">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm">رسومات العروض التقديمية</h4>
                                    <span class="term-en">Business Presentations</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500">الرسوم البيانية والمخططات في العروض</p>
                        </div>

                        {{-- Cartography --}}
                        <div class="bg-white rounded-xl border border-orange-200 p-4 hover:shadow-md hover:border-orange-300 transition-all">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-9 h-9 rounded-lg bg-orange-100 flex items-center justify-center text-lg">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm">رسم الخرائط</h4>
                                    <span class="term-en">Cartography</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500">إنشاء وتحرير الخرائط الجغرافية</p>
                        </div>

                        {{-- Weather Maps --}}
                        <div class="bg-white rounded-xl border border-orange-200 p-4 hover:shadow-md hover:border-orange-300 transition-all">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-9 h-9 rounded-lg bg-orange-100 flex items-center justify-center text-lg">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm">خرائط الطقس</h4>
                                    <span class="term-en">Weather Maps</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500">عرض بيانات الطقس والتنبؤات الجوية</p>
                        </div>

                        {{-- Satellite Imaging --}}
                        <div class="bg-white rounded-xl border border-orange-200 p-4 hover:shadow-md hover:border-orange-300 transition-all">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-9 h-9 rounded-lg bg-orange-100 flex items-center justify-center text-lg">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm">صور الأقمار الصناعية</h4>
                                    <span class="term-en">Satellite Imaging</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500">معالجة وعرض صور الأقمار الصناعية</p>
                        </div>

                        {{-- Photo Enhancement --}}
                        <div class="bg-white rounded-xl border border-orange-200 p-4 hover:shadow-md hover:border-orange-300 transition-all">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-9 h-9 rounded-lg bg-orange-100 flex items-center justify-center text-lg">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm">تحسين الصور</h4>
                                    <span class="term-en">Photo Enhancement</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500">تعديل وتحسين جودة الصور الرقمية</p>
                        </div>

                        {{-- Medical Imaging --}}
                        <div class="bg-white rounded-xl border border-orange-200 p-4 hover:shadow-md hover:border-orange-300 transition-all">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-9 h-9 rounded-lg bg-orange-100 flex items-center justify-center text-lg">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm">التصوير الطبي</h4>
                                    <span class="term-en">Medical Imaging</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500">MRI، CAT scans، والتصوير بالموجات فوق الصوتية</p>
                        </div>

                        {{-- Engineering Drawings --}}
                        <div class="bg-white rounded-xl border border-orange-200 p-4 hover:shadow-md hover:border-orange-300 transition-all">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-9 h-9 rounded-lg bg-orange-100 flex items-center justify-center text-lg">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17l-5.384 3.065A1.5 1.5 0 014.5 16.92V7.08a1.5 1.5 0 011.536-1.315l5.384 3.065M15.75 4.5l-4.72 4.72m4.72-4.72V8.25m0-3.75h-3.75"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm">الرسومات الهندسية</h4>
                                    <span class="term-en">Engineering Drawings</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500">التصميم بمساعدة الحاسب CAD</p>
                        </div>

                        {{-- Typography --}}
                        <div class="bg-white rounded-xl border border-orange-200 p-4 hover:shadow-md hover:border-orange-300 transition-all">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-9 h-9 rounded-lg bg-orange-100 flex items-center justify-center text-lg">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm">الطباعة</h4>
                                    <span class="term-en">Typography</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500">تصميم الخطوط والنشر المكتبي</p>
                        </div>

                        {{-- Architecture --}}
                        <div class="bg-white rounded-xl border border-orange-200 p-4 hover:shadow-md hover:border-orange-300 transition-all">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-9 h-9 rounded-lg bg-orange-100 flex items-center justify-center text-lg">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3H21m-3.75 3H21"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm">العمارة</h4>
                                    <span class="term-en">Architecture</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500">تصميم المباني والنمذجة ثلاثية الأبعاد</p>
                        </div>

                        {{-- Art --}}
                        <div class="bg-white rounded-xl border border-orange-200 p-4 hover:shadow-md hover:border-orange-300 transition-all">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-9 h-9 rounded-lg bg-orange-100 flex items-center justify-center text-lg">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm">الفن</h4>
                                    <span class="term-en">Art</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500">الفن الرقمي والرسوم التوضيحية</p>
                        </div>

                        {{-- Training --}}
                        <div class="bg-white rounded-xl border border-orange-200 p-4 hover:shadow-md hover:border-orange-300 transition-all">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-9 h-9 rounded-lg bg-orange-100 flex items-center justify-center text-lg">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm">التدريب</h4>
                                    <span class="term-en">Training</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500">محاكيات الطيران والتدريب العسكري</p>
                        </div>

                        {{-- Entertainment --}}
                        <div class="bg-white rounded-xl border border-orange-200 p-4 hover:shadow-md hover:border-orange-300 transition-all">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-9 h-9 rounded-lg bg-orange-100 flex items-center justify-center text-lg">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 01-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0118 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0118 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 016 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm">الترفيه</h4>
                                    <span class="term-en">Entertainment</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500">أفلام الأنيميشن وألعاب الفيديو</p>
                        </div>

                        {{-- Simulation --}}
                        <div class="bg-white rounded-xl border border-orange-200 p-4 hover:shadow-md hover:border-orange-300 transition-all">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-9 h-9 rounded-lg bg-orange-100 flex items-center justify-center text-lg">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-2.25-1.313M21 7.5v2.25m0-2.25l-2.25 1.313M3 7.5l2.25-1.313M3 7.5l2.25 1.313M3 7.5v2.25m9 3l2.25-1.313M12 12.75l-2.25-1.313M12 12.75V15m0 6.75l2.25-1.313M12 21.75V19.5m0 2.25l-2.25-1.313m0-16.875L12 2.25l2.25 1.313M21 14.25v2.25l-2.25 1.313m-13.5 0L3 16.5v-2.25"/></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-800 text-sm">المحاكاة والنمذجة</h4>
                                    <span class="term-en">Simulation & Modeling</span>
                                </div>
                            </div>
                            <p class="text-xs text-slate-500">محاكاة الأنظمة الفيزيائية والرياضية</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 6: ملخص سريع --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-indigo-500">
            <button onclick="toggleSection('sec6')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-indigo-100 flex items-center justify-center text-indigo-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">ملخص سريع</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec6', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec6" style="max-height: 5000px;">
                <div class="space-y-4">
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-3">
                        {{-- CRT --}}
                        <div class="bg-gradient-to-br from-amber-50 to-amber-100 rounded-xl p-4 border border-amber-200 text-center">
                            <div class="text-2xl mb-1">
                                <svg class="w-7 h-7 mx-auto text-amber-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"/></svg>
                            </div>
                            <h4 class="font-bold text-sm text-amber-800">CRT</h4>
                            <p class="text-[10px] text-amber-600 mt-1">أنبوب الأشعة المهبطية</p>
                        </div>

                        {{-- Electron Gun --}}
                        <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-4 border border-red-200 text-center">
                            <div class="text-2xl mb-1">
                                <svg class="w-7 h-7 mx-auto text-red-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                            </div>
                            <h4 class="font-bold text-sm text-red-800">Electron Gun</h4>
                            <p class="text-[10px] text-red-600 mt-1">مدفع الإلكترونات</p>
                        </div>

                        {{-- Phosphor --}}
                        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-4 border border-green-200 text-center">
                            <div class="w-7 h-7 mx-auto bg-green-400 rounded-full animate-pulse mb-1"></div>
                            <h4 class="font-bold text-sm text-green-800">Phosphor</h4>
                            <p class="text-[10px] text-green-600 mt-1">مادة الفوسفور</p>
                        </div>

                        {{-- Frame Buffer --}}
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-4 border border-blue-200 text-center">
                            <div class="text-2xl mb-1">
                                <svg class="w-7 h-7 mx-auto text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125"/></svg>
                            </div>
                            <h4 class="font-bold text-sm text-blue-800">Frame Buffer</h4>
                            <p class="text-[10px] text-blue-600 mt-1">ذاكرة تخزين الصورة</p>
                        </div>

                        {{-- Raster Scan --}}
                        <div class="bg-gradient-to-br from-sky-50 to-sky-100 rounded-xl p-4 border border-sky-200 text-center">
                            <div class="text-2xl mb-1">
                                <svg class="w-7 h-7 mx-auto text-sky-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/></svg>
                            </div>
                            <h4 class="font-bold text-sm text-sky-800">Raster Scan</h4>
                            <p class="text-[10px] text-sky-600 mt-1">صف بصف</p>
                        </div>

                        {{-- Random Scan --}}
                        <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-xl p-4 border border-emerald-200 text-center">
                            <div class="text-2xl mb-1">
                                <svg class="w-7 h-7 mx-auto text-emerald-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"/></svg>
                            </div>
                            <h4 class="font-bold text-sm text-emerald-800">Random Scan</h4>
                            <p class="text-[10px] text-emerald-600 mt-1">المطلوب فقط</p>
                        </div>

                        {{-- Pixel --}}
                        <div class="bg-gradient-to-br from-violet-50 to-violet-100 rounded-xl p-4 border border-violet-200 text-center">
                            <div class="w-7 h-7 mx-auto bg-violet-500 rounded-sm mb-1"></div>
                            <h4 class="font-bold text-sm text-violet-800">Pixel</h4>
                            <p class="text-[10px] text-violet-600 mt-1">أصغر نقطة على الشاشة</p>
                        </div>

                        {{-- Horizontal Retrace --}}
                        <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl p-4 border border-yellow-200 text-center">
                            <div class="text-2xl mb-1">
                                <svg class="w-7 h-7 mx-auto text-yellow-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3"/></svg>
                            </div>
                            <h4 class="font-bold text-sm text-yellow-800">H. Retrace</h4>
                            <p class="text-[10px] text-yellow-600 mt-1">الارتداد الأفقي</p>
                        </div>

                        {{-- Vertical Retrace --}}
                        <div class="bg-gradient-to-br from-rose-50 to-rose-100 rounded-xl p-4 border border-rose-200 text-center">
                            <div class="text-2xl mb-1">
                                <svg class="w-7 h-7 mx-auto text-rose-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3"/></svg>
                            </div>
                            <h4 class="font-bold text-sm text-rose-800">V. Retrace</h4>
                            <p class="text-[10px] text-rose-600 mt-1">الارتداد الرأسي</p>
                        </div>

                        {{-- Refresh Display File --}}
                        <div class="bg-gradient-to-br from-teal-50 to-teal-100 rounded-xl p-4 border border-teal-200 text-center">
                            <div class="text-2xl mb-1">
                                <svg class="w-7 h-7 mx-auto text-teal-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                            </div>
                            <h4 class="font-bold text-sm text-teal-800">Display File</h4>
                            <p class="text-[10px] text-teal-600 mt-1">ملف أوامر الرسم</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================ --}}
    {{-- Section 7: اختبر نفسك --}}
    {{-- ============================================================ --}}
    <div class="mb-6">
        <div class="card rounded-2xl border border-slate-200/60 shadow-sm overflow-hidden border-t-4 border-t-amber-500">
            <button onclick="toggleSection('sec7')" class="w-full flex items-center justify-between px-6 py-5 hover:bg-slate-50/50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-100 flex items-center justify-center text-amber-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg font-bold text-slate-800">اختبر نفسك</h2>
                </div>
                <div class="flex items-center gap-2">
                    <button onclick="event.stopPropagation(); markDone('sec7', this)" class="done-btn text-xs px-2.5 py-1 rounded-lg border border-slate-200 text-slate-400 hover:bg-emerald-50 hover:text-emerald-600 hover:border-emerald-200 transition-colors">تم</button>
                    <svg class="chevron w-5 h-5 text-slate-400" id="chevron-sec7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                    </svg>
                </div>
            </button>

            <div class="study-section px-6 pb-6" id="sec7" style="max-height: 5000px;">
                <div class="space-y-4">
                    <p class="text-sm text-slate-500">اضغط على البطاقة لرؤية الإجابة:</p>

                    {{-- Flashcard 1 --}}
                    <div class="flashcard rounded-xl" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner min-h-[140px]">
                            <div class="flashcard-front bg-gradient-to-br from-amber-50 to-amber-100 rounded-xl p-5 border-2 border-amber-200 flex items-center justify-center">
                                <div class="text-center">
                                    <span class="text-xs text-amber-500 font-semibold block mb-2">سؤال 1</span>
                                    <p class="font-bold text-slate-800">ما هي مكونات CRT؟</p>
                                    <span class="text-xs text-slate-400 mt-2 block">اضغط للإجابة</span>
                                </div>
                            </div>
                            <div class="flashcard-back bg-gradient-to-br from-amber-500 to-amber-700 rounded-xl p-5 border-2 border-amber-400 flex items-center justify-center">
                                <div class="text-center text-white">
                                    <span class="text-xs text-amber-200 font-semibold block mb-2">الإجابة</span>
                                    <div class="text-sm space-y-1">
                                        <p>1. <strong>مدفع الإلكترونات</strong> (Electron Gun)</p>
                                        <p>2. <strong>شبكة التحكم</strong> (Control Grid)</p>
                                        <p>3. <strong>نظام التركيز</strong> (Focusing System)</p>
                                        <p>4. <strong>نظام الانحراف</strong> (X/Y Deflection)</p>
                                        <p>5. <strong>شاشة الفوسفور</strong> (Phosphor Screen)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 2 --}}
                    <div class="flashcard rounded-xl" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner min-h-[140px]">
                            <div class="flashcard-front bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-5 border-2 border-blue-200 flex items-center justify-center">
                                <div class="text-center">
                                    <span class="text-xs text-blue-500 font-semibold block mb-2">سؤال 2</span>
                                    <p class="font-bold text-slate-800">ما الفرق بين Raster Scan و Random Scan؟</p>
                                    <span class="text-xs text-slate-400 mt-2 block">اضغط للإجابة</span>
                                </div>
                            </div>
                            <div class="flashcard-back bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl p-5 border-2 border-blue-400 flex items-center justify-center">
                                <div class="text-center text-white">
                                    <span class="text-xs text-blue-200 font-semibold block mb-2">الإجابة</span>
                                    <div class="text-sm space-y-2">
                                        <p><strong>Raster Scan:</strong> يمسح كل الشاشة صف بصف، يخزن في Frame Buffer، مناسب للصور الواقعية</p>
                                        <p><strong>Random Scan:</strong> يرسم فقط الأجزاء المطلوبة، يخزن في Refresh Display File، مناسب للرسوم الخطية</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 3 --}}
                    <div class="flashcard rounded-xl" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner min-h-[140px]">
                            <div class="flashcard-front bg-gradient-to-br from-emerald-50 to-emerald-100 rounded-xl p-5 border-2 border-emerald-200 flex items-center justify-center">
                                <div class="text-center">
                                    <span class="text-xs text-emerald-500 font-semibold block mb-2">سؤال 3</span>
                                    <p class="font-bold text-slate-800">أين تُخزن الصورة في نظام Raster Scan؟</p>
                                    <span class="text-xs text-slate-400 mt-2 block">اضغط للإجابة</span>
                                </div>
                            </div>
                            <div class="flashcard-back bg-gradient-to-br from-emerald-500 to-emerald-700 rounded-xl p-5 border-2 border-emerald-400 flex items-center justify-center">
                                <div class="text-center text-white">
                                    <span class="text-xs text-emerald-200 font-semibold block mb-2">الإجابة</span>
                                    <div class="text-sm space-y-2">
                                        <p>تُخزن في <strong>Refresh Buffer</strong> أو <strong>Frame Buffer</strong></p>
                                        <p>وهي ذاكرة تحمل قيم الكثافة لكل نقاط الشاشة (البكسلات).</p>
                                        <p>كل نقطة على الشاشة = <strong>Pixel</strong> (picture element)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Flashcard 4 --}}
                    <div class="flashcard rounded-xl" onclick="this.classList.toggle('flipped')">
                        <div class="flashcard-inner min-h-[140px]">
                            <div class="flashcard-front bg-gradient-to-br from-violet-50 to-violet-100 rounded-xl p-5 border-2 border-violet-200 flex items-center justify-center">
                                <div class="text-center">
                                    <span class="text-xs text-violet-500 font-semibold block mb-2">سؤال 4</span>
                                    <p class="font-bold text-slate-800">اذكر 5 تطبيقات للرسم بالحاسب</p>
                                    <span class="text-xs text-slate-400 mt-2 block">اضغط للإجابة</span>
                                </div>
                            </div>
                            <div class="flashcard-back bg-gradient-to-br from-violet-500 to-violet-700 rounded-xl p-5 border-2 border-violet-400 flex items-center justify-center">
                                <div class="text-center text-white">
                                    <span class="text-xs text-violet-200 font-semibold block mb-2">الإجابة (أمثلة)</span>
                                    <div class="text-sm space-y-1">
                                        <p>1. واجهات المستخدم الرسومية <strong>(GUIs)</strong></p>
                                        <p>2. التصوير الطبي <strong>(Medical Imaging)</strong></p>
                                        <p>3. الرسومات الهندسية <strong>(CAD)</strong></p>
                                        <p>4. الترفيه <strong>(أفلام وألعاب)</strong></p>
                                        <p>5. المحاكاة والنمذجة <strong>(Simulation)</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    const STORAGE_KEY = 'graphics_lec2';
    const TOTAL_SECTIONS = 7;

    function toggleSection(id) {
        const section = document.getElementById(id);
        const chevron = document.getElementById('chevron-' + id);
        if (!section || !chevron) return;

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
            return JSON.parse(localStorage.getItem(STORAGE_KEY) || '[]');
        } catch {
            return [];
        }
    }

    function saveProgress(progress) {
        localStorage.setItem(STORAGE_KEY, JSON.stringify(progress));
        updateProgressBar();
    }

    function updateProgressBar() {
        const progress = getProgress();
        const count = progress.length;
        const pct = Math.round((count / TOTAL_SECTIONS) * 100);
        const bar = document.getElementById('progressBar');
        const text = document.getElementById('progressText');
        if (bar) bar.style.width = pct + '%';
        if (text) text.textContent = count + ' / ' + TOTAL_SECTIONS;
    }

    function markDone(sectionId, btn) {
        const progress = getProgress();
        const idx = progress.indexOf(sectionId);

        if (idx === -1) {
            progress.push(sectionId);
            btn.classList.remove('text-slate-400', 'border-slate-200');
            btn.classList.add('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
            btn.textContent = 'تم \u2713';
        } else {
            progress.splice(idx, 1);
            btn.classList.add('text-slate-400', 'border-slate-200');
            btn.classList.remove('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
            btn.textContent = 'تم';
        }

        saveProgress(progress);
    }

    // Restore progress on load
    document.addEventListener('DOMContentLoaded', function() {
        const progress = getProgress();
        if (progress.length > 0) {
            progress.forEach(function(sectionId) {
                const section = document.getElementById(sectionId);
                if (section) {
                    const card = section.closest('.card');
                    if (card) {
                        const btn = card.querySelector('.done-btn');
                        if (btn) {
                            btn.classList.remove('text-slate-400', 'border-slate-200');
                            btn.classList.add('bg-emerald-50', 'text-emerald-600', 'border-emerald-200');
                            btn.textContent = 'تم \u2713';
                        }
                    }
                }
            });
        }
        updateProgressBar();
    });
</script>
@endsection
