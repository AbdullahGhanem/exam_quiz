@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="card rounded-2xl border border-slate-200/60 shadow-sm shadow-slate-200/50 overflow-hidden">
        <div class="bg-gradient-to-r from-indigo-600 to-violet-600 px-8 py-6">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-white">Subjects</h1>
                    <p class="text-indigo-200 text-sm mt-1">Manage your exam subjects</p>
                </div>
                <a href="{{ route('subjects.assign') }}"
                   class="inline-flex items-center gap-2 px-4 py-2 bg-white/15 hover:bg-white/25 text-white text-sm font-medium rounded-lg backdrop-blur-sm transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m9.86-9.86a4.5 4.5 0 00-6.364 0l-4.5 4.5a4.5 4.5 0 001.242 7.244"/>
                    </svg>
                    Assign to Lectures
                </a>
            </div>
        </div>

        <div class="p-8">
            {{-- Add new subject --}}
            <form action="{{ route('subjects.store') }}" method="POST" class="mb-8">
                @csrf
                <label class="block text-sm font-semibold text-slate-700 mb-2">Add New Subject</label>
                <div class="flex gap-3">
                    <input type="text" name="name" placeholder="e.g. Natural Language Processing"
                           class="flex-1 border-2 border-slate-200 rounded-xl px-4 py-3 text-sm focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-colors"
                           required>
                    <button type="submit"
                            class="bg-gradient-to-r from-indigo-600 to-violet-600 hover:from-indigo-700 hover:to-violet-700 text-white font-semibold px-6 py-3 rounded-xl transition-all shadow-md shadow-indigo-200 active:scale-[0.98]">
                        Add
                    </button>
                </div>
                @error('name')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </form>

            {{-- Subjects list --}}
            @if($subjects->isEmpty())
                <div class="text-center py-16">
                    <div class="w-16 h-16 rounded-2xl bg-slate-100 flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-slate-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                        </svg>
                    </div>
                    <p class="text-slate-500 font-medium">No subjects yet</p>
                    <p class="text-slate-400 text-sm mt-1">Add your first subject above</p>
                </div>
            @else
                <div class="space-y-3">
                    @foreach($subjects as $subject)
                        <div class="group border-2 border-slate-200 rounded-xl p-4 hover:border-indigo-200 transition-all"
                             id="subject-{{ $subject->id }}">

                            {{-- Display mode --}}
                            <div class="flex items-center justify-between" id="display-{{ $subject->id }}">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-indigo-50 flex items-center justify-center">
                                        <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <span class="font-semibold text-slate-800">{{ $subject->name }}</span>
                                        <span class="ml-2 text-xs bg-indigo-50 text-indigo-600 px-2 py-0.5 rounded-md font-medium">
                                            {{ $subject->questions_count }} questions
                                        </span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button onclick="toggleEdit({{ $subject->id }})"
                                            class="p-2 text-slate-400 hover:text-indigo-600 rounded-lg hover:bg-indigo-50 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125"/>
                                        </svg>
                                    </button>
                                    <form action="{{ route('subjects.destroy', $subject) }}" method="POST"
                                          onsubmit="return confirm('Delete &quot;{{ $subject->name }}&quot;? Questions will become unassigned.')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="p-2 text-slate-400 hover:text-red-600 rounded-lg hover:bg-red-50 transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            {{-- Edit mode --}}
                            <form action="{{ route('subjects.update', $subject) }}" method="POST"
                                  class="hidden items-center gap-3" id="edit-{{ $subject->id }}">
                                @csrf
                                @method('PUT')
                                <input type="text" name="name" value="{{ $subject->name }}"
                                       class="flex-1 border-2 border-slate-200 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-colors">
                                <button type="submit"
                                        class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg transition-colors">
                                    Save
                                </button>
                                <button type="button" onclick="toggleEdit({{ $subject->id }})"
                                        class="px-4 py-2 text-slate-500 hover:text-slate-700 text-sm font-medium rounded-lg border border-slate-200 hover:border-slate-300 transition-colors">
                                    Cancel
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>

<script>
function toggleEdit(id) {
    const display = document.getElementById('display-' + id);
    const edit = document.getElementById('edit-' + id);
    display.classList.toggle('hidden');
    edit.classList.toggle('hidden');
    edit.classList.toggle('flex');
    if (!edit.classList.contains('hidden')) {
        edit.querySelector('input').focus();
    }
}
</script>
@endsection
