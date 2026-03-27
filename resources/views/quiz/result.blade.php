@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
    {{-- Score Card --}}
    <div class="card rounded-2xl border border-slate-200/60 shadow-sm shadow-slate-200/50 overflow-hidden mb-8">
        <div class="bg-gradient-to-r {{ $percentage >= 80 ? 'from-emerald-500 to-teal-500' : ($percentage >= 50 ? 'from-amber-500 to-orange-500' : 'from-red-500 to-rose-500') }} p-8 text-center relative overflow-hidden">
            {{-- Background pattern --}}
            <div class="absolute inset-0 opacity-10">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <defs><pattern id="dots" x="0" y="0" width="10" height="10" patternUnits="userSpaceOnUse"><circle cx="1" cy="1" r="1" fill="white"/></pattern></defs>
                    <rect fill="url(#dots)" width="100" height="100"/>
                </svg>
            </div>

            <div class="relative">
                <div class="inline-flex items-center justify-center w-32 h-32 rounded-full bg-white/20 backdrop-blur-sm mb-4">
                    <div>
                        <div class="text-5xl font-extrabold text-white">{{ $percentage }}%</div>
                        <div class="text-sm text-white/80 font-medium mt-1">{{ $correct }}/{{ $total }}</div>
                    </div>
                </div>
                <p class="text-lg font-semibold text-white/90">
                    @if($percentage >= 80)
                        Excellent work! You nailed it!
                    @elseif($percentage >= 50)
                        Good effort! Keep it up!
                    @else
                        Keep practicing, you'll get there!
                    @endif
                </p>
            </div>
        </div>

        <div class="p-6 flex items-center justify-center gap-4">
            <a href="{{ route('quiz.home') }}"
               class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-indigo-600 to-violet-600 text-white rounded-xl font-semibold hover:from-indigo-700 hover:to-violet-700 transition-all shadow-md shadow-indigo-200 active:scale-[0.98]">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182M2.985 19.644l3.181-3.183"/>
                </svg>
                Try Again
            </a>
        </div>
    </div>

    {{-- Stats Bar --}}
    <div class="grid grid-cols-3 gap-4 mb-8">
        <div class="card rounded-xl border border-slate-200/60 p-4 text-center">
            <p class="text-2xl font-bold text-emerald-600">{{ $correct }}</p>
            <p class="text-xs text-slate-400 font-medium mt-0.5">Correct</p>
        </div>
        <div class="card rounded-xl border border-slate-200/60 p-4 text-center">
            <p class="text-2xl font-bold text-red-500">{{ $total - $correct }}</p>
            <p class="text-xs text-slate-400 font-medium mt-0.5">Incorrect</p>
        </div>
        <div class="card rounded-xl border border-slate-200/60 p-4 text-center">
            <p class="text-2xl font-bold text-slate-700">{{ $total }}</p>
            <p class="text-xs text-slate-400 font-medium mt-0.5">Total</p>
        </div>
    </div>

    {{-- Review Header --}}
    <div class="flex items-center gap-3 mb-5">
        <div class="w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center">
            <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
            </svg>
        </div>
        <h2 class="text-lg font-bold text-slate-800">Answer Review</h2>
    </div>

    {{-- Questions Review --}}
    <div class="space-y-4">
        @foreach($results as $i => $result)
            <div class="card rounded-xl border-2 p-6 transition-colors
                {{ $result['is_correct'] ? 'border-emerald-200/80' : 'border-red-200/80' }}">

                <div class="flex items-start gap-3 mb-4">
                    <span class="flex-shrink-0 w-8 h-8 rounded-lg flex items-center justify-center text-sm font-bold
                        {{ $result['is_correct'] ? 'bg-emerald-100 text-emerald-700' : 'bg-red-100 text-red-700' }}">
                        @if($result['is_correct'])
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                        @else
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        @endif
                    </span>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="text-xs font-medium text-slate-400">Q{{ $i + 1 }}</span>
                            <span class="text-xs bg-slate-100 text-slate-500 px-2 py-0.5 rounded-md">{{ $result['question']->lecture }}</span>
                        </div>
                        <p class="font-semibold text-slate-800 leading-relaxed">{{ $result['question']->question }}</p>
                    </div>
                </div>

                <div class="ml-11 space-y-1.5">
                    @php
                        $opts = [
                            'A' => $result['question']->option_a,
                            'B' => $result['question']->option_b,
                            'C' => $result['question']->option_c,
                            'D' => $result['question']->option_d,
                        ];
                        $correctAnswer = $result['question']->correct_answer;
                    @endphp

                    @foreach($opts as $key => $text)
                        <div class="flex items-center gap-2.5 px-3 py-2 rounded-lg text-sm
                            {{ $key === $correctAnswer ? 'bg-emerald-50 text-emerald-800 font-medium' : '' }}
                            {{ $key === $result['selected'] && !$result['is_correct'] && $key !== $correctAnswer ? 'bg-red-50 text-red-600 line-through' : '' }}">
                            <span class="w-6 h-6 rounded-md flex items-center justify-center text-xs font-bold flex-shrink-0
                                {{ $key === $correctAnswer ? 'bg-emerald-200 text-emerald-800' : ($key === $result['selected'] && $key !== $correctAnswer ? 'bg-red-200 text-red-700' : 'bg-slate-100 text-slate-500') }}">
                                {{ $key }}
                            </span>
                            <span>{{ $text }}</span>
                            @if($key === $correctAnswer)
                                <svg class="w-4 h-4 text-emerald-600 ml-auto flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            @endif
                        </div>
                    @endforeach
                </div>

                @if($showDescriptions && $result['question']->description)
                    <div class="ml-11 mt-4 p-4 bg-amber-50/70 border border-amber-200/60 rounded-xl">
                        <div class="flex items-start gap-2">
                            <svg class="w-4 h-4 text-amber-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495zM10 5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 0110 5zm0 9a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                            </svg>
                            <div class="text-sm text-amber-900 leading-relaxed description-content">
                                {!! $result['question']->description !!}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    </div>

    <div class="text-center mt-10 mb-12">
        <a href="{{ route('quiz.home') }}"
           class="inline-flex items-center gap-2 px-8 py-3.5 bg-gradient-to-r from-indigo-600 to-violet-600 text-white rounded-xl font-semibold hover:from-indigo-700 hover:to-violet-700 transition-all shadow-lg shadow-indigo-200 active:scale-[0.98]">
            Start New Quiz
        </a>
    </div>
</div>
@endsection
