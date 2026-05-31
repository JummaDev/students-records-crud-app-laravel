<div class="max-w-6xl mx-auto p-6 sm:p-8 space-y-6">
    
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 pb-5 border-b border-gray-200">
        <div>
            <h2 class="text-2xl font-bold text-gray-900 tracking-tight">Students Directory</h2>
            <p class="text-sm text-gray-500 mt-1">Manage and view all registered student records.</p>
        </div>
        <div>
            <a href="{{ route('students.create') }}" class="inline-flex items-center justify-center px-4 py-2.5 text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 transition-colors rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Add New Student
            </a>
        </div>
    </div>

    @if(Livewire::getClass('students.student-form'))
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6">
            @livewire('students.student-form')
        </div>
    @endif

    @if (session()->has('success'))
        <div class="flex items-center p-4 text-sm text-emerald-800 bg-emerald-50 border border-emerald-200 rounded-lg shadow-sm" role="alert">
            <svg class="w-5 h-5 mr-2.5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <div class="overflow-hidden bg-white border border-gray-200 rounded-xl shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse whitespace-nowrap">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-200">
                        <th scope="col" class="px-6 py-3.5 text-xs font-semibold tracking-wider text-gray-600 uppercase">Name</th>
                        <th scope="col" class="px-6 py-3.5 text-xs font-semibold tracking-wider text-gray-600 uppercase">Subject</th>
                        <th scope="col" class="px-6 py-3.5 text-xs font-semibold tracking-wider text-gray-600 uppercase">Email</th>
                        <th scope="col" class="px-6 py-3.5 text-xs font-semibold tracking-wider text-gray-600 uppercase text-right">Actions</th>
                    </tr>
                </thead>
        
                <tbody class="divide-y divide-gray-200 bg-white">
                    @forelse ($students as $student)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4">
                                <div class="text-sm font-semibold text-gray-900">{{ $student->name }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center px-2.5 py-1 text-xs font-medium text-indigo-700 bg-indigo-50 border border-indigo-100 rounded-md">
                                    {{ $student->subject }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600">
                                {{ $student->email }}
                            </td>
                            <td class="px-6 py-4 text-right text-sm font-medium space-x-3">
                                <a href="{{ route('students.edit', $student->id) }}" class="inline-flex items-center text-sm font-semibold text-indigo-600 hover:text-indigo-900 transition-colors">
                                    Edit
                                </a>
                                <button wire:click="delete({{ $student->id }})" wire:confirm="Are you sure you want to delete this student?" class="inline-flex items-center text-sm font-semibold text-red-600 hover:text-red-900 transition-colors focus:outline-none">
                                    Delete
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-12 text-center text-sm text-gray-500">
                                <svg class="mx-auto h-8 w-8 text-gray-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0a2 2 0 01-2 2H6a2 2 0 01-2-2m16 0l-3.586-3.586a2 2 0 00-2.828 0L12 14m0 0l-3.586-3.586a2 2 0 00-2.828 0L4 14"></path></svg>
                                No records found. Add a new student to get started.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>