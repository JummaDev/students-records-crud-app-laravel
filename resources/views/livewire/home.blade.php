<div class="bg-gray-50 min-h-screen text-gray-900 selection:bg-indigo-500 selection:text-white">
    
    <div class="relative overflow-hidden bg-gradient-to-b from-indigo-900 to-slate-900 text-white py-16 sm:py-24 rounded-b-[2rem] shadow-md">
        <div class="absolute inset-0 opacity-10 bg-[linear-gradient(to_right,#808080_1px,transparent_1px),linear-gradient(to_bottom,#808080_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        
        <div class="relative max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8 space-y-6">
            <span class="inline-flex items-center px-3 py-1 text-xs font-semibold tracking-wider uppercase text-indigo-300 bg-indigo-500/10 border border-indigo-400/20 rounded-full">
                System Workspace Hub
            </span>
            <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-white via-slate-200 to-indigo-200">
                Education Management Platform
            </h1>
            <p class="max-w-xl mx-auto text-base sm:text-lg text-slate-300 font-normal leading-relaxed">
                Streamline academic administrative operations. Access directories, register profiles, or log in safely to update critical data vectors.
            </p>
            
            <div class="pt-4 flex flex-wrap justify-center gap-4">
                <a href="/login" class="px-5 py-2.5 text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-500 rounded-lg shadow-sm transition-colors focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-slate-900">
                    Sign In Workspace
                </a>
                <a href="/register" class="px-5 py-2.5 text-sm font-semibold text-slate-300 bg-slate-800 hover:bg-slate-700 border border-slate-700 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-slate-500 focus:ring-offset-2 focus:ring-offset-slate-900">
                    Create Admin Account
                </a>
            </div>
        </div>
    </div>

    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
        <div class="text-center sm:text-left mb-8">
            <h2 class="text-xl font-bold text-gray-900 tracking-tight">Available Management Directives</h2>
            <p class="text-sm text-gray-500 mt-1">Select an operational panel below to access system configurations.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <a href="/students" class="group relative flex flex-col justify-between p-6 bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition-all hover:-translate-y-0.5 duration-200">
                <div class="space-y-3">
                    <div class="inline-flex items-center justify-center p-3 rounded-lg bg-indigo-50 text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-colors duration-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">Students Directory</h3>
                        <p class="text-sm text-gray-500 mt-1">View the master database list containing all registered student profiles, courses, and active email contacts.</p>
                    </div>
                </div>
                <div class="mt-6 flex items-center text-sm font-semibold text-indigo-600">
                    Open Directory
                    <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </a>

            <a href="/students/create" class="group relative flex flex-col justify-between p-6 bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition-all hover:-translate-y-0.5 duration-200">
                <div class="space-y-3">
                    <div class="inline-flex items-center justify-center p-3 rounded-lg bg-emerald-50 text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 group-hover:text-emerald-600 transition-colors">Register New Student</h3>
                        <p class="text-sm text-gray-500 mt-1">Open the creation wizard module to register a new entry, assign subjects, and configure initial systemic data.</p>
                    </div>
                </div>
                <div class="mt-6 flex items-center text-sm font-semibold text-emerald-600">
                    Launch Form
                    <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </a>

        </div>

        <div class="mt-12 pt-8 border-t border-gray-200">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 p-4 bg-gray-100 rounded-xl border border-gray-200">
                <div class="text-center sm:text-left">
                    <h4 class="text-sm font-bold text-gray-900">Session Gatekeepers</h4>
                    <p class="text-xs text-gray-500">Need to switch profiles or terminate administrative parameters?</p>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/login" class="text-sm font-semibold text-gray-600 hover:text-indigo-600 transition-colors">Sign In</a>
                    <span class="h-4 w-px bg-gray-300"></span>
                    <a href="/register" class="text-sm font-semibold text-gray-600 hover:text-indigo-600 transition-colors">Register Gateway</a>
                </div>
            </div>
        </div>
    </main>

</div>
