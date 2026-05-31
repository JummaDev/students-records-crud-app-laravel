<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Students Management App') }}</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>body { font-family: 'Inter', sans-serif; }</style>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="h-full antialiased text-gray-900 selection:bg-indigo-500 selection:text-white">

    <div class="min-h-full flex">
        
        <aside class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0 z-20 bg-slate-900 text-white">
            
            <nav class="flex-1 space-y-1 px-3 py-4 overflow-y-auto">
                <a href="#" class="flex items-center px-3 py-2.5 text-sm font-medium rounded-lg bg-slate-800 text-white transition-colors group">
                    <svg class="w-5 h-5 mr-3 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2H6a2 2 0 01-2-2v-4zM14 16a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2v-4z"></path></svg>
                    Dashboard
                </a>
            </nav>
            
            <div class="p-4 border-t border-slate-800 bg-slate-950/50">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center px-3 py-2.5 text-sm font-medium rounded-lg text-slate-400 hover:bg-slate-800 hover:text-white transition-colors group focus:outline-none">
                        <svg class="w-5 h-5 mr-3 text-slate-400 group-hover:text-red-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        Sign Out
                    </button>
                </form>
            </div>
        </aside>

        <div class="flex flex-col flex-1 md:pl-64">
            
            <header class="sticky top-0 z-10 flex h-16 flex-shrink-0 bg-white border-b border-gray-200">
                <div class="flex flex-1 justify-between px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center md:hidden">
                        <span class="text-md font-bold tracking-wider text-indigo-600 uppercase">EduManage</span>
                    </div>

                    <div class="hidden md:block"></div>

                    <div class="ml-4 flex items-center md:ml-6 space-x-4">
                        <div class="flex items-center">
                            <span class="inline-block h-8 w-8 rounded-full overflow-hidden bg-gray-100 border border-gray-300 ring-2 ring-indigo-500/10">
                                <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24"><path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                            </span>
                            
                            <form method="POST" action="{{ route('logout') }}" class="md:hidden ml-3">
                                @csrf
                                <button type="submit" class="p-1.5 rounded-lg text-gray-400 hover:text-red-500 hover:bg-gray-50 focus:outline-none">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <main class="flex-1 py-8">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>

        </div>
    </div>

    @livewireScripts
</body>
</html>