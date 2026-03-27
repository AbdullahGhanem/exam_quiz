@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    {{-- Progress --}}
    <div class="mb-6">
        <div class="flex items-center justify-between mb-3">
            <div class="flex items-center gap-3">
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-br from-indigo-600 to-violet-600 text-white text-sm font-bold shadow-md shadow-indigo-200">
                    {{ $index + 1 }}
                </span>
                <div>
                    <p class="text-sm font-semibold text-slate-700">Question {{ $index + 1 }} of {{ $totalQuestions }}</p>
                    <p class="text-xs text-slate-400">{{ round((($index) / $totalQuestions) * 100) }}% complete</p>
                </div>
            </div>
            <span class="inline-flex items-center gap-1.5 bg-indigo-50 text-indigo-600 text-xs font-semibold px-3 py-1.5 rounded-lg">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                </svg>
                {{ $question->lecture }}
            </span>
        </div>
        <div class="w-full bg-slate-100 rounded-full h-2 overflow-hidden">
            <div class="bg-gradient-to-r from-indigo-500 to-violet-500 h-full rounded-full transition-all duration-500 ease-out"
                 style="width: {{ (($index) / $totalQuestions) * 100 }}%"></div>
        </div>
    </div>

    {{-- Question Card --}}
    <div class="card rounded-2xl border border-slate-200/60 shadow-sm shadow-slate-200/50 p-8">
        <h2 class="text-xl font-bold text-slate-800 mb-8 leading-relaxed">
            {{ $question->question }}
        </h2>

        <form action="{{ route('quiz.answer', $index) }}" method="POST" id="quizForm">
            @csrf
            <input type="hidden" name="correct_key" value="{{ $correctKey }}">

            <div class="space-y-3">
                @foreach($options as $key => $text)
                    <label class="option-btn group flex items-center gap-4 p-4 border-2 border-slate-200 rounded-xl cursor-pointer hover:border-indigo-300 hover:bg-indigo-50/50"
                           id="label-{{ $key }}" onclick="selectOption('{{ $key }}')">
                        <div class="flex-shrink-0 w-11 h-11 rounded-xl bg-slate-100 flex items-center justify-center font-bold text-slate-500 transition-all option-circle" id="circle-{{ $key }}">
                            {{ $key }}
                        </div>
                        <span class="text-slate-700 text-[15px] leading-relaxed">{{ $text }}</span>
                        <input type="radio" name="answer" value="{{ $key }}" class="hidden" id="answer-{{ $key }}">
                    </label>
                @endforeach
            </div>

            {{-- Description box (hidden until an option is selected) --}}
            <div id="description-box" style="display:none;" class="mt-6 p-4 rounded-xl border">
                <div class="flex items-start gap-2.5">
                    <span id="desc-icon" class="flex-shrink-0 text-xl leading-none mt-0.5"></span>
                    <div>
                        <p id="desc-status" class="text-sm font-semibold mb-1"></p>
                        <div id="desc-text" class="text-sm leading-relaxed"></div>
                    </div>
                </div>
            </div>

            <div class="flex justify-between items-center mt-8 pt-6 border-t border-slate-100">
                @if($index > 0)
                    <a href="{{ route('quiz.question', $index - 1) }}"
                       class="inline-flex items-center gap-2 px-5 py-3 bg-slate-100 text-slate-600 rounded-xl font-semibold hover:bg-slate-200 transition-colors text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                        </svg>
                        Previous
                    </a>
                @else
                    <div></div>
                @endif

                <button type="submit" id="nextBtn" disabled
                        class="inline-flex items-center gap-2 px-7 py-3 bg-gradient-to-r from-indigo-600 to-violet-600 text-white rounded-xl font-semibold hover:from-indigo-700 hover:to-violet-700 transition-all shadow-md shadow-indigo-200 disabled:opacity-30 disabled:shadow-none disabled:cursor-not-allowed text-sm active:scale-[0.98]">
                    {{ $index + 1 === $totalQuestions ? 'Finish Quiz' : 'Next' }}
                    @if($index + 1 < $totalQuestions)
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                        </svg>
                    @endif
                </button>
            </div>
        </form>
    </div>
</div>

<script>
var showDescriptions = {{ $showDescriptions ? 'true' : 'false' }};
var correctKey = '{{ $correctKey }}';
var descriptionHtml = {!! json_encode($question->description ?? '') !!};

function selectOption(key) {
    // Reset all options
    document.querySelectorAll('.option-btn').forEach(function(btn) {
        btn.classList.remove('border-indigo-500', 'bg-indigo-50', 'shadow-md', 'shadow-indigo-100', 'border-emerald-400', 'bg-emerald-50');
        btn.classList.add('border-slate-200');
    });
    document.querySelectorAll('.option-circle').forEach(function(c) {
        c.classList.remove('bg-indigo-600', 'text-white', 'shadow-md', 'shadow-indigo-300', 'bg-emerald-500');
        c.classList.add('bg-slate-100', 'text-slate-500');
    });

    // Select the clicked option
    var selected = document.getElementById('answer-' + key);
    selected.checked = true;

    var label = document.getElementById('label-' + key);
    label.classList.remove('border-slate-200');
    label.classList.add('border-indigo-500', 'bg-indigo-50', 'shadow-md', 'shadow-indigo-100');

    var circle = document.getElementById('circle-' + key);
    circle.classList.remove('bg-slate-100', 'text-slate-500');
    circle.classList.add('bg-indigo-600', 'text-white', 'shadow-md', 'shadow-indigo-300');

    document.getElementById('nextBtn').disabled = false;

    // Show description
    if (showDescriptions && descriptionHtml) {
        var descBox = document.getElementById('description-box');
        var descStatus = document.getElementById('desc-status');
        var descIcon = document.getElementById('desc-icon');
        var descText = document.getElementById('desc-text');
        var isCorrect = (key === correctKey);

        // Reset styles
        descBox.className = 'mt-6 p-4 rounded-xl border';

        if (isCorrect) {
            descBox.classList.add('bg-emerald-50', 'border-emerald-200');
            descStatus.className = 'text-sm font-semibold mb-1 text-emerald-700';
            descStatus.textContent = 'Correct!';
            descIcon.textContent = '\u2705';
        } else {
            descBox.classList.add('bg-red-50', 'border-red-200');
            descStatus.className = 'text-sm font-semibold mb-1 text-red-700';
            descStatus.textContent = 'Incorrect \u2014 the correct answer is ' + correctKey;
            descIcon.textContent = '\u274C';

            // Highlight correct option in green
            var correctLabel = document.getElementById('label-' + correctKey);
            correctLabel.classList.remove('border-slate-200');
            correctLabel.classList.add('border-emerald-400', 'bg-emerald-50');
            var correctCircle = document.getElementById('circle-' + correctKey);
            correctCircle.classList.remove('bg-slate-100', 'text-slate-500');
            correctCircle.classList.add('bg-emerald-500', 'text-white');
        }

        descText.innerHTML = descriptionHtml;
        descBox.style.display = '';
    }
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        var btn = document.getElementById('nextBtn');
        if (!btn.disabled) {
            btn.closest('form').submit();
        }
    }

    var keyMap = { a: 'A', b: 'B', c: 'C', d: 'D' };
    var option = keyMap[e.key.toLowerCase()];
    if (option && document.getElementById('answer-' + option)) {
        selectOption(option);
    }
});

@if($previousAnswer)
    document.addEventListener('DOMContentLoaded', function() { selectOption('{{ $previousAnswer['selected'] }}'); });
@endif
</script>
@endsection
