<section class="py-20 md:py-24 bg-dark-blue text-white overflow-hidden relative" id="values">
    {{-- Background Glow --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] md:w-[800px] h-[400px] md:h-[800px] bg-primary/10 rounded-full blur-[80px] md:blur-[120px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 md:gap-20 items-center">
            <div class="text-center lg:text-left">
                <h2 class="text-4xl md:text-5xl font-black uppercase tracking-tighter leading-tight mb-8">
                    Kenapa Harus Pilih <span class="gradient-text italic pr-4" style="transform: skewX(-10deg); display: inline-block;">FastPrinting</span> Creative?
                </h2>
                <p class="text-white/80 text-base md:text-lg mb-10 md:mb-12 font-medium max-w-xl mx-auto lg:mx-0">
                    Kami menghadirkan standar cetak terbaik dengan mengutamakan kepraktisan, kecepatan, dan kualitas premium bagi Anda.
                </p>
                
                <div class="grid sm:grid-cols-2 lg:grid-cols-1 gap-4 md:gap-6">
                    @php
                        $values = [
                            ['title' => 'Pelayanan Responsif & Profesional', 'desc' => 'Mulai dari konsultasi, desain, pembayaran hingga pengiriman, kami selalu siap membantu dengan komunikasi yang cepat dan jelas.'],
                            ['title' => 'Trusted oleh Ribuan Customer', 'desc' => 'Sejak 2022, dipercaya customer dari Yogyakarta hingga Singapore dengan pelayanan yang transparan dan bertanggung jawab.'],
                            ['title' => 'Quality Control Terjamin', 'desc' => 'Setiap produk melewati proses pengecekan kualitas sebelum dikirim ke customer.'],
                            ['title' => 'Harga Terjangkau & Kompetitif', 'desc' => 'Tersedia harga satuan maupun grosir dengan kualitas terbaik dan harga yang tetap ramah.'],
                            ['title' => 'Proses Cepat & Praktis', 'desc' => 'Bisa ambil langsung ke workshop, instant delivery area Jogja, atau kirim via ekspedisi ke seluruh Indonesia.'],
                        ];
                    @endphp

                    @foreach($values as $value)
                        <div class="flex items-start text-left space-x-4 p-4 rounded-2xl hover:bg-white/5 transition-colors group">
                            <div class="mt-1 flex-shrink-0">
                                <div class="w-6 h-6 rounded-full border-2 border-primary flex items-center justify-center group-hover:bg-primary transition-colors">
                                    <svg class="w-3 h-3 text-primary group-hover:text-fast-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-base md:text-lg font-bold uppercase tracking-tight text-white">{{ $value['title'] }}</h4>
                                <p class="text-white/80 text-sm md:text-base mt-1">{{ $value['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            
            <div class="relative mt-8 lg:mt-0">
                <div class="grid grid-cols-2 gap-3 md:gap-4">
                    <div class="space-y-3 md:space-y-4">
                        <img src="https://images.unsplash.com/photo-1626785774573-4b799315345d?q=80&w=600&auto=format&fit=crop" class="rounded-2xl md:rounded-3xl h-40 md:h-64 w-full object-cover grayscale hover:grayscale-0 transition-all duration-500" alt="Detail">
                        <img src="https://images.unsplash.com/photo-1513346032146-8153b89ef7b6?q=80&w=600&auto=format&fit=crop" class="rounded-2xl md:rounded-3xl h-24 md:h-40 w-full object-cover grayscale hover:grayscale-0 transition-all duration-500" alt="Detail">
                    </div>
                    <div class="pt-8 md:pt-12 space-y-3 md:space-y-4">
                        <img src="https://images.unsplash.com/photo-1542744094-24638eff58bb?q=80&w=600&auto=format&fit=crop" class="rounded-2xl md:rounded-3xl h-24 md:h-40 w-full object-cover grayscale hover:grayscale-0 transition-all duration-500" alt="Detail">
                        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?q=80&w=600&auto=format&fit=crop" class="rounded-2xl md:rounded-3xl h-40 md:h-64 w-full object-cover grayscale hover:grayscale-0 transition-all duration-500" alt="Detail">
                    </div>
                </div>
                {{-- Fast Badge --}}
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-logo-green p-5 md:p-8 rounded-full border-4 md:border-[10px] border-dark-blue shadow-2xl animate-spin-slow">
                    <span class="text-2xl md:text-4xl">⚡</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes spin-slow {
        from { transform: translate(-50%, -50%) rotate(0deg); }
        to { transform: translate(-50%, -50%) rotate(360deg); }
    }
    .animate-spin-slow {
        animation: spin-slow 20s linear infinite;
    }
</style>
