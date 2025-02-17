<div class="bg-slate-100 dark:bg-slate-900 min-h-screen p-8">
    <div x-data="{ activeSection: null }" class="max-w-6xl mx-auto">
        <!-- Header -->
        
        <!-- Grid -->
        <div class="grid auto-rows-[192px] grid-cols-3 gap-4 md:grid-cols-4 md:gap-6">
            
            <!-- Big Card -->
            <div 
                class="col-span-2 row-span-2 rounded-3xl bg-gradient-to-br from-pink-500 to-purple-600 p-6 transition-all hover:scale-[0.98] cursor-pointer"
                @click="activeSection = 'analytics'"
            >
                <!-- Konten card -->
                <div class="text-white">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                </div>
                <div class="space-y-2 mt-4">
                    <h2 class="text-2xl font-semibold text-white">Analytics</h2>
                    <p class="text-sm text-purple-100">Last 30 days</p>
                </div>
            </div>

            <!-- Card lainnya... -->
        </div>

        <!-- Modal -->
        <div 
            x-show="activeSection" 
            class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50"
            @click.away="activeSection = null"
        >
            <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white p-8 rounded-2xl">
                <h2 x-text="activeSection" class="text-2xl font-bold mb-4"></h2>
                <p>Content for <span x-text="activeSection"></span></p>
                <button 
                    @click="activeSection = null"
                    class="mt-4 px-4 py-2 bg-gray-100 rounded-lg"
                >
                    Close
                </button>
            </div>
        </div>
    </div>

    <!-- Dark Mode Toggle -->
    <div 
        x-data="{ dark: false }" 
        class="fixed bottom-4 right-4"
    >
        <button 
            @click="dark = !dark" 
            class="p-3 rounded-full bg-white/90 shadow-lg backdrop-blur"
        >
            <svg x-show="!dark" class="h-6 w-6" fill="none" stroke="currentColor">
                <!-- Sun Icon -->
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707"/>
            </svg>
            <svg x-show="dark" class="h-6 w-6" fill="none" stroke="currentColor">
                <!-- Moon Icon -->
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
            </svg>
        </button>
    </div>
</div>
