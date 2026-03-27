@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="card rounded-2xl border border-slate-200/60 shadow-sm shadow-slate-200/50 overflow-hidden">
        <div class="bg-gradient-to-r from-indigo-600 to-violet-600 px-8 py-6">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-white">Assign Subjects</h1>
                    <p class="text-indigo-200 text-sm mt-1">Map each lecture to a subject</p>
                </div>
                <a href="{{ route('subjects.index') }}"
                   class="inline-flex items-center gap-2 px-4 py-2 bg-white/15 hover:bg-white/25 text-white text-sm font-medium rounded-lg backdrop-blur-sm transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                    </svg>
                    Back
                </a>
            </div>
        </div>

        <div class="p-8">
            @if($subjects->isEmpty())
                <div class="text-center py-16">
                    <div class="w-16 h-16 rounded-2xl bg-slate-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-slate-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m9.86-9.86a4.5 4.5 0 00-6.364 0l-4.5 4.5a4.5 4.5 0 001.242 7.244"/>
                        </svg>
                    </div>
                    <p class="text-slate-500 font-medium">No subjects created yet</p>
                    <p class="text-slate-400 text-sm mt-2">
                        <a href="{{ route('subjects.index') }}" class="text-indigo-600 hover:text-indigo-700 font-medium hover:underline">Create subjects first</a>
                    </p>
                </div>
            @else
                <form action="{{ route('subjects.assign.update') }}" method="POST">
                    @csrf

                    <div class="space-y-3">
                        @foreach($lectures as $lecture)
                            <div class="border-2 border-slate-200 rounded-xl p-4 hover:border-indigo-200 transition-colors">
                                <div class="flex items-center justify-between gap-4">
                                    <div class="flex items-center gap-3 flex-1 min-w-0">
                                        <div class="w-10 h-10 rounded-xl bg-slate-100 flex items-center justify-center flex-shrink-0">
                                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                                            </svg>
                                        </div>
                                        <div class="min-w-0">
                                            <p class="font-medium text-slate-800 text-sm truncate">{{ $lecture->lecture }}</p>
                                            <p class="text-xs text-slate-400 mt-0.5">{{ $lecture->questions_count }} questions</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg class="w-5 h-5 text-slate-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"/>
                                        </svg>
                                        <select name="assignments[{{ $lecture->lecture }}]"
                                                class="border-2 border-slate-200 rounded-lg px-3 py-2 text-sm font-medium focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-colors min-w-[180px]">
                                            <option value="">-- No Subject --</option>
                                            @foreach($subjects as $subject)
                                                <option value="{{ $subject->id }}"
                                                    {{ $lecture->current_subject_id == $subject->id ? 'selected' : '' }}>
                                                    {{ $subject->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <button type="submit"
                            class="w-full mt-8 bg-gradient-to-r from-indigo-600 to-violet-600 hover:from-indigo-700 hover:to-violet-700 text-white font-bold py-4 px-6 rounded-xl text-lg transition-all shadow-lg shadow-indigo-200 hover:shadow-xl hover:shadow-indigo-300 active:scale-[0.98]">
                        Save Assignments
                    </button>
                </form>
            @endif
        </div>
    </div>
</div>
@endsection
