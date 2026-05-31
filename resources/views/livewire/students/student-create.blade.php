<div class="max-w-2xl mx-auto p-6 sm:p-8 space-y-6">
    
    <div class="pb-5 border-b border-gray-200">
        <h2 class="text-2xl font-bold text-gray-900 tracking-tight">Create Student Record</h2>
        <p class="text-sm text-gray-500 mt-1">Fill out the fields below to register a new student in the system.</p>
    </div>

    <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
        <form wire:submit.prevent="createStudent" class="p-6 sm:p-8 space-y-5">
            
            <div class="space-y-1.5">
                <label for="name" class="block text-sm font-semibold text-gray-700">Full Name</label>
                <div class="relative">
                    <input 
                        type="text" 
                        id="name"
                        wire:model="name" 
                        placeholder="John Doe"
                        class="w-full px-4 py-2.5 rounded-lg border @error('name') border-red-300 focus:ring-red-500 focus:border-red-500 @else border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 @enderror text-gray-900 placeholder-gray-400 text-sm transition-colors focus:outline-none focus:ring-2"
                    >
                </div>
                @error('name')
                    <p class="text-xs font-medium text-red-600 mt-1 flex items-center">
                        <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="space-y-1.5">
                <label for="subject" class="block text-sm font-semibold text-gray-700">Subject / Course</label>
                <input 
                    type="text" 
                    id="subject"
                    wire:model="subject" 
                    placeholder="Computer Science"
                    class="w-full px-4 py-2.5 rounded-lg border @error('subject') border-red-300 focus:ring-red-500 focus:border-red-500 @else border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 @enderror text-gray-900 placeholder-gray-400 text-sm transition-colors focus:outline-none focus:ring-2"
                >
                @error('subject')
                    <p class="text-xs font-medium text-red-600 mt-1 flex items-center">
                        <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="space-y-1.5">
                <label for="email" class="block text-sm font-semibold text-gray-700">Email Address</label>
                <input 
                    type="email" 
                    id="email"
                    wire:model="email" 
                    placeholder="student@university.com"
                    class="w-full px-4 py-2.5 rounded-lg border @error('email') border-red-300 focus:ring-red-500 focus:border-red-500 @else border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 @enderror text-gray-900 placeholder-gray-400 text-sm transition-colors focus:outline-none focus:ring-2"
                >
                @error('email')
                    <p class="text-xs font-medium text-red-600 mt-1 flex items-center">
                        <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="pt-4 flex items-center justify-end space-x-3 border-t border-gray-100">
                <button 
                    type="submit" 
                    wire:loading.attr="disabled"
                    class="w-full sm:w-auto inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 disabled:opacity-50 transition-colors rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    <svg wire:loading wire:target="createStudent" class="animate-spin -ml-1 mr-2.5 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span>Create Record</span>
                </button>
            </div>

        </form>
    </div>

</div>