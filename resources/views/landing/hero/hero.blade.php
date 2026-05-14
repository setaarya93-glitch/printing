<section class="relative min-h-[90vh] md:min-h-screen flex items-center pt-24 md:pt-20 overflow-hidden bg-white">
    {{-- Background Decorative Elements --}}
    <div class="absolute top-0 right-0 -translate-y-1/4 translate-x-1/4 w-[300px] md:w-[600px] h-[300px] md:h-[600px] bg-fast-blue/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 translate-y-1/4 -translate-x-1/4 w-[200px] md:w-[400px] h-[200px] md:h-[400px] bg-fast-green/5 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-left order-2 lg:order-1">
                <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-fast-blue/10 text-fast-blue text-[10px] md:text-xs font-bold uppercase tracking-widest mb-6">
                    <span class="flex h-2 w-2 rounded-full bg-fast-blue animate-pulse"></span>
                    <span>Percetakan Tercepat di Kota Ini</span>
                </div>
                <h1 class="text-5xl md:text-8xl font-black tracking-tighter text-fast-dark leading-[1.1] md:leading-[0.9] mb-6 uppercase">
                    Visi Anda, <br>
                    <span class="gradient-text italic" style="transform: skewX(-10deg); display: inline-block;">Dipercepat.</span>
                </h1>
                <p class="text-base md:text-lg text-gray-500 max-w-lg mx-auto lg:mx-0 mb-10 font-medium leading-relaxed">
                    Solusi cetak berkualitas tinggi dan kreatif untuk generasi masa depan. Kepercayaan, Kualitas, dan Kecepatan dalam satu layanan.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4 justify-center lg:justify-start">
                    <a href="#product" class="btn-primary flex items-center justify-center space-x-2 py-5 md:py-4 px-10">
                        <span>Lihat Produk Kami</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                    <a href="#about" class="px-10 py-5 md:py-4 border-2 border-fast-dark text-fast-dark font-bold rounded-full hover:bg-fast-dark hover:text-white transition-all duration-300 text-center">
                        Cerita Kami
                    </a>
                </div>
                
                <div class="mt-12 flex flex-col sm:flex-row items-center justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-8">
                    <div class="flex -space-x-3">
                        <img class="w-10 h-10 rounded-full border-4 border-white object-cover shadow-sm" src="https://api.dicebear.com/7.x/avataaars/svg?seed=Felix" alt="User">
                        <img class="w-10 h-10 rounded-full border-4 border-white object-cover shadow-sm" src="https://api.dicebear.com/7.x/avataaars/svg?seed=Aneka" alt="User">
                        <img class="w-10 h-10 rounded-full border-4 border-white object-cover shadow-sm" src="https://api.dicebear.com/7.x/avataaars/svg?seed=Sasha" alt="User">
                    </div>
                    <div class="text-center sm:text-left">
                        <p class="text-sm font-bold text-fast-dark">500+ Gen Z Percaya Kami</p>
                        <div class="flex justify-center sm:justify-start text-yellow-400">
                            @for($i=0; $i<5; $i++)
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative order-1 lg:order-2 px-4 md:px-0">
                <div class="absolute -inset-4 bg-linear-to-r from-fast-blue to-fast-green opacity-20 blur-2xl rounded-[40px] rotate-6 hidden md:block"></div>
                <div class="relative bg-white p-2 md:p-4 rounded-[32px] shadow-2xl overflow-hidden border border-gray-100">
                    <img src="https://images.unsplash.com/photo-1562654501-a0ccc0af3fb1?q=80&w=1000&auto=format&fit=crop" alt="Premium Printing" class="rounded-[24px] w-full h-[300px] md:h-[500px] object-cover">
                    <div class="absolute bottom-6 right-6 md:bottom-10 md:left-10 bg-white/90 backdrop-blur-sm p-4 md:p-6 rounded-2xl shadow-xl border border-white/50 max-w-[150px] md:max-w-[200px]">
                        <p class="text-[10px] font-black uppercase text-fast-blue mb-1">Kecepatan Produksi</p>
                        <p class="text-xl md:text-2xl font-black text-fast-dark">24J <span class="text-xs md:text-sm font-bold text-gray-400">Pengiriman</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
