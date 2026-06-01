<div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8 bg-gray-50 text-gray-900">
    
    <div class="sm:mx-auto w-full max-w-md">
        <h2 class="text-center text-3xl font-extrabold text-gray-900 tracking-tight">
            Sign in to your account
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600">
            Or
            <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 transition-colors">
                create a new account
            </a>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto w-full max-w-md">
        <div class="bg-white py-8 px-4 shadow-sm border border-gray-200 sm:rounded-xl sm:px-10 space-y-6">
            
            @if (session('error'))
                <div class="flex items-center p-4 text-sm text-red-800 bg-red-50 border border-red-200 rounded-lg shadow-sm" role="alert">
                    <svg class="w-5 h-5 mr-2.5 text-red-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                    <span class="font-medium">{{ session('error') }}</span>
                </div>
            @endif

            <form wire:submit.prevent="login" class="space-y-5">
                
                <div class="space-y-1.5">
                    <label for="email" class="block text-sm font-semibold text-gray-700">Email Address</label>
                    <input 
                        type="email" 
                        id="email"
                        wire:model="email" 
                        placeholder="name@company.com"
                        autocomplete="email"
                        required
                        class="w-full px-4 py-2.5 rounded-lg border @error('email') border-red-300 focus:ring-red-500 focus:border-red-500 @else border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 @enderror text-gray-900 placeholder-gray-400 text-sm transition-colors focus:outline-none focus:ring-2"
                    >
                    @error('email')
                        <p class="text-xs font-medium text-red-600 mt-1 flex items-center">
                            <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="space-y-1.5">
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                        </div>
                    <input 
                        type="password" 
                        id="password"
                        wire:model="password" 
                        placeholder="••••••••"
                        autocomplete="current-password"
                        required
                        class="w-full px-4 py-2.5 rounded-lg border @error('password') border-red-300 focus:ring-red-500 focus:border-red-500 @else border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 @enderror text-gray-900 placeholder-gray-400 text-sm transition-colors focus:outline-none focus:ring-2"
                    >
                    @error('password')
                        <p class="text-xs font-medium text-red-600 mt-1 flex items-center">
                            <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="pt-2">
                    <button 
                        type="submit" 
                        wire:loading.attr="disabled"
                        class="w-full inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 disabled:opacity-50 transition-colors rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                    >
                        <svg wire:loading wire:target="login" class="animate-spin -ml-1 mr-2.5 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span>Sign In</span>
                    </button>
                </div>

            </form>

            @if(!empty($email))
                <div class="mt-4 pt-4 border-t border-dashed border-gray-200 text-center">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-xs font-medium bg-gray-100 text-gray-800">
                        Typing: {{ $email }}
                    </span>
                </div>
            @endif

        </div>
    </div>

</div>