<nav x-data="{ open: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 20) ? true : false"
     :class="scrolled ? 'bg-white/80 backdrop-blur-md shadow-sm border-b border-gray-100 py-4' : 'bg-transparent py-6'"
     class="fixed top-0 w-full z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <a href="#" class="flex flex-col items-start group">
                    <span class="text-3xl font-black italic tracking-tighter text-fast-blue group-hover:text-fast-green transition-colors duration-300" style="transform: skewX(-10deg)">FAST</span>
                    <div class="h-1 w-full bg-linear-to-r from-fast-blue to-fast-green mt-[-2px]"></div>
                    <span class="text-[10px] font-bold tracking-[0.2em] uppercase text-fast-dark">Printing.Creative</span>
                </a>
            </div>
            
            {{-- Desktop Menu --}}
            <div class="hidden md:flex items-center space-x-8">
                <a href="#product" class="text-sm font-bold uppercase tracking-wider text-fast-dark hover:text-fast-blue transition-colors">Product Print</a>
                <a href="#about" class="text-sm font-bold uppercase tracking-wider text-fast-dark hover:text-fast-blue transition-colors">About</a>
                <a href="#values" class="text-sm font-bold uppercase tracking-wider text-fast-dark hover:text-fast-blue transition-colors">Why Fastprinting Creative</a>
                <a href="#sample" class="text-sm font-bold uppercase tracking-wider text-fast-dark hover:text-fast-blue transition-colors">Sample Product Print</a>
                <a href="#testimoni" class="text-sm font-bold uppercase tracking-wider text-fast-dark hover:text-fast-blue transition-colors">Testimoni Pelanggan</a>
                <a href="#" class="btn-primary py-2 px-6 text-sm">Pesan Sekarang</a>
            </div>

            {{-- Mobile Button --}}
            <div class="md:hidden flex items-center">
                <button @click="open = !open" class="text-fast-dark focus:outline-none p-2 rounded-lg bg-gray-50">
                    <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         class="md:hidden bg-white/95 backdrop-blur-lg border-b border-gray-100 shadow-2xl overflow-hidden">
        <div class="px-4 pt-4 pb-8 space-y-2">
            <a href="#product" @click="open = false" class="block px-4 py-3 text-lg font-bold text-fast-dark hover:bg-fast-blue/5 rounded-2xl uppercase tracking-tight">Product Print</a>
            <a href="#about" @click="open = false" class="block px-4 py-3 text-lg font-bold text-fast-dark hover:bg-fast-blue/5 rounded-2xl uppercase tracking-tight">About</a>
            <a href="#values" @click="open = false" class="block px-4 py-3 text-lg font-bold text-fast-dark hover:bg-fast-blue/5 rounded-2xl uppercase tracking-tight">Why Fastprinting Creative</a>
            <a href="#sample" @click="open = false" class="block px-4 py-3 text-lg font-bold text-fast-dark hover:bg-fast-blue/5 rounded-2xl uppercase tracking-tight">Sample Product Print</a>
            <a href="#testimoni" @click="open = false" class="block px-4 py-3 text-lg font-bold text-fast-dark hover:bg-fast-blue/5 rounded-2xl uppercase tracking-tight">Testimoni Pelanggan</a>
            <a href="#" class="block w-full text-center btn-primary mt-6 py-4">Pesan Sekarang</a>
        </div>
    </div>
</nav>
