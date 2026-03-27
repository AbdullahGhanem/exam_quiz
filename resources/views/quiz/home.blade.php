@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    {{-- Hero Stats --}}
    <div class="grid grid-cols-3 gap-4 mb-8">
        <div class="card rounded-2xl p-5 border border-slate-200/60 text-center">
            <p class="text-3xl font-extrabold text-indigo-600">{{ $totalQuestions }}</p>
            <p class="text-xs font-medium text-slate-400 mt-1 uppercase tracking-wide">Questions</p>
        </div>
        <div class="card rounded-2xl p-5 border border-slate-200/60 text-center">
            <p class="text-3xl font-extrabold text-violet-600">{{ $subjects->count() }}</p>
            <p class="text-xs font-medium text-slate-400 mt-1 uppercase tracking-wide">Subjects</p>
        </div>
        <div class="card rounded-2xl p-5 border border-slate-200/60 text-center">
            <p class="text-3xl font-extrabold text-fuchsia-600">{{ $lectures->count() }}</p>
            <p class="text-xs font-medium text-slate-400 mt-1 uppercase tracking-wide">Lectures</p>
        </div>
    </div>

    {{-- Main Card --}}
    <div class="card rounded-2xl border border-slate-200/60 shadow-sm shadow-slate-200/50 overflow-hidden">
        <div class="bg-gradient-to-r from-indigo-600 to-violet-600 px-8 py-6">
            <h1 class="text-2xl font-bold text-white">Start a Quiz</h1>
            <p class="text-indigo-200 text-sm mt-1">Choose your subjects and configure your quiz</p>
        </div>

        <form action="{{ route('quiz.start') }}" method="POST" class="p-8">
            @csrf

            @if($subjects->isNotEmpty())
            <div class="mb-8">
                <label class="flex items-center justify-between mb-3">
                    <span class="text-sm font-semibold text-slate-700">Subjects</span>
                    <span class="text-xs text-slate-400">Leave empty for all</span>
                </label>
                <div class="grid grid-cols-2 gap-2.5">
                    @foreach($subjects as $subject)
                        <label class="relative flex items-center gap-3 p-3.5 rounded-xl border-2 border-slate-200 cursor-pointer hover:border-indigo-300 hover:bg-indigo-50/50 transition-all subject-card">
                            <input type="checkbox" name="subjects[]" value="{{ $subject->id }}"
                                   class="peer sr-only" onchange="this.closest('.subject-card').classList.toggle('border-indigo-500', this.checked); this.closest('.subject-card').classList.toggle('bg-indigo-50', this.checked);">
                            <div class="w-5 h-5 rounded-md border-2 border-slate-300 flex items-center justify-center peer-checked:bg-indigo-600 peer-checked:border-indigo-600 transition-colors flex-shrink-0">
                                <svg class="w-3 h-3 text-white opacity-0 peer-checked:opacity-100" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="min-w-0">
                                <span class="text-sm font-medium text-slate-700 block truncate">{{ $subject->name }}</span>
                                <span class="text-xs text-slate-400">{{ $subject->questions_count }} Q</span>
                            </div>
                        </label>
                    @endforeach
                </div>
            </div>
            @endif

            <div class="mb-8">
                <label class="flex items-center justify-between mb-3">
                    <span class="text-sm font-semibold text-slate-700">Lectures</span>
                    <span class="text-xs text-slate-400">Leave empty for all</span>
                </label>
                <div class="space-y-2 max-h-52 overflow-y-auto pr-1 custom-scrollbar">
                    @foreach($lectures as $lecture)
                        <label class="flex items-center gap-3 p-3 rounded-xl border border-slate-200 cursor-pointer hover:border-indigo-300 hover:bg-indigo-50/30 transition-all lecture-card">
                            <input type="checkbox" name="lectures[]" value="{{ $lecture }}"
                                   class="peer sr-only" onchange="this.closest('.lecture-card').classList.toggle('border-indigo-400', this.checked); this.closest('.lecture-card').classList.toggle('bg-indigo-50', this.checked);">
                            <div class="w-4.5 h-4.5 w-5 h-5 rounded-md border-2 border-slate-300 flex items-center justify-center peer-checked:bg-indigo-600 peer-checked:border-indigo-600 transition-colors flex-shrink-0">
                                <svg class="w-3 h-3 text-white opacity-0 peer-checked:opacity-100" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="text-sm text-slate-600 truncate">{{ $lecture }}</span>
                        </label>
                    @endforeach
                </div>
            </div>

            <div class="mb-8">
                <label class="block text-sm font-semibold text-slate-700 mb-3">Number of Questions</label>
                <div class="relative">
                    <input type="number" name="num_questions" value="20" min="1" max="{{ $totalQuestions }}"
                           class="w-full border-2 border-slate-200 rounded-xl px-5 py-3.5 text-lg font-semibold text-slate-800 focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-colors">
                    <span class="absolute right-4 top-1/2 -translate-y-1/2 text-xs text-slate-400">max {{ $totalQuestions }}</span>
                </div>
            </div>

            {{-- Quiz Options --}}
            <div class="mb-8 space-y-4">
                <p class="text-sm font-semibold text-slate-700">Quiz Options</p>

                <div class="flex items-center justify-between p-4 rounded-xl border-2 border-slate-200 hover:border-indigo-200 transition-colors">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-lg bg-indigo-50 flex items-center justify-center">
                            <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-sm font-medium text-slate-700">Shuffle Questions & Options</span>
                            <p class="text-xs text-slate-400">Randomize question order and option positions</p>
                        </div>
                    </div>
                    <button type="button" role="switch" aria-checked="true" onclick="toggleSwitch(this, 'shuffle-input')"
                            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full bg-indigo-600 transition-colors" id="shuffle-btn">
                        <span class="translate-x-5 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow-sm transition-transform mt-0.5 ml-0.5" id="shuffle-dot"></span>
                    </button>
                    <input type="hidden" name="shuffle" value="1" id="shuffle-input">
                </div>

                <div class="flex items-center justify-between p-4 rounded-xl border-2 border-slate-200 hover:border-indigo-200 transition-colors">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-lg bg-amber-50 flex items-center justify-center">
                            <svg class="w-5 h-5 text-amber-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-sm font-medium text-slate-700">Show Descriptions</span>
                            <p class="text-xs text-slate-400">Show explanations when you answer</p>
                        </div>
                    </div>
                    <button type="button" role="switch" aria-checked="true" onclick="toggleSwitch(this, 'desc-input')"
                            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full bg-indigo-600 transition-colors" id="desc-btn">
                        <span class="translate-x-5 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow-sm transition-transform mt-0.5 ml-0.5" id="desc-dot"></span>
                    </button>
                    <input type="hidden" name="show_descriptions" value="1" id="desc-input">
                </div>
            </div>

            <button type="submit"
                    class="w-full bg-gradient-to-r from-indigo-600 to-violet-600 hover:from-indigo-700 hover:to-violet-700 text-white font-bold py-4 px-6 rounded-xl text-lg transition-all shadow-lg shadow-indigo-200 hover:shadow-xl hover:shadow-indigo-300 active:scale-[0.98]">
                Start Quiz
            </button>
        </form>
    </div>
</div>

<style>
    .custom-scrollbar::-webkit-scrollbar { width: 4px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 999px; }
    .peer:checked ~ svg { opacity: 1; }
</style>

<script>
function toggleSwitch(btn, inputId) {
    const input = document.getElementById(inputId);
    const dot = btn.querySelector('span');
    const isOn = input.value === '1';

    if (isOn) {
        input.value = '0';
        btn.classList.remove('bg-indigo-600');
        btn.classList.add('bg-slate-200');
        dot.classList.remove('translate-x-5');
        dot.classList.add('translate-x-0');
    } else {
        input.value = '1';
        btn.classList.remove('bg-slate-200');
        btn.classList.add('bg-indigo-600');
        dot.classList.remove('translate-x-0');
        dot.classList.add('translate-x-5');
    }
}
</script>
@endsection
